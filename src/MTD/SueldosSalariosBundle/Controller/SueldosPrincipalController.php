<?php

namespace MTD\SueldosSalariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\SueldosSalariosBundle\Entity\Sueldos;
use MTD\SueldosSalariosBundle\Controller\CalculosSueldosController;
use MTD\SueldosSalariosBundle\Controller\DiasNoTrabajadosController;

class SueldosPrincipalController extends Controller
{
    public function modificarSueldos($em, $fecha, $empleado, $tipoAsistencia, $asistencia){
        
        $sueldosEmpleado = $empleado->getSueldos();
        //list($año, $mes, $dia ) = split( '[/.-]', $fecha);
        $separa = explode("/", $fecha);
        $año = $separa[2];
        $mes = $separa[0];
        $dia = $separa[1];
        $fechaSemana = $año."-".$mes."-".$dia;
        $semanaSueldo = date("W", strtotime($fechaSemana));
        
        if($sueldosEmpleado->isEmpty()){
            $this->crearNuevoSueldo($em, $año, $mes, $semanaSueldo, $empleado, $tipoAsistencia, $asistencia);
        }else{
            $i = 0;
            foreach($sueldosEmpleado as $sueldoEmpleado){
                $fechaSueldo = $sueldoEmpleado->getFecha();
                //list($añoSueldo, $mesSueldo, $diaSueldo ) = split( '[/.-]', $fechaSueldo->format('Y-m-d H:i:s'));
                $separa1 = explode("-", $fechaSueldo->format('Y-m-d'));
                $añoSueldo = $separa1[0];
                $mesSueldo = $separa1[1];
                if($año == $añoSueldo && $mes == $mesSueldo){
                    $this->actualizarSueldo($em, $empleado, $mes, $sueldoEmpleado, $tipoAsistencia, $año, $semanaSueldo, $asistencia);
                    break;
                }else{
                    $i++;
                }
            }
            if(count($sueldosEmpleado) == $i){
                $this->crearNuevoSueldo($em, $año, $mes, $semanaSueldo, $empleado, $tipoAsistencia, $asistencia);
            }
        }
    }
    
    public function actualizarSueldo($em, $empleado, $mes, $sueldo, $tipoAsistencia, $año, $semanaSueldo, $asistencia) {
        $calculoSueldos = new CalculosSueldosController();
        $diasNoTrabajados = new DiasNoTrabajadosController();
        $sueldoBasico = $this->getSueldoBasico($empleado);
        
        if($tipoAsistencia == "falta"){
            $diasNoTrabajados->actualizarFallaFalta($em, $sueldo, $año, $semanaSueldo);
            
            $configuracion = $em->getRepository('MTDAsistenciaBundle:Configuracion')->findOneBy(array('activo'=>'TRUE'));
            $fallaNueva = $calculoSueldos->getPsghFalta($configuracion);
            $falla = $sueldo->getFalla();
            $fallaActualizada = $calculoSueldos->actualizarCifra($falla, $fallaNueva);
            $feriadoPerdido = $sueldo->getFeriadoPerdido();
            $pesosFalla = $calculoSueldos->getPesosFalla($sueldoBasico, $mes, $año, $fallaActualizada, $feriadoPerdido);
            
            $this->actualizarSueldoFalta($em, $sueldo, $fallaActualizada, $pesosFalla);
        }else{
            $psgh = $calculoSueldos->getPsgh($em, $tipoAsistencia, $asistencia);
            if($psgh > 0){
                $diasNoTrabajados->actualizarFallaInasistencia($em, $sueldo, $año, $semanaSueldo);
            }
        }
    }
    
    public function actualizarSueldoFalta($em, $sueldo, $fallaActualizada, $pesosFalla){
        $sueldo->setFalla($fallaActualizada);
        $sueldo->setPesosFalla($pesosFalla);
        $em->persist($sueldo);
    }
    
    public function crearNuevoSueldo($em, $año, $mes, $semanaSueldo, $empleado, $tipoAsistencia, $asistencia) {
        
        $calculoSueldos = new CalculosSueldosController();
        $sueldo = new Sueldos();
        $diasNoTrabajados = new DiasNoTrabajadosController();
        
        $fechaSueldo = $año."-".$mes."-01";
        $diasMes = $calculoSueldos->getDiasMes($empleado, $año, $mes);
        $sueldoBasico = $this->getSueldoBasico($empleado);

        if($tipoAsistencia == "falta"){
            $configuracion = $em->getRepository('MTDAsistenciaBundle:Configuracion')->findOneBy(array('activo'=>'TRUE'));
            $falla = round(($calculoSueldos->getPsghFalta($configuracion))/8, 2);
            $decimalesPsgh = 0;
            $pesosPsgh = 0;
            $feriadoPerdido = 1;
            $pesosFalla = $calculoSueldos->getPesosFalla($sueldoBasico, $mes, $año, $falla, $feriadoPerdido);
            $fallaAcumulada = $diasNoTrabajados->crearAcumulacionFalla($em, $sueldo, $año, $semanaSueldo, FALSE, 0);
            $diasTrabajados = $calculoSueldos->getDiasTrabajados($sueldoBasico, $mes, $año, $diasMes, $pesosPsgh, $pesosFalla);
            $numeroHorasExtras = 0;
            $horasExtras = 0;
        }else{
            $psgh = $calculoSueldos->getPsgh($em, $tipoAsistencia, $asistencia);
            $decimalesPsgh = round($psgh/8, 2);
            $pesosPsgh = $calculoSueldos->getPesosPsgh($sueldoBasico, $mes, $año, $decimalesPsgh);
            if($decimalesPsgh > 0){
                $fallaAcumulada = $diasNoTrabajados->crearAcumulacionFalla($em, $sueldo, $año, $semanaSueldo, TRUE, 1);
            }else{
                $fallaAcumulada = $diasNoTrabajados->crearAcumulacionFalla($em, $sueldo, $año, $semanaSueldo, TRUE, 0);
            }
            $falla = 0;
            $feriadoPerdido = 0;
            $pesosFalla = 0;
            $diasTrabajados = $calculoSueldos->getDiasTrabajados($sueldoBasico, $mes, $año, $diasMes, $pesosPsgh, $pesosFalla);
            $numeroHorasExtras = $calculoSueldos->transformarMinutos($asistencia->getTotalHorasExtras());
            $horasExtras = $calculoSueldos->getHorasExtras($sueldoBasico, $mes, $año, $numeroHorasExtras);
        }
        
        $sueldo->setFecha(new \DateTime($fechaSueldo));
        $sueldo->setEmpleado($empleado);
        $sueldo->setDiasMes($diasMes);
        $sueldo->setPsgh($decimalesPsgh);
        $sueldo->setPesosPsgh($pesosPsgh);
        $sueldo->setFalla($falla);
        $sueldo->setFeriadoPerdido($feriadoPerdido);
        $sueldo->setPesosFalla($pesosFalla);
        $sueldo->setDiasTrabajados($diasTrabajados);
        $sueldo->setNumeroHorasExtras($numeroHorasExtras);
        $sueldo->setHorasExtras($horasExtras);
        
        $sueldo->addFallaAcumulada($fallaAcumulada);
        
        $em->persist($sueldo);
    }
    
    public function getSueldoBasico($empleado) {
        $contratacion = "";
        foreach($empleado->getContratacion() as $cont){
            if($cont->getActivo()){
                $contratacion = $cont;
                break;
            }
        }
        $sueldoBasico = "";
        foreach ($contratacion->getEmpleado()->getEmpleadoRequisito() as $requisito){
            if($requisito->getRequisito()->getCategoria()->getId() == $contratacion->getCategoria()){
                $sueldoBasico = $requisito->getRequisito()->getCategoria()->getSueldoBasico();
                break;
            }
        }
        return $sueldoBasico;
    }
}
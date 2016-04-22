<?php

namespace MTD\SueldosSalariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\SueldosSalariosBundle\Entity\Sueldos;
use MTD\SueldosSalariosBundle\Controller\CalculosSueldosController;
use MTD\SueldosSalariosBundle\Entity\Falla_Acumulada;

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
                    $this->actualizarSueldo($em, $sueldoEmpleado, $tipoAsistencia, $año, $semanaSueldo, $asistencia);
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
    
    public function actualizarSueldo($em, $sueldo, $tipoAsistencia, $año, $semanaSueldo, $asistencia) {
        $calculoSueldos = new CalculosSueldosController();
        if($tipoAsistencia == "falta"){
            $this->actualizarFallaFalta($em, $sueldo, $año, $semanaSueldo);
        }else{
            $psgh = $calculoSueldos->getPsgh($em, $tipoAsistencia, $asistencia);
            if($psgh > 0){
                $this->actualizarFallaInasistencia($em, $sueldo, $año, $semanaSueldo);
            }
        }
    }
    
    public function actualizarFallaInasistencia($em, $sueldo, $año, $semanaSueldo) {
        $acumulacionFallas = $sueldo->getFallaAcumulada();
        $i = 0;
        foreach($acumulacionFallas as $acumulacionFalla){
            $añoFalla = $acumulacionFalla->getAño();
            $semanaFalla = $acumulacionFalla->getSemana();
            if($año == $añoFalla && $semanaSueldo == $semanaFalla){
                $this->actualizarPermisos($em, $acumulacionFalla, $sueldo);
                $i++;
            }
        }
        if($i == 0){
            $this->crearAcumulacionFalla($em, $sueldo, $año, $semanaSueldo, TRUE, 1);
        }
    }
    
    public function actualizarFallaFalta($em, $sueldo, $año, $semanaSueldo) {
        $i = 0;
        foreach($sueldo->getFallaAcumulada() as $acumulacionFalla){
            $añoFalla = $acumulacionFalla->getAño();
            $semanaFalla = $acumulacionFalla->getSemana();
            $estadoFalla = $acumulacionFalla->getActivo();
            if($año == $añoFalla && $semanaSueldo == $semanaFalla){
                if($estadoFalla){
                    $this->actualizarFeriadoPerdido($em, $sueldo);
                    $acumulacionFalla->setActivo(FALSE);
                    $em->persist($acumulacionFalla);
                }
                $i++;
            }
        }
        if($i == 0){
            $this->actualizarFeriadoPerdido($em, $sueldo);
            $this->crearAcumulacionFalla($em, $sueldo, $año, $semanaSueldo, FALSE, 0);
        }
    }
    
    public function actualizarFeriadoPerdido($em, $sueldo) {
        $feriadoPerdido = $sueldo->getFeriadoPerdido();
        $sueldo->setFeriadoPerdido($feriadoPerdido+1);
        
        $em->persist($sueldo);
    }
    
    public function actualizarPermisos($em, $acumulacionFalla, $sueldo) {
        $estadoFalla = $acumulacionFalla->getActivo();
        $permiso = $acumulacionFalla->getPermiso();
        if($permiso == 2){
            $acumulacionFalla->setPermiso($permiso+1);
            $acumulacionFalla->setActivo(FALSE);
            if($estadoFalla){
                $feriadoPerdido = $sueldo->getFeriadoPerdido();
                $sueldo->setFeriadoPerdido($feriadoPerdido+1);
                $em->persist($sueldo);
            }
        }else{
            $acumulacionFalla->setPermiso($permiso+1);
        }
        $em->persist($acumulacionFalla);
    }
    
    public function crearNuevoSueldo($em, $año, $mes, $semanaSueldo, $empleado, $tipoAsistencia, $asistencia) {
        
        $calculoSueldos = new CalculosSueldosController();
        $sueldo = new Sueldos();
        
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
            $fallaAcumulada = $this->crearAcumulacionFalla($em, $sueldo, $año, $semanaSueldo, FALSE, 0);
        }else{
            $psgh = $calculoSueldos->getPsgh($em, $tipoAsistencia, $asistencia);
            $decimalesPsgh = round($psgh/8, 2);
            $pesosPsgh = $calculoSueldos->getPesosPsgh($sueldoBasico, $mes, $año, $decimalesPsgh);
            if($decimalesPsgh > 0){
                $fallaAcumulada = $this->crearAcumulacionFalla($em, $sueldo, $año, $semanaSueldo, TRUE, 1);
            }else{
                $fallaAcumulada = $this->crearAcumulacionFalla($em, $sueldo, $año, $semanaSueldo, TRUE, 0);
            }
            $falla = 0;
            $feriadoPerdido = 0;
            $pesosFalla = 0;
        }
        
        $sueldo->setFecha(new \DateTime($fechaSueldo));
        $sueldo->setEmpleado($empleado);
        $sueldo->setDiasMes($diasMes);
        $sueldo->setPsgh($decimalesPsgh);
        $sueldo->setPesosPsgh($pesosPsgh);
        $sueldo->setFalla($falla);
        $sueldo->setFeriadoPerdido($feriadoPerdido);
        $sueldo->setPesosFalla($pesosFalla);
        $sueldo->addFallaAcumulada($fallaAcumulada);
        
        $em->persist($sueldo);
    }
    
    public function crearAcumulacionFalla($em, $sueldo, $año, $semana, $activo, $permiso) {
        $fallaAcumulada = new Falla_Acumulada();
        $fallaAcumulada->setSueldo($sueldo);
        $fallaAcumulada->setAño($año);
        $fallaAcumulada->setSemana($semana);
        $fallaAcumulada->setActivo($activo);
        $fallaAcumulada->setPermiso($permiso);
        $em->persist($fallaAcumulada);
        return $fallaAcumulada;
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
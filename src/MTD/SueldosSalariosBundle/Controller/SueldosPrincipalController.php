<?php

namespace MTD\SueldosSalariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\SueldosSalariosBundle\Entity\Sueldos;
use MTD\SueldosSalariosBundle\Controller\CalculosSueldosController;
use MTD\SueldosSalariosBundle\Controller\DiasNoTrabajadosController;
use MTD\SueldosSalariosBundle\Controller\ViaticosPremiosController;

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
        $sueldoBasico = $this->getSueldoBasico($em, $empleado);
        $fechaIngreso = $this->getFechaIngreso($empleado);
        $diasMes = $calculoSueldos->getDiasMes($fechaIngreso, $año, $mes);
        if($tipoAsistencia == "falta"){
            $diasNoTrabajados->actualizarFallaFalta($em, $sueldo, $año, $semanaSueldo);
            
            $configuracion = $em->getRepository('MTDAsistenciaBundle:Configuracion')->findOneBy(array('activo'=>'TRUE'));
            $fallaNueva = $calculoSueldos->getPsghFalta($configuracion);
            $falla = $sueldo->getFalla();
            $fallaActualizada = $calculoSueldos->actualizarCifra($falla, $fallaNueva);
            $feriadoPerdido = $sueldo->getFeriadoPerdido();
            $pesosFalla = $calculoSueldos->getPesosFalla($sueldoBasico, $mes, $año, $fallaActualizada, $feriadoPerdido);
            
            $categoria = $this->getCategoria($em, $empleado);
            $this->actualizarSueldoFalta($em, $categoria, $sueldo, $fallaActualizada, $pesosFalla, $diasMes, $mes, $año);
        }else{
            $psgh = $calculoSueldos->getPsgh($em, $tipoAsistencia, $asistencia);
            if($psgh > 0){
                $diasNoTrabajados->actualizarFallaInasistencia($em, $sueldo, $año, $semanaSueldo, $mes);
                $diasNoTrabajados->actualizarPsgh($em, $tipoAsistencia, $asistencia, $sueldo, $sueldoBasico, $mes, $año, $diasMes);
            }
            $horasExtras = $asistencia->getTotalHorasExtras();
            if($horasExtras > 0 && $tipoAsistencia == "asistencia"){
                $calculoSueldos->actualizarHorasExtras($em, $sueldo, $horasExtras, $mes, $año);
            }
        }
    }
    
    public function actualizarSueldoFalta($em, $categoria, $sueldo, $fallaActualizada, $pesosFalla, $diasMes, $mes, $año){
        $calculoSueldos = new CalculosSueldosController();
        $sueldo->setFalla($fallaActualizada);
        $sueldo->setPesosFalla($pesosFalla);
        $calculoSueldos->actualizarDiasTrabajados($sueldo, $mes, $año, $diasMes);
        $em->persist($sueldo);
        $viaticosPremios = new ViaticosPremiosController();
        $totalDiasMes = $calculoSueldos->getTotalDiasMes($mes, $año);
        $viaticosPremios->actualizarPremio($em, $categoria, $sueldo, $fallaActualizada, $diasMes, $totalDiasMes);
    }
    
    public function crearNuevoSueldo($em, $año, $mes, $semanaSueldo, $empleado, $tipoAsistencia, $asistencia) {
        
        $calculoSueldos = new CalculosSueldosController();
        $sueldo = new Sueldos();
        $diasNoTrabajados = new DiasNoTrabajadosController();
        
        $fechaSueldo = $año."-".$mes."-01";
        $fechaIngreso = $this->getFechaIngreso($empleado);
        $diasMes = $calculoSueldos->getDiasMes($fechaIngreso, $año, $mes);
        $categoria = $this->getCategoria($em, $empleado);
        $sueldoBasico = $this->getSueldoBasico($em, $empleado);
        
        if($tipoAsistencia == "falta"){
            $configuracion = $em->getRepository('MTDAsistenciaBundle:Configuracion')->findOneBy(array('activo'=>'TRUE'));
            $falla = round(($calculoSueldos->getPsghFalta($configuracion))/8, 2);
            $decimalesPsgh = 0;
            $pesosPsgh = 0;
            $feriadoPerdido = 1;
            $pesosFalla = $calculoSueldos->getPesosFalla($sueldoBasico, $mes, $año, $falla, $feriadoPerdido);
            $fallaAcumulada = $diasNoTrabajados->crearAcumulacionFalla($em, $sueldo, $año, $semanaSueldo, FALSE, 0, 1);
            $diasTrabajados = $calculoSueldos->getDiasTrabajados($sueldoBasico, $mes, $año, $diasMes, $pesosPsgh, $pesosFalla);
            $numeroHorasExtras = 0;
            $horasExtras = 0;
        }else{
            $psgh = $calculoSueldos->getPsgh($em, $tipoAsistencia, $asistencia);
            $decimalesPsgh = round($psgh/8, 3);
            $pesosPsgh = $calculoSueldos->getPesosPsgh($sueldoBasico, $mes, $año, $decimalesPsgh);
            if($decimalesPsgh > 0){
                $fallaAcumulada = $diasNoTrabajados->crearAcumulacionFalla($em, $sueldo, $año, $semanaSueldo, TRUE, 1, 0);
            }else{
                $fallaAcumulada = $diasNoTrabajados->crearAcumulacionFalla($em, $sueldo, $año, $semanaSueldo, TRUE, 0, 0);
            }
            $falla = 0;
            $feriadoPerdido = 0;
            $pesosFalla = 0;
            $diasTrabajados = $calculoSueldos->getDiasTrabajados($sueldoBasico, $mes, $año, $diasMes, $pesosPsgh, $pesosFalla);
            $numeroHorasExtras = $calculoSueldos->transformarMinutos($asistencia->getTotalHorasExtras());
            $horasExtras = $calculoSueldos->getHorasExtras($sueldoBasico, $mes, $año, $numeroHorasExtras);
        }

        $antiguedades = $em->getRepository('MTDSueldosSalariosBundle:Antiguedad')->findAll();
        $porcentajeAntiguedad = $calculoSueldos->getPorcentajeAntiguedad($antiguedades, $fechaIngreso);
        $minimo = $em->getRepository('MTDSueldosSalariosBundle:Minimo')->findOneBy(array('activo'=>'TRUE'));
        $minimoNacional = $minimo->getValor();
        $bonoAntiguedad = $calculoSueldos->getBonoAntiguedad($porcentajeAntiguedad, $minimoNacional);
        $totalGanado = $diasTrabajados + $horasExtras + $bonoAntiguedad;
        
        $sueldo->setFecha(new \DateTime($fechaSueldo));
        $sueldo->setFechaIngreso($fechaIngreso);
        $sueldo->setCategoria($categoria->getNombre());
        $sueldo->setSueldoBasico($sueldoBasico);
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
        $sueldo->setPorcentajeAntiguedad($porcentajeAntiguedad);
        $sueldo->setBonoAntiguedad($bonoAntiguedad);
        $sueldo->setMinimo($minimo);
        $sueldo->setTotalGanado($totalGanado);
        $sueldo->setLiquidoPagable($totalGanado);
        $sueldo->addFallaAcumulada($fallaAcumulada);
        
        $viaticosPremios = new ViaticosPremiosController();
        $totalDiasMes = $calculoSueldos->getTotalDiasMes($mes, $año);
        $viaticosPremios->crearViatico($em, $sueldo, $falla, $categoria, $diasMes, $totalDiasMes);
        
        $em->persist($sueldo);
    }
    
    public function getSueldoBasico($em, $empleado) {
        
        $categoria    = $this->getCategoria($em, $empleado);
        $sueldoBasico = $categoria->getSueldoBasico();
        return $sueldoBasico;
    }
    
    public function getCategoria($em, $empleado) {
        $contratacion = $em->getRepository('MTDSeleccionBundle:Contratacion')->findOneBy(
                array('empleado' => $empleado, 'activo' => TRUE));
        foreach ($contratacion->getEmpleado()->getEmpleadoRequisito() as $requisito){
            if($requisito->getRequisito()->getCategoria()->getId() == $contratacion->getCategoria()){
                $categoria = $requisito->getRequisito()->getCategoria();
                break;
            }
        }
        return $categoria;
    }
    
    public function getFechaIngreso($empleado) {
        $contrataciones = $empleado->getContratacion();
        foreach($contrataciones as $contratacion){
            if($contratacion->getActivo()){
                $fechaIngreso = $contratacion->getFechaIngreso();
                break;
            }
        }
        return $fechaIngreso;
    }
}
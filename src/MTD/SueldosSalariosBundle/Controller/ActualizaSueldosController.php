<?php

namespace MTD\SueldosSalariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MTD\SueldosSalariosBundle\Controller\CalculosSueldosController;
use MTD\SueldosSalariosBundle\Controller\DiasNoTrabajadosController;

class ActualizaSueldosController extends Controller
{
    public function actualizarEliminaAsistencia($em, $asistencia, $empleado)
    {
        $psgh = $asistencia->getPsgh();
        $fechaAsistencia = $asistencia->getFecha();
        $separa = explode("-", $fechaAsistencia->format('Y-m-d'));
        $añoAsistencia = $separa[0];
        $mesAsistencia = $separa[1];
        $semanaSueldo = date("W", strtotime($fechaAsistencia->format('Y-m-d')));
        $sueldosEmpleado = $empleado->getSueldos();
        $sueldo = $this->getSueldo($sueldosEmpleado, $añoAsistencia, $mesAsistencia);
        if($psgh > 0){
            $pesosFallaAnterior = $sueldo->getPesosFalla();
            $this->actualizarFallaAcumulada($em, $sueldo, $añoAsistencia, $semanaSueldo, $mesAsistencia, "asistencia");
            $this->actualizarPsgh($em, $sueldo, $psgh, $pesosFallaAnterior);
        }else{
            if(is_null($psgh)){
                $this->actualizarFallaAcumulada($em, $sueldo, $añoAsistencia, $semanaSueldo, $mesAsistencia, "falta");
                $this->actualizarFalla($em, $sueldo, $asistencia, $mesAsistencia, $añoAsistencia);
            }
        }
        $horasExtras = $asistencia->getTotalHorasExtras();
        if($horasExtras > 0){
            $this->actualizarHorasExtras($em, $sueldo, $horasExtras, $mesAsistencia, $añoAsistencia);
        }
    }
    
    public function actualizarHorasExtras($em, $sueldo, $horasExtras, $mes, $año) {
        $calculosSueldos = new CalculosSueldosController();
        $numeroHorasExtrasAnterior = $sueldo->getNumeroHorasExtras();
        $numeroHorasExtras = $calculosSueldos->transformarMinutos($horasExtras);
        $sueldoBasico = $sueldo->getSueldoBasico();
        $numeroHorasExtrasActualizado = $numeroHorasExtrasAnterior - $numeroHorasExtras;
        $pesosHorasExtras = $calculosSueldos->getHorasExtras($sueldoBasico, $mes, $año, $numeroHorasExtrasActualizado);
        $sueldo->setNumeroHorasExtras($numeroHorasExtrasActualizado);
        $sueldo->setHorasExtras($pesosHorasExtras);
        $calculosSueldos->actualizarTotalGanado($sueldo);
        $em->persist($sueldo);
    }
    
    public function actualizarFalla($em, $sueldo, $asistencia, $mesAsistencia, $añoAsistencia) {
        $diasNoTrabajados = new DiasNoTrabajadosController();
        $calculoSueldos = new CalculosSueldosController();
        $falla = $this->getFalla($asistencia);
        $fallaAnterior = $sueldo->getFalla();
        $diasTrabajadosAnterior = $sueldo->getDiasTrabajados();
        $pesosFallaAnterior = $sueldo->getPesosFalla();
        $fallaNueva = ($fallaAnterior * 8) - $falla;
        $divisionFalla = round($fallaNueva/8, 3);
        $sueldo->setFalla($divisionFalla);
        $diasNoTrabajados->actualizarPesosFalla($em, $sueldo, $mesAsistencia, $añoAsistencia);
        $pesosFalla = $sueldo->getPesosFalla();
        $diasTrabajados = $diasTrabajadosAnterior + $pesosFallaAnterior - $pesosFalla;
        $sueldo->setDiasTrabajados($diasTrabajados);
        $calculoSueldos->actualizarTotalGanado($sueldo);
        $em->persist($sueldo);
    }
    
    public function getFalla($asistencia) {
        $faltas = $asistencia->getFalta();
        foreach($faltas as $falta){
            if(!$falta->getAviso()){
                $falla = $falta->getFalla();
                break;
            }
        }
        return $falla;
    }
    
    public function actualizarFallaAcumulada($em, $sueldo, $añoAsistencia, $semanaAsistencia, $mesAsistencia, $tipoAsistencia) {
        $acumulacionFallas = $sueldo->getFallaAcumulada();
        foreach($acumulacionFallas as $acumulacionFalla){
            $añoFalla = $acumulacionFalla->getAño();
            $semanaFalla = $acumulacionFalla->getSemana();
            if($añoAsistencia == $añoFalla && $semanaAsistencia == $semanaFalla){
                if($tipoAsistencia == "asistencia"){
                    $this->actualizarPermisosAsistencia($em, $acumulacionFalla, $sueldo, $añoAsistencia, $mesAsistencia);
                }else{
                    $this->actualizarPermisosFalta($em, $acumulacionFalla, $sueldo);
                }
                
            }
        }
    }
    
    public function actualizarPermisosFalta($em, $acumulacionFalla, $sueldo) {
        $permiso = $acumulacionFalla->getPermiso();
        $falta = $acumulacionFalla->getFalta();
        $acumulacionFalla->setFalta($falta - 1);
        if($falta == 1 && $permiso <= 2){
            $acumulacionFalla->setActivo(TRUE);
            $feriadoPerdido = $sueldo->getFeriadoPerdido();
            $sueldo->setFeriadoPerdido($feriadoPerdido-1);
            $em->persist($acumulacionFalla);
        }
    }
    
    public function actualizarPermisosAsistencia($em, $acumulacionFalla, $sueldo, $añoAsistencia, $mesAsistencia) {
        $diasNoTrabajados = new DiasNoTrabajadosController();
        $permiso = $acumulacionFalla->getPermiso();
        $falta = $acumulacionFalla->getFalta();
        $acumulacionFalla->setPermiso($permiso - 1);
        if($falta == 0 && $permiso == 3){
            $acumulacionFalla->setActivo(TRUE);
            $feriadoPerdido = $sueldo->getFeriadoPerdido();
            $sueldo->setFeriadoPerdido($feriadoPerdido-1);
            $diasNoTrabajados->actualizarPesosFalla($em, $sueldo, $mesAsistencia, $añoAsistencia);
            $em->persist($acumulacionFalla);
        }
    }
    
    public function actualizarPsgh($em, $sueldo, $psgh, $pesosFallaAnterior) {
        $calculoSueldos = new CalculosSueldosController();
        $psghAnterior = $sueldo->getPsgh();
        $pesosPsghAnterior = $sueldo->getPesosPsgh();
        $diasTrabajadosAnterior = $sueldo->getDiasTrabajados();
        $psghNuevo = ($psghAnterior * 8 ) - $psgh;
        $decimalesPsgh = round($psghNuevo/8, 3);
        $pesosPsgh = round(($pesosPsghAnterior / $psghAnterior) * $decimalesPsgh, 2);
        $pesosFalla = $sueldo->getPesosFalla();
        if($decimalesPsgh == 0){
            $pesosPsgh = 0;
        }
        $diasTrabajados = $diasTrabajadosAnterior + $pesosPsghAnterior + $pesosFallaAnterior - $pesosPsgh - $pesosFalla;
        $sueldo->setPsgh($decimalesPsgh);
        $sueldo->setPesosPsgh($pesosPsgh);
        $sueldo->setDiasTrabajados($diasTrabajados);
        $calculoSueldos->actualizarTotalGanado($sueldo);
        $em->persist($sueldo);
    }
    
    public function getSueldo($sueldosEmpleado, $añoAsistencia, $mesAsistencia) {
        foreach($sueldosEmpleado as $sueldoEmpleado){
            $fechaSueldo = $sueldoEmpleado->getFecha();
            $separa1 = explode("-", $fechaSueldo->format('Y-m-d'));
            $añoSueldo = $separa1[0];
            $mesSueldo = $separa1[1];
            $sueldo = "";
            if($añoAsistencia == $añoSueldo && $mesAsistencia == $mesSueldo){
                $sueldo = $sueldoEmpleado;
                break;
            }
        }
        return $sueldo;
    }    
}
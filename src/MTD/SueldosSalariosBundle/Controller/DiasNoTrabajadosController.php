<?php

namespace MTD\SueldosSalariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\SueldosSalariosBundle\Entity\Falla_Acumulada;
use MTD\SueldosSalariosBundle\Controller\CalculosSueldosController;

class DiasNoTrabajadosController extends Controller
{
    public function actualizarPsgh($em, $tipoAsistencia, $asistencia, $sueldo, $sueldoBasico, $mes, $año, $diasMes) {
        $calculoSueldos = new CalculosSueldosController();
        $psghAnterior = $sueldo->getPsgh();
        $psgh = $calculoSueldos->getPsgh($em, $tipoAsistencia, $asistencia);
        $psghNuevo = ($psghAnterior * 8 ) + $psgh;
        $decimalesPsgh = round($psghNuevo/8, 3);
        $pesosPsgh = $calculoSueldos->getPesosPsgh($sueldoBasico, $mes, $año, $decimalesPsgh);
        $sueldo->setPsgh($decimalesPsgh);
        $sueldo->setPesosPsgh($pesosPsgh);
        $calculoSueldos->actualizarDiasTrabajados($sueldo, $mes, $año, $diasMes);
        $em->persist($sueldo);
    }
    
    public function actualizarFallaInasistencia($em, $sueldo, $año, $semanaSueldo, $mes) {
        $acumulacionFallas = $sueldo->getFallaAcumulada();
        $i = 0;
        foreach($acumulacionFallas as $acumulacionFalla){
            $añoFalla = $acumulacionFalla->getAño();
            $semanaFalla = $acumulacionFalla->getSemana();
            if($año == $añoFalla && $semanaSueldo == $semanaFalla){
                $this->actualizarPermisos($em, $acumulacionFalla, $sueldo, $mes, $año);
                $i++;
            }
        }
        if($i == 0){
            $this->crearAcumulacionFalla($em, $sueldo, $año, $semanaSueldo, TRUE, 1, 0);
        }
    }
    
    public function actualizarPermisos($em, $acumulacionFalla, $sueldo, $mes, $año) {
        $estadoFalla = $acumulacionFalla->getActivo();
        $permiso = $acumulacionFalla->getPermiso();
        $acumulacionFalla->setPermiso($permiso+1);
        if($permiso == 2 && $estadoFalla){
            $acumulacionFalla->setActivo(FALSE);
            $this->actualizarFeriadoPerdido($em, $sueldo);
            $this->actualizarPesosFalla($em, $sueldo, $mes, $año);
        }
        $em->persist($acumulacionFalla);
    }
    
    public function actualizarPesosFalla($em, $sueldo, $mes, $año) {
        $calculoSueldos = new CalculosSueldosController();
        $sueldoBasico = $sueldo->getSueldoBasico();
        $falla = $sueldo->getFalla();
        $feriado = $sueldo->getFeriadoPerdido();
        $pesosFalla = $calculoSueldos->getPesosFalla($sueldoBasico, $mes, $año, $falla, $feriado);
        $sueldo->setPesosFalla($pesosFalla);
        $em->persist($sueldo);
    }
    
    public function actualizarFallaFalta($em, $sueldo, $año, $semanaSueldo) {
        $i = 0;
        foreach($sueldo->getFallaAcumulada() as $acumulacionFalla){
            $añoFalla = $acumulacionFalla->getAño();
            $semanaFalla = $acumulacionFalla->getSemana();
            $estadoFalla = $acumulacionFalla->getActivo();
            if($año == $añoFalla && $semanaSueldo == $semanaFalla){
                $falta = $acumulacionFalla->getFalta();
                $acumulacionFalla->setFalta($falta + 1);
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
            $this->crearAcumulacionFalla($em, $sueldo, $año, $semanaSueldo, FALSE, 0, 1);
        }
    }
    
    public function actualizarFeriadoPerdido($em, $sueldo) {
        $feriadoPerdido = $sueldo->getFeriadoPerdido();
        $sueldo->setFeriadoPerdido($feriadoPerdido+1);
        
        $em->persist($sueldo);
    }
    
    public function crearAcumulacionFalla($em, $sueldo, $año, $semana, $activo, $permiso, $falta) {
        $fallaAcumulada = new Falla_Acumulada();
        $fallaAcumulada->setSueldo($sueldo);
        $fallaAcumulada->setAño($año);
        $fallaAcumulada->setSemana($semana);
        $fallaAcumulada->setActivo($activo);
        $fallaAcumulada->setPermiso($permiso);
        $fallaAcumulada->setFalta($falta);
        $em->persist($fallaAcumulada);
        return $fallaAcumulada;
    }
}
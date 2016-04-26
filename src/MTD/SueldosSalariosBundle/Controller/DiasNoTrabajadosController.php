<?php

namespace MTD\SueldosSalariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\SueldosSalariosBundle\Entity\Falla_Acumulada;

class DiasNoTrabajadosController extends Controller
{
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
    
    public function actualizarPermisos($em, $acumulacionFalla, $sueldo) {
        $estadoFalla = $acumulacionFalla->getActivo();
        $permiso = $acumulacionFalla->getPermiso();
        if($permiso == 2){
            $acumulacionFalla->setPermiso($permiso+1);
            $acumulacionFalla->setActivo(FALSE);
            if($estadoFalla){
                $this->actualizarFeriadoPerdido($em, $sueldo);
            }
        }else{
            $acumulacionFalla->setPermiso($permiso+1);
        }
        $em->persist($acumulacionFalla);
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
}
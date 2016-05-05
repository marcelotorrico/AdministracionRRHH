<?php

namespace MTD\SueldosSalariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CalculosSueldosController extends Controller
{
    public function getBonoAntiguedad($porcentajeAntiguedad, $minimoNacional) {
        $bonoAntiguedad = ($minimoNacional * $porcentajeAntiguedad) / 100;
        return round($bonoAntiguedad, 2);
    }
    
    public function getPorcentajeAntiguedad($antiguedades, $fechaIngreso) {
        $años = floor((time() - strtotime($fechaIngreso->format('Y-m-d'))) / 31556926);
        $porcentaje = 0;
        foreach ($antiguedades as $antiguedad){
            $añoInicio = $antiguedad->getAñoInicio();
            $añoFin = $antiguedad->getAñoFin();
            if($añoInicio <= $años && $añoFin >= $años){
                $porcentaje = $antiguedad->getPorcentaje();
                break;
            }
        }
        return $porcentaje;
    }
    
    public function getHorasExtras($sueldoBasico, $mes, $año, $numeroHorasExtras) {
        $diasTotalMes   = $this->getTotalDiasMes($mes, $año);
        $division = $sueldoBasico/$diasTotalMes;
        $horasExtras = ($division / 8) * 2 * $numeroHorasExtras;
        return round($horasExtras, 2);
    }
    
    public function getDiasTrabajados($sueldoBasico, $mes, $año, $diasMes, $pesosPsgh, $pesosFalla) {
        $diasTotalMes   = $this->getTotalDiasMes($mes, $año);
        $division = $sueldoBasico/$diasTotalMes;
        $multiplicacion = $division * $diasMes;
        $diasTrabajados = $multiplicacion - $pesosPsgh - $pesosFalla;
        return $diasTrabajados;
    }
    
    public function getPesosFalla($sueldoBasico, $mes, $año, $falla, $feriadoPerdido) {
        $diasTotalMes   = $this->getTotalDiasMes($mes, $año);
        $division       = $sueldoBasico/$diasTotalMes;
        $multiplicacion = $division * $falla;
        $multFP         = $division * $feriadoPerdido;
        $pesosFalla     = $multiplicacion + $multFP;
        return round($pesosFalla, 2);
    }
    
    public function getPesosPsgh($sueldoBasico, $mes, $año, $decimalesPsgh) {
        $diasTotalMes   = $this->getTotalDiasMes($mes, $año);
        $division       = $sueldoBasico/$diasTotalMes;
        $multiplicacion = (1/6)*($division);
        $pesosPsgh      = ($division + $multiplicacion) * $decimalesPsgh;
        return round($pesosPsgh, 2);
    }
    
    public function getPsgh($em, $tipoAsistencia, $asistencia) {
        $configuracion = $em->getRepository('MTDAsistenciaBundle:Configuracion')->findOneBy(array('activo'=>'TRUE'));
        $psgh = "";
        if($tipoAsistencia == "feriado"){
            $psgh = $this->getPsghFeriado($configuracion);
        }else{
            if($tipoAsistencia == "asistencia"){
                $psgh = $this->getPsghAsistencia($configuracion, $asistencia);
            }else{
                $psgh = $this->getPsghFalta($configuracion);
            }
        }
        return $psgh;
    }
    
    public function getPsghFalta($configuracion) {
        $diasTrabajo = $configuracion->getNumeroDias();
        $psgh        = 48/$diasTrabajo;
        return $psgh;
    }
    
    public function getPsghFeriado($configuracion) {
        $diasTrabajo        = $configuracion->getNumeroDias();
        $horasRealesTrabajo = 48/$diasTrabajo;
            
        if($horasRealesTrabajo > 8){
            $psgh = $horasRealesTrabajo - 8;
        }else{
            $psgh = 0;
        }
        return $psgh;
    }
    
    public function getPsghAsistencia($configuracion, $asistencia) {
        $horaIngresoMañana = $configuracion->getHoraIngresoManana()->format('H:i:s');
        $horaSalidaMañana  = $configuracion->getHoraSalidaManana()->format('H:i:s');
        $horaIngresoTarde  = $configuracion->getHoraIngresoTarde()->format('H:i:s');
        $horaSalidaTarde   = $configuracion->getHoraSalidaTarde()->format('H:i:s');

        $horasMañana = $this->diferenciaHoras($horaIngresoMañana, $horaSalidaMañana);
        $horasTarde  = $this->diferenciaHoras($horaIngresoTarde, $horaSalidaTarde);
        $horasEstablecidas = $this->sumaHoras($horasMañana, $horasTarde);
        
        $horaIngresoMañanaAsistencia = $asistencia->getHoraIngresoManana()->format('H:i:s');
        $horaSalidaMañanaAsistencia  = $asistencia->getHoraSalidaManana()->format('H:i:s');
        $horaIngresoTardeAsistencia  = $asistencia->getHoraIngresoTarde()->format('H:i:s');
        $horaSalidaTardeAsistencia   = $asistencia->getHoraSalidaTarde()->format('H:i:s');
        
        $horasMañanaAsistencia = $this->diferenciaHoras($horaIngresoMañanaAsistencia, $horaSalidaMañanaAsistencia);
        $horasTardeAsistencia  = $this->diferenciaHoras($horaIngresoTardeAsistencia, $horaSalidaTardeAsistencia);
        $horasTrabajadasDia    = $this->sumaHoras($horasMañanaAsistencia, $horasTardeAsistencia);
        
        if(strtotime($horasEstablecidas) > strtotime($horasTrabajadasDia)){
            $permiso              = $this->diferenciaHoras($horasTrabajadasDia, $horasEstablecidas);
            $psgh = $this->transformarMinutos($permiso);
        }else{
            $psgh = 0;
        }
        return $psgh;
    }

    public function sumaHoras($h1, $h2) {
        $h2h = date('H', strtotime($h2));
        $h2m = date('i', strtotime($h2));
        $h2s = date('s', strtotime($h2));
        $hora2 =$h2h." hour ". $h2m ." min ".$h2s ." second";

        $horas_sumadas= $h1." + ". $hora2;
        $text=date('H:i:s', strtotime($horas_sumadas)) ;
        return $text;
    }
    
    public function diferenciaHoras($horaInicio, $horaFin) {
        $dif=date("H:i:s", strtotime("00:00:00") + strtotime($horaFin) - strtotime($horaInicio));
        return $dif;
    }
    
    public function getDiasMes($fechaIngreso, $año, $mes){
        $fechaSueldo = $año."-".$mes."-01";
        $diferenciaDias = $this->getDiferenciaDias($fechaSueldo, $fechaIngreso);
        $diasMes = $this->getTotalDiasMes($mes, $año);
        if($diferenciaDias >= 0 ){
            return $diasMes;
        }else{
            $ultimaFechaSueldo = $año."-".$mes."-".$diasMes;
            $diasMesTrabajados = $this->getDiferenciaDias($ultimaFechaSueldo, $fechaIngreso);
            return $diasMesTrabajados;
        }
    }
    
    public function getTotalDiasMes($month, $year) {
        $first_of_month = mktime (0,0,0, $month, 1, $year); 
        $maxdays = date('t', $first_of_month);
        return $maxdays;
    }
    
    public function getDiferenciaDias($fechaSueldo, $fechaIngreso) {
        $inicio = strtotime($fechaIngreso->format('Y-m-d'));
        $fin = strtotime($fechaSueldo);
        $dif = $fin - $inicio;
        $diasFalt = (( ( $dif / 60 ) / 60 ) / 24);
        return ceil($diasFalt);
    }
    
    public function actualizarCifra($valorAntiguo, $valorNuevo) {
        $valorAnterior = $valorAntiguo * 8;
        $cifraNueva = $valorAnterior + $valorNuevo;
        return round($cifraNueva/8, 2);
    }
    
    public function transformarMinutos($hora) {
        $horas                = date('H', strtotime($hora));
        $minutos              = date('i', strtotime($hora));
        $minutosTransformados = $minutos/60;
        $horaTransformada     = (float)$horas + (float)$minutosTransformados;
        return $horaTransformada;
    }
}
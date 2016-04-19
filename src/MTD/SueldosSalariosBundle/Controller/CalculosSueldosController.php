<?php

namespace MTD\SueldosSalariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CalculosSueldosController extends Controller
{
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
        $diasTrabajo        = $configuracion->getNumeroDias();
        $psgh = 48/$diasTrabajo;
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
            $horasPermiso         = date('H', strtotime($permiso));
            $minutosPermiso       = date('i', strtotime($permiso));
            $minutosTransformados = $minutosPermiso/60;
            $psgh = (float)$horasPermiso + (float)$minutosTransformados;
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
    
    public function getDiasMes($empleado, $año, $mes){
        $fechaSueldo = $año."-".$mes."-01";
        $contrataciones = $empleado->getContratacion();
        foreach($contrataciones as $contratacion){
            if($contratacion->getActivo()){
                $fechaIngreso = $contratacion->getFechaIngreso();
                break;
            }
        }
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
}
<?php

namespace MTD\SueldosSalariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\SueldosSalariosBundle\Entity\Sueldos;
use MTD\SueldosSalariosBundle\Controller\CalculosSueldosController;
use MTD\SueldosSalariosBundle\Entity\Dias_No_Trabajados;

class SueldosPrincipalController extends Controller
{
    public function modificarSueldos($em, $fecha, $empleado, $tipoAsistencia, $asistencia){
        
        $sueldosEmpleado = $empleado->getSueldos();
        //list($año, $mes, $dia ) = split( '[/.-]', $fecha);
        $separa = explode("/", $fecha);
        $año = $separa[2];
        $mes = $separa[0];
        
        if($sueldosEmpleado->isEmpty()){
            $this->crearNuevoSueldo($em, $año, $mes, $empleado, $tipoAsistencia, $asistencia);
        }else{
            $i = 0;
            foreach($sueldosEmpleado as $sueldoEmpleado){
                $fechaSueldo = $sueldoEmpleado->getFecha();
                //list($añoSueldo, $mesSueldo, $diaSueldo ) = split( '[/.-]', $fechaSueldo->format('Y-m-d H:i:s'));
                $separa1 = explode("-", $fechaSueldo->format('Y-m-d'));
                $añoSueldo = $separa1[0];
                $mesSueldo = $separa1[1];
                if($año == $añoSueldo && $mes == $mesSueldo){
                    break;
                }else{
                    $i++;
                }
            }
            if(count($sueldosEmpleado) == $i){
                $this->crearNuevoSueldo($em, $año, $mes, $empleado, $tipoAsistencia, $asistencia);
            }
        }
    }
    
    public function crearNuevoSueldo($em, $año, $mes, $empleado, $tipoAsistencia, $asistencia) {
        
        $calculoSueldos = new CalculosSueldosController();
        $sueldos = new Sueldos();
        
        $fechaSueldo = $año."-".$mes."-01";
        $diasMes = $calculoSueldos->getDiasMes($empleado, $año, $mes);
        $psgh = $calculoSueldos->getPsgh($em, $tipoAsistencia, $asistencia);
        $total = $psgh;
        
        $this->guardarDiasNoTrabajados($em, $psgh);
        
        $sueldos->setFecha(new \DateTime($fechaSueldo));
        $sueldos->setEmpleado($empleado);
        $sueldos->setDiasMes($diasMes);
        $sueldos->setTotalDiasNoTrabajados($total);
        
        $em->persist($sueldos);
    }
    
    public function guardarDiasNoTrabajados($em, $psgh) {
        $diasNoTrabajados = new Dias_No_Trabajados();
        $diasNoTrabajados->setPsgh($psgh);
        
        $em->persist($diasNoTrabajados);
    }
}
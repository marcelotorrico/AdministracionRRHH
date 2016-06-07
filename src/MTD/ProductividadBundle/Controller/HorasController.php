<?php

namespace MTD\ProductividadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MTD\ProductividadBundle\Controller\SueldosController;
use MTD\ProductividadBundle\Controller\FaltasController;
use MTD\SueldosSalariosBundle\Controller\CalculosSueldosController;

class HorasController extends Controller
{
    
    public function mostrarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        $faltasController = new FaltasController();
        $sueldosController = new SueldosController();
        $añosAsistencia = $faltasController->getAñoAsistencia($empleado, $sueldosController);
        $ultimoAño = "";
        if($añosAsistencia){
            $ultimoAño = $añosAsistencia[0];
        }
        $todasHoras = $this->recuperarTodasHoras($empleado, $añosAsistencia, $sueldosController);
        return $this->render('MTDProductividadBundle:Productividad:horas.html.twig', array('empleado' => $empleado, 'añosAsistencia' => $añosAsistencia, 'ultimoAño' => $ultimoAño, 'todasHoras' => $todasHoras));
    }
    
    public function recuperarTodasHoras($empleado, $añosAsistencia, $sueldosController) {
        $respuesta = array();
        if($añosAsistencia){
            $i = 0;
            foreach ($añosAsistencia as $año){
                $horasNormalesAño = $this->recuperarHoras($empleado, $año, $sueldosController);
                $horasExtrasAño = $this->recuperarHorasExtras($empleado, $año, $sueldosController);
                $respuesta[$i] = array('año' => $año, 'horasNormalesAño' => $horasNormalesAño, 'horasExtrasAño' => $horasExtrasAño);
                $i++;
            }
        }
        return $respuesta;
    }
    
    public function recuperarHorasExtras($empleado, $año, $sueldosController) {
        $respuesta = array();
        $sueldos = $empleado->getSueldos();
        foreach($sueldos as $sueldo){
            $añoSueldo = $sueldosController->getAño($sueldo, "año");
            if($añoSueldo == $año){
                $i = $sueldosController->getPosicionSueldo($sueldo);
                $horasExtras = $sueldo->getNumeroHorasExtras();
                $respuesta[$i] = $horasExtras;
            }
        }
        return $respuesta;
    }
    
    public function recuperarHoras($empleado, $año, $sueldosController) {
        $respuesta = array();
        $sueldos = $empleado->getSueldos();
        foreach($sueldos as $sueldo){
            $añoSueldo = $sueldosController->getAño($sueldo, "año");
            if($añoSueldo == $año){
                $i = $sueldosController->getPosicionSueldo($sueldo);
                $horas = $this->getHoras($sueldo, $empleado, $sueldosController);
                $respuesta[$i] = $horas;
            }
        }
        return $respuesta;
    }
    
    public function getHoras($sueldo, $empleado, $sueldosController) {
        $calculosueldo = new CalculosSueldosController();
        $horas = 0;
        $añoSueldo = $sueldosController->getAño($sueldo, "año");
        $mesSueldo = $sueldosController->getAño($sueldo, "mes");
        foreach($empleado->getAsistencia() as $asistencia){
            $añoAsistencia = $sueldosController->getAño($asistencia, "año");
            $mesAsistencia = $sueldosController->getAño($asistencia, "mes");
            $activo = $asistencia->getActivo();
            $hora = $asistencia->getHoraIngresoManana();
            if($activo && $hora != null && $añoSueldo == $añoAsistencia && $mesSueldo == $mesAsistencia){
                $horasTrabajadas = $asistencia->getTotalHorasNormales();
                $horasTransformadas = $calculosueldo->transformarMinutos($horasTrabajadas);
                $horas = $horas + $horasTransformadas;
            }
        }
        return $horas;
    }
}
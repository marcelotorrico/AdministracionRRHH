<?php

namespace MTD\ProductividadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MTD\ProductividadBundle\Controller\SueldosController;

class FaltasController extends Controller
{
    
    public function mostrarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        $sueldosController = new SueldosController();
        $añosAsistencia = $this->getAñoAsistencia($empleado, $sueldosController);
        $ultimoAño = "";
        if($añosAsistencia){
            $ultimoAño = $añosAsistencia[0];
        }
        $todasFaltas = $this->recuperarTodasFaltas($empleado, $añosAsistencia, $sueldosController);
        return $this->render('MTDProductividadBundle:Productividad:faltas.html.twig', array('empleado' => $empleado, 'añosAsistencia' => $añosAsistencia, 'ultimoAño' => $ultimoAño, 'todasFaltas' => $todasFaltas));
    }
    
    public function recuperarTodasFaltas($empleado, $añosAsistencia, $sueldosController) {
        $respuesta = array();
        if($añosAsistencia){
            $i = 0;
            foreach ($añosAsistencia as $año){
                $faltasAño = $this->recuperarFaltas($empleado, $año, $sueldosController);
                $respuesta[$i] = array('año' => $año, 'faltasAño' => $faltasAño);
                $i++;
            }
        }
        return $respuesta;
    }
    
    public function recuperarFaltas($empleado, $año, $sueldosController) {
        $respuesta = array();
        $sueldos = $empleado->getSueldos();
        foreach($sueldos as $sueldo){
            $añoSueldo = $sueldosController->getAño($sueldo, "año");
            if($añoSueldo == $año){
                $i = $sueldosController->getPosicionSueldo($sueldo);
                $falta = $this->getFalta($sueldo);
                $respuesta[$i] = $falta;
            }
        }
        return $respuesta;
    }
    
    public function getFalta($sueldo) {
        $falta = 0;
        foreach ($sueldo->getFallaAcumulada() as $fallaAcumulada){
            $falta = $falta + $fallaAcumulada->getFalta();
        }
        return $falta;
    }
    
    public function getAñoAsistencia($empleado, $sueldosController) {
        $respuesta = array();
        $sueldos = $empleado->getSueldos();
        foreach($sueldos as $sueldo){
            $añoAsistencia = $sueldosController->getAño($sueldo, "año");
            if(!in_array($añoAsistencia, $respuesta)){
                    array_push($respuesta, $añoAsistencia);
            }
        }
        rsort($respuesta);
        return $respuesta;
    }
}
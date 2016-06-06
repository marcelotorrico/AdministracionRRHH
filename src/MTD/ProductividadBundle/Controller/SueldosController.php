<?php

namespace MTD\ProductividadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SueldosController extends Controller
{
    
    public function mostrarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        $añosSueldo = $this->getAñoSueldos($empleado);
        $ultimoAño = "";
        if($añosSueldo){
            $ultimoAño = $añosSueldo[0];
        }
        $todosSueldos = $this->recuperarTodosSueldos($empleado, $añosSueldo);
        return $this->render('MTDProductividadBundle:Productividad:sueldos.html.twig', array('empleado' => $empleado, 'añosSueldo' => $añosSueldo, 'ultimoAño' => $ultimoAño, 'todosSueldos' => $todosSueldos));
    }
    
    public function recuperarTodosSueldos($empleado, $añosSueldo) {
        $respuesta = array();
        if($añosSueldo){
            $i = 0;
            foreach ($añosSueldo as $año){
                $sueldosAño = $this->recuperarSueldos($empleado, $año);
                $respuesta[$i] = array('año' => $año, 'sueldosAño' => $sueldosAño);
                $i++;
            }
        }
        return $respuesta;
    }
    
    public function recuperarSueldos($empleado, $año) {
        $respuesta = array();
        $sueldos = $empleado->getSueldos();
        foreach($sueldos as $sueldo){
            $añoSueldo = $this->getAño($sueldo, "año");
            if($sueldo->getEmitido() && $añoSueldo == $año){
                $i = $this->getPosicionSueldo($sueldo);
                $respuesta[$i] = $sueldo->getTotalPagado();
            }
        }
        return $respuesta;
    }
    
    public function getPosicionSueldo($sueldo) {
        $mesSueldo = $this->getAño($sueldo, "mes");
        if($mesSueldo == "01"){
            return 0;
        }
        if($mesSueldo == "02"){
            return 1;
        }
        if($mesSueldo == "03"){
            return 2;
        }
        if($mesSueldo == "04"){
            return 3;
        }
        if($mesSueldo == "05"){
            return 4;
        }
        if($mesSueldo == "06"){
            return 5;
        }
        if($mesSueldo == "07"){
            return 6;
        }
        if($mesSueldo == "08"){
            return 7;
        }
        if($mesSueldo == "09"){
            return 8;
        }
        if($mesSueldo == "10"){
            return 9;
        }
        if($mesSueldo == "11"){
            return 10;
        }
        if($mesSueldo == "12"){
            return 11;
        }
    }
    
    public function getAñoSueldos($empleado) {
        $respuesta = array();
        $sueldos = $empleado->getSueldos();
        foreach($sueldos as $sueldo){
            $añoSueldo = $this->getAño($sueldo, "año");
            if($sueldo->getEmitido() && !in_array($añoSueldo, $respuesta)){
                    array_push($respuesta, $añoSueldo);
            }
        }
        rsort($respuesta);
        return $respuesta;
    }
    
    public function getAño($sueldo, $palabra) {
        $fechaAsistencia = $sueldo->getFecha();
        $separa1 = explode("-", $fechaAsistencia->format('Y-m-d'));
        $añoAsistencia = $separa1[0];
        $mesAsistencia = $separa1[1];
        if($palabra == "mes"){
            return $mesAsistencia;
        }else{
            return $añoAsistencia;
        }
    }
}
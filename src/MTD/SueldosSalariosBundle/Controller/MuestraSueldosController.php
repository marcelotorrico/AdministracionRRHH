<?php

namespace MTD\SueldosSalariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MTD\SueldosSalariosBundle\Controller\CalculosSueldosController;

class MuestraSueldosController extends Controller
{
    public function mostrarAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        $fecha = $this->get('request')->request->get('sueldosSalarios');
        $contrataciones = $em->getRepository('MTDSeleccionBundle:Contratacion')->findAll();
        
        $sueldos = array();
        $i = 0;
        
        $antiguedades = $em->getRepository('MTDSueldosSalariosBundle:Antiguedad')->findAll();
        foreach($contrataciones as $contratacion){
            if($contratacion->getActivo() && $contratacion->getEmpleado()->getContratado() && $contratacion->getEmpleado()->getOperativo()){
                $empleado = $contratacion->getEmpleado()->getApellido()." ".$contratacion->getEmpleado()->getNombre();
                $fechaIngreso = $contratacion->getFechaIngreso();
                $categoria = $this->getCategoria($contratacion);
                $sueldoBasico = $this->getSueldoBasico($contratacion);
                $fechaMes = new \DateTime(strtotime($fecha));
                //$diasMesTrabajados = date( "t", $fechaMes);
                $fecha1 = "2016/01/03";
                //list($anio, $mes) = split( '[/.-]', $fecha1);
                $separa = explode("-", $fechaMes->format('Y-m-d'));
                $año = $separa[0];
                $mes = $separa[1];
                $diasMesTrabajados = $this->getDiasMes($contratacion->getEmpleado(), $año, $mes);
                $fechaSueldo = $año."-".$mes."-01";
                $semanaSueldo = date("W", strtotime($fechaSueldo));
                
                $calculo = new CalculosSueldosController();
                $pesosPsgh = $calculo->getPesosFalla(3220, 01, 2016, 4.80, 1);
                
                $diasTrabajados = $calculo->getDiasTrabajados(3220, 01, 2016, 31, 112.7, 602.5);
                $porcentajeAntiguedad = $calculo->getBonoAntiguedad(5, 4968);
                
                $sueldos[$i] = array('empleado'=>$empleado, 'fechaIngreso'=>$fechaSueldo, 'categoria' => $categoria, 'sueldoBasico' => $sueldoBasico, 'diasMesTrabajados' => $diasMesTrabajados, 'pesosPsgh' => $semanaSueldo, 'diasTrabajados' => $diasTrabajados, 'porcentajeAntiguedad' => $porcentajeAntiguedad);
                $i++;
            }
        }
        
        return $this->render('MTDSueldosSalariosBundle:Sueldos:muestraSueldos.html.twig', array('fecha' => $fecha, 'sueldos' => $sueldos));
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
    
    public function getSueldoBasico($contratacion) {
        $sueldoBasico = "";
        foreach ($contratacion->getEmpleado()->getEmpleadoRequisito() as $requisito){
            if($requisito->getRequisito()->getCategoria()->getId() == $contratacion->getCategoria()){
                $sueldoBasico = $requisito->getRequisito()->getCategoria()->getSueldoBasico();
                break;
            }
        }
        return $sueldoBasico;
    }
    
    public function getCategoria($contratacion) {
        $categoria = "";
        foreach ($contratacion->getEmpleado()->getEmpleadoRequisito() as $requisito){
            if($requisito->getRequisito()->getCategoria()->getId() == $contratacion->getCategoria()){
                $categoria = $requisito->getRequisito()->getCategoria()->getNombre();
                break;
            }
        }
        return $categoria;
    }
}
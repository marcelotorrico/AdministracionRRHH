<?php

namespace MTD\SueldosSalariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MuestraSueldosController extends Controller
{
    
    public function mostrarAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        $fecha = $this->get('request')->request->get('sueldosSalarios');
        $contrataciones = $em->getRepository('MTDSeleccionBundle:Contratacion')->findAll();
        
        $sueldos = array();
        $i = 0;
        foreach($contrataciones as $contratacion){
            if($contratacion->getActivo() && $contratacion->getEmpleado()->getContratado() && $contratacion->getEmpleado()->getOperativo()){
                $empleado = $contratacion->getEmpleado()->getApellido()." ".$contratacion->getEmpleado()->getNombre();
                $fechaIngreso = $contratacion->getFechaIngreso();
                $categoria = $this->getCategoria($contratacion);
                $sueldoBasico = $this->getSueldoBasico($contratacion);
                //$fechaMes = strtotime($fecha);
                //$diasMesTrabajados = date( "t", $fechaMes);
                $fecha1 = "2016/02";
                list($anio, $mes) = split( '[/.-]', $fecha1);
                $diasMesTrabajados = date("t",mktime(0,0,0,$mes,$anio));
                
                $sueldos[$i] = array('empleado'=>$empleado, 'fechaIngreso'=>$fechaIngreso, 'categoria' => $categoria, 'sueldoBasico' => $sueldoBasico, 'diasMesTrabajados' => $diasMesTrabajados);
                $i++;
            }
        }
        
        return $this->render('MTDSueldosSalariosBundle:Sueldos:muestraSueldos.html.twig', array('fecha' => $fecha, 'sueldos' => $sueldos));
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
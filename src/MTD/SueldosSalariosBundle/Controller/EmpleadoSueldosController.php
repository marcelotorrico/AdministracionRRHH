<?php

namespace MTD\SueldosSalariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MTD\SueldosSalariosBundle\Controller\MuestraSueldosController;

class EmpleadoSueldosController extends Controller
{
    
    public function mostrarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        $sueldos = $em->getRepository('MTDSueldosSalariosBundle:Sueldos')->findBy( array(), array('fecha' => 'DESC') );
        $sueldosArray = array();
        $muestraSueldo = new MuestraSueldosController();
        $i = 0;
        foreach($sueldos as $sueldo){
            if($sueldo->getEmpleado() == $empleado && $sueldo->getEmitido()){
                $diasNoTrabajados = $sueldo->getPesosPsgh() + $sueldo->getPesosFalla();
                $totalDescuento = $muestraSueldo->getTotalDescuento($em, $sueldo);
                $totalPremios = $muestraSueldo->getTotalPremios($em, $sueldo);

                $sueldosArray[$i] = array('sueldo' => $sueldo, 'totalPremios' => $totalPremios, 'totalDescuento' => $totalDescuento,
                    'diasNoTrabajados' => $diasNoTrabajados, 'empleado' => $empleado);
                $i++;
            }
        }
        return $this->render('MTDSueldosSalariosBundle:Sueldos:empleadoSueldos.html.twig', array('empleado' => $empleado, 'sueldos' => $sueldosArray));
    }
    
}
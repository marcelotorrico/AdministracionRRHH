<?php

namespace MTD\SueldosSalariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MTD\SueldosSalariosBundle\Controller\MuestraSueldosController;

class HistorialController extends Controller
{
    public function mostrarAction(Request $request, $id, $idEmpleado)
    {
        $em = $this->getDoctrine()->getManager();
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($idEmpleado);
        $sueldo   = $em->getRepository('MTDSueldosSalariosBundle:Sueldos')->find($id);
        $muestraSueldos = new MuestraSueldosController();
        $diasNoTrabajados = $sueldo->getPesosPsgh() + $sueldo->getPesosFalla();
        $totalDescuento = $muestraSueldos->getTotalDescuento($em, $sueldo);
        $totalPremios = $muestraSueldos->getTotalPremios($em, $sueldo);
        $sueldosEmpleado = $empleado->getSueldos();
        $fecha = $sueldo->getFecha();
        $respuesta = array();
        $i = 0;
        foreach($sueldosEmpleado as $sueldoEmpleado){
            $fechaEmpleado = $sueldoEmpleado->getFecha();
            if($fecha == $fechaEmpleado && $sueldo->getId() != $sueldoEmpleado->getId()){
                $totalPremiosEmpleado = $muestraSueldos->getTotalPremios($em, $sueldoEmpleado);
                $totalDescuentoEmpleado = $muestraSueldos->getTotalDescuento($em, $sueldoEmpleado);
                $diasNoTrabajadosEmpleado = $sueldoEmpleado->getPesosPsgh() + $sueldoEmpleado->getPesosFalla();
                $respuesta[$i] = array('sueldo' => $sueldoEmpleado, 'totalPremios' => $totalPremiosEmpleado, 'totalDescuento' => $totalDescuentoEmpleado,
                        'diasNoTrabajados' => $diasNoTrabajadosEmpleado, 'empleado' => $empleado);
                $i++;
            }
        }
        return $this->render('MTDSueldosSalariosBundle:Sueldos:historial.html.twig', array('sueldo' => $sueldo,
            'respuestas' => $respuesta, 'empleado' => $empleado, 'diasNoTrabajados' => $diasNoTrabajados,
            'totalDescuento' => $totalDescuento, 'totalPremios' => $totalPremios));
    }
}
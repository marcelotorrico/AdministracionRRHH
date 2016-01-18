<?php

namespace MTD\SeleccionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProyectosEmpleadoController extends Controller
{
    
    public function listarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        $proyectoEmpleado = $empleado->getProyectoEmpleado();
        
        return $this->render('MTDSeleccionBundle:Seleccion:listaProyectosEmpleado.html.twig', array('empleado' => $empleado, 'proyectoEmpleado' => $proyectoEmpleado));
    }
    
}
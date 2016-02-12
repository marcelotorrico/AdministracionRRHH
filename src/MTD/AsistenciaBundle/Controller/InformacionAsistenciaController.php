<?php

namespace MTD\AsistenciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class InformacionAsistenciaController extends Controller
{
    
    public function mostrarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        $proyectosEmpleado = $empleado->getProyectoEmpleado();
        
        $asistencias = $em->getRepository('MTDAsistenciaBundle:Asistencia')->findBy( array(), array('fecha' => 'DESC') );
        
        return $this->render('MTDAsistenciaBundle:Asistencia:informacionAsistencia.html.twig', array('empleado' => $empleado, 'proyectosEmpleado' => $proyectosEmpleado, 'asistencias' => $asistencias));
    }
    
}
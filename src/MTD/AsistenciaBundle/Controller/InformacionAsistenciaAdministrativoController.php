<?php

namespace MTD\AsistenciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class InformacionAsistenciaAdministrativoController extends Controller
{
    
    public function mostrarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        $asistenciasEmpleado = $empleado->getAsistencia();
        
        $asistencias = $em->getRepository('MTDAsistenciaBundle:Asistencia')->findBy( array(), array('fecha' => 'DESC') );
        
        return $this->render('MTDAsistenciaBundle:Asistencia:informacionAsistenciaAdministrativo.html.twig', array('empleado' => $empleado, 'asistenciasEmpleado' => $asistenciasEmpleado, 'asistencias' => $asistencias));
    }
    
}
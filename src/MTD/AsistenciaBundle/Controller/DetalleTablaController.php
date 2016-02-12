<?php

namespace MTD\AsistenciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DetalleTablaController extends Controller
{
    
    public function mostrarAction(Request $request, $id)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $asistencia = $em->getRepository('MTDAsistenciaBundle:Asistencia')->find($id);
        $asistenciasProyecto = $asistencia->getAsistenciaProyecto();
        
        return $this->render('MTDAsistenciaBundle:Asistencia:detalleAsistencia.html.twig', array("asistenciasProyecto"=>$asistenciasProyecto));
    }
}
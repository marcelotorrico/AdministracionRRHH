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
        
        return $this->render('MTDAsistenciaBundle:Asistencia:detalleAsistencia.html.twig', array("asistenciasProyecto"=>$asistenciasProyecto, "asistencia"=>$asistencia));
    }
    
    public function mostrarAdministrativoAction(Request $request, $id)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $asistencia = $em->getRepository('MTDAsistenciaBundle:Asistencia')->find($id);
        
        return $this->render('MTDAsistenciaBundle:Asistencia:detalleAdministrativoAsistencia.html.twig', array("asistencia"=>$asistencia));
    }
    
    public function mostrarFeriadoAction(Request $request, $id)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $asistencia = $em->getRepository('MTDAsistenciaBundle:Asistencia')->find($id);
        
        return $this->render('MTDAsistenciaBundle:Asistencia:detalleFeriado.html.twig', array("asistencia"=>$asistencia));
    }
    
    public function mostrarInasistenciaAction(Request $request, $id)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $asistencia = $em->getRepository('MTDAsistenciaBundle:Asistencia')->find($id);
        $faltas = $asistencia->getFalta();
        
        return $this->render('MTDAsistenciaBundle:Inasistencia:detalleInasistencia.html.twig', array("faltas"=>$faltas));
    }
}
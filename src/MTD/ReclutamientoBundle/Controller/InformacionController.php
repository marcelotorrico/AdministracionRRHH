<?php

namespace MTD\ReclutamientoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class InformacionController extends Controller
{
    
    public function mostrarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $postulante = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        
        return $this->render('MTDReclutamientoBundle:Reclutamiento:mostrar.html.twig', array("postulante"=>$postulante));
    }
}

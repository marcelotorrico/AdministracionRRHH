<?php

namespace MTD\ReclutamientoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ListaController extends Controller
{
    
    public function listarAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $postulantes = $em->getRepository('MTDReclutamientoBundle:Empleado')->findAll();
        
        return $this->render('MTDReclutamientoBundle:Reclutamiento:lista.html.twig', array('postulantes' => $postulantes));
    }
}

<?php

namespace MTD\ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class InicioController extends Controller
{
    
    public function mostrarAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $proyectos = $em->getRepository('MTDProyectoBundle:Proyecto')->findAll();
        
        return $this->render('MTDProyectoBundle:Proyecto:inicio.html.twig', array('proyectos' => $proyectos));
    }
    
}
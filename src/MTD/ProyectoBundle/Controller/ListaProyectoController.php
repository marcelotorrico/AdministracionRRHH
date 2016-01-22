<?php

namespace MTD\ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ListaProyectoController extends Controller
{
    
    public function listaAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $proyectos = $em->getRepository('MTDProyectoBundle:Proyecto')->findAll();
        
        return $this->render('MTDProyectoBundle:Proyecto:lista.html.twig', array('proyectos' => $proyectos));
    }
    
}
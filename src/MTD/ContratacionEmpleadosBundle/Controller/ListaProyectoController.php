<?php

namespace MTD\ContratacionEmpleadosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ListaProyectoController extends Controller
{
    
    public function listaAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $proyectos = $em->getRepository('MTDContratacionEmpleadosBundle:Proyecto')->findAll();
        
        return $this->render('MTDContratacionEmpleadosBundle:Proyecto:lista.html.twig', array('proyectos' => $proyectos));
    }
    
}

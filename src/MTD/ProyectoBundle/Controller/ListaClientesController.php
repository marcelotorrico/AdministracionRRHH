<?php

namespace MTD\ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ListaClientesController extends Controller
{
    
    public function listarAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $proyectos = $em->getRepository('MTDProyectoBundle:Proyecto')->findAll();
        $clientes = $em->getRepository('MTDProyectoBundle:Cliente')->findAll();
        
        return $this->render('MTDProyectoBundle:Proyecto:listaClientes.html.twig', array('proyectos' => $proyectos, 'clientes' => $clientes));
    }
    
}
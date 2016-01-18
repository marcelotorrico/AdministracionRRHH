<?php

namespace MTD\ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ListaEmpleadosController extends Controller
{
    
    public function listarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $proyectoSeleccionado = $em->getRepository('MTDProyectoBundle:Proyecto')->find($id);
        
        return $this->render('MTDProyectoBundle:Proyecto:listaEmpleados.html.twig', array('proyectoSeleccionado' => $proyectoSeleccionado));
    }
}
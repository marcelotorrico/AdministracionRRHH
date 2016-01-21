<?php

namespace MTD\SeleccionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ListaEmpleadosController extends Controller
{
    
    public function listarAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $contrataciones = $em->getRepository('MTDSeleccionBundle:Contratacion')->findAll();
        $proyectos = $em->getRepository('MTDProyectoBundle:Proyecto')->findAll();
        
        return $this->render('MTDSeleccionBundle:Seleccion:listaEmpleados.html.twig', array('contrataciones' => $contrataciones, 'proyectos' => $proyectos));
    }
    
}

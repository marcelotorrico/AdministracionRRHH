<?php

namespace MTD\ReclutamientoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ListaAdministrativosController extends Controller
{
    
    public function listarAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $postulantes = $em->getRepository('MTDReclutamientoBundle:Empleado')->findAll();
        $proyectos = $em->getRepository('MTDProyectoBundle:Proyecto')->findAll();
        
        return $this->render('MTDReclutamientoBundle:Reclutamiento:listaAdministrativos.html.twig', array('postulantes' => $postulantes, 'proyectos' => $proyectos));
    }
}

<?php

namespace MTD\ReclutamientoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BuscadorEmpleadosController extends Controller
{
    
    public function buscarAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $proyectos = $em->getRepository('MTDProyectoBundle:Proyecto')->findAll();
        $categorias = $em->getRepository('MTDCategoriasTrabajoBundle:Categoria')->findAll();
        
        return $this->render('MTDReclutamientoBundle:Reclutamiento:buscador.html.twig', array('categorias' => $categorias, 'proyectos' => $proyectos));
    }
    
    public function mostrarIdoneosAction(Request $request, $id)
    {
        if($request->isXmlHttpRequest()){
            
            $em = $this->getDoctrine()->getManager();
            
            $categorias = $em->getRepository('MTDCategoriasTrabajoBundle:Categoria')->find($id);
            $postulantes = $em->getRepository('MTDReclutamientoBundle:Empleado')->findAll();

            return $this->render('MTDReclutamientoBundle:Reclutamiento:empleadosCategoria.html.twig', array("categorias"=>$categorias, "postulantes"=>$postulantes));
        }
    }
}
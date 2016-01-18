<?php

namespace MTD\ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProyectoEmpleadoController extends Controller
{
    
    public function asignarAction(Request $request, $id)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $proyectoSeleccionado = $em->getRepository('MTDProyectoBundle:Proyecto')->find($id);
        $categoriasProyecto = $proyectoSeleccionado->getCategoria();
        
        return $this->render('MTDProyectoBundle:Proyecto:registroEmpleados.html.twig', array('proyectoSeleccionado' => $proyectoSeleccionado, "categoriasProyecto"=>$categoriasProyecto));
    }
    
    public function mostrarAction(Request $request, $id, $proyecto)
    {
        if($request->isXmlHttpRequest()){
            
            $em = $this->getDoctrine()->getManager();
            
            $categorias = $em->getRepository('MTDCategoriasTrabajoBundle:Categoria')->find($id);
            $postulantes = $em->getRepository('MTDReclutamientoBundle:Empleado')->findAll();
            $proyectoSeleccionado = $em->getRepository('MTDProyectoBundle:Proyecto')->find($proyecto);
            $empleadosProyecto = $proyectoSeleccionado->getProyectoEmpleado();
            return $this->render('MTDProyectoBundle:Proyecto:empleadosCategoria.html.twig', array("categorias"=>$categorias, "postulantes"=>$postulantes, "proyectoSeleccionado"=>$proyectoSeleccionado, "empleadosProyecto"=>$empleadosProyecto));
        }
    }
}
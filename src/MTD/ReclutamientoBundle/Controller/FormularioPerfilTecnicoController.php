<?php

namespace MTD\ReclutamientoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\ReclutamientoBundle\Entity\Empleado;
use Symfony\Component\HttpFoundation\Request;

class FormularioPerfilTecnicoController extends Controller
{
    
    public function registrarAction(Request $request, $id)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $empleadoSeleccionado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        $categorias = $em->getRepository('MTDCategoriasTrabajoBundle:Categoria')->findAll();
        
        return $this->render('MTDReclutamientoBundle:Reclutamiento:registroPerfilTecnico.html.twig', array('empleadoSeleccionado' => $empleadoSeleccionado, "categorias"=>$categorias));
    }
    
    public function mostrarRequisitosAction(Request $request, $id, $idEmpleado)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($idEmpleado);
        $requisitosEmpleado = $empleado->getEmpleadoRequisito();
        $requisitos = $em->getRepository('MTDCategoriasTrabajoBundle:Requisito_Categoria')->findByCategoria($id);
        
        return $this->render('MTDReclutamientoBundle:Reclutamiento:requisitos.html.twig', array("requisitos"=>$requisitos, "requisitosEmpleado"=>$requisitosEmpleado));
    }
}
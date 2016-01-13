<?php

namespace MTD\ReclutamientoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FormularioPerfilTecnicoController extends Controller
{
    
    public function registrarAction(Request $request, $id)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $postulante = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        $categorias = $em->getRepository('MTDCategoriasTrabajoBundle:Categoria')->findAll();
        
        return $this->render('MTDReclutamientoBundle:Reclutamiento:registroPerfilTecnico.html.twig', array('postulante' => $postulante, "categorias"=>$categorias));
    }
}
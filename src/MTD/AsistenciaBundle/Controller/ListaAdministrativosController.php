<?php

namespace MTD\AsistenciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ListaAdministrativosController extends Controller
{
    
    public function listarAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $contrataciones = $em->getRepository('MTDSeleccionBundle:Contratacion')->findAll();
        $proyectos = $em->getRepository('MTDProyectoBundle:Proyecto')->findAll();
        
        return $this->render('MTDAsistenciaBundle:Asistencia:listaAdministrativos.html.twig', array('contrataciones' => $contrataciones, 'proyectos' => $proyectos));
    }
    
}
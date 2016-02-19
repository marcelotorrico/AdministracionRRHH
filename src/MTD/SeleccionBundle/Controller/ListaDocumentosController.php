<?php

namespace MTD\SeleccionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ListaDocumentosController extends Controller
{
    
    public function listarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        $documentos = $empleado->getDocumento();
        
        return $this->render('MTDSeleccionBundle:Seleccion:listaDocumentos.html.twig', array('documentos' => $documentos, 'empleado' => $empleado));
    }
    
}
<?php

namespace MTD\ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\ProyectoBundle\Entity\Cliente;
use MTD\ProyectoBundle\Form\ClienteType;
use Symfony\Component\HttpFoundation\Request;

class RegistroClienteController extends Controller
{
    
    public function registroClienteAction(Request $request)
    {
        $cliente = new Cliente();
        $formularioCliente = $this->createForm(new ClienteType(),$cliente);
        $formularioCliente->handleRequest($request);
     
        if($request->isXmlHttpRequest()){
            $data = $formularioCliente->getData();
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($data);             
            $em->flush();

            return $this->redirect($this->generateUrl('mtd_proyecto_registro'));
        }
    }
}
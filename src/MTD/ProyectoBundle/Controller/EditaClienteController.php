<?php

namespace MTD\ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\ProyectoBundle\Entity\Cliente;
use MTD\ProyectoBundle\Form\ClienteType;
use Symfony\Component\HttpFoundation\Request;

class EditaClienteController extends Controller
{
    
    public function editarAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $proyectos = $em->getRepository('MTDProyectoBundle:Proyecto')->findAll();
        $cliente = $em->getRepository('MTDProyectoBundle:Cliente')->find($id);
        
        $clientes = new Cliente();
        $formularioCliente = $this->createForm(new ClienteType(),$clientes);
        $formularioCliente->handleRequest($request);
        
        if($formularioCliente->isValid()){
            
            $this->addFlash(
                'notice',
                'El cliente fue actualizado correctamente'
            );
            $apellido = $formularioCliente->get('apellido')->getData();
            $nombre = $formularioCliente->get('nombre')->getData();
            $direccion = $formularioCliente->get('direccion')->getData();
            $telefono = $formularioCliente->get('telefono')->getData();
            $nit = $formularioCliente->get('nit')->getData();
            $banco = $formularioCliente->get('banco')->getData();

            $cliente->setApellido($apellido);
            $cliente->setNombre($nombre);
            $cliente->setDireccion($direccion);
            $cliente->setTelefono($telefono);
            $cliente->setNit($nit);
            $cliente->setBanco($banco);

            $em->persist($cliente);             
            $em->flush();

            return $this->redirect($this->generateUrl('mtd_lista_clientes'));
            
        }
        
        return $this->render('MTDProyectoBundle:Proyecto:editaCliente.html.twig', array('proyectos' => $proyectos, 'cliente' => $cliente, "formularioCliente"=>$formularioCliente->createView()));
    }
}
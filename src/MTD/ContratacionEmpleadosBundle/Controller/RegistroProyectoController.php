<?php

namespace MTD\ContratacionEmpleadosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\ContratacionEmpleadosBundle\Entity\Proyecto;
use MTD\ContratacionEmpleadosBundle\Form\ProyectoType;
use MTD\ContratacionEmpleadosBundle\Entity\Cliente;
use MTD\ContratacionEmpleadosBundle\Form\ClienteType;
use MTD\ContratacionEmpleadosBundle\Entity\Tipo_Proyecto;
use MTD\ContratacionEmpleadosBundle\Form\Tipo_ProyectoType;
use Symfony\Component\HttpFoundation\Request;

class RegistroProyectoController extends Controller
{
    
    public function registroAction(Request $request)
    {
        $proyecto = new Proyecto();
        $form = $this->createForm(new ProyectoType(),$proyecto);
        $form->handleRequest($request);
        
        $cliente = new Cliente();
        $formularioCliente = $this->createForm(new ClienteType(),$cliente);
        $formularioCliente->handleRequest($request);
        
        $tipoProyecto = new Tipo_Proyecto();
        $formularioTipoProyecto = $this->createForm(new Tipo_ProyectoType(),$tipoProyecto);
        $formularioTipoProyecto->handleRequest($request);
        
        if($form->isValid()){
            $nombreProyecto = $form->get('nombre')->getData();
            if(!$this->validarNombreRepetido($nombreProyecto)){
                $this->addFlash(
                'notice',
                'El nombre del proyecto ya fue registrado, por favor elija otro.'
                );
                return $this->redirect($this->generateUrl('mtd_proyecto_registro'));
            }else{
                $this->addFlash(
                    'notice',
                    'Se registro correctamente el proyecto'
                );

                $em = $this->getDoctrine()->getManager();
                $em->persist($proyecto);             
                $em->flush();

                return $this->redirect($this->generateUrl('mtd_lista_proyecto'));
            }
        }
        
        return $this->render('MTDContratacionEmpleadosBundle:Proyecto:registro.html.twig', array("form"=>$form->createView(), "formularioCliente"=>$formularioCliente->createView(), "formularioTipoProyecto"=>$formularioTipoProyecto->createView()));
    }
    
    public function validarNombreRepetido($nombre){
        $res = false;
        $em = $this->getDoctrine()->getEntityManager();
        $nombreRegistrado = $em->getRepository('MTDContratacionEmpleadosBundle:Proyecto')->findByNombre($nombre);
        if(!$nombreRegistrado){
            $res = true;
        }
        return $res;
    }
}

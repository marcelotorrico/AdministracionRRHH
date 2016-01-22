<?php

namespace MTD\ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\ProyectoBundle\Entity\Proyecto;
use MTD\ProyectoBundle\Form\ProyectoType;
use MTD\ProyectoBundle\Entity\Cliente;
use MTD\ProyectoBundle\Form\ClienteType;
use MTD\ProyectoBundle\Entity\Tipo_Proyecto;
use MTD\ProyectoBundle\Form\Tipo_ProyectoType;
use MTD\ProyectoBundle\Entity\Lugar;
use MTD\ProyectoBundle\Form\LugarType;
use Symfony\Component\HttpFoundation\Request;

class RegistroProyectoController extends Controller
{
    
    public function registroAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $proyectos = $em->getRepository('MTDProyectoBundle:Proyecto')->findAll();
        
        $proyecto = new Proyecto();
        $form = $this->createForm(new ProyectoType(),$proyecto);
        $form->handleRequest($request);
        
        $cliente = new Cliente();
        $formularioCliente = $this->createForm(new ClienteType(),$cliente);
        $formularioCliente->handleRequest($request);
        
        $tipoProyecto = new Tipo_Proyecto();
        $formularioTipoProyecto = $this->createForm(new Tipo_ProyectoType(),$tipoProyecto);
        $formularioTipoProyecto->handleRequest($request);
        
        $lugar = new Lugar();
        $formularioLugar = $this->createForm(new LugarType(), $lugar);
        $formularioLugar->handleRequest($request);
        
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
                    'El proyecto fue registrado correctamente'
                );

                $proyecto->setActivo("true");
                
                $em->persist($proyecto);             
                $em->flush();

                $idProyecto = $proyecto->getId();
                
                return $this->redirect($this->generateUrl('mtd_mostrar_proyecto', array('id'=> $idProyecto, true)));   
            }
        }
        
        return $this->render('MTDProyectoBundle:Proyecto:registro.html.twig', array("form"=>$form->createView(), "formularioCliente"=>$formularioCliente->createView(), "formularioTipoProyecto"=>$formularioTipoProyecto->createView(), "formularioLugar"=>$formularioLugar->createView(),'proyectos' => $proyectos));
    }
    
    public function validarNombreRepetido($nombre){
        $res = false;
        $em = $this->getDoctrine()->getEntityManager();
        $nombreRegistrado = $em->getRepository('MTDProyectoBundle:Proyecto')->findBy(array(
                                                                                            'nombre' => $nombre,
                                                                                            'activo' => 'true'
                                                                                            ));
        if(!$nombreRegistrado){
            $res = true;
        }
        return $res;
    }
}

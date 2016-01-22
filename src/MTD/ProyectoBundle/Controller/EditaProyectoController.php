<?php

namespace MTD\ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\ProyectoBundle\Entity\Proyecto;
use MTD\ProyectoBundle\Form\ProyectoEditarType;
use MTD\ProyectoBundle\Entity\Cliente;
use MTD\ProyectoBundle\Form\ClienteType;
use MTD\ProyectoBundle\Entity\Tipo_Proyecto;
use MTD\ProyectoBundle\Form\Tipo_ProyectoType;
use MTD\ProyectoBundle\Entity\Lugar;
use MTD\ProyectoBundle\Form\LugarType;
use Symfony\Component\HttpFoundation\Request;

class EditaProyectoController extends Controller
{
    
    public function editarAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $proyectoSeleccionado = $em->getRepository('MTDProyectoBundle:Proyecto')->find($id);
        $proyectos = $em->getRepository('MTDProyectoBundle:Proyecto')->findAll();
        
        $idCliente = $proyectoSeleccionado->getCliente()->getId();
        $idTipoProyecto = $proyectoSeleccionado->getTipoProyecto()->getId();
        $idlugar = $proyectoSeleccionado->getLugar()->getId();
        $nombreActual = $proyectoSeleccionado->getNombre();
        
        $proyecto = new Proyecto();
        $form = $this->createForm(new ProyectoEditarType($em, $idCliente, $idTipoProyecto, $idlugar),$proyecto);
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
            if(!$this->validarNombreRepetido($nombreProyecto, $nombreActual)){
                $this->addFlash(
                'notice',
                'El nombre del proyecto ya fue registrado, por favor elija otro.'
                );
                return $this->redirect($this->generateUrl('mtd_editar_proyecto', array('id'=> $id, true)));
            }else{
                $this->addFlash(
                    'notice',
                    'El proyecto fue actualizado correctamente'
                );
                $monto = $form->get('montoContrato')->getData();
                $plazoEntrega = $form->get('plazoEntrega')->getData();
                $lugar = $form->get('lugar')->getData();
                $clienteProyecto = $form->get('cliente')->getData();
                $tipo = $form->get('tipo_proyecto')->getData();
                $idProyecto = $proyectoSeleccionado->getId();
                
                $proyectoSeleccionado->setNombre($nombreProyecto);
                $proyectoSeleccionado->setMontoContrato($monto);
                $proyectoSeleccionado->setPlazoEntrega($plazoEntrega);
                $proyectoSeleccionado->setLugar($lugar);
                $proyectoSeleccionado->setCliente($clienteProyecto);
                $proyectoSeleccionado->setTipoProyecto($tipo);
                $proyectoSeleccionado->setActivo("true");
                
                $em->persist($proyectoSeleccionado);             
                $em->flush();

                return $this->redirect($this->generateUrl('mtd_mostrar_proyecto', array('id'=> $idProyecto, true)));
            }
        }
        
        return $this->render('MTDProyectoBundle:Proyecto:edita.html.twig', array("proyectoSeleccionado"=>$proyectoSeleccionado,"form"=>$form->createView(), "formularioCliente"=>$formularioCliente->createView(), "formularioTipoProyecto"=>$formularioTipoProyecto->createView(), "formularioLugar"=>$formularioLugar->createView(), 'proyectos' => $proyectos));
    }
    
    public function validarNombreRepetido($nombre, $nombreActual){
        $res = false;
        $em = $this->getDoctrine()->getEntityManager();
        $nombreRegistrado = $em->getRepository('MTDProyectoBundle:Proyecto')->findBy(array(
                                                                                            'nombre' => $nombre,
                                                                                            'activo' => 'true'
                                                                                            ));
        if(!$nombreRegistrado || $nombre == $nombreActual){
            $res = true;
        }
        return $res;
    }
}

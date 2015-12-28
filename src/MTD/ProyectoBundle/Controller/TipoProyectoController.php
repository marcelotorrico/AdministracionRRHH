<?php

namespace MTD\ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\ProyectoBundle\Entity\Tipo_Proyecto;
use MTD\ProyectoBundle\Form\Tipo_ProyectoType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TipoProyectoController extends Controller
{
    
    public function registroTipoProyectoAction(Request $request)
    {
        $tipoProyecto = new Tipo_Proyecto();
        $formularioTipoProyecto = $this->createForm(new Tipo_ProyectoType(),$tipoProyecto);
        $formularioTipoProyecto->handleRequest($request);
        
        if($request->isXmlHttpRequest()){
            $data = $formularioTipoProyecto->getData();

            $nombreTipo = $formularioTipoProyecto->get('nombre')->getData();
            if(!$this->validarNombreRepetido($nombreTipo)){
                return new Response('1');
            }else{
                $em = $this->getDoctrine()->getManager();
                $em->persist($data);             
                $em->flush();

                return $this->redirect($this->generateUrl('mtd_proyecto_registro'));
            }
        }
    }
    
    public function validarNombreRepetido($nombre){
        $res = false;
        $em = $this->getDoctrine()->getEntityManager();
        $nombreRegistrado = $em->getRepository('MTDProyectoBundle:Tipo_Proyecto')->findByNombre($nombre);
        if(!$nombreRegistrado){
            $res = true;
        }
        return $res;
    }
}

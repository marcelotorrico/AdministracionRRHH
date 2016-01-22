<?php

namespace MTD\ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\ProyectoBundle\Entity\Lugar;
use MTD\ProyectoBundle\Form\LugarType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LugarController extends Controller
{
    
    public function registrarAction(Request $request)
    {
        $lugar = new Lugar();
        $formularioLugar = $this->createForm(new LugarType(), $lugar);
        $formularioLugar->handleRequest($request);
        
        if($request->isXmlHttpRequest()){
            $data = $formularioLugar->getData();

            $nombreLugar = $formularioLugar->get('nombre')->getData();
            if(!$this->validarNombreRepetido($nombreLugar)){
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
        $nombreRegistrado = $em->getRepository('MTDProyectoBundle:Lugar')->findByNombre($nombre);
        if(!$nombreRegistrado){
            $res = true;
        }
        return $res;
    }
}
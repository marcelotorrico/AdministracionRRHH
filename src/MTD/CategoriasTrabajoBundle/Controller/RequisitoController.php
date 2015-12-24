<?php

namespace MTD\CategoriasTrabajoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\CategoriasTrabajoBundle\Entity\Requisito_Categoria;
use MTD\CategoriasTrabajoBundle\Form\Requisito_CategoriaType;
use Symfony\Component\HttpFoundation\Request;

class RequisitoController extends Controller
{
    
    public function registroAction(Request $request)
    {
        $requisitoCategoria = new Requisito_Categoria();
        $form = $this->createForm(new Requisito_CategoriaType(),$requisitoCategoria);
        $form->handleRequest($request);
        
        if($request->isXmlHttpRequest()){
            $data = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($data);             
            $em->flush();

            return $this->redirect($this->generateUrl('mtd_requisito_crear'));
        }
    }
}
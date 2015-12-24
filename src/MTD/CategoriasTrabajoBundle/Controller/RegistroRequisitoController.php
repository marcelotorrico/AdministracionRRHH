<?php

namespace MTD\CategoriasTrabajoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\CategoriasTrabajoBundle\Entity\Requisito_Categoria;
use MTD\CategoriasTrabajoBundle\Form\Requisito_CategoriaType;
use Symfony\Component\HttpFoundation\Request;

class RegistroRequisitoController extends Controller
{
    
    public function registroAction(Request $request)
    {
        $requisitoCategoria = new Requisito_Categoria();
        $form = $this->createForm(new Requisito_CategoriaType(),$requisitoCategoria);
        $form->handleRequest($request);
        
        $em = $this->getDoctrine()->getManager();
        $requisitos = $em->getRepository('MTDCategoriasTrabajoBundle:Requisito_Categoria')->findAll();
        $categorias = $em->getRepository('MTDCategoriasTrabajoBundle:Categoria')->findAll();
        
        return $this->render('MTDCategoriasTrabajoBundle:Categoria:requisito.html.twig', array("form"=>$form->createView(),'requisitos' => $requisitos,'categorias' => $categorias));
    }
}
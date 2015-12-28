<?php

namespace MTD\CategoriasTrabajoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ListaCategoriaController extends Controller
{
    
    public function listarAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $categorias = $em->getRepository('MTDCategoriasTrabajoBundle:Categoria')->findAll();
        
        return $this->render('MTDCategoriasTrabajoBundle:Categoria:lista.html.twig', array('categorias' => $categorias));
    }
    
}

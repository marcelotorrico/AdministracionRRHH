<?php

namespace MTD\ProyectoBundle\Controller;

use MTD\ProyectoBundle\Entity\Proyecto;
use MTD\ProyectoBundle\Form\CategoriaSeleccionType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CategoriaProyectoController extends Controller
{
    
    public function listarAction(Request $request, $id)
    {
        
        $em = $this->getDoctrine()->getManager();
        $proyectoSeleccionado = $em->getRepository('MTDProyectoBundle:Proyecto')->find($id);
        $categorias = $proyectoSeleccionado->getCategoria();
        $requisitos = $em->getRepository('MTDCategoriasTrabajoBundle:Requisito_Categoria')->findAll();
        
        $proyecto = new Proyecto();
        $form = $this->createForm(new CategoriaSeleccionType($categorias),$proyecto);
        $form->handleRequest($request);
        
        if($form->isValid()){
            
            $this->addFlash(
                'notice',
                'La categoria fue agregada correctamente'
            );
            $idCategoria = $this->get('request')->request->get('categoria');
            $categoria = $em->getRepository('MTDCategoriasTrabajoBundle:Categoria')->find($idCategoria);

            $proyectoSeleccionado->getCategoria()->add($categoria);

            $em->persist($proyectoSeleccionado);             
            $em->flush();

            return $this->redirect($this->generateUrl('mtd_categorias_proyecto', array('id'=> $id, true)));
            
        }
        
        return $this->render('MTDProyectoBundle:Proyecto:categorias.html.twig', array('proyectoSeleccionado' => $proyectoSeleccionado, "form"=>$form->createView(), "categorias"=>$categorias, "requisitos"=>$requisitos));
    }
    
}
<?php

namespace MTD\CategoriasTrabajoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\CategoriasTrabajoBundle\Entity\Categoria;
use MTD\CategoriasTrabajoBundle\Form\CategoriaType;
use Symfony\Component\HttpFoundation\Request;

class RegistroCategoriaController extends Controller
{
    
    public function registroAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $proyectos = $em->getRepository('MTDProyectoBundle:Proyecto')->findAll();
        
        $categoria = new Categoria();
        $form = $this->createForm(new CategoriaType(),$categoria);
        $form->handleRequest($request);
        
        if($form->isValid()){
            $nombreCategoria = $form->get('nombre')->getData();
            if(!$this->validarNombreRepetido($nombreCategoria)){
                $this->addFlash(
                'notice',
                'El nombre de la categoria ya fue registrado, por favor elija otro.'
                );
                return $this->redirect($this->generateUrl('mtd_categoria_crear'));
            }else{
                $this->addFlash(
                    'notice',
                    'La categoria fue registrada correctamente'
                );

                $categoria->setActivo("true");
                
                $em->persist($categoria);
                $em->flush();

                return $this->redirect($this->generateUrl('mtd_categoria_lista'));
            }
        }
        
        return $this->render('MTDCategoriasTrabajoBundle:Categoria:registro.html.twig', array("form"=>$form->createView(), 'proyectos' => $proyectos));
    }
    
    public function validarNombreRepetido($nombre){
        $res = false;
        $em = $this->getDoctrine()->getEntityManager();
        $nombreRegistrado = $em->getRepository('MTDCategoriasTrabajoBundle:Categoria')->findBy(array(
                                                                                            'nombre' => $nombre,
                                                                                            'activo' => 'true'
                                                                                            ));
        if(!$nombreRegistrado){
            $res = true;
        }
        return $res;
    }
}
<?php

namespace MTD\CategoriasTrabajoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\CategoriasTrabajoBundle\Entity\Categoria;
use MTD\CategoriasTrabajoBundle\Form\CategoriaEditarType;
use Symfony\Component\HttpFoundation\Request;

class EditaCategoriaController extends Controller
{
    
    public function editarAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $categoriaSeleccionada = $em->getRepository('MTDCategoriasTrabajoBundle:Categoria')->find($id);
        
        $nombreActual = $categoriaSeleccionada->getNombre();
        
        $categoria = new Categoria();
        $form = $this->createForm(new CategoriaEditarType(),$categoria);
        $form->handleRequest($request);
        
        if($form->isValid()){
            $nombreCategoria = $form->get('nombre')->getData();
            if(!$this->validarNombreRepetido($nombreCategoria, $nombreActual)){
                $this->addFlash(
                'notice',
                'El nombre de la categoria ya fue registrado, por favor elija otro.'
                );
                return $this->redirect($this->generateUrl('mtd_categoria_editar', array('id'=> $id, true)));
            }else{
                $this->addFlash(
                    'notice',
                    'La categoria fue actualizada correctamente'
                );
                $sueldoBasico = $form->get('sueldoBasico')->getData();
                $viatico = $form->get('viatico')->getData();
                $premio = $form->get('premio')->getData();
                $total = $form->get('total')->getData();
                
                $categoriaSeleccionada->setNombre($nombreCategoria);
                $categoriaSeleccionada->setSueldoBasico($sueldoBasico);
                $categoriaSeleccionada->setViatico($viatico);
                $categoriaSeleccionada->setPremio($premio);
                $categoriaSeleccionada->setTotal($total);
                
                $em->persist($categoriaSeleccionada);             
                $em->flush();

                return $this->redirect($this->generateUrl('mtd_categoria_lista'));
            }
        }
        
        return $this->render('MTDCategoriasTrabajoBundle:Categoria:editaCategoria.html.twig', array("categoriaSeleccionada"=>$categoriaSeleccionada,"form"=>$form->createView()));
    }
    
    public function validarNombreRepetido($nombre, $nombreActual){
        $res = false;
        $em = $this->getDoctrine()->getEntityManager();
        $nombreRegistrado = $em->getRepository('MTDCategoriasTrabajoBundle:Categoria')->findBy(array(
                                                                                            'nombre' => $nombre,
                                                                                            'activo' => 'true'
                                                                                            ));
        if(!$nombreRegistrado || $nombre == $nombreActual){
            $res = true;
        }
        return $res;
    }
}

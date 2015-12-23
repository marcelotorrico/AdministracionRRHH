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
        $categoria = new Categoria();
        $form = $this->createForm(new CategoriaType(),$categoria);
        $form->handleRequest($request);
        
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
                    'Se registro correctamente el proyecto'
                );

                $proyecto->setActivo("true");
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($proyecto);             
                $em->flush();

                return $this->redirect($this->generateUrl('mtd_lista_proyecto'));
            }
        }
        
        return $this->render('MTDCategoriasTrabajoBundle:Categoria:registro.html.twig', array("form"=>$form->createView()));
    }
    
    public function validarNombreRepetido($nombre){
        $res = false;
        $em = $this->getDoctrine()->getEntityManager();
        $nombreRegistrado = $em->getRepository('MTDContratacionEmpleadosBundle:Proyecto')->findBy(array(
                                                                                            'nombre' => $nombre,
                                                                                            'activo' => 'true'
                                                                                            ));
        if(!$nombreRegistrado){
            $res = true;
        }
        return $res;
    }
}

<?php

namespace MTD\ContratacionEmpleadosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\ContratacionEmpleadosBundle\Entity\Proyecto;
use MTD\ContratacionEmpleadosBundle\Form\ProyectoType;
use Symfony\Component\HttpFoundation\Request;

class RegistroProyectoController extends Controller
{
    
    public function registroAction(Request $request)
    {
        $proyecto = new Proyecto();
        $form = $this->createForm(new ProyectoType(),$proyecto);
        $form->handleRequest($request);
        
        if($form->isValid()){
            /*$usuario = $form->get('usuario')->getData();
            $correo = $form->get('correo')->getData();
            if(!$this->validarUsuariosRepetidos($usuario, $correo)){
                $this->addFlash(
                'notice',
                'El usuario ya fue registrado'
                );
                return $this->redirect($this->generateUrl('mtd_registro'));
            }else{
                $this->addFlash(
                    'notice',
                    'Se registro correctamente el usuario'
                );*/
                //$plainPassword = 'ryanpass';
                //$encoder = $this->container->get('security.password_encoder');
                //$encoded = $encoder->encodePassword($estudiante, $plainPassword);

                //$estudiante->setContrasena($encoded);
                
                $em = $this->getDoctrine()->getManager();
                
                $em->persist($proyecto);
                //$em->persist($rol);             
                $em->flush();
               
                return $this->redirect($this->generateUrl('mtd_proyecto_registro'));
            //}
        }
        
        return $this->render('MTDContratacionEmpleadosBundle:Proyecto:registro.html.twig', array("form"=>$form->createView()));
    }
}

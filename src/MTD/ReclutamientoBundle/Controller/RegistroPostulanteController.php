<?php

namespace MTD\ReclutamientoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\ReclutamientoBundle\Entity\Empleado;
use MTD\ReclutamientoBundle\Form\EmpleadoType;
use Symfony\Component\HttpFoundation\Request;

class RegistroPostulanteController extends Controller
{
    
    public function registroAction(Request $request)
    {
        $empleado = new Empleado();
        $form = $this->createForm(new EmpleadoType(),$empleado);
        $form->handleRequest($request);
        
        if($form->isValid()){
            $ci = $form->get('cedulaIdentidad')->getData();
            if(!$this->validarNombreRepetido($ci)){
                $this->addFlash(
                'notice',
                'El empleado ya fue registrado en la empresa, por favor verifique los datos.'
                );
                return $this->redirect($this->generateUrl('mtd_postulante_registro'));
            }else{
                $this->addFlash(
                    'notice',
                    'El empleado fue registrado correctamente'
                );

                $empleado->setActivo("true");
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($empleado);
                $em->flush();

                return $this->redirect($this->generateUrl('mtd_postulante_registro'));
            }
        }
        
        return $this->render('MTDReclutamientoBundle:Reclutamiento:registro.html.twig', array("form"=>$form->createView()));
    }
    
    public function validarNombreRepetido($ci){
        $res = false;
        $em = $this->getDoctrine()->getEntityManager();
        $ciRegistrado = $em->getRepository('MTDReclutamientoBundle:Empleado')->findBy(array(
                                                                                            'cedulaIdentidad' => $ci,
                                                                                            'activo' => 'true'
                                                                                            ));
        if(!$ciRegistrado){
            $res = true;
        }
        return $res;
    }
}
<?php

namespace MTD\ReclutamientoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\ReclutamientoBundle\Entity\Empleado;
use MTD\ReclutamientoBundle\Form\EmpleadoType;
use MTD\ProyectoBundle\Entity\Lugar;
use MTD\ProyectoBundle\Form\LugarType;
use Symfony\Component\HttpFoundation\Request;

class RegistroPostulanteController extends Controller
{
    
    public function registrarAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $proyectos = $em->getRepository('MTDProyectoBundle:Proyecto')->findAll();
        
        $empleado = new Empleado();
        $form = $this->createForm(new EmpleadoType(),$empleado);
        $form->handleRequest($request);
        
        $lugar = new Lugar();
        $formularioLugar = $this->createForm(new LugarType(), $lugar);
        $formularioLugar->handleRequest($request);
        
        if($form->isValid()){
            $ci = $form->get('cedulaIdentidad')->getData();
            if(!$this->validarNombreRepetido($ci)){
                $this->addFlash(
                'notice',
                'El postulante ya fue registrado en la empresa, por favor verifique los datos.'
                );
                return $this->redirect($this->generateUrl('mtd_postulante_registro'));
            }else{
                $this->addFlash(
                    'notice',
                    'El postulante fue registrado correctamente'
                );

                $empleado->setActivo("true");
                $empleado->setContratado("false");
                $empleado->setOperativo("true");
                
                $em->persist($empleado);
                $em->flush();
                
                $postulante = $em->getRepository('MTDReclutamientoBundle:Empleado')->findOneBy(array('cedulaIdentidad' => $ci));
                $idPostulante = $postulante->getId();

                return $this->redirect($this->generateUrl('mtd_postulante_requisito', array('id'=> $idPostulante, true)));
            }
        }
        
        return $this->render('MTDReclutamientoBundle:Reclutamiento:registro.html.twig', array("form"=>$form->createView(), 'proyectos' => $proyectos, "formularioLugar"=>$formularioLugar->createView()));
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
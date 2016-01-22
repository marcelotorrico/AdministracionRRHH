<?php

namespace MTD\ReclutamientoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\ReclutamientoBundle\Entity\Empleado;
use MTD\ReclutamientoBundle\Form\EmpleadoEditarType;
use MTD\ProyectoBundle\Entity\Lugar;
use MTD\ProyectoBundle\Form\LugarType;
use Symfony\Component\HttpFoundation\Request;

class EditaPostulanteController extends Controller
{
    
    public function editarAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $postulante = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        
        $ciActual = $postulante->getCedulaIdentidad();
        $estadoCivilActual = $postulante->getEstadoCivil();
        $otrosCursosActual = $postulante->getOtrosCursos();
        $trabajosAnterioresActual = $postulante->getTrabajosAnteriores();
        $idlugar = $postulante->getLugar()->getId();
        
        $empleado = new Empleado();
        $form = $this->createForm(new EmpleadoEditarType($em, $estadoCivilActual, $otrosCursosActual, $trabajosAnterioresActual, $idlugar),$empleado);
        $form->handleRequest($request);
        
        $lugar = new Lugar();
        $formularioLugar = $this->createForm(new LugarType(), $lugar);
        $formularioLugar->handleRequest($request);
        
        if($form->isValid()){
            $cedulaIdentidad = $form->get('cedulaIdentidad')->getData();
            if(!$this->validarCiRepetido($cedulaIdentidad, $ciActual)){
                $this->addFlash(
                'notice',
                'El carnet de identidad ya fue registrado antes. Por favor verifique los datos.'
                );
                return $this->redirect($this->generateUrl('mtd_postulante_editar', array('id'=> $id, true)));
            }else{
                $nombre = $form->get('nombre')->getData();
                $apellido = $form->get('apellido')->getData();
                $fechaNacimiento = $form->get('fechaNacimiento')->getData();
                $lugar = $form->get('lugar')->getData();
                $estadoCivil = $form->get('estadoCivil')->getData();
                $dependientes = $form->get('dependientes')->getData();
                $direccion = $form->get('direccion')->getData();
                $zona = $form->get('zona')->getData();
                $telefonoParticular = $form->get('telefonoParticular')->getData();
                $telefonoMovil = $form->get('telefonoMovil')->getData();
                $gradoEscolaridad = $form->get('gradoEscolaridad')->getData();
                $profesion = $form->get('profesion')->getData();
                $otrosCursos = $form->get('otrosCursos')->getData();
                $trabajosAnteriores = $form->get('trabajosAnteriores')->getData();
                
                $postulante->setNombre($nombre);
                $postulante->setApellido($apellido);
                $postulante->setFechaNacimiento($fechaNacimiento);
                $postulante->setLugar($lugar);
                $postulante->setEstadoCivil($estadoCivil);
                $postulante->setDependientes($dependientes);
                $postulante->setCedulaIdentidad($cedulaIdentidad);
                $postulante->setDireccion($direccion);
                $postulante->setZona($zona);
                $postulante->setTelefonoParticular($telefonoParticular);
                $postulante->setTelefonoMovil($telefonoMovil);
                $postulante->setGradoEscolaridad($gradoEscolaridad);
                $postulante->setProfesion($profesion);
                $postulante->setOtrosCursos($otrosCursos);
                $postulante->setTrabajosAnteriores($trabajosAnteriores);
                $postulante->setActivo("true");
                
                $em->persist($postulante);
                $em->flush();

                if($postulante->getContratado()){
                    $this->addFlash(
                    'notice',
                    'El empleado fue actualizado correctamente'
                    );
                    return $this->redirect($this->generateUrl('mtd_empleado_ver', array('id'=> $id, true)));
                }else{
                    $this->addFlash(
                    'notice',
                    'El postulante fue actualizado correctamente'
                    );
                    return $this->redirect($this->generateUrl('mtd_postulante_ver', array('id'=> $id, true)));
                } 
            }
        }
        
        if($postulante->getContratado()){
            return $this->render('MTDSeleccionBundle:Seleccion:editaEmpleado.html.twig', array("empleado"=>$postulante,"form"=>$form->createView(), "formularioLugar"=>$formularioLugar->createView()));
        }else{
            return $this->render('MTDReclutamientoBundle:Reclutamiento:editaPostulante.html.twig', array("postulante"=>$postulante,"form"=>$form->createView(), "formularioLugar"=>$formularioLugar->createView()));
        }
    }
    
    public function validarCiRepetido($cedulaIdentidad, $ciActual){
        $res = false;
        $em = $this->getDoctrine()->getEntityManager();
        $ciRegistrado = $em->getRepository('MTDReclutamientoBundle:Empleado')->findBy(array(
                                                                                            'cedulaIdentidad' => $cedulaIdentidad,
                                                                                            'activo' => 'true'
                                                                                            ));
        if(!$ciRegistrado || $cedulaIdentidad == $ciActual){
            $res = true;
        }
        return $res;
    }
}

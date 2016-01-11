<?php

namespace MTD\ReclutamientoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\ReclutamientoBundle\Entity\Empleado;
use MTD\ReclutamientoBundle\Form\EmpleadoEditarType;
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
        
        $empleado = new Empleado();
        $form = $this->createForm(new EmpleadoEditarType($estadoCivilActual, $otrosCursosActual, $trabajosAnterioresActual),$empleado);
        $form->handleRequest($request);
        
        if($form->isValid()){
            $cedulaIdentidad = $form->get('cedulaIdentidad')->getData();
            if(!$this->validarCiRepetido($cedulaIdentidad, $ciActual)){
                $this->addFlash(
                'notice',
                'El carnet de identidad ya fue registrado antes. Por favor verifique los datos.'
                );
                return $this->redirect($this->generateUrl('mtd_postulante_editar', array('id'=> $id, true)));
            }else{
                $this->addFlash(
                    'notice',
                    'El postulante fue actualizado correctamente'
                );
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

                return $this->redirect($this->generateUrl('mtd_postulante_ver', array('id'=> $id, true)));
            }
        }
        
        return $this->render('MTDReclutamientoBundle:Reclutamiento:editaPostulante.html.twig', array("postulante"=>$postulante,"form"=>$form->createView()));
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
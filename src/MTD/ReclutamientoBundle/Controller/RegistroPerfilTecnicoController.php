<?php

namespace MTD\ReclutamientoBundle\Controller;

use MTD\ReclutamientoBundle\Entity\Empleado_Requisito;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RegistroPerfilTecnicoController extends Controller
{
    
    public function registrarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $requisitos = $this->get('request')->request->get('requisitos');
        $categoria = $this->get('request')->request->get('categoria');
        
        $postulante = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        $perfil = $postulante->getEmpleadoRequisito();
        if(!$perfil->isEmpty()){
            foreach($perfil  as $requisito){
                if($requisito->getActivo()){
                    $categoriaSeleccionada = $requisito->getRequisito()->getCategoria();
                    break;
                }
            }
            $idCategoriaActual = $categoriaSeleccionada->getId();
            if($categoria == $idCategoriaActual){
                foreach($perfil  as $requisito){
                    if($requisito->getActivo()){
                        $idRequisitoActual = $requisito->getRequisito()->getId();
                        $contador = 0;
                        foreach($requisitos  as $requisitoId){
                            if($idRequisitoActual == $requisitoId){
                                $contador++;
                            }
                        }
                        if($contador == 0){
                            $requisito->setActivo("FALSE");
                            $em->persist($requisito);
                            $em->flush();
                        }
                    }
                }
                foreach($requisitos  as $requisitoId){
                    $contador = 0;
                    foreach($perfil  as $requisito){
                        if(!$requisito->getActivo()){
                            $idRequisitoActual = $requisito->getRequisito()->getId();
                            if($idRequisitoActual == $requisitoId){
                                $requisito->setActivo("TRUE");

                                $em->persist($requisito);
                                $em->flush();
                            }
                        }
                        if($requisito->getActivo()){
                            $idRequisitoActual = $requisito->getRequisito()->getId();
                            if($idRequisitoActual == $requisitoId){
                                $contador++;
                            }
                        }
                    }
                    if($contador == 0){
                        $this->guardar($requisitoId, $em, $postulante);
                    }
                }
            }else{
                foreach($perfil  as $requisito){
                    if($requisito->getActivo()){
                        $requisito->setActivo("FALSE");
                        $em->persist($requisito);
                        $em->flush();
                    }
                }
                foreach($requisitos  as $requisitoId){
                    $contador = 0;
                    foreach($perfil  as $requisito){
                        if(!$requisito->getActivo()){
                            $idcategoriaSeleccionada = $requisito->getRequisito()->getCategoria()->getId();
                            $idRequisitoSeleccionado = $requisito->getRequisito()->getId();
                            if($categoria == $idcategoriaSeleccionada){
                                if($idRequisitoSeleccionado == $requisitoId){
                                    $contador++;
                                    $requisito->setActivo("TRUE");
                                    $em->persist($requisito);
                                    $em->flush();
                                }
                            }
                        }
                    }
                }
                if($contador == 0){
                    $this->guardar($requisitoId, $em, $postulante);
                }           
            }
            $this->addFlash(
            'notice',
            'El perfil tecnico del postulante fue actualizado correctamente'
            );
            return $this->redirect($this->generateUrl('mtd_perfil_tecnico_ver', array("id"=>$id)));
        }else{
            foreach($requisitos  as $requisitoId){
                $this->guardar($requisitoId, $em, $postulante);
            }
            $this->addFlash(
            'notice',
            'El perfil tecnico del postulante fue registrado correctamente'
            );
            return $this->redirect($this->generateUrl('mtd_perfil_tecnico_ver', array("id"=>$id)));
        }
    }
    
    public function guardar($requisitoId, $em, $postulante){
        $empleadoRequisito = new Empleado_Requisito();
        $requisito = $em->getRepository('MTDCategoriasTrabajoBundle:Requisito_Categoria')->find($requisitoId);

        $empleadoRequisito->setEmpleado($postulante);
        $empleadoRequisito->setRequisito($requisito);
        $empleadoRequisito->setActivo("TRUE");

        $em->persist($empleadoRequisito);
        $em->flush();
    }
}
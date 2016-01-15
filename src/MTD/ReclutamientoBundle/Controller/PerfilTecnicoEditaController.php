<?php

namespace MTD\ReclutamientoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PerfilTecnicoEditaController extends Controller
{
    
    public function editarAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $postulante = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        $perfil = $postulante->getEmpleadoRequisito();
        
        if(!$perfil->isEmpty()){
            $todasCategorias = $em->getRepository('MTDCategoriasTrabajoBundle:Categoria')->findAll();

            foreach($perfil  as $requisito) {
                $categoriaSeleccionada = $requisito->getRequisito()->getCategoria();
            }
            $requisitosCategoria = $categoriaSeleccionada->getRequisitoCategoria();

            if($postulante->getContratado()){
                return $this->render('MTDSeleccionBundle:Seleccion:edicionPerfil.html.twig', array("empleado"=>$postulante, "perfil"=>$perfil, "categoriaSeleccionada"=>$categoriaSeleccionada, "todasCategorias"=>$todasCategorias, "requisitosCategoria"=>$requisitosCategoria));
            }else{
                return $this->render('MTDReclutamientoBundle:Reclutamiento:editaPerfil.html.twig', array("postulante"=>$postulante, "perfil"=>$perfil, "categoriaSeleccionada"=>$categoriaSeleccionada, "todasCategorias"=>$todasCategorias, "requisitosCategoria"=>$requisitosCategoria));
            }
        }else{
            $idPostulante = $postulante->getId();
            return $this->redirect($this->generateUrl('mtd_postulante_requisito', array('id'=> $idPostulante, true)));
        }
    }
    
    public function mostrarRequisitosAction(Request $request, $id, $idEmpleado)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $postulante = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($idEmpleado);
        $requisitosEmpleado = $postulante->getEmpleadoRequisito();
        $requisitos = $em->getRepository('MTDCategoriasTrabajoBundle:Requisito_Categoria')->findByCategoria($id);
        
        return $this->render('MTDReclutamientoBundle:Reclutamiento:requisitosEditar.html.twig', array("requisitos"=>$requisitos, "requisitosEmpleado"=>$requisitosEmpleado));
    }
}
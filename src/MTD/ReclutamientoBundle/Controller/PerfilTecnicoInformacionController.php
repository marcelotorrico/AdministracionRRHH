<?php

namespace MTD\ReclutamientoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PerfilTecnicoInformacionController extends Controller
{
    
    public function mostrarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $postulante = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        $perfil = $postulante->getEmpleadoRequisito();
        
        if(!$perfil->isEmpty()){
            foreach($perfil  as $requisito) {
                $categoria = $requisito->getRequisito()->getCategoria();
            }

            return $this->render('MTDReclutamientoBundle:Reclutamiento:mostrarPerfil.html.twig', array("postulante"=>$postulante, "perfil"=>$perfil, "categoria"=>$categoria));
        }else{
            $idPostulante = $postulante->getId();
            return $this->redirect($this->generateUrl('mtd_postulante_requisito', array('id'=> $idPostulante, true)));
        }
    }
}
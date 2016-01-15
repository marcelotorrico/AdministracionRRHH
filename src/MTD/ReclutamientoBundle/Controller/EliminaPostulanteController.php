<?php

namespace MTD\ReclutamientoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EliminaPostulanteController extends Controller
{
    
    public function eliminarAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $postulante = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        
        if($postulante){

            $this->addFlash(
                'notice',
                'El postulante fue eliminado correctamente'
            );
                
            $postulante->setActivo("FALSE");
                
            $em->persist($postulante);             
            $em->flush();

            return $this->redirect($this->generateUrl('mtd_postulante_lista'));
        }
        
    }
}
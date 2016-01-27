<?php

namespace MTD\SeleccionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EliminaEmpleadoController extends Controller
{
    
    public function eliminarAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $postulante = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        
        if($postulante){

            $this->addFlash(
                'notice',
                'El empleado fue eliminado correctamente'
            );
                
            $postulante->setContratado("FALSE");
                
            $em->persist($postulante);             
            $em->flush();

            return $this->redirect($this->generateUrl('mtd_empleados_lista'));
        }
        
    }
}
<?php

namespace MTD\AsistenciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EliminaAsistenciaController extends Controller
{
    
    public function eliminarAction(Request $request, $id, $idEmpleado)
    {
        $em = $this->getDoctrine()->getManager();
        $asistencia = $em->getRepository('MTDAsistenciaBundle:Asistencia')->find($id);
        
        if($asistencia){

            $this->addFlash(
                'notice',
                'La asistencia fue eliminada correctamente'
            );
                
            $asistencia->setActivo("FALSE");
                
            $em->persist($asistencia);             
            $em->flush();

            return $this->redirect($this->generateUrl('mtd_asistencia_mostrar', array('id'=>$idEmpleado)));
            
        }
        
    }
}
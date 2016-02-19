<?php

namespace MTD\SeleccionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EliminaDocumentoController extends Controller
{
    
    public function eliminarAction(Request $request, $id, $idEmpleado)
    {
        $em = $this->getDoctrine()->getManager();
        $documento = $em->getRepository('MTDSeleccionBundle:Documento')->find($id);
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($idEmpleado);
        
        if($documento){

            $this->addFlash(
                'notice',
                'El documento fue eliminado correctamente'
            );
                
            $documento->setActivo("FALSE");
                
            $em->persist($documento);             
            $em->flush();

            return $this->redirect($this->generateUrl('mtd_empleado_listar_documentos', array('id'=> $idEmpleado, true)));
        }
        
    }
}
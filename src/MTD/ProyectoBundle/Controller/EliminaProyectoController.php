<?php

namespace MTD\ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EliminaProyectoController extends Controller
{
    
    public function eliminarAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $proyectoSeleccionado = $em->getRepository('MTDProyectoBundle:Proyecto')->find($id);
        
        if($proyectoSeleccionado){

            $this->addFlash(
                'notice',
                'El proyecto fue eliminado correctamente'
            );
                
            $proyectoSeleccionado->setActivo("FALSE");
                
            $em->persist($proyectoSeleccionado);             
            $em->flush();

            return $this->redirect($this->generateUrl('mtd_lista_proyecto'));
            
        }
        
    }
}

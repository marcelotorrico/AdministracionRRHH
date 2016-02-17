<?php

namespace MTD\ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProyectoTerminadoController extends Controller
{
    
    public function terminarAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $proyectoSeleccionado = $em->getRepository('MTDProyectoBundle:Proyecto')->find($id);
        
        if($proyectoSeleccionado){

            $this->addFlash(
                'notice',
                'El proyecto fue agregado a los proyectos terminados'
            );
                
            $proyectoSeleccionado->setTerminado("TRUE");
                
            $em->persist($proyectoSeleccionado);             
            $em->flush();

            return $this->redirect($this->generateUrl('mtd_lista_proyecto_terminados'));
            
        }
        
    }
}

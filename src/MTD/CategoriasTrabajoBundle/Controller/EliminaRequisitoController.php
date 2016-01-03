<?php

namespace MTD\CategoriasTrabajoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EliminaRequisitoController extends Controller
{
    
    public function eliminarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $requisitoSeleccionado = $em->getRepository('MTDCategoriasTrabajoBundle:Requisito_Categoria')->find($id);
        
        if($requisitoSeleccionado){

            $this->addFlash(
                'notice',
                'El requisito fue eliminado correctamente'
            );
                
            $requisitoSeleccionado->setActivo("FALSE");
                
            $em->persist($requisitoSeleccionado);
            $em->flush();

            return $this->redirect($this->generateUrl('mtd_requisito_crear'));
            
        }
        
    }
}

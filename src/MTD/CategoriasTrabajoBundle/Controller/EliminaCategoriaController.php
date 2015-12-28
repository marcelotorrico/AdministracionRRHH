<?php

namespace MTD\CategoriasTrabajoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EliminaCategoriaController extends Controller
{
    
    public function eliminarAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $categoriaSeleccionada = $em->getRepository('MTDCategoriasTrabajoBundle:Categoria')->find($id);
        
        if($categoriaSeleccionada){

            $this->addFlash(
                'notice',
                'La categoria fue eliminada correctamente'
            );
                
            $categoriaSeleccionada->setActivo("FALSE");
                
            $em->persist($categoriaSeleccionada);             
            $em->flush();

            return $this->redirect($this->generateUrl('mtd_categoria_lista'));
            
        }
        
    }
}

<?php

namespace MTD\ContratacionEmpleadosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\ContratacionEmpleadosBundle\Entity\Tipo_Proyecto;
use MTD\ContratacionEmpleadosBundle\Form\Tipo_ProyectoType;
use Symfony\Component\HttpFoundation\Request;

class TipoProyectoController extends Controller
{
    
    public function registroTipoProyectoAction(Request $request)
    {
        $tipoProyecto = new Tipo_Proyecto();
        $formularioTipoProyecto = $this->createForm(new Tipo_ProyectoType(),$tipoProyecto);
        $formularioTipoProyecto->handleRequest($request);
        
        if($request->isXmlHttpRequest()){
            $data = $formularioTipoProyecto->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($data);             
            $em->flush();

            return $this->redirect($this->generateUrl('mtd_proyecto_registro'));
        }
    }
}

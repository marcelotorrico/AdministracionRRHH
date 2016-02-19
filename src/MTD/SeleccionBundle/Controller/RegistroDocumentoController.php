<?php

namespace MTD\SeleccionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\SeleccionBundle\Entity\Documento;
use MTD\SeleccionBundle\Form\DocumentoType;
use Symfony\Component\HttpFoundation\Request;

class RegistroDocumentoController extends Controller
{
    
    public function registrarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        
        $documento = new Documento();
        $form = $this->createForm(new DocumentoType(), $documento);
        $form->handleRequest($request);
        
        if($form->isValid()){
           
            $this->addFlash(
                'notice',
                'El Documento fue guardado correctamente'
            );
            
            $archivo = $documento->getRuta();
            $nombreArchivo = md5(uniqid()).'.'.$archivo->guessExtension();
            $documentoDir = $this->container->getParameter('kernel.root_dir').'/../web/documentosEmpleado';
            $archivo->move($documentoDir, $nombreArchivo);
            $documento->setRuta($nombreArchivo);
            $documento->setEmpleado($empleado);
            $documento->setActivo("true");

            $em->persist($documento);
            $em->flush();

            return $this->redirect($this->generateUrl('mtd_empleado_listar_documentos', array('id'=> $id, true)));
        }
        
        return $this->render('MTDSeleccionBundle:Seleccion:registroDocumento.html.twig', array("form"=>$form->createView(), 'empleado' => $empleado));
    }
}
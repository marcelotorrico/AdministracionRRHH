<?php

namespace MTD\AsistenciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\AsistenciaBundle\Entity\Asistencia;
use MTD\AsistenciaBundle\Form\AsistenciaType;
use Symfony\Component\HttpFoundation\Request;

class RegistroAsistenciaController extends Controller
{
    
    public function registrarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        
        $asistencia = new Asistencia();
        $form = $this->createForm(new AsistenciaType(), $asistencia);
        $form->handleRequest($request);
        
        $proyectos = $empleado->getProyectoEmpleado();
        if($form->isValid()){
            
            $this->addFlash(
                'notice',
                'La asistencia fue registrada correctamente'
            );
           
            $horaIngresoManana = $form->get('horaIngresoManana')->getData();
            $horaSalidaManana  = $form->get('horaSalidaManana')->getData();
            //$horaSalidaManana  = strtotime($form->get('horaSalidaManana')->getData());
            
            $horaIngresoTarde  = $form->get('horaIngresoTarde')->getData();
            $horaSalidaTarde   = $form->get('horaSalidaTarde')->getData();

            $asistencia->setHoraIngresoManana(new \DateTime("@" .$horaIngresoManana));
            $asistencia->setHoraSalidaManana(new \DateTime("@" .$horaSalidaManana));
            $asistencia->setHoraIngresoTarde(new \DateTime("@" .$horaIngresoTarde));
            $asistencia->setHoraSalidaTarde(new \DateTime("@" .$horaSalidaTarde));
            
            $em->persist($asistencia);
            $em->flush();

            return $this->redirect($this->generateUrl('mtd_empleados_lista'));
        }
        
        return $this->render('MTDAsistenciaBundle:Asistencia:registro.html.twig', array("form"=>$form->createView(), 'empleado' => $empleado, 'proyectos' => $proyectos));
    }
}
<?php

namespace MTD\AsistenciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\AsistenciaBundle\Entity\Asistencia;
use MTD\AsistenciaBundle\Controller\RegistroAsistenciaAdministrativoController;
use MTD\AsistenciaBundle\Entity\Falta;
use Symfony\Component\HttpFoundation\Request;
use MTD\SueldosSalariosBundle\Controller\SueldosPrincipalController;

class RegistroInasistenciaController extends Controller
{
    
    public function mostrarAction(Request $request, $id)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        
        return $this->render('MTDAsistenciaBundle:Inasistencia:registroOperativo.html.twig', array('empleado' => $empleado));
    }
    
    public function registrarAction(Request $request, $id)
    {
        $registroAsistencia = new RegistroAsistenciaAdministrativoController();
        $em = $this->getDoctrine()->getManager();
        $asistencia = new Asistencia();
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        //utiliza en NAME!!
        $fecha = $this->get('request')->request->get('fecha');
        if(!$registroAsistencia->validarFecha(new \DateTime($fecha), $empleado)){
            $this->addFlash(
            'notice',
            'La fecha de la asistencia ya fue registrada. Por favor verifique los datos.'
            );
            return $this->redirect($this->generateUrl('mtd_inasistencia_operativo', array('id'=> $id, true)));
        }else{
            $falta = new Falta();
            
            $justificado = $this->get('request')->request->get('justificado');
            $motivos     = $this->get('request')->request->get('motivos');
            
            $asistencia->setFecha(new \DateTime($fecha));
            $asistencia->setActivo("TRUE");
            $asistencia->setEmpleado($empleado);
            $asistencia->setFeriado("FALSE");
            $em->persist($asistencia);
            
            $falta->setAsistencia($asistencia);
            $falta->setAviso($justificado);
            $falta->setMotivo($motivos);
            $em->persist($falta);
            
            $sueldosPrincipal = new SueldosPrincipalController();
            $sueldosPrincipal->modificarSueldos($em, $fecha, $empleado, "falta", $asistencia);
            
            $this->addFlash(
                'notice',
                'La inasistencia fue registrada correctamente'
            );
            
            $em->flush();

            return $this->redirect($this->generateUrl('mtd_asistencia_mostrar', array('id'=> $id, true)));
        }
    }
}
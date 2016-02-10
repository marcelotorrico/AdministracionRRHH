<?php

namespace MTD\AsistenciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\AsistenciaBundle\Entity\Asistencia;
use MTD\AsistenciaBundle\Entity\Asistencia_Proyecto;
use Symfony\Component\HttpFoundation\Request;

class RegistroAsistenciaController extends Controller
{
    
    public function mostrarAction(Request $request, $id)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        $proyectos = $empleado->getProyectoEmpleado();
        
        return $this->render('MTDAsistenciaBundle:Asistencia:registro.html.twig', array('empleado' => $empleado, 'proyectos' => $proyectos));
    }
    
    public function registrarAction(Request $request, $id)
    {
        
        $em = $this->getDoctrine()->getManager();
        $asistencia = new Asistencia();
        //utiliza en NAME!!
        $fecha              = $this->get('request')->request->get('fecha');
        $horaIngresoManana  = $this->get('request')->request->get('horaIngresoManana');
        $horaSalidaManana   = $this->get('request')->request->get('horaSalidaManana');
        $horaIngresoTarde   = $this->get('request')->request->get('horaIngresoTarde');
        $horaSalidaTarde    = $this->get('request')->request->get('horaSalidaTarde');
        $actividades        = $this->get('request')->request->get('actividades');
        $totalHorasNormales = $this->get('request')->request->get('totalHorasNormales');
        $totalHorasExtras   = $this->get('request')->request->get('totalHorasExtras');
        
        $asistencia->setFecha(new \DateTime($fecha));
        $asistencia->setHoraIngresoManana(new \DateTime($horaIngresoManana));
        $asistencia->setHoraSalidaManana(new \DateTime($horaSalidaManana));
        $asistencia->setHoraIngresoTarde(new \DateTime($horaIngresoTarde));
        $asistencia->setHoraSalidaTarde(new \DateTime($horaSalidaTarde));
        $asistencia->setActividad($actividades);
        $asistencia->setTotalHorasNormales($totalHorasNormales);
        $asistencia->setTotalHorasExtras($totalHorasExtras);
        
        $em->persist($asistencia);
        
        $idProyectoEmpleado = $this->get('request')->request->get('proyecto');
        $horasNormales      = $this->get('request')->request->get('horasNormales');
        $horasExtras        = $this->get('request')->request->get('horasExtras');
        $this->guardar($em, $horasNormales, $horasExtras, $idProyectoEmpleado, $asistencia);
        
        $idProyectoEmpleado1 = $this->get('request')->request->get('proyecto1');
        $horasNormales1      = $this->get('request')->request->get('horasNormales1');
        $horasExtras1        = $this->get('request')->request->get('horasExtras1');
        $this->guardar($em, $horasNormales1, $horasExtras1, $idProyectoEmpleado1, $asistencia);

        $idProyectoEmpleado2 = $this->get('request')->request->get('proyecto2');
        $horasNormales2      = $this->get('request')->request->get('horasNormales2');
        $horasExtras2        = $this->get('request')->request->get('horasExtras2');
        $this->guardar($em, $horasNormales2, $horasExtras2, $idProyectoEmpleado2, $asistencia);

        $idProyectoEmpleado3 = $this->get('request')->request->get('proyecto3');
        $horasNormales3      = $this->get('request')->request->get('horasNormales3');
        $horasExtras3        = $this->get('request')->request->get('horasExtras3');
        $this->guardar($em, $horasNormales3, $horasExtras3, $idProyectoEmpleado3, $asistencia);
        
        $idProyectoEmpleado4 = $this->get('request')->request->get('proyecto4');
        $horasNormales4      = $this->get('request')->request->get('horasNormales4');
        $horasExtras4        = $this->get('request')->request->get('horasExtras4');
        $this->guardar($em, $horasNormales4, $horasExtras4, $idProyectoEmpleado4, $asistencia);

        $idProyectoEmpleado5 = $this->get('request')->request->get('proyecto5');
        $horasNormales5      = $this->get('request')->request->get('horasNormales5');
        $horasExtras5        = $this->get('request')->request->get('horasExtras5');
        $this->guardar($em, $horasNormales5, $horasExtras5, $idProyectoEmpleado5, $asistencia);
        
        $this->addFlash(
            'notice',
            'La asistencia fue registrada correctamente'
        );
        
        $em->flush();

        return $this->redirect($this->generateUrl('mtd_empleados_lista'));     
    }
    
    public function guardar($em, $horasNormales, $horasExtras, $idProyectoEmpleado, $asistencia){
        
        if($idProyectoEmpleado != null ){
            $proyectoEmpleado = $em->getRepository('MTDSeleccionBundle:Proyecto_Empleado')->find($idProyectoEmpleado);
            $asistenciaProyecto = new Asistencia_Proyecto();
            $asistenciaProyecto->setHorasNormales($horasNormales);
            $asistenciaProyecto->setHorasExtras($horasExtras);
            $asistenciaProyecto->setProyectoEmpleado($proyectoEmpleado);
            $asistenciaProyecto->setAsistencia($asistencia);

            $em->persist($asistenciaProyecto);
        }
    }
}
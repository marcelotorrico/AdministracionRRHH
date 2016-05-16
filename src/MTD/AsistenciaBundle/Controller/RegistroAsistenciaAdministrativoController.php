<?php

namespace MTD\AsistenciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\AsistenciaBundle\Entity\Asistencia;
use Symfony\Component\HttpFoundation\Request;
use MTD\SueldosSalariosBundle\Controller\SueldosPrincipalController;
use MTD\SueldosSalariosBundle\Controller\CalculosSueldosController;

class RegistroAsistenciaAdministrativoController extends Controller
{
    
    public function mostrarAction(Request $request, $id)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        $conf = $em->getRepository('MTDAsistenciaBundle:Configuracion')->findOneBy(array('activo'=>'TRUE'));
        
        return $this->render('MTDAsistenciaBundle:Asistencia:registroAdministrativo.html.twig', array('empleado' => $empleado, "conf"=> $conf));
    }
    
    public function registrarAction(Request $request, $id)
    {
        
        $em = $this->getDoctrine()->getManager();
        $asistencia = new Asistencia();
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        //utiliza en NAME!!
        $fecha              = $this->get('request')->request->get('fecha');
        if(!$this->validarFecha(new \DateTime($fecha), $empleado)){
            $this->addFlash(
            'notice',
            'La fecha de la asistencia ya fue registrada. Por favor verifique los datos.'
            );
            return $this->redirect($this->generateUrl('mtd_asistencia_empleado_administrativo', array('id'=> $id, true)));
        }else{
            if(!$asistenciaAdministrativo->validarFechaIngreso(new \DateTime($fecha), $empleado)){
                $this->addFlash(
                'notice',
                'La fecha de la asistencia es posterior a la fecha de ingreso. Por favor verifique los datos.'
                );
                return $this->redirect($this->generateUrl('mtd_asistencia_empleado', array('id'=> $id, true)));
            }else{
                $horaIngresoManana  = $this->get('request')->request->get('horaIngresoManana');
                $horaSalidaManana   = $this->get('request')->request->get('horaSalidaManana');
                $horaIngresoTarde   = $this->get('request')->request->get('horaIngresoTarde');
                $horaSalidaTarde    = $this->get('request')->request->get('horaSalidaTarde');
                $actividades        = $this->get('request')->request->get('actividades');
                $totalHorasNormales = $this->get('request')->request->get('horasNormales');
                $totalHorasExtras   = $this->get('request')->request->get('horasExtras');

                $asistencia->setFecha(new \DateTime($fecha));
                $asistencia->setHoraIngresoManana(new \DateTime($horaIngresoManana));
                $asistencia->setHoraSalidaManana(new \DateTime($horaSalidaManana));
                $asistencia->setHoraIngresoTarde(new \DateTime($horaIngresoTarde));
                $asistencia->setHoraSalidaTarde(new \DateTime($horaSalidaTarde));
                $asistencia->setActividad($actividades);
                if($totalHorasNormales){
                    $asistencia->setTotalHorasNormales($totalHorasNormales);
                }else{
                    $asistencia->setTotalHorasNormales(0);
                }
                if($totalHorasExtras){
                    $asistencia->setTotalHorasExtras($totalHorasExtras);
                }else{
                    $asistencia->setTotalHorasExtras(0);
                }
                $asistencia->setActivo("TRUE");
                $asistencia->setEmpleado($empleado);
                $asistencia->setFeriado("FALSE");
                
                $calculoSueldos = new CalculosSueldosController();
                $psgh = $calculoSueldos->getPsgh($em, "asistencia", $asistencia);
                $asistencia->setPsgh($psgh);
                $em->persist($asistencia);
                $sueldosPrincipal = new SueldosPrincipalController();
                $sueldosPrincipal->modificarSueldos($em, $fecha, $empleado, "asistencia", $asistencia);

                $this->addFlash(
                    'notice',
                    'La asistencia fue registrada correctamente'
                );

                $em->flush();

                return $this->redirect($this->generateUrl('mtd_asistencia_administrativo_mostrar', array('id'=> $id, true)));
            }
        }
    }
    
    public function validarFecha($fecha, $empleado){
        $res = true;
        $asistencias = $empleado->getAsistencia();
        foreach($asistencias  as $asistencia){
            $fechaEmpleado = $asistencia->getFecha();
            $activo        = $asistencia->getActivo();
            if($fecha == $fechaEmpleado && $activo){
                $res = false;
                break;
            }
        }
        return $res;
    }
    
    public function validarFechaIngreso($fecha, $empleado){
        $res = true;
        $contrataciones = $empleado->getContratacion();
        foreach($contrataciones  as $contratacion){
            if($contratacion->getActivo()){
                $fechaIngreso = $contratacion->getFechaIngreso();
                break;
            }
        }
        if($fecha < $fechaIngreso){
            $res = false;
        }
        return $res;
    }
}
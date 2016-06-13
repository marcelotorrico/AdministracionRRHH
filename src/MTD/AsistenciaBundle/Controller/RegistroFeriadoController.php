<?php

namespace MTD\AsistenciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\AsistenciaBundle\Entity\Asistencia;
use MTD\AsistenciaBundle\Controller\RegistroAsistenciaAdministrativoController;
use Symfony\Component\HttpFoundation\Request;
use MTD\SueldosSalariosBundle\Controller\SueldosPrincipalController;
use MTD\SueldosSalariosBundle\Controller\CalculosSueldosController;
use MTD\AsistenciaBundle\Controller\InformacionAsistenciaController;

class RegistroFeriadoController extends Controller
{
    
    public function registrarAction(Request $request)
    {
        $registroAsistencia = new RegistroAsistenciaAdministrativoController();
        $em = $this->getDoctrine()->getManager();
        $asistencia = new Asistencia();
        $id = $this->get('request')->request->get('idEmpleado');
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        //utiliza en NAME!!
        $fecha = $this->get('request')->request->get('fechaFeriado');
        if(!$registroAsistencia->validarFecha(new \DateTime($fecha), $empleado)){
            $this->addFlash(
            'notice',
            'La fecha de la asistencia ya fue registrada. Por favor verifique los datos.'
            );
            if($empleado->getOperativo()){
                return $this->redirect($this->generateUrl('mtd_asistencia_operativos'));
            }else{
                return $this->redirect($this->generateUrl('mtd_asistencia_administrativos'));
            }
        }else{
            if(!$registroAsistencia->validarFechaIngreso(new \DateTime($fecha), $empleado)){
                $this->addFlash(
                'notice',
                'La fecha de la asistencia es posterior a la fecha de ingreso. Por favor verifique los datos.'
                );
                if($empleado->getOperativo()){
                    return $this->redirect($this->generateUrl('mtd_asistencia_operativos'));
                }else{
                    return $this->redirect($this->generateUrl('mtd_asistencia_administrativos'));
                }
            }else{
                $asistencia->setFecha(new \DateTime($fecha));
                $asistencia->setActivo("TRUE");
                $asistencia->setEmpleado($empleado);
                $asistencia->setFeriado(TRUE);
                $asistencia->setCobrado(FALSE);
                $calculoSueldos = new CalculosSueldosController();
                $psgh = $calculoSueldos->getPsgh($em, "feriado", $asistencia);
                $asistencia->setPsgh($psgh);
                $em->persist($asistencia);

                $sueldosPrincipal = new SueldosPrincipalController();
                if(!$registroAsistencia->validarCobro($em, $fecha, $empleado)){
                    $sueldosPrincipal->actualizarErrorSueldos($em, $empleado, $fecha, "feriado", $asistencia);
                }else{
                    $sueldosPrincipal->modificarSueldos($em, $fecha, $empleado, "feriado", $asistencia);
                }

                $this->addFlash(
                    'notice',
                    'El feriado fue registrado correctamente'
                );

                $em->flush();

                $informacionAsistencia = new InformacionAsistenciaController();
                $mes = $informacionAsistencia->transformarFechaAsistencia($asistencia, "mes");
                $año = $informacionAsistencia->transformarFechaAsistencia($asistencia, "año");
                if($empleado->getOperativo()){
                    return $this->redirect($this->generateUrl('mtd_asistencia_mostrar', array('id'=> $id, 'ano'=> $año, 'mes'=> $mes)));
                }else{
                    return $this->redirect($this->generateUrl('mtd_asistencia_administrativo_mostrar', array('id'=> $id, 'ano'=> $año, 'mes'=> $mes)));
                }
            }
        }
    }
}
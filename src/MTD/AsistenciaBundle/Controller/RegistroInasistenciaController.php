<?php

namespace MTD\AsistenciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\AsistenciaBundle\Entity\Asistencia;
use MTD\AsistenciaBundle\Controller\RegistroAsistenciaAdministrativoController;
use MTD\AsistenciaBundle\Entity\Falta;
use Symfony\Component\HttpFoundation\Request;
use MTD\SueldosSalariosBundle\Controller\SueldosPrincipalController;
use MTD\SueldosSalariosBundle\Controller\CalculosSueldosController;
use MTD\AsistenciaBundle\Controller\InformacionAsistenciaController;

class RegistroInasistenciaController extends Controller
{
    
    public function mostrarAction(Request $request, $id)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        $sueldos = $em->getRepository('MTDSueldosSalariosBundle:Sueldos')->findBy(
                array('empleado' => $empleado,'emitido' => true));
        $fechaSueldos = array();
        foreach($sueldos as $sueldo){
            $fecha = $sueldo->getFecha();
            $separa = explode("-", $fecha->format('Y-m-d'));
            $añoSueldo = $separa[0];
            $mesSueldo = $separa[1];
            $fechaSueldo = $añoSueldo.'-'.$mesSueldo.'-01';
            array_push($fechaSueldos, $fechaSueldo);
        }
        return $this->render('MTDAsistenciaBundle:Inasistencia:registroOperativo.html.twig', array('empleado' => $empleado, "fechaSueldos" => $fechaSueldos));
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
            if(!$registroAsistencia->validarFechaIngreso(new \DateTime($fecha), $empleado)){
                $this->addFlash(
                'notice',
                'La fecha de la asistencia es posterior a la fecha de ingreso. Por favor verifique los datos.'
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
                $asistencia->setCobrado(FALSE);

                $falta->setAsistencia($asistencia);
                $falta->setAviso($justificado);
                $falta->setMotivo($motivos);

                $sueldosPrincipal = new SueldosPrincipalController();
                $calculoSueldos = new CalculosSueldosController();
                if(!$registroAsistencia->validarCobro($em, $fecha, $empleado)){
                    if($justificado == "TRUE"){
                        $psgh = $calculoSueldos->getPsgh($em, "permiso", $asistencia);
                        $asistencia->setPsgh($psgh);
                        $sueldosPrincipal->actualizarErrorSueldos($em, $empleado, $fecha, "permiso", $asistencia);
                    }else{
                        $falla = $calculoSueldos->getPsgh($em, "falta", $asistencia);
                        $falta->setFalla($falla);
                        $sueldosPrincipal->actualizarErrorSueldos($em, $empleado, $fecha, "falta", $asistencia);
                    }
                }else{
                    if($justificado == "TRUE"){
                        $psgh = $calculoSueldos->getPsgh($em, "permiso", $asistencia);
                        $asistencia->setPsgh($psgh);
                        $sueldosPrincipal->modificarSueldos($em, $fecha, $empleado, "permiso", $asistencia);
                    }else{
                        $falla = $calculoSueldos->getPsgh($em, "falta", $asistencia);
                        $falta->setFalla($falla);
                        $sueldosPrincipal->modificarSueldos($em, $fecha, $empleado, "falta", $asistencia);
                    }
                }
                
                $asistencia->addFalta($falta);
                $em->persist($falta);
                $em->persist($asistencia);
                $this->addFlash(
                    'notice',
                    'La inasistencia fue registrada correctamente'
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
<?php

namespace MTD\AsistenciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\AsistenciaBundle\Entity\Asistencia;
use Symfony\Component\HttpFoundation\Request;
use MTD\SueldosSalariosBundle\Controller\SueldosPrincipalController;
use MTD\SueldosSalariosBundle\Controller\CalculosSueldosController;
use MTD\AsistenciaBundle\Controller\InformacionAsistenciaController;

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
            if(!$this->validarFechaIngreso(new \DateTime($fecha), $empleado)){
                $this->addFlash(
                'notice',
                'La fecha de la asistencia es posterior a la fecha de ingreso. Por favor verifique los datos.'
                );
                return $this->redirect($this->generateUrl('mtd_asistencia_empleado_administrativo', array('id'=> $id, true)));
            }else{
                if(!$this->validarCobro($em, $fecha, $empleado)){
                    $this->addFlash(
                    'notice',
                    'La asistencia no fue registrada porque el sueldo de este mes ya fue emitido.'
                    );
                    return $this->redirect($this->generateUrl('mtd_asistencia_empleado_administrativo', array('id'=> $id, true)));
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
                    $configuracion = $em->getRepository('MTDAsistenciaBundle:Configuracion')->findOneBy(array('activo'=>'TRUE'));
                    $asistencia->setConfiguracion($configuracion);
                    $asistencia->setCobrado(FALSE);
                    $em->persist($asistencia);
                    $sueldosPrincipal = new SueldosPrincipalController();
                    $sueldosPrincipal->modificarSueldos($em, $fecha, $empleado, "asistencia", $asistencia);

                    $this->addFlash(
                        'notice',
                        'La asistencia fue registrada correctamente'
                    );

                    $em->flush();

                    $informacionAsistencia = new InformacionAsistenciaController();
                    $mes = $informacionAsistencia->transformarFechaAsistencia($asistencia, "mes");
                    $año = $informacionAsistencia->transformarFechaAsistencia($asistencia, "año");
                    return $this->redirect($this->generateUrl('mtd_asistencia_administrativo_mostrar', array('id'=> $id, 'ano'=> $año, 'mes'=> $mes)));
                }
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
    
    public function validarCobro($em, $fecha, $empleado) {
        $res = true;
        $separa = explode("/", $fecha);
        $año = $separa[2];
        $mes = $separa[0];
        $fechaSueldo = $año."-".$mes."-01";
        $fechaActual = new \DateTime($fechaSueldo);
        $sueldo = $em->getRepository('MTDSueldosSalariosBundle:Sueldos')->findOneBy(
                array('empleado' => $empleado,'fecha' => $fechaActual));
        if($sueldo && $sueldo->getEmitido()){
            $res = false;
        }
        return $res;
    }
}
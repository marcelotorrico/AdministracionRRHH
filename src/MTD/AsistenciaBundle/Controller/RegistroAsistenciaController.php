<?php

namespace MTD\AsistenciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\AsistenciaBundle\Entity\Asistencia;
use MTD\AsistenciaBundle\Entity\Asistencia_Proyecto;
use Symfony\Component\HttpFoundation\Request;
use MTD\AsistenciaBundle\Controller\RegistroAsistenciaAdministrativoController;
use MTD\SueldosSalariosBundle\Controller\SueldosPrincipalController;
use MTD\SueldosSalariosBundle\Controller\CalculosSueldosController;
use MTD\AsistenciaBundle\Controller\InformacionAsistenciaController;

class RegistroAsistenciaController extends Controller
{
    
    public function mostrarAction(Request $request, $id)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        $proyectos = $empleado->getProyectoEmpleado();
        $conf = $em->getRepository('MTDAsistenciaBundle:Configuracion')->findOneBy(array('activo'=>'TRUE'));
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
        return $this->render('MTDAsistenciaBundle:Asistencia:registro.html.twig', array('empleado' => $empleado, 'proyectos' => $proyectos, "conf"=> $conf, "fechaSueldos" => $fechaSueldos));
    }
    
    public function registrarAction(Request $request, $id)
    {
        
        $asistenciaAdministrativo = new RegistroAsistenciaAdministrativoController();
        $em = $this->getDoctrine()->getManager();
        $asistencia = new Asistencia();
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        //utiliza en NAME!!
        $fecha              = $this->get('request')->request->get('fecha');
        if(!$asistenciaAdministrativo->validarFecha(new \DateTime($fecha), $empleado)){
            $this->addFlash(
            'notice',
            'La fecha de la asistencia ya fue registrada. Por favor verifique los datos.'
            );
            return $this->redirect($this->generateUrl('mtd_asistencia_empleado', array('id'=> $id, true)));
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
                $totalHorasNormales = $this->get('request')->request->get('totalHorasNormales');
                $totalHorasExtras   = $this->get('request')->request->get('totalHorasExtras');

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

                $sueldosPrincipal = new SueldosPrincipalController();
                if(!$asistenciaAdministrativo->validarCobro($em, $fecha, $empleado)){
                    $sueldosPrincipal->actualizarErrorSueldos($em, $empleado, $fecha, "asistencia", $asistencia);
                }else{
                    $sueldosPrincipal->modificarSueldos($em, $fecha, $empleado, "asistencia", $asistencia);
                }

                $this->addFlash(
                    'notice',
                    'La asistencia fue registrada correctamente'
                );

                $em->flush();

                $informacionAsistencia = new InformacionAsistenciaController();
                $mes = $informacionAsistencia->transformarFechaAsistencia($asistencia, "mes");
                $año = $informacionAsistencia->transformarFechaAsistencia($asistencia, "año");
                return $this->redirect($this->generateUrl('mtd_asistencia_mostrar', array('id'=> $id, 'ano'=> $año, 'mes'=> $mes)));
            }
        }
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
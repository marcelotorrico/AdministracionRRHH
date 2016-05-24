<?php

namespace MTD\AsistenciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MTD\SueldosSalariosBundle\Controller\MuestraSueldosController;

class InformacionAsistenciaController extends Controller
{
    
    public function mostrarAction(Request $request, $id, $ano, $mes)
    {
        $em = $this->getDoctrine()->getManager();
        
        $idFormulario = $this->get('request')->request->get('idEmpleadoAsistencia');
        if(!is_null($idFormulario)){
            $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($idFormulario);
        }else{
            $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        }
        $proyectosEmpleado = $empleado->getProyectoEmpleado();
        
        $fechaRecibida = $this->get('request')->request->get('mesAsistenciaOperativo');
        if(!is_null($fechaRecibida)){
            $mes = $this->transformarFecha($fechaRecibida, "mes");
            $ano = $this->transformarFecha($fechaRecibida, "año");
        }
        
        $asistencias = $em->getRepository('MTDAsistenciaBundle:Asistencia')->findBy( array(), array('fecha' => 'DESC') );
        
        $asistenciasArray = array();
        foreach ($asistencias as $asistencia){
            $mesAsistencia = $this->transformarFechaAsistencia($asistencia, "mes");
            $añoAsistencia = $this->transformarFechaAsistencia($asistencia, "año");
            if($mes == $mesAsistencia && $ano == $añoAsistencia){
                array_push($asistenciasArray, $asistencia);
            }
        }
        
        return $this->render('MTDAsistenciaBundle:Asistencia:informacionAsistencia.html.twig', array('empleado' => $empleado, 'proyectosEmpleado' => $proyectosEmpleado, 'asistencias' => $asistenciasArray));
    }
    
    public function transformarFechaAsistencia($asistencia, $palabra) {
        $fechaAsistencia = $asistencia->getFecha();
        $separa1 = explode("-", $fechaAsistencia->format('Y-m-d'));
        $añoAsistencia = $separa1[0];
        $mesAsistencia = $separa1[1];
        if($palabra == "mes"){
            return $mesAsistencia;
        }else{
            return $añoAsistencia;
        }
    }
    
    public function transformarFecha($fecha, $palabra) {
        $muestraSueldos = new MuestraSueldosController();
        $separa = explode(" ", $fecha);
        $año = $separa[1];
        $mesRecibido = $separa[0];
        $mes = $muestraSueldos->getNombreMes($mesRecibido);
        if($palabra == "mes"){
            return $mes;
        }else{
            return $año;
        }
    }
}
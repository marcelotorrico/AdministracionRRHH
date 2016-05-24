<?php

namespace MTD\AsistenciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MTD\AsistenciaBundle\Controller\InformacionAsistenciaController;

class InformacionAsistenciaAdministrativoController extends Controller
{
    
    public function mostrarAction(Request $request, $id, $ano, $mes)
    {
        $em = $this->getDoctrine()->getManager();
        
        $idFormulario = $this->get('request')->request->get('idEmpleadoAdministrativoAsistencia');
        if(!is_null($idFormulario)){
            $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($idFormulario);
        }else{
            $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        }
        $asistenciasEmpleado = $empleado->getAsistencia();
        
        $informacionAsistencia = new InformacionAsistenciaController();
        $fechaRecibida = $this->get('request')->request->get('mesAsistencia');
        if(!is_null($fechaRecibida)){
            $mes = $informacionAsistencia->transformarFecha($fechaRecibida, "mes");
            $ano = $informacionAsistencia->transformarFecha($fechaRecibida, "año");
        }
        
        $asistencias = $em->getRepository('MTDAsistenciaBundle:Asistencia')->findBy( array(), array('fecha' => 'DESC') );
        
        $asistenciasArray = array();
        foreach ($asistencias as $asistencia){
            $mesAsistencia = $informacionAsistencia->transformarFechaAsistencia($asistencia, "mes");
            $añoAsistencia = $informacionAsistencia->transformarFechaAsistencia($asistencia, "año");
            if($mes == $mesAsistencia && $ano == $añoAsistencia){
                array_push($asistenciasArray, $asistencia);
            }
        }
        
        return $this->render('MTDAsistenciaBundle:Asistencia:informacionAsistenciaAdministrativo.html.twig', array('empleado' => $empleado, 'asistenciasEmpleado' => $asistenciasEmpleado, 'asistencias' => $asistenciasArray));
    }
    
}
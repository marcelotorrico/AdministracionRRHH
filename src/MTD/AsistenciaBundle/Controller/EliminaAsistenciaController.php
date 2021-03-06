<?php

namespace MTD\AsistenciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MTD\SueldosSalariosBundle\Controller\ActualizaSueldosController;
use MTD\AsistenciaBundle\Controller\InformacionAsistenciaController;

class EliminaAsistenciaController extends Controller
{
    
    public function eliminarAction(Request $request, $id, $idEmpleado)
    {
        $em = $this->getDoctrine()->getManager();
        $asistencia = $em->getRepository('MTDAsistenciaBundle:Asistencia')->find($id);
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($idEmpleado);
        $informacionAsistencia = new InformacionAsistenciaController();
        $mes = $informacionAsistencia->transformarFechaAsistencia($asistencia, "mes");
        $año = $informacionAsistencia->transformarFechaAsistencia($asistencia, "año");
        
        $this->addFlash(
            'notice',
            'La asistencia fue eliminada correctamente'
        );
        $actualizaSueldos = new ActualizaSueldosController();
        if($asistencia->getCobrado()){
            $actualizaSueldos->crearHistorial($em, $empleado, $mes, $año);
        }
        $actualizaSueldos->actualizarEliminaAsistencia($em, $asistencia, $empleado);
        
        $asistencia->setActivo("FALSE");
        $em->persist($asistencia);             
        $em->flush();

        if($empleado->getOperativo()){
            return $this->redirect($this->generateUrl('mtd_asistencia_mostrar', array('id'=> $idEmpleado, 'ano'=> $año, 'mes'=> $mes)));
        }else{
            return $this->redirect($this->generateUrl('mtd_asistencia_administrativo_mostrar', array('id'=> $idEmpleado, 'ano'=> $año, 'mes'=> $mes)));
        }
    }
}
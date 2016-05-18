<?php

namespace MTD\SueldosSalariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EmitirSueldosController extends Controller
{
    public function registrarAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $sueldo = $em->getRepository('MTDSueldosSalariosBundle:Sueldos')->find($id);
        
        if($sueldo){
            $sueldo->setEmitido(TRUE);
            $this->actualizarAsistencias($em, $sueldo);
            $em->persist($sueldo);
            $em->flush();
            $this->addFlash(
                'notice',
                'El sueldo fue emitido correctamente.'
            );
            $idEmpleado = $sueldo->getEmpleado()->getId();
            return $this->redirect($this->generateUrl('mtd_sueldos_mostrarEmpleado', array('id'=> $idEmpleado, true)));
        }else{
            $this->addFlash(
                'notice',
                'El registro no fue realizado correctamente.'
            );
            return $this->redirect($this->generateUrl('mtd_inicio'));
        }
    }
    
    public function actualizarAsistencias($em, $sueldo) {
        $empleado = $sueldo->getEmpleado();
        $asistencias = $empleado->getAsistencia();
        foreach ($asistencias as $asistencia){
            $activo = $asistencia->getActivo();
            $igualdad = $this->verificarAsistencia($asistencia, $sueldo);
            if(!$asistencia->getCobrado() && $activo && $igualdad){
                $asistencia->setCobrado(TRUE);
                $em->persist($asistencia);
            }
        }
    }
    
    public function verificarAsistencia($asistencia, $sueldo) {
        $res = FALSE;
        $fechaSueldo = $sueldo->getFecha();
        $fechaAsistencia = $asistencia->getFecha();
        $separa = explode("-", $fechaSueldo->format('Y-m-d'));
        $añoSueldo = $separa[0];
        $mesSueldo = $separa[1];
        $separa1 = explode("-", $fechaAsistencia->format('Y-m-d'));
        $añoAsistencia = $separa1[0];
        $mesAsistencia = $separa1[1];
        if($añoAsistencia == $añoSueldo && $mesAsistencia == $mesSueldo){
            $res = TRUE;
        }
        return $res;
    }
}
<?php

namespace MTD\SueldosSalariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MTD\ProductividadBundle\Controller\SueldosController;

class EmitirSueldosController extends Controller
{
    public function registrarAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $idSueldos = $this->get('request')->request->get('sueldos');
        if($idSueldos){
            foreach($idSueldos  as $id){
                $sueldo = $em->getRepository('MTDSueldosSalariosBundle:Sueldos')->find($id);
                $sueldo->setEmitido(TRUE);
                $this->actualizarAsistencias($em, $sueldo);
                $em->persist($sueldo);
            }
            $sueldosController = new SueldosController();
            $ano = $sueldosController->getAño($sueldo, "año");
            $mes = $sueldosController->getAño($sueldo, "mes");
            $em->flush();
            $this->addFlash(
                'notice',
                'Los sueldos seleccionados fueron emitidos correctamente.'
            );
            return $this->redirect($this->generateUrl('mtd_sueldos_ver', array('ano'=> $ano, 'mes'=> $mes)));
        }else{
            $this->addFlash(
                'notice',
                'No se emitieron los sueldos.'
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
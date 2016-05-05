<?php

namespace MTD\SueldosSalariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MTD\SueldosSalariosBundle\Entity\Viatico;

class ViaticosPremiosController extends Controller
{
    
    public function mostrarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        $fecha = date("d/m/Y");
        $separa = explode("/", $fecha);
        $año = $separa[2];
        $mes = $separa[1];
        $fechaSueldo = $año."-".$mes."-01";
        $fechaActual = new \DateTime($fechaSueldo);
        $sueldo = $em->getRepository('MTDSueldosSalariosBundle:Sueldos')->findOneBy(
                array('empleado' => $empleado,'fecha' => $fechaActual));
        $responsabilidad = "";
        $diasViatico = "";
        $transporteViatico = "";
        if($sueldo){
            $viatico = $em->getRepository('MTDSueldosSalariosBundle:Viatico')->findOneBy(
                array('sueldo' => $sueldo));
            if($viatico){
                $responsabilidad = $viatico->getResponsabilidad();
                $diasViatico = $viatico->getDiasViatico();
                $transporteViatico = $viatico->getTransporteViatico();
            }
        }
        
        return $this->render('MTDSueldosSalariosBundle:Sueldos:registroViaticos.html.twig', array('empleado' => $empleado, 'responsabilidad' => $responsabilidad, 'diasViatico' => $diasViatico, 'transporteViatico' => $transporteViatico));
    }
    
    public function registrarAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        
        $fecha = $this->get('request')->request->get('fecha');
        $sueldo = $this->verificarSueldo($em, $fecha, $empleado);
        if($sueldo){
            $diasViatico = $this->get('request')->request->get('diasViatico');
            if(!$diasViatico){
                $diasViatico = 0;
            }
            $transporteViatico = $this->get('request')->request->get('transporteViatico');
            if(!$transporteViatico){
                $transporteViatico = 0;
            }
            $viatico = $em->getRepository('MTDSueldosSalariosBundle:Viatico')->findOneBy(
                array('sueldo' => $sueldo));
            $viatico->setDiasViatico($diasViatico);
            $viatico->setTransporteViatico($transporteViatico);
            $em->persist($viatico);
            $this->actualizarTotalPagado($em, $sueldo, $viatico);
            $em->flush();
            $this->addFlash(
                'notice',
                'El registro fue realizado correctamente.'
            );
            return $this->redirect($this->generateUrl('mtd_viaticos_registro', array('id'=> $id, true)));
        }else{
            $this->addFlash(
                'notice',
                'No se pudo realizar el registro porque el empleado no tiene asistencia en este mes.'
            );
            return $this->redirect($this->generateUrl('mtd_descuentos_empleados'));
        }
    }
    
    public function verificarSueldo($em, $fecha, $empleado) {
        $res = FALSE;
        $fechaDate = new \DateTime(strtotime($fecha));
        $separa = explode("-", $fechaDate->format('Y-m-d'));
        $año = $separa[0];
        $mes = $separa[1];
        $fechaSueldo = $año."-".$mes."-01";
        $fechaNueva = new \DateTime($fechaSueldo);
                
        $sueldo = $em->getRepository('MTDSueldosSalariosBundle:Sueldos')->findOneBy(
                array('empleado' => $empleado,'fecha' => $fechaNueva));
        if($sueldo){
            $res = $sueldo;
        }
        return $res;
    }
    
    public function crearViatico($em, $sueldo, $falla, $categoria, $diasMes, $totalDiasMes) {
        $viatico = new Viatico();
        $responsabilidad = $this->getResponsabilidad($categoria, $falla);
        $premioResponsabilidad = ($responsabilidad / $totalDiasMes) * $diasMes;
        $viatico->setResponsabilidad($premioResponsabilidad);
        $viatico->setDiasViatico(0);
        $viatico->setTransporteViatico(0);
        $viatico->setSueldo($sueldo);
        $em->persist($viatico);
        $sueldo->addViatico($viatico);
        $this->actualizarTotalPagado($em, $sueldo, $viatico);
    }
    
    public function actualizarPremio($em, $categoria, $sueldo, $fallaActualizada, $diasMes, $totalDiasMes) {
        $viatico = $em->getRepository('MTDSueldosSalariosBundle:Viatico')->findOneBy(
                array('sueldo' => $sueldo));
        $responsabilidad = $this->getResponsabilidad($categoria, $fallaActualizada);
        $premioResponsabilidad = ($responsabilidad / $totalDiasMes) * $diasMes;
        $viatico->setResponsabilidad($premioResponsabilidad);
        $this->actualizarTotalPagado($em, $sueldo, $viatico);
        $em->persist($viatico);
    }
    
    public function getResponsabilidad($categoria, $falla) {
        $responsalidad = $categoria->getPremio();
        if($falla >= 1 && $falla < 2){
            $responsalidad = $responsalidad / 2;
        }else{
            if($falla >= 2){
                $responsalidad = 0;
            }
        }
        return $responsalidad;
    }
    
    public function actualizarTotalPagado($em, $sueldo, $viatico) {
        $liquidoPagable = $sueldo->getLiquidoPagable();
        $responsabilidad = $viatico->getResponsabilidad();
        $diasViatico = $viatico->getDiasViatico();
        $transporteViatico = $viatico->getTransporteViatico();
        $totalPagado = $liquidoPagable + $responsabilidad + $diasViatico + $transporteViatico;
        $sueldo->setTotalPagado($totalPagado);
        $em->persist($sueldo);
    }
}
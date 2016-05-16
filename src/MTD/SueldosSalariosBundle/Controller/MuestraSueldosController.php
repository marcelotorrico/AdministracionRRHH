<?php

namespace MTD\SueldosSalariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MTD\SueldosSalariosBundle\Controller\DescuentosEmpleadosController;

class MuestraSueldosController extends Controller
{
    public function mostrarAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        $fecha = $this->get('request')->request->get('sueldosSalarios');
        $contrataciones = $em->getRepository('MTDSeleccionBundle:Contratacion')->findAll();
        $sueldos = array();
        $descuento = new DescuentosEmpleadosController();
        $i = 0;
        foreach($contrataciones as $contratacion){
            if($contratacion->getActivo() && $contratacion->getEmpleado()->getContratado() && $contratacion->getEmpleado()->getOperativo()){
                $empleado = $contratacion->getEmpleado();
                $sueldo = $descuento->verificarSueldo($em, $fecha, $empleado);
                if($sueldo){
                    $diasNoTrabajados = $sueldo->getPesosPsgh() + $sueldo->getPesosFalla();
                    $totalDescuento = $this->getTotalDescuento($em, $sueldo);
                    $totalPremios = $this->getTotalPremios($em, $sueldo);
                    
                    $sueldos[$i] = array('sueldo' => $sueldo, 'totalPremios' => $totalPremios, 'totalDescuento' => $totalDescuento,
                        'diasNoTrabajados' => $diasNoTrabajados, 'empleado' => $empleado);
                }
                $i++;
            }
        }
        return $this->render('MTDSueldosSalariosBundle:Sueldos:muestraSueldos.html.twig', array('fecha' => $fecha, 'sueldos' => $sueldos));
    }
    
    public function getTotalPremios($em, $sueldo) {
        $viatico = $em->getRepository('MTDSueldosSalariosBundle:Viatico')->findOneBy(
                array('sueldo' => $sueldo));
        $totalPremio = 0;
        if($viatico){
            $responsabilidad = $viatico->getResponsabilidad();
            $diasViatico = $viatico->getDiasViatico();
            $transporteViatico = $viatico->getTransporteViatico();
            $totalPremio = $responsabilidad + $diasViatico + $transporteViatico;
        }
        return $totalPremio;
    }
    
    public function getTotalDescuento($em, $sueldo) {
        $descuento = $em->getRepository('MTDSueldosSalariosBundle:Descuento')->findOneBy(
                                       array('sueldo' => $sueldo,'activo' => TRUE));
        $totalDescuento = 0;
        if($descuento){
            $afps = $descuento->getAfps();
            $anticipo = $descuento->getAnticipo();
            $totalDescuento = $afps + $anticipo;
        }
        return $totalDescuento;
    }
}
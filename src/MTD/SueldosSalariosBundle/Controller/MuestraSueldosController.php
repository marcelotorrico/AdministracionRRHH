<?php

namespace MTD\SueldosSalariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MuestraSueldosController extends Controller
{
    public function emitirAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        $fechaRecibida = $this->get('request')->request->get('fechaEmision');
        $fecha = $this->transformarFecha($fechaRecibida);
        $contrataciones = $em->getRepository('MTDSeleccionBundle:Contratacion')->findAll();
        $sueldos = array();
        $i = 0;
        foreach($contrataciones as $contratacion){
            if($contratacion->getActivo() && $contratacion->getEmpleado()->getContratado()){
                $empleado = $contratacion->getEmpleado();
                $sueldo = $this->verificarSueldo($em, $fecha, $empleado);
                if($sueldo){
                    $diasNoTrabajados = $sueldo->getPesosPsgh() + $sueldo->getPesosFalla();
                    $totalDescuento = $this->getTotalDescuento($em, $sueldo);
                    $totalPremios = $this->getTotalPremios($em, $sueldo);
                    
                    $sueldos[$i] = array('sueldo' => $sueldo, 'totalPremios' => $totalPremios, 'totalDescuento' => $totalDescuento,
                        'diasNoTrabajados' => $diasNoTrabajados, 'empleado' => $empleado);
                    $i++;
                }
            }
        }
        return $this->render('MTDSueldosSalariosBundle:Sueldos:emitirSueldos.html.twig', array('fechaRecibida' => $fechaRecibida, 'sueldos' => $sueldos));
    }
    public function mostrarAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        $fechaRecibida = $this->get('request')->request->get('sueldosSalarios');
        $fecha = $this->transformarFecha($fechaRecibida);
        $contrataciones = $em->getRepository('MTDSeleccionBundle:Contratacion')->findAll();
        $sueldos = array();
        $i = 0;
        foreach($contrataciones as $contratacion){
            if($contratacion->getActivo() && $contratacion->getEmpleado()->getContratado()){
                $empleado = $contratacion->getEmpleado();
                $sueldo = $this->verificarSueldo($em, $fecha, $empleado);
                if($sueldo){
                    $diasNoTrabajados = $sueldo->getPesosPsgh() + $sueldo->getPesosFalla();
                    $totalDescuento = $this->getTotalDescuento($em, $sueldo);
                    $totalPremios = $this->getTotalPremios($em, $sueldo);
                    
                    $sueldos[$i] = array('sueldo' => $sueldo, 'totalPremios' => $totalPremios, 'totalDescuento' => $totalDescuento,
                        'diasNoTrabajados' => $diasNoTrabajados, 'empleado' => $empleado);
                    $i++;
                }
            }
        }
        return $this->render('MTDSueldosSalariosBundle:Sueldos:muestraSueldos.html.twig', array('fechaRecibida' => $fechaRecibida, 'sueldos' => $sueldos));
    }
    
    public function transformarFecha($fecha) {
        $separa = explode(" ", $fecha);
        $año = $separa[1];
        $mesRecibido = $separa[0];
        $mes = $this->getNombreMes($mesRecibido);
        $fechaTransformada = "01-".$mes."-".$año;
        return $fechaTransformada;
    }
    
    public function getNombreMes($mes) {
        if($mes == "Enero"){
            return("01");
        }
        if($mes == "Febrero"){
            return("02");
        }
        if($mes == "Marzo"){
            return("03");
        }
        if($mes == "Abril"){
            return("04");
        }
        if($mes == "Mayo"){
            return("05");
        }
        if($mes == "Junio"){
            return("06");
        }
        if($mes == "Julio"){
            return("07");
        }
        if($mes == "Agosto"){
            return("08");
        }
        if($mes == "Septiembre"){
            return("09");
        }
        if($mes == "Octubre"){
            return("10");
        }
        if($mes == "Noviembre"){
            return("11");
        }
        if($mes == "Diciembre"){
            return("12");
        }
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
    
    public function verificarSueldo($em, $fecha, $empleado) {
        $res = FALSE;
        $fechaDate = new \DateTime($fecha);
        /*$separa = explode("-", $fechaDate->format('Y-m-d'));
        $año = $separa[0];
        $mes = $separa[1];
        $fechaSueldo = $año."-".$mes."-01";
        //$fechaNueva = new \DateTime($fechaSueldo);
        
        $sueldos = $empleado->getSueldos();
        foreach($sueldos as $sueldo){
            $fechaS = $sueldo->getFecha();
            $fechaSu = $fechaS->format('Y-m-d');
            $separa1 = explode("-", $fechaS->format('Y-m-d'));
            $añoSueldo = $separa1[0];
            $mesSueldo = $separa1[1];
            $diaSueldo = $separa1[2];
            $fechaNueva = $añoSueldo."-".$mesSueldo."-".$diaSueldo;
            if($fechaSueldo == $fechaNueva){
                $res = $sueldo;
                break;
            }
        }*/
                
        $sueldo = $em->getRepository('MTDSueldosSalariosBundle:Sueldos')->findOneBy(
                array('empleado' => $empleado,'fecha' => $fechaDate));
        if($sueldo){
           $res = $sueldo;
        }
        return $res;
    }
}
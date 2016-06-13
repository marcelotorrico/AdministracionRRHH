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
        $resultado = array();
        $posicion = array();
        $i = 0;
        foreach($contrataciones as $i => $contratacion){
            if($contratacion->getActivo() && $contratacion->getEmpleado()->getContratado()){
                $empleado = $contratacion->getEmpleado();
                $sueldo = $this->verificarSueldo($em, $fecha, $empleado);
                if($sueldo){
                    $diasNoTrabajados = $sueldo->getPesosPsgh() + $sueldo->getPesosFalla();
                    $totalDescuento = $this->getTotalDescuento($em, $sueldo);
                    $totalPremios = $this->getTotalPremios($em, $sueldo);
                    $posicion[$i] = $contratacion->getEmpleado()->getApellido().', '.$contratacion->getEmpleado()->getNombre();
                    $resultado[$i] = array('sueldo' => $sueldo, 'totalPremios' => $totalPremios, 'totalDescuento' => $totalDescuento,
                        'diasNoTrabajados' => $diasNoTrabajados, 'empleado' => $empleado);
                    $i++;
                }
            }
        }
        asort($posicion);
        $sueldos = array();

        foreach ($posicion as $i => $pos) {
            $sueldos[] = $resultado[$i];
        }
        return $this->render('MTDSueldosSalariosBundle:Sueldos:emitirSueldos.html.twig', array('fechaRecibida' => $fechaRecibida, 'sueldos' => $sueldos));
    }
    public function mostrarAction(Request $request, $ano, $mes)
    {
        $em = $this->getDoctrine()->getManager();
        
        $fechaRecibida = $this->get('request')->request->get('sueldosSalarios');
        if(!is_null($fechaRecibida)){
            $fecha = $this->transformarFecha($fechaRecibida);
        }else{
            $fecha = "01-".$mes."-".$ano;
            $fechaRecibida = $this->getNombreMes($mes)." ".$ano;
        }
        
        $contrataciones = $em->getRepository('MTDSeleccionBundle:Contratacion')->findAll();
        $resultado = array();
        $posicion = array();
        $i = 0;
        foreach($contrataciones as $i => $contratacion){
            if($contratacion->getActivo() && $contratacion->getEmpleado()->getContratado()){
                $empleado = $contratacion->getEmpleado();
                $sueldo = $this->verificarSueldoEmitido($em, $fecha, $empleado);
                if($sueldo){
                    $diasNoTrabajados = $sueldo->getPesosPsgh() + $sueldo->getPesosFalla();
                    $totalDescuento = $this->getTotalDescuento($em, $sueldo);
                    $totalPremios = $this->getTotalPremios($em, $sueldo);
                    $posicion[$i] = $contratacion->getEmpleado()->getApellido().', '.$contratacion->getEmpleado()->getNombre();
                    $resultado[$i] = array('sueldo' => $sueldo, 'totalPremios' => $totalPremios, 'totalDescuento' => $totalDescuento,
                        'diasNoTrabajados' => $diasNoTrabajados, 'empleado' => $empleado);
                    $i++;
                }
            }
        }
        asort($posicion);
        $sueldos = array();

        foreach ($posicion as $i => $pos) {
            $sueldos[] = $resultado[$i];
        }
        return $this->render('MTDSueldosSalariosBundle:Sueldos:muestraSueldos.html.twig', array('fechaRecibida' => $fechaRecibida, 'sueldos' => $sueldos));
    }
    
    public function transformarFecha($fecha) {
        $separa = explode(" ", $fecha);
        $año = $separa[1];
        $mesRecibido = $separa[0];
        $mes = $this->getNumeroMes($mesRecibido);
        $fechaTransformada = "01-".$mes."-".$año;
        return $fechaTransformada;
    }
    
    public function getNumeroMes($mes) {
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
    
    public function getNombreMes($mes) {
        if($mes == "01"){
            return("Enero");
        }
        if($mes == "02"){
            return("Febrero");
        }
        if($mes == "03"){
            return("Marzo");
        }
        if($mes == "04"){
            return("Abril");
        }
        if($mes == "05"){
            return("Mayo");
        }
        if($mes == "06"){
            return("Junio");
        }
        if($mes == "07"){
            return("Julio");
        }
        if($mes == "08"){
            return("Agosto");
        }
        if($mes == "09"){
            return("Septiembre");
        }
        if($mes == "10"){
            return("Octubre");
        }
        if($mes == "11"){
            return("Noviembre");
        }
        if($mes == "12"){
            return("Diciembre");
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
        $sueldoModificado = $em->getRepository('MTDSueldosSalariosBundle:Sueldos')->findOneBy(
                array('empleado' => $empleado,'fecha' => $fechaDate, 'emitido' => true, 'modificado' => true));
        if($sueldoModificado){
            return $sueldoModificado;
        }else{
            $sueldo = $em->getRepository('MTDSueldosSalariosBundle:Sueldos')->findOneBy(
                    array('empleado' => $empleado,'fecha' => $fechaDate));
            if($sueldo){
               $res = $sueldo;
            }
        }
        return $res;
    }
    
    public function verificarSueldoEmitido($em, $fecha, $empleado) {
        $res = FALSE;
        $fechaDate = new \DateTime($fecha);
        $sueldo = $em->getRepository('MTDSueldosSalariosBundle:Sueldos')->findOneBy(
                array('empleado' => $empleado,'fecha' => $fechaDate, 'emitido' => true));
        if($sueldo){
           $res = $sueldo;
        }
        return $res;
    }
}
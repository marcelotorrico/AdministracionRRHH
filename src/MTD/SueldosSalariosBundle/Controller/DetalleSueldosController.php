<?php

namespace MTD\SueldosSalariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DetalleSueldosController extends Controller
{
    
    public function diasNoTrabajadosAction(Request $request, $id)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $sueldo = $em->getRepository('MTDSueldosSalariosBundle:Sueldos')->find($id);
        $pesosPsgh = $sueldo->getPesosPsgh();
        $pesosFalla = $sueldo->getPesosFalla();
        $total = $pesosPsgh + $pesosFalla;
        
        return $this->render('MTDSueldosSalariosBundle:Sueldos:detalleDiasNoTrabajados.html.twig', array("sueldo"=>$sueldo, "total"=>$total));
    }
    
    public function horasExtrasAction(Request $request, $id)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $sueldo = $em->getRepository('MTDSueldosSalariosBundle:Sueldos')->find($id);
        
        return $this->render('MTDSueldosSalariosBundle:Sueldos:detalleHorasExtras.html.twig', array("sueldo"=>$sueldo));
    }
    
    public function bonoAntiguedadAction(Request $request, $id)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $sueldo = $em->getRepository('MTDSueldosSalariosBundle:Sueldos')->find($id);
        
        return $this->render('MTDSueldosSalariosBundle:Sueldos:detalleBonoAntiguedad.html.twig', array("sueldo"=>$sueldo));
    }
    
    public function descuentosAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $sueldo = $em->getRepository('MTDSueldosSalariosBundle:Sueldos')->find($id);
        $descuento = $em->getRepository('MTDSueldosSalariosBundle:Descuento')->findOneBy(
                array('sueldo' => $sueldo,'activo'=>'TRUE'));
        $total = "";
        if($descuento){
            $afps = $descuento->getAfps();
            $anticipo = $descuento->getAnticipo();
            $total = $afps + $anticipo;
        }
        return $this->render('MTDSueldosSalariosBundle:Sueldos:detalleDescuentos.html.twig', array("descuento"=>$descuento, "total"=>$total));
    }
    
    public function premiosAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $sueldo = $em->getRepository('MTDSueldosSalariosBundle:Sueldos')->find($id);
        $premios = $em->getRepository('MTDSueldosSalariosBundle:Viatico')->findOneBy(array('sueldo' => $sueldo));
        $total = "";
        if($premios){
            $responsabilidad = $premios->getResponsabilidad();
            $diasViatico = $premios->getDiasViatico();
            $transporteViatico = $premios->getTransporteViatico();
            $total = $responsabilidad + $diasViatico + $transporteViatico;
        }
        return $this->render('MTDSueldosSalariosBundle:Sueldos:detalleViatico.html.twig', array("premios"=>$premios, "total"=>$total));
    }
}
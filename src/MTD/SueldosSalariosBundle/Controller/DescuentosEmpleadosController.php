<?php

namespace MTD\SueldosSalariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MTD\SueldosSalariosBundle\Entity\Descuento;
use MTD\SueldosSalariosBundle\Controller\ViaticosPremiosController;

class DescuentosEmpleadosController extends Controller
{
    
    public function listarAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $contrataciones = $em->getRepository('MTDSeleccionBundle:Contratacion')->findAll();
        $proyectos = $em->getRepository('MTDProyectoBundle:Proyecto')->findAll();
        
        return $this->render('MTDSueldosSalariosBundle:Sueldos:descuentos.html.twig', array('contrataciones' => $contrataciones, 'proyectos' => $proyectos));
    }
    
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
        $afps = "";
        $anticipo = "";
        if($sueldo){
            $descuento = $em->getRepository('MTDSueldosSalariosBundle:Descuento')->findOneBy(
                array('sueldo' => $sueldo,'activo' => TRUE));
            if($descuento){
                $afps = $descuento->getAfps();
                $anticipo = $descuento->getAnticipo();
            }
        }
        
        return $this->render('MTDSueldosSalariosBundle:Sueldos:registroDescuento.html.twig', array('empleado' => $empleado, 'afps' => $afps, 'anticipo' => $anticipo));
    }
    
    public function registrarAction(Request $request, $id) {
        $viatico = new ViaticosPremiosController();
        $em = $this->getDoctrine()->getManager();
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        
        $fecha = $this->get('request')->request->get('fecha');
        $sueldo = $viatico->verificarSueldo($em, $fecha, $empleado);
        if($sueldo){
            $afps = $this->get('request')->request->get('afps');
            if(!$afps){
                $afps = 0;
            }
            $anticipo = $this->get('request')->request->get('anticipos');
            if(!$anticipo){
                $anticipo = 0;
            }
            $this->actualizarDescuentos($em, $sueldo, $afps, $anticipo);
            $descuento = new Descuento();
            $descuento->setAfps($afps);
            $descuento->setAnticipo($anticipo);
            $descuento->setSueldo($sueldo);
            $descuento->setActivo(TRUE);
            $em->persist($descuento);
            $sueldo->addDescuento($descuento);
            $em->persist($sueldo);
            $em->flush();
            $this->addFlash(
                'notice',
                'El registro fue realizado correctamente.'
            );
            return $this->redirect($this->generateUrl('mtd_descuentos_registro', array('id'=> $id, true)));
        }else{
            $this->addFlash(
                'notice',
                'No se pudo realizar el registro porque el empleado no tiene asistencia en este mes.'
            );
            return $this->redirect($this->generateUrl('mtd_descuentos_empleados'));
        }
    }
    
    public function actualizarDescuentos($em, $sueldo, $afps, $anticipo) {
        foreach($sueldo->getDescuento() as $descuento){
            $descuento->setActivo(FALSE);
        }
        $totalGanado = $sueldo->getTotalGanado();
        $totalDescuento = $afps + $anticipo;
        $liquidoPagable = $totalGanado - $totalDescuento;
        $this->actualizarTotalPagable($sueldo, $liquidoPagable);
        $sueldo->setLiquidoPagable($liquidoPagable);
        $em->persist($sueldo);
    }
    
    public function actualizarTotalPagable($sueldo, $liquidoPagable) {
        $liquidoPagableAnterior = $sueldo->getLiquidoPagable();
        $totalPagadoAnterior    = $sueldo->getTotalPagado();
        $totalPagado = $totalPagadoAnterior - $liquidoPagableAnterior + $liquidoPagable;
        $sueldo->setTotalPagado($totalPagado);
    }
}
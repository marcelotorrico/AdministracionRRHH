<?php

namespace MTD\SeleccionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EmpleadoInformacionController extends Controller
{
    
    public function mostrarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        $contrataciones = $empleado->getContratacion();
        foreach($contrataciones  as $contratacion){
            if($contratacion->getActivo()){
                $contratacionActual = $contratacion;
                break;
            }
        }
        $idCategoria = $contratacionActual->getCategoria();
        $categoria = $em->getRepository('MTDCategoriasTrabajoBundle:Categoria')->find($idCategoria);
        
        return $this->render('MTDSeleccionBundle:Seleccion:empleadoInformacion.html.twig', array("empleado"=>$empleado, "contratacion"=>$contratacionActual, "categoria"=>$categoria));
    }
}
<?php

namespace MTD\ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MTD\SeleccionBundle\Entity\Proyecto_Empleado;
use MTD\ProyectoBundle\Controller\ProyectoEmpleadoNombreController;

class EmpleadoRegistroController extends Controller
{
    
    public function registrarAction(Request $request, $id, $idProyecto)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $proyectoEmpleado = new Proyecto_Empleado();
        $proyectoEmpleadoNombre = new ProyectoEmpleadoNombreController();
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        $proyectoSeleccionado = $em->getRepository('MTDProyectoBundle:Proyecto')->find($idProyecto);
        $categoriasProyecto = $proyectoSeleccionado->getCategoria();
        
        $proyectoEmpleado->setEmpleado($empleado);
        $proyectoEmpleado->setProyecto($proyectoSeleccionado);
        $proyectoEmpleado->setActivo("TRUE");
        $proyectoEmpleadoNombre->asignarCategoria($em, $empleado, $proyectoSeleccionado);
        $em->persist($proyectoEmpleado);
        $em->flush();
        
        $this->addFlash(
                'notice',
                'El empleado fue agregado al proyecto.'
                );
        
        return $this->render('MTDProyectoBundle:Proyecto:listaEmpleados.html.twig', array('proyectoSeleccionado' => $proyectoSeleccionado, "categoriasProyecto"=>$categoriasProyecto));
    }
}
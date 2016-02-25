<?php

namespace MTD\ProyectoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MTD\SeleccionBundle\Entity\Proyecto_Empleado;

class ProyectoEmpleadoNombreController extends Controller
{
    
    public function mostrarAction(Request $request, $id)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $proyectoSeleccionado = $em->getRepository('MTDProyectoBundle:Proyecto')->find($id);
        
        $contrataciones = $em->getRepository('MTDSeleccionBundle:Contratacion')->findAll();
        $empleados = array();
        //$i = 0;
        foreach($contrataciones  as $contratacion){
            if($contratacion->getActivo() && $contratacion->getEmpleado()->getContratado() && $contratacion->getEmpleado()->getOperativo()){
                $activador = "TRUE";
                foreach($contratacion->getEmpleado()->getProyectoEmpleado()  as $proyectoEmpleado){
                    $proyecto = $proyectoEmpleado->getProyecto();
                    if($proyecto == $proyectoSeleccionado){
                        $activador = "FALSE";
                    }
                }
                if($activador == "TRUE"){
                    array_push($empleados, $contratacion->getEmpleado()->getApellido().' '.$contratacion->getEmpleado()->getNombre());
                    //$empleados[$i] = array('apellido'=>$contratacion->getEmpleado()->getApellido(), 'nombre'=>$contratacion->getEmpleado()->getNombre());
                    //$i++;
                }  
            }
        }
        
        return $this->render('MTDProyectoBundle:Proyecto:registroEmpleadosNombre.html.twig', array('proyectoSeleccionado' => $proyectoSeleccionado, 'empleados'=> $empleados));
    }
    
    public function registrarAction(Request $request, $idProyecto)
    {
        
        $em = $this->getDoctrine()->getManager();
        $proyectoSeleccionado = $em->getRepository('MTDProyectoBundle:Proyecto')->find($idProyecto);
        $categoriasProyecto = $proyectoSeleccionado->getCategoria();
        $nombreCompleto = $this->get('request')->request->get('nombre');
        $apellidoDividido = explode(" ", $nombreCompleto);
        $apellido = $apellidoDividido[0];
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->findOneBy(array('apellido' => $apellido));
        if($empleado){
            $this->guardar($empleado, $proyectoSeleccionado);
        }else{
            $i = 1;
            for($i; $i < count($apellidoDividido); $i++){
                $apellido = $apellido." ".$apellidoDividido[$i];
                $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->findOneBy(array('apellido' => $apellido));
                if($empleado){
                    $this->guardar($empleado, $proyectoSeleccionado);
                    break;
                }
            }
        }
        if($empleado){
            $this->addFlash(
                'notice',
                'El empleado fue agregado al proyecto.'
                );
        }else{
            $this->addFlash(
                'notice',
                'El empleado no existe.'
                );
        }
        return $this->render('MTDProyectoBundle:Proyecto:listaEmpleados.html.twig', array('proyectoSeleccionado' => $proyectoSeleccionado, "categoriasProyecto"=>$categoriasProyecto));
    }
    
    public function guardar($empleado, $proyectoSeleccionado){
        $em = $this->getDoctrine()->getManager();
        $proyectoEmpleado = new Proyecto_Empleado();
        $proyectoEmpleado->setEmpleado($empleado);
        $proyectoEmpleado->setProyecto($proyectoSeleccionado);
        $proyectoEmpleado->setActivo("TRUE");
        
        $em->persist($proyectoEmpleado);
        $em->flush();
    }
}
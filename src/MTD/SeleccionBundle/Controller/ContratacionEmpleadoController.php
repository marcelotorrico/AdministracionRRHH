<?php

namespace MTD\SeleccionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MTD\SeleccionBundle\Entity\Contratacion;

class ContratacionEmpleadoController extends Controller
{
    
    public function mostrarAction(Request $request, $id, $idCategoria)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $postulante = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        $categoria = $em->getRepository('MTDCategoriasTrabajoBundle:Categoria')->find($idCategoria);
        
        return $this->render('MTDSeleccionBundle:Seleccion:contratacionEmpleado.html.twig', array('postulante' => $postulante, "categoria"=>$categoria));
    }
    
    public function registrarAction(Request $request, $id, $idCategoria)
    {
        
        $em = $this->getDoctrine()->getManager();
        
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        $entrevista = $this->get('request')->request->get('entrevista');
        $examenMedico = $this->get('request')->request->get('examen');
        $fechaIngreso = $this->get('request')->request->get('mtd_proyectobundle_proyecto_plazoEntrega');
        $observaciones = $this->get('request')->request->get('observaciones');
        
        if($empleado->getContratado()){
            $contrataciones = $empleado->getContratacion();
            foreach($contrataciones  as $contratacion){
                $contratacion->setActivo("FALSE");
                break;
            }
            $this->addFlash(
                    'notice',
                    'El ascenso del empleado fue registrado correctamente'
                );
        }else{
            $empleado->setContratado("TRUE");
            $this->addFlash(
                    'notice',
                    'El empleado fue contratado correctamente'
                );
        }
        
        $contratacion = new Contratacion();

        $contratacion->setEmpleado($empleado);
        $contratacion->setEntrevista($entrevista);
        $contratacion->setExamenMedico($examenMedico);
        $contratacion->setFechaIngreso(new \DateTime($fechaIngreso));
        $contratacion->setObservaciones($observaciones);
        $contratacion->setCategoria($idCategoria);
        $contratacion->setActivo("TRUE");

        $em->persist($contratacion);
        $em->persist($empleado);
        $em->flush();

        return $this->redirect($this->generateUrl('mtd_empleados_lista'));
    }
}
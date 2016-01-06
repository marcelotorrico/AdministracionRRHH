<?php

namespace MTD\ReclutamientoBundle\Controller;

use MTD\ReclutamientoBundle\Entity\Empleado_Requisito;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RegistroPerfilTecnicoController extends Controller
{
    
    public function registrarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);

        $requisitos = $this->get('request')->request->get('requisitos');
        foreach($requisitos  as $requisitoId) {
            $empleadoRequisito = new Empleado_Requisito();
            $requisito = $em->getRepository('MTDCategoriasTrabajoBundle:Requisito_Categoria')->find($requisitoId);

            $empleadoRequisito->setEmpleado($empleado);
            $empleadoRequisito->setRequisito($requisito);
            
            $em->persist($empleadoRequisito);
            $em->flush();
        }

        $this->addFlash(
            'notice',
            'El perfil tecnico del postulante fue registrado correctamente'
        );

        return $this->redirect($this->generateUrl('mtd_postulante_registro'));
    }
    
}
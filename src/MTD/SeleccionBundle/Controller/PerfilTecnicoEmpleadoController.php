<?php

namespace MTD\SeleccionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PerfilTecnicoEmpleadoController extends Controller
{
    
    public function mostrarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        $todasCategorias = $em->getRepository('MTDCategoriasTrabajoBundle:Categoria')->findAll();
        $perfil = $empleado->getEmpleadoRequisito();
        
        foreach($perfil  as $requisito) {
                if($requisito->getActivo()){
                    $categoria = $requisito->getRequisito()->getCategoria();
                }
        }

        return $this->render('MTDSeleccionBundle:Seleccion:perfilTecnicoEmpleado.html.twig', array("empleado"=>$empleado, "perfil"=>$perfil, "categoria"=>$categoria, "todasCategorias"=>$todasCategorias));
        
    }
}
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
        
        $categoriasAnteriores = array();
        $i = 0;
        foreach($empleado->getContratacion() as $contratacion){
            if(!$contratacion->getActivo()){
                $idCategoria = $contratacion->getCategoria();
                $categoria = $em->getRepository('MTDCategoriasTrabajoBundle:Categoria')->find($idCategoria);
                $requisitos = $this->getRequisitosCumplidos($categoria, $empleado);
                $categoriasAnteriores[$i] = array('categoria' => $categoria, 'requisitos'=>$requisitos);
            }
        }

        return $this->render('MTDSeleccionBundle:Seleccion:perfilTecnicoEmpleado.html.twig', array("empleado"=>$empleado, "perfil"=>$perfil, "categoria"=>$categoria, "todasCategorias"=>$todasCategorias));
        
    }
    
    public function getRequisitosCumplidos($categoria, $empleado) {
        $requisitos = array();
        $i = 0;
        foreach($empleado->getEmpleadoRequisito() as $requisitoEmpleado){
            foreach($categoria->getRequisitoCategoria() as $requisitoCategoria){
                if($requisitoEmpleado == $requisitoCategoria){
                    $requisitos[$i] = array('requisito' => $requisitoEmpleado->getNombre());
                    $i++;
                }
            }
        }
        return $requisitos;
    }
}
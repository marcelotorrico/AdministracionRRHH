<?php

namespace MTD\ProductividadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ListaEmpleadosController extends Controller
{
    
    public function listarAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $empleadosContratados = $em->getRepository('MTDSeleccionBundle:Contratacion')->findBy(array('activo' => TRUE));
        $resultado = array();
        $posicion = array();
        foreach($empleadosContratados as $i => $contratacion){
            $empleado = $contratacion->getEmpleado();
            if($empleado->getContratado()){
                $idCategoria = $contratacion->getCategoria();
                $categoria = $em->getRepository('MTDCategoriasTrabajoBundle:Categoria')->find($idCategoria);
                $posicion[$i] = $contratacion->getEmpleado()->getApellido().', '.$contratacion->getEmpleado()->getNombre();
                $resultado[$i] = array('contratacion' => $contratacion, 'categoria' => $categoria);
            }
        }
        asort($posicion);

        $contrataciones = array();

        foreach ($posicion as $i => $pos) {
            $contrataciones[] = $resultado[$i];
        }
        
        $proyectos = $em->getRepository('MTDProyectoBundle:Proyecto')->findAll();
        
        return $this->render('MTDProductividadBundle:Productividad:listaEmpleados.html.twig', array('contrataciones' => $contrataciones, 'proyectos' => $proyectos));
    }
    
}
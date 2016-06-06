<?php

namespace MTD\AsistenciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ListaAdministrativosController extends Controller
{
    
    public function listarAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $empleadosContratados = $em->getRepository('MTDSeleccionBundle:Contratacion')->findBy(array('activo' => TRUE));
        $resultado = array();
        $posicion = array();
        foreach($empleadosContratados as $i => $contratacion){
            $empleado = $contratacion->getEmpleado();
            if($empleado->getContratado() && !$empleado->getOperativo()){
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
        
        return $this->render('MTDAsistenciaBundle:Asistencia:listaAdministrativos.html.twig', array('contrataciones' => $contrataciones, 'proyectos' => $proyectos));
    }
    
}
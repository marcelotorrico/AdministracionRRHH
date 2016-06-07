<?php

namespace MTD\ProductividadBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MTD\ProductividadBundle\Controller\SueldosController;
use MTD\ProductividadBundle\Controller\FaltasController;

class PermisosController extends Controller
{
    
    public function mostrarAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $empleado = $em->getRepository('MTDReclutamientoBundle:Empleado')->find($id);
        $faltasController = new FaltasController();
        $sueldosController = new SueldosController();
        $añosAsistencia = $faltasController->getAñoAsistencia($empleado, $sueldosController);
        $ultimoAño = "";
        if($añosAsistencia){
            $ultimoAño = $añosAsistencia[0];
        }
        $todosPermisos = $this->recuperarTodosPermisos($empleado, $añosAsistencia, $sueldosController);
        return $this->render('MTDProductividadBundle:Productividad:permisos.html.twig', array('empleado' => $empleado, 'añosAsistencia' => $añosAsistencia, 'ultimoAño' => $ultimoAño, 'todosPermisos' => $todosPermisos));
    }
    
    public function recuperarTodosPermisos($empleado, $añosAsistencia, $sueldosController) {
        $respuesta = array();
        if($añosAsistencia){
            $i = 0;
            foreach ($añosAsistencia as $año){
                $permisosAño = $this->recuperarPermisos($empleado, $año, $sueldosController);
                $respuesta[$i] = array('año' => $año, 'permisosAño' => $permisosAño);
                $i++;
            }
        }
        return $respuesta;
    }
    
    public function recuperarPermisos($empleado, $año, $sueldosController) {
        $respuesta = array();
        $sueldos = $empleado->getSueldos();
        foreach($sueldos as $sueldo){
            $añoSueldo = $sueldosController->getAño($sueldo, "año");
            if($añoSueldo == $año){
                $i = $sueldosController->getPosicionSueldo($sueldo);
                $permiso = $this->getPermiso($sueldo);
                $respuesta[$i] = $permiso;
            }
        }
        return $respuesta;
    }
    
    public function getPermiso($sueldo) {
        $permiso = 0;
        foreach ($sueldo->getFallaAcumulada() as $fallaAcumulada){
            $permiso = $permiso + $fallaAcumulada->getPermiso();
        }
        return $permiso;
    }
}
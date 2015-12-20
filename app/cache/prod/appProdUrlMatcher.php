<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // mtd_contratacion_empleados_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_contratacion_empleados_homepage')), array (  '_controller' => 'MTD\\ContratacionEmpleadosBundle\\Controller\\DefaultController::indexAction',));
        }

        // mtd_proyecto_registro
        if ($pathinfo === '/proyecto/registro') {
            return array (  '_controller' => 'MTD\\ContratacionEmpleadosBundle\\Controller\\RegistroProyectoController::registroAction',  '_route' => 'mtd_proyecto_registro',);
        }

        if (0 === strpos($pathinfo, '/registro')) {
            // mtd_cliente_registro
            if ($pathinfo === '/registro/cliente') {
                return array (  '_controller' => 'MTD\\ContratacionEmpleadosBundle\\Controller\\RegistroClienteController::registroClienteAction',  '_route' => 'mtd_cliente_registro',);
            }

            // mtd_tipoProyecto_registro
            if ($pathinfo === '/registro/tipoProyecto') {
                return array (  '_controller' => 'MTD\\ContratacionEmpleadosBundle\\Controller\\TipoProyectoController::registroTipoProyectoAction',  '_route' => 'mtd_tipoProyecto_registro',);
            }

        }

        if (0 === strpos($pathinfo, '/proyecto')) {
            // mtd_lista_proyecto
            if ($pathinfo === '/proyecto/lista') {
                return array (  '_controller' => 'MTD\\ContratacionEmpleadosBundle\\Controller\\ListaProyectoController::listaAction',  '_route' => 'mtd_lista_proyecto',);
            }

            // mtd_editar_proyecto
            if (0 === strpos($pathinfo, '/proyecto/editar') && preg_match('#^/proyecto/editar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_editar_proyecto')), array (  '_controller' => 'MTD\\ContratacionEmpleadosBundle\\Controller\\EditaProyectoController::editarAction',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

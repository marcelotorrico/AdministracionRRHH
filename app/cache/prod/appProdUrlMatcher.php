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

        // mtd_categorias_trabajo_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_categorias_trabajo_homepage')), array (  '_controller' => 'MTD\\CategoriasTrabajoBundle\\Controller\\DefaultController::indexAction',));
        }

        // mtd_categoria_crear
        if ($pathinfo === '/categoria/crear') {
            return array (  '_controller' => 'MTD\\CategoriasTrabajoBundle\\Controller\\RegistroCategoriaController::registroAction',  '_route' => 'mtd_categoria_crear',);
        }

        if (0 === strpos($pathinfo, '/requisito')) {
            // mtd_requisito_crear
            if ($pathinfo === '/requisito/crear') {
                return array (  '_controller' => 'MTD\\CategoriasTrabajoBundle\\Controller\\RegistroRequisitoController::registroAction',  '_route' => 'mtd_requisito_crear',);
            }

            // mtd_requisito_registrar
            if ($pathinfo === '/requisito/registrar') {
                return array (  '_controller' => 'MTD\\CategoriasTrabajoBundle\\Controller\\RequisitoController::registroAction',  '_route' => 'mtd_requisito_registrar',);
            }

            // mtd_requisito_eliminar
            if (0 === strpos($pathinfo, '/requisito/eliminar') && preg_match('#^/requisito/eliminar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_requisito_eliminar')), array (  '_controller' => 'MTD\\CategoriasTrabajoBundle\\Controller\\EliminaRequisitoController::eliminarAction',));
            }

        }

        if (0 === strpos($pathinfo, '/categoria')) {
            // mtd_categoria_lista
            if ($pathinfo === '/categoria/lista') {
                return array (  '_controller' => 'MTD\\CategoriasTrabajoBundle\\Controller\\ListaCategoriaController::listarAction',  '_route' => 'mtd_categoria_lista',);
            }

            if (0 === strpos($pathinfo, '/categoria/e')) {
                // mtd_categoria_editar
                if (0 === strpos($pathinfo, '/categoria/editar') && preg_match('#^/categoria/editar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_categoria_editar')), array (  '_controller' => 'MTD\\CategoriasTrabajoBundle\\Controller\\EditaCategoriaController::editarAction',));
                }

                // mtd_categoria_eliminar
                if (0 === strpos($pathinfo, '/categoria/eliminar') && preg_match('#^/categoria/eliminar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_categoria_eliminar')), array (  '_controller' => 'MTD\\CategoriasTrabajoBundle\\Controller\\EliminaCategoriaController::eliminarAction',));
                }

            }

        }

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

            if (0 === strpos($pathinfo, '/proyecto/e')) {
                // mtd_editar_proyecto
                if (0 === strpos($pathinfo, '/proyecto/editar') && preg_match('#^/proyecto/editar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_editar_proyecto')), array (  '_controller' => 'MTD\\ContratacionEmpleadosBundle\\Controller\\EditaProyectoController::editarAction',));
                }

                // mtd_eliminar_proyecto
                if (0 === strpos($pathinfo, '/proyecto/eliminar') && preg_match('#^/proyecto/eliminar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_eliminar_proyecto')), array (  '_controller' => 'MTD\\ContratacionEmpleadosBundle\\Controller\\EliminaProyectoController::eliminarAction',));
                }

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

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

        // mtd_seleccion_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_seleccion_homepage')), array (  '_controller' => 'MTD\\SeleccionBundle\\Controller\\DefaultController::indexAction',));
        }

        // mtd_postulante_contratar
        if (0 === strpos($pathinfo, '/postulante/contratacion') && preg_match('#^/postulante/contratacion/(?P<id>[^/]++)/(?P<idCategoria>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_postulante_contratar')), array (  '_controller' => 'MTD\\SeleccionBundle\\Controller\\ContratacionEmpleadoController::mostrarAction',));
        }

        if (0 === strpos($pathinfo, '/empleado')) {
            // mtd_empleado_registro
            if (0 === strpos($pathinfo, '/empleado/registro') && preg_match('#^/empleado/registro/(?P<id>[^/]++)/(?P<idCategoria>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_empleado_registro')), array (  '_controller' => 'MTD\\SeleccionBundle\\Controller\\ContratacionEmpleadoController::registrarAction',));
            }

            // mtd_empleados_lista
            if ($pathinfo === '/empleados/lista') {
                return array (  '_controller' => 'MTD\\SeleccionBundle\\Controller\\ListaEmpleadosController::listarAction',  '_route' => 'mtd_empleados_lista',);
            }

            // mtd_empleado_ver
            if (0 === strpos($pathinfo, '/empleado/ver') && preg_match('#^/empleado/ver/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_empleado_ver')), array (  '_controller' => 'MTD\\SeleccionBundle\\Controller\\EmpleadoInformacionController::mostrarAction',));
            }

            // mtd_empleado_perfilTecnico
            if (0 === strpos($pathinfo, '/empleado/perfil') && preg_match('#^/empleado/perfil/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_empleado_perfilTecnico')), array (  '_controller' => 'MTD\\SeleccionBundle\\Controller\\PerfilTecnicoEmpleadoController::mostrarAction',));
            }

        }

        // mtd_empleado_proyectos_participa
        if (0 === strpos($pathinfo, '/proyectos/empleado') && preg_match('#^/proyectos/empleado/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_empleado_proyectos_participa')), array (  '_controller' => 'MTD\\SeleccionBundle\\Controller\\ProyectosEmpleadoController::listarAction',));
        }

        // mtd_reclutamiento_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_reclutamiento_homepage')), array (  '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\DefaultController::indexAction',));
        }

        // mtd_postulante_registro
        if ($pathinfo === '/postulante/registro') {
            return array (  '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\RegistroPostulanteController::registrarAction',  '_route' => 'mtd_postulante_registro',);
        }

        // mtd_lugar_empleado
        if ($pathinfo === '/registro/lugarEmpleado') {
            return array (  '_controller' => 'MTDReclutamientoBundle:Lugar:registrar',  '_route' => 'mtd_lugar_empleado',);
        }

        if (0 === strpos($pathinfo, '/postulante')) {
            if (0 === strpos($pathinfo, '/postulante/registro')) {
                // mtd_postulante_requisito
                if (0 === strpos($pathinfo, '/postulante/registroPerfil') && preg_match('#^/postulante/registroPerfil/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_postulante_requisito')), array (  '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\FormularioPerfilTecnicoController::registrarAction',));
                }

                // mtd_postulante_registrar_requisito
                if (0 === strpos($pathinfo, '/postulante/registroRequisitoPerfil') && preg_match('#^/postulante/registroRequisitoPerfil/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_postulante_registrar_requisito')), array (  '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\RegistroPerfilTecnicoController::registrarAction',));
                }

            }

            // mtd_postulante_lista
            if ($pathinfo === '/postulantes/lista') {
                return array (  '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\ListaController::listarAction',  '_route' => 'mtd_postulante_lista',);
            }

            // mtd_postulante_ver
            if (0 === strpos($pathinfo, '/postulante/ver') && preg_match('#^/postulante/ver/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_postulante_ver')), array (  '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\InformacionController::mostrarAction',));
            }

            if (0 === strpos($pathinfo, '/postulante/e')) {
                // mtd_postulante_eliminar
                if (0 === strpos($pathinfo, '/postulante/eliminar') && preg_match('#^/postulante/eliminar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_postulante_eliminar')), array (  '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\EliminaPostulanteController::eliminarAction',));
                }

                // mtd_postulante_editar
                if (0 === strpos($pathinfo, '/postulante/editar') && preg_match('#^/postulante/editar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_postulante_editar')), array (  '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\EditaPostulanteController::editarAction',));
                }

            }

            if (0 === strpos($pathinfo, '/postulante/perfilTecnico')) {
                // mtd_perfil_tecnico_ver
                if (0 === strpos($pathinfo, '/postulante/perfilTecnico/ver') && preg_match('#^/postulante/perfilTecnico/ver/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_perfil_tecnico_ver')), array (  '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\PerfilTecnicoInformacionController::mostrarAction',));
                }

                // mtd_perfil_tecnico_editar
                if (0 === strpos($pathinfo, '/postulante/perfilTecnico/editar') && preg_match('#^/postulante/perfilTecnico/editar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_perfil_tecnico_editar')), array (  '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\PerfilTecnicoEditaController::editarAction',));
                }

            }

            // mtd_postulante_mostrar_requisito_editar
            if (0 === strpos($pathinfo, '/postulante/registroPerfil/requisitos/editar') && preg_match('#^/postulante/registroPerfil/requisitos/editar/(?P<id>[^/]++)/(?P<idEmpleado>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_postulante_mostrar_requisito_editar')), array (  '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\PerfilTecnicoEditaController::mostrarRequisitosAction',));
            }

            if (0 === strpos($pathinfo, '/postulantes')) {
                // mtd_buscar_empleado
                if ($pathinfo === '/postulantes/buscar') {
                    return array (  '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\BuscadorEmpleadosController::buscarAction',  '_route' => 'mtd_buscar_empleado',);
                }

                // mtd_empleados_idoneos
                if (0 === strpos($pathinfo, '/postulantes/idoneos') && preg_match('#^/postulantes/idoneos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_empleados_idoneos')), array (  '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\BuscadorEmpleadosController::mostrarIdoneosAction',));
                }

            }

        }

        // mtd_proyecto_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_proyecto_homepage')), array (  '_controller' => 'MTD\\ProyectoBundle\\Controller\\DefaultController::indexAction',));
        }

        // mtd_inicio
        if ($pathinfo === '/inicio') {
            return array (  '_controller' => 'MTD\\ProyectoBundle\\Controller\\InicioController::mostrarAction',  '_route' => 'mtd_inicio',);
        }

        // mtd_proyecto_registro
        if ($pathinfo === '/proyecto/registro') {
            return array (  '_controller' => 'MTD\\ProyectoBundle\\Controller\\RegistroProyectoController::registroAction',  '_route' => 'mtd_proyecto_registro',);
        }

        if (0 === strpos($pathinfo, '/registro')) {
            // mtd_cliente_registro
            if ($pathinfo === '/registro/cliente') {
                return array (  '_controller' => 'MTD\\ProyectoBundle\\Controller\\RegistroClienteController::registroClienteAction',  '_route' => 'mtd_cliente_registro',);
            }

            // mtd_tipoProyecto_registro
            if ($pathinfo === '/registro/tipoProyecto') {
                return array (  '_controller' => 'MTD\\ProyectoBundle\\Controller\\TipoProyectoController::registroTipoProyectoAction',  '_route' => 'mtd_tipoProyecto_registro',);
            }

            // mtd_lugar_registro
            if ($pathinfo === '/registro/lugar') {
                return array (  '_controller' => 'MTD\\ProyectoBundle\\Controller\\LugarController::registrarAction',  '_route' => 'mtd_lugar_registro',);
            }

        }

        if (0 === strpos($pathinfo, '/proyecto')) {
            // mtd_lista_proyecto
            if ($pathinfo === '/proyecto/lista') {
                return array (  '_controller' => 'MTD\\ProyectoBundle\\Controller\\ListaProyectoController::listaAction',  '_route' => 'mtd_lista_proyecto',);
            }

            if (0 === strpos($pathinfo, '/proyecto/e')) {
                // mtd_editar_proyecto
                if (0 === strpos($pathinfo, '/proyecto/editar') && preg_match('#^/proyecto/editar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_editar_proyecto')), array (  '_controller' => 'MTD\\ProyectoBundle\\Controller\\EditaProyectoController::editarAction',));
                }

                // mtd_eliminar_proyecto
                if (0 === strpos($pathinfo, '/proyecto/eliminar') && preg_match('#^/proyecto/eliminar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_eliminar_proyecto')), array (  '_controller' => 'MTD\\ProyectoBundle\\Controller\\EliminaProyectoController::eliminarAction',));
                }

            }

            // mtd_mostrar_proyecto
            if (0 === strpos($pathinfo, '/proyecto/mostrar') && preg_match('#^/proyecto/mostrar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_mostrar_proyecto')), array (  '_controller' => 'MTD\\ProyectoBundle\\Controller\\InformacionProyectoController::mostrarAction',));
            }

        }

        // mtd_categorias_proyecto
        if (0 === strpos($pathinfo, '/categoria/proyecto') && preg_match('#^/categoria/proyecto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_categorias_proyecto')), array (  '_controller' => 'MTD\\ProyectoBundle\\Controller\\CategoriaProyectoController::listarAction',));
        }

        if (0 === strpos($pathinfo, '/proyecto')) {
            if (0 === strpos($pathinfo, '/proyecto/empleados')) {
                // mtd_proyecto_empleado
                if (preg_match('#^/proyecto/empleados/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_proyecto_empleado')), array (  '_controller' => 'MTD\\ProyectoBundle\\Controller\\ProyectoEmpleadoController::asignarAction',));
                }

                // mtd_proyecto_empleado_agregar
                if (0 === strpos($pathinfo, '/proyecto/empleados/agregar') && preg_match('#^/proyecto/empleados/agregar/(?P<id>[^/]++)/(?P<proyecto>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_proyecto_empleado_agregar')), array (  '_controller' => 'MTD\\ProyectoBundle\\Controller\\ProyectoEmpleadoController::mostrarAction',));
                }

                // mtd_proyecto_empleado_registro
                if (0 === strpos($pathinfo, '/proyecto/empleados/registro') && preg_match('#^/proyecto/empleados/registro/(?P<id>[^/]++)/(?P<idProyecto>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_proyecto_empleado_registro')), array (  '_controller' => 'MTD\\ProyectoBundle\\Controller\\EmpleadoRegistroController::registrarAction',));
                }

            }

            // mtd_proyecto_lista_empleados
            if (0 === strpos($pathinfo, '/proyecto/lista/empleados') && preg_match('#^/proyecto/lista/empleados/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_proyecto_lista_empleados')), array (  '_controller' => 'MTD\\ProyectoBundle\\Controller\\ListaEmpleadosController::listarAction',));
            }

        }

        // mtd_lista_clientes
        if ($pathinfo === '/clientes/lista') {
            return array (  '_controller' => 'MTD\\ProyectoBundle\\Controller\\ListaClientesController::listarAction',  '_route' => 'mtd_lista_clientes',);
        }

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

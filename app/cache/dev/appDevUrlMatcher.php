<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // mtd_sueldos_salarios_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_sueldos_salarios_homepage')), array (  '_controller' => 'MTD\\SueldosSalariosBundle\\Controller\\DefaultController::indexAction',));
        }

        // mtd_sueldos_ver
        if ($pathinfo === '/sueldosSalarios/ver') {
            return array (  '_controller' => 'MTD\\SueldosSalariosBundle\\Controller\\MuestraSueldosController::mostrarAction',  '_route' => 'mtd_sueldos_ver',);
        }

        if (0 === strpos($pathinfo, '/descuento')) {
            // mtd_descuentos_empleados
            if ($pathinfo === '/descuentos/empleados') {
                return array (  '_controller' => 'MTD\\SueldosSalariosBundle\\Controller\\DescuentosEmpleadosController::listarAction',  '_route' => 'mtd_descuentos_empleados',);
            }

            // mtd_descuentos_registro
            if (0 === strpos($pathinfo, '/descuento/registro') && preg_match('#^/descuento/registro/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_descuentos_registro')), array (  '_controller' => 'MTD\\SueldosSalariosBundle\\Controller\\DescuentosEmpleadosController::mostrarAction',));
            }

            // mtd_registro_afps_anticipos
            if (0 === strpos($pathinfo, '/descuento/afpsAnticipo') && preg_match('#^/descuento/afpsAnticipo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_registro_afps_anticipos')), array (  '_controller' => 'MTD\\SueldosSalariosBundle\\Controller\\DescuentosEmpleadosController::registrarAction',));
            }

        }

        if (0 === strpos($pathinfo, '/viaticos')) {
            // mtd_viaticos_registro
            if (0 === strpos($pathinfo, '/viaticos/registro') && preg_match('#^/viaticos/registro/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_viaticos_registro')), array (  '_controller' => 'MTD\\SueldosSalariosBundle\\Controller\\ViaticosPremiosController::mostrarAction',));
            }

            // mtd_viaticos_premios_registro
            if (0 === strpos($pathinfo, '/viaticosPremios/registro') && preg_match('#^/viaticosPremios/registro/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_viaticos_premios_registro')), array (  '_controller' => 'MTD\\SueldosSalariosBundle\\Controller\\ViaticosPremiosController::registrarAction',));
            }

        }

        if (0 === strpos($pathinfo, '/sueldo/detalle')) {
            // mtd_sueldoDetalle_diasNoTrabajados
            if (0 === strpos($pathinfo, '/sueldo/detalle/diasNoTrabajados') && preg_match('#^/sueldo/detalle/diasNoTrabajados/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_sueldoDetalle_diasNoTrabajados')), array (  '_controller' => 'MTD\\SueldosSalariosBundle\\Controller\\DetalleSueldosController::diasNoTrabajadosAction',));
            }

            // mtd_sueldoDetalle_horasExtras
            if (0 === strpos($pathinfo, '/sueldo/detalle/horasExtras') && preg_match('#^/sueldo/detalle/horasExtras/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_sueldoDetalle_horasExtras')), array (  '_controller' => 'MTD\\SueldosSalariosBundle\\Controller\\DetalleSueldosController::horasExtrasAction',));
            }

            // mtd_sueldoDetalle_bonoAntiguedad
            if (0 === strpos($pathinfo, '/sueldo/detalle/bonoAntiguedad') && preg_match('#^/sueldo/detalle/bonoAntiguedad/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_sueldoDetalle_bonoAntiguedad')), array (  '_controller' => 'MTD\\SueldosSalariosBundle\\Controller\\DetalleSueldosController::bonoAntiguedadAction',));
            }

            // mtd_sueldoDetalle_descuentos
            if (0 === strpos($pathinfo, '/sueldo/detalle/descuentos') && preg_match('#^/sueldo/detalle/descuentos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_sueldoDetalle_descuentos')), array (  '_controller' => 'MTD\\SueldosSalariosBundle\\Controller\\DetalleSueldosController::descuentosAction',));
            }

            // mtd_sueldoDetalle_premios
            if (0 === strpos($pathinfo, '/sueldo/detalle/premios') && preg_match('#^/sueldo/detalle/premios/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_sueldoDetalle_premios')), array (  '_controller' => 'MTD\\SueldosSalariosBundle\\Controller\\DetalleSueldosController::premiosAction',));
            }

        }

        // mtd_asistencia_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_asistencia_homepage')), array (  '_controller' => 'MTD\\AsistenciaBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/asistencia')) {
            // mtd_asistencia_empleado
            if (0 === strpos($pathinfo, '/asistencia/postulante') && preg_match('#^/asistencia/postulante/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_asistencia_empleado')), array (  '_controller' => 'MTD\\AsistenciaBundle\\Controller\\RegistroAsistenciaController::mostrarAction',));
            }

            // mtd_asistencia_empleado_administrativo
            if (0 === strpos($pathinfo, '/asistencia/administrativo') && preg_match('#^/asistencia/administrativo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_asistencia_empleado_administrativo')), array (  '_controller' => 'MTD\\AsistenciaBundle\\Controller\\RegistroAsistenciaAdministrativoController::mostrarAction',));
            }

            if (0 === strpos($pathinfo, '/asistencia/registro')) {
                // mtd_asistencia_registro
                if (preg_match('#^/asistencia/registro/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_asistencia_registro')), array (  '_controller' => 'MTD\\AsistenciaBundle\\Controller\\RegistroAsistenciaController::registrarAction',));
                }

                // mtd_asistencia_registro_administrativo
                if (0 === strpos($pathinfo, '/asistencia/registro/administrativo') && preg_match('#^/asistencia/registro/administrativo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_asistencia_registro_administrativo')), array (  '_controller' => 'MTD\\AsistenciaBundle\\Controller\\RegistroAsistenciaAdministrativoController::registrarAction',));
                }

            }

            // mtd_asistencia_operativos
            if ($pathinfo === '/asistencia/operativos') {
                return array (  '_controller' => 'MTD\\AsistenciaBundle\\Controller\\ListaOperativosController::listarAction',  '_route' => 'mtd_asistencia_operativos',);
            }

            // mtd_asistencia_administrativos
            if ($pathinfo === '/asistencia/administrativos') {
                return array (  '_controller' => 'MTD\\AsistenciaBundle\\Controller\\ListaAdministrativosController::listarAction',  '_route' => 'mtd_asistencia_administrativos',);
            }

            // mtd_asistencia_mostrar
            if (0 === strpos($pathinfo, '/asistencia/empleado/ver') && preg_match('#^/asistencia/empleado/ver/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_asistencia_mostrar')), array (  '_controller' => 'MTD\\AsistenciaBundle\\Controller\\InformacionAsistenciaController::mostrarAction',));
            }

            // mtd_asistencia_administrativo_mostrar
            if (0 === strpos($pathinfo, '/asistencia/administrativo/ver') && preg_match('#^/asistencia/administrativo/ver/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_asistencia_administrativo_mostrar')), array (  '_controller' => 'MTD\\AsistenciaBundle\\Controller\\InformacionAsistenciaAdministrativoController::mostrarAction',));
            }

            // mtd_asistencia_detalle_tabla
            if (0 === strpos($pathinfo, '/asistencia/detalle/tabla') && preg_match('#^/asistencia/detalle/tabla/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_asistencia_detalle_tabla')), array (  '_controller' => 'MTD\\AsistenciaBundle\\Controller\\DetalleTablaController::mostrarAction',));
            }

        }

        // mtd_inasistencia_detalle_tabla
        if (0 === strpos($pathinfo, '/inasistencia/detalle/tabla') && preg_match('#^/inasistencia/detalle/tabla/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_inasistencia_detalle_tabla')), array (  '_controller' => 'MTD\\AsistenciaBundle\\Controller\\DetalleTablaController::mostrarInasistenciaAction',));
        }

        // mtd_asistencia_elimina
        if (0 === strpos($pathinfo, '/asistencia/elimina') && preg_match('#^/asistencia/elimina/(?P<id>[^/]++)/(?P<idEmpleado>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_asistencia_elimina')), array (  '_controller' => 'MTD\\AsistenciaBundle\\Controller\\EliminaAsistenciaController::eliminarAction',));
        }

        if (0 === strpos($pathinfo, '/inasistencia/operativo')) {
            // mtd_inasistencia_operativo
            if (preg_match('#^/inasistencia/operativo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_inasistencia_operativo')), array (  '_controller' => 'MTD\\AsistenciaBundle\\Controller\\RegistroInasistenciaController::mostrarAction',));
            }

            // mtd_inasistencia_operativo_registro
            if (0 === strpos($pathinfo, '/inasistencia/operativo/registro') && preg_match('#^/inasistencia/operativo/registro/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_inasistencia_operativo_registro')), array (  '_controller' => 'MTD\\AsistenciaBundle\\Controller\\RegistroInasistenciaController::registrarAction',));
            }

        }

        if (0 === strpos($pathinfo, '/asistencia')) {
            // mtd_asistencia_feriado
            if ($pathinfo === '/asistencia/feriado') {
                return array (  '_controller' => 'MTD\\AsistenciaBundle\\Controller\\RegistroFeriadoController::registrarAction',  '_route' => 'mtd_asistencia_feriado',);
            }

            // mtd_asistencia_configuracion
            if ($pathinfo === '/asistencia/configuracion') {
                return array (  '_controller' => 'MTD\\AsistenciaBundle\\Controller\\RegistroConfiguracionController::mostrarAction',  '_route' => 'mtd_asistencia_configuracion',);
            }

        }

        // mtd_registrar_configuracion
        if ($pathinfo === '/registrar/configuracion') {
            return array (  '_controller' => 'MTD\\AsistenciaBundle\\Controller\\RegistroConfiguracionController::registrarAction',  '_route' => 'mtd_registrar_configuracion',);
        }

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

        }

        // mtd_empleado_eliminar
        if (0 === strpos($pathinfo, '/postulante/eliminar') && preg_match('#^/postulante/eliminar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_empleado_eliminar')), array (  '_controller' => 'MTD\\SeleccionBundle\\Controller\\EliminaEmpleadoController::eliminarAction',));
        }

        // mtd_empleado_perfilTecnico
        if (0 === strpos($pathinfo, '/empleado/perfil') && preg_match('#^/empleado/perfil/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_empleado_perfilTecnico')), array (  '_controller' => 'MTD\\SeleccionBundle\\Controller\\PerfilTecnicoEmpleadoController::mostrarAction',));
        }

        // mtd_empleado_proyectos_participa
        if (0 === strpos($pathinfo, '/proyectos/empleado') && preg_match('#^/proyectos/empleado/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_empleado_proyectos_participa')), array (  '_controller' => 'MTD\\SeleccionBundle\\Controller\\ProyectosEmpleadoController::listarAction',));
        }

        // mtd_empleados_lista_administrativos
        if ($pathinfo === '/empleados/lista/administrativos') {
            return array (  '_controller' => 'MTD\\SeleccionBundle\\Controller\\ListaEmpleadosAdministrativosController::listarAction',  '_route' => 'mtd_empleados_lista_administrativos',);
        }

        if (0 === strpos($pathinfo, '/documentos')) {
            // mtd_empleado_documentos
            if (0 === strpos($pathinfo, '/documentos/empleado') && preg_match('#^/documentos/empleado/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_empleado_documentos')), array (  '_controller' => 'MTD\\SeleccionBundle\\Controller\\RegistroDocumentoController::registrarAction',));
            }

            // mtd_empleado_listar_documentos
            if (0 === strpos($pathinfo, '/documentos/ver/empleado') && preg_match('#^/documentos/ver/empleado/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_empleado_listar_documentos')), array (  '_controller' => 'MTD\\SeleccionBundle\\Controller\\ListaDocumentosController::listarAction',));
            }

            // mtd_empleado_documento_eliminar
            if (0 === strpos($pathinfo, '/documentos/eliminar/empleado') && preg_match('#^/documentos/eliminar/empleado/(?P<id>[^/]++)/(?P<idEmpleado>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_empleado_documento_eliminar')), array (  '_controller' => 'MTD\\SeleccionBundle\\Controller\\EliminaDocumentoController::eliminarAction',));
            }

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

            // mtd_postulante_administrativo_registro
            if ($pathinfo === '/postulante/registro/administrativo') {
                return array (  '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\RegistroPostulanteAdministrativoController::registrarAction',  '_route' => 'mtd_postulante_administrativo_registro',);
            }

            // mtd_postulante_administrativo_lista
            if ($pathinfo === '/postulantes/lista/administrativos') {
                return array (  '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\ListaAdministrativosController::listarAction',  '_route' => 'mtd_postulante_administrativo_lista',);
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

                // mtd_proyecto_empleado_nombre
                if (0 === strpos($pathinfo, '/proyecto/empleados/nombre') && preg_match('#^/proyecto/empleados/nombre/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_proyecto_empleado_nombre')), array (  '_controller' => 'MTD\\ProyectoBundle\\Controller\\ProyectoEmpleadoNombreController::mostrarAction',));
                }

                // mtd_proyecto_empleado_agregar
                if (0 === strpos($pathinfo, '/proyecto/empleados/agregar') && preg_match('#^/proyecto/empleados/agregar/(?P<id>[^/]++)/(?P<proyecto>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_proyecto_empleado_agregar')), array (  '_controller' => 'MTD\\ProyectoBundle\\Controller\\ProyectoEmpleadoController::mostrarAction',));
                }

                // mtd_proyecto_empleado_registro
                if (0 === strpos($pathinfo, '/proyecto/empleados/registro') && preg_match('#^/proyecto/empleados/registro/(?P<id>[^/]++)/(?P<idProyecto>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_proyecto_empleado_registro')), array (  '_controller' => 'MTD\\ProyectoBundle\\Controller\\EmpleadoRegistroController::registrarAction',));
                }

                // mtd_proyecto_registro_empleado_nombre
                if (0 === strpos($pathinfo, '/proyecto/empleados/nombreRegistro') && preg_match('#^/proyecto/empleados/nombreRegistro/(?P<idProyecto>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_proyecto_registro_empleado_nombre')), array (  '_controller' => 'MTD\\ProyectoBundle\\Controller\\ProyectoEmpleadoNombreController::registrarAction',));
                }

            }

            // mtd_proyecto_lista_empleados
            if (0 === strpos($pathinfo, '/proyecto/lista/empleados') && preg_match('#^/proyecto/lista/empleados/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_proyecto_lista_empleados')), array (  '_controller' => 'MTD\\ProyectoBundle\\Controller\\ListaEmpleadosController::listarAction',));
            }

        }

        if (0 === strpos($pathinfo, '/cliente')) {
            // mtd_lista_clientes
            if ($pathinfo === '/clientes/lista') {
                return array (  '_controller' => 'MTD\\ProyectoBundle\\Controller\\ListaClientesController::listarAction',  '_route' => 'mtd_lista_clientes',);
            }

            // mtd_cliente_edita
            if (0 === strpos($pathinfo, '/cliente/edita') && preg_match('#^/cliente/edita/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_cliente_edita')), array (  '_controller' => 'MTD\\ProyectoBundle\\Controller\\EditaClienteController::editarAction',));
            }

        }

        if (0 === strpos($pathinfo, '/proyecto')) {
            // mtd_proyecto_terminado
            if (0 === strpos($pathinfo, '/proyecto/terminado') && preg_match('#^/proyecto/terminado/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mtd_proyecto_terminado')), array (  '_controller' => 'MTD\\ProyectoBundle\\Controller\\ProyectoTerminadoController::terminarAction',));
            }

            // mtd_lista_proyecto_terminados
            if ($pathinfo === '/proyecto/lista/terminados') {
                return array (  '_controller' => 'MTD\\ProyectoBundle\\Controller\\ListaProyectoTerminadosController::listarAction',  '_route' => 'mtd_lista_proyecto_terminados',);
            }

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

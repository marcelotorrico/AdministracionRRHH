<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_asistencia_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'MTD\\AsistenciaBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_asistencia_empleado' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\AsistenciaBundle\\Controller\\RegistroAsistenciaController::mostrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/asistencia/postulante',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_asistencia_empleado_administrativo' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\AsistenciaBundle\\Controller\\RegistroAsistenciaAdministrativoController::mostrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/asistencia/administrativo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_asistencia_registro' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\AsistenciaBundle\\Controller\\RegistroAsistenciaController::registrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/asistencia/registro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_asistencia_registro_administrativo' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\AsistenciaBundle\\Controller\\RegistroAsistenciaAdministrativoController::registrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/asistencia/registro/administrativo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_asistencia_operativos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MTD\\AsistenciaBundle\\Controller\\ListaOperativosController::listarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/asistencia/operativos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_asistencia_administrativos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MTD\\AsistenciaBundle\\Controller\\ListaAdministrativosController::listarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/asistencia/administrativos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_asistencia_mostrar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\AsistenciaBundle\\Controller\\InformacionAsistenciaController::mostrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/asistencia/empleado/ver',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_asistencia_administrativo_mostrar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\AsistenciaBundle\\Controller\\InformacionAsistenciaAdministrativoController::mostrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/asistencia/administrativo/ver',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_asistencia_detalle_tabla' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\AsistenciaBundle\\Controller\\DetalleTablaController::mostrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/asistencia/detalle/tabla',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_inasistencia_detalle_tabla' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\AsistenciaBundle\\Controller\\DetalleTablaController::mostrarInasistenciaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/inasistencia/detalle/tabla',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_asistencia_elimina' => array (  0 =>   array (    0 => 'id',    1 => 'idEmpleado',  ),  1 =>   array (    '_controller' => 'MTD\\AsistenciaBundle\\Controller\\EliminaAsistenciaController::eliminarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idEmpleado',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/asistencia/elimina',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_inasistencia_operativo' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\AsistenciaBundle\\Controller\\RegistroInasistenciaController::mostrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/inasistencia/operativo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_inasistencia_operativo_registro' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\AsistenciaBundle\\Controller\\RegistroInasistenciaController::registrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/inasistencia/operativo/registro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_asistencia_feriado' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MTD\\AsistenciaBundle\\Controller\\RegistroFeriadoController::registrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/asistencia/feriado',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_seleccion_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'MTD\\SeleccionBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_postulante_contratar' => array (  0 =>   array (    0 => 'id',    1 => 'idCategoria',  ),  1 =>   array (    '_controller' => 'MTD\\SeleccionBundle\\Controller\\ContratacionEmpleadoController::mostrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idCategoria',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/postulante/contratacion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_empleado_registro' => array (  0 =>   array (    0 => 'id',    1 => 'idCategoria',  ),  1 =>   array (    '_controller' => 'MTD\\SeleccionBundle\\Controller\\ContratacionEmpleadoController::registrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idCategoria',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/empleado/registro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_empleados_lista' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MTD\\SeleccionBundle\\Controller\\ListaEmpleadosController::listarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/empleados/lista',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_empleado_ver' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\SeleccionBundle\\Controller\\EmpleadoInformacionController::mostrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/empleado/ver',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_empleado_eliminar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\SeleccionBundle\\Controller\\EliminaEmpleadoController::eliminarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/postulante/eliminar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_empleado_perfilTecnico' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\SeleccionBundle\\Controller\\PerfilTecnicoEmpleadoController::mostrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/empleado/perfil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_empleado_proyectos_participa' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\SeleccionBundle\\Controller\\ProyectosEmpleadoController::listarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/proyectos/empleado',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_empleados_lista_administrativos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MTD\\SeleccionBundle\\Controller\\ListaEmpleadosAdministrativosController::listarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/empleados/lista/administrativos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_empleado_documentos' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\SeleccionBundle\\Controller\\RegistroDocumentoController::registrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/documentos/empleado',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_empleado_listar_documentos' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\SeleccionBundle\\Controller\\ListaDocumentosController::listarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/documentos/ver/empleado',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_empleado_documento_eliminar' => array (  0 =>   array (    0 => 'id',    1 => 'idEmpleado',  ),  1 =>   array (    '_controller' => 'MTD\\SeleccionBundle\\Controller\\EliminaDocumentoController::eliminarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idEmpleado',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/documentos/eliminar/empleado',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_reclutamiento_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_postulante_registro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\RegistroPostulanteController::registrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/postulante/registro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_lugar_empleado' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MTDReclutamientoBundle:Lugar:registrar',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/registro/lugarEmpleado',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_postulante_requisito' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\FormularioPerfilTecnicoController::registrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/postulante/registroPerfil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_postulante_registrar_requisito' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\RegistroPerfilTecnicoController::registrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/postulante/registroRequisitoPerfil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_postulante_lista' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\ListaController::listarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/postulantes/lista',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_postulante_ver' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\InformacionController::mostrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/postulante/ver',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_postulante_eliminar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\EliminaPostulanteController::eliminarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/postulante/eliminar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_postulante_editar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\EditaPostulanteController::editarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/postulante/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_perfil_tecnico_ver' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\PerfilTecnicoInformacionController::mostrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/postulante/perfilTecnico/ver',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_perfil_tecnico_editar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\PerfilTecnicoEditaController::editarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/postulante/perfilTecnico/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_postulante_mostrar_requisito_editar' => array (  0 =>   array (    0 => 'id',    1 => 'idEmpleado',  ),  1 =>   array (    '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\PerfilTecnicoEditaController::mostrarRequisitosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idEmpleado',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/postulante/registroPerfil/requisitos/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_buscar_empleado' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\BuscadorEmpleadosController::buscarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/postulantes/buscar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_empleados_idoneos' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\BuscadorEmpleadosController::mostrarIdoneosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/postulantes/idoneos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_postulante_administrativo_registro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\RegistroPostulanteAdministrativoController::registrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/postulante/registro/administrativo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_postulante_administrativo_lista' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\ListaAdministrativosController::listarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/postulantes/lista/administrativos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_proyecto_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'MTD\\ProyectoBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_inicio' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MTD\\ProyectoBundle\\Controller\\InicioController::mostrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inicio',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_proyecto_registro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MTD\\ProyectoBundle\\Controller\\RegistroProyectoController::registroAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/proyecto/registro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_cliente_registro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MTD\\ProyectoBundle\\Controller\\RegistroClienteController::registroClienteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/registro/cliente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_tipoProyecto_registro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MTD\\ProyectoBundle\\Controller\\TipoProyectoController::registroTipoProyectoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/registro/tipoProyecto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_lugar_registro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MTD\\ProyectoBundle\\Controller\\LugarController::registrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/registro/lugar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_lista_proyecto' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MTD\\ProyectoBundle\\Controller\\ListaProyectoController::listaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/proyecto/lista',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_editar_proyecto' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\ProyectoBundle\\Controller\\EditaProyectoController::editarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/proyecto/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_eliminar_proyecto' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\ProyectoBundle\\Controller\\EliminaProyectoController::eliminarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/proyecto/eliminar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_mostrar_proyecto' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\ProyectoBundle\\Controller\\InformacionProyectoController::mostrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/proyecto/mostrar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_categorias_proyecto' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\ProyectoBundle\\Controller\\CategoriaProyectoController::listarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/categoria/proyecto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_proyecto_empleado' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\ProyectoBundle\\Controller\\ProyectoEmpleadoController::asignarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/proyecto/empleados',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_proyecto_empleado_nombre' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\ProyectoBundle\\Controller\\ProyectoEmpleadoNombreController::mostrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/proyecto/empleados/nombre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_proyecto_empleado_agregar' => array (  0 =>   array (    0 => 'id',    1 => 'proyecto',  ),  1 =>   array (    '_controller' => 'MTD\\ProyectoBundle\\Controller\\ProyectoEmpleadoController::mostrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'proyecto',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/proyecto/empleados/agregar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_proyecto_empleado_registro' => array (  0 =>   array (    0 => 'id',    1 => 'idProyecto',  ),  1 =>   array (    '_controller' => 'MTD\\ProyectoBundle\\Controller\\EmpleadoRegistroController::registrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idProyecto',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/proyecto/empleados/registro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_proyecto_registro_empleado_nombre' => array (  0 =>   array (    0 => 'idProyecto',  ),  1 =>   array (    '_controller' => 'MTD\\ProyectoBundle\\Controller\\ProyectoEmpleadoNombreController::registrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idProyecto',    ),    1 =>     array (      0 => 'text',      1 => '/proyecto/empleados/nombreRegistro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_proyecto_lista_empleados' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\ProyectoBundle\\Controller\\ListaEmpleadosController::listarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/proyecto/lista/empleados',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_lista_clientes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MTD\\ProyectoBundle\\Controller\\ListaClientesController::listarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/clientes/lista',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_cliente_edita' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\ProyectoBundle\\Controller\\EditaClienteController::editarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/cliente/edita',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_proyecto_terminado' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\ProyectoBundle\\Controller\\ProyectoTerminadoController::terminarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/proyecto/terminado',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_lista_proyecto_terminados' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MTD\\ProyectoBundle\\Controller\\ListaProyectoTerminadosController::listarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/proyecto/lista/terminados',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_categorias_trabajo_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'MTD\\CategoriasTrabajoBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_categoria_crear' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MTD\\CategoriasTrabajoBundle\\Controller\\RegistroCategoriaController::registroAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/categoria/crear',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_requisito_crear' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MTD\\CategoriasTrabajoBundle\\Controller\\RegistroRequisitoController::registroAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/requisito/crear',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_requisito_registrar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MTD\\CategoriasTrabajoBundle\\Controller\\RequisitoController::registroAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/requisito/registrar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_requisito_eliminar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\CategoriasTrabajoBundle\\Controller\\EliminaRequisitoController::eliminarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/requisito/eliminar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_categoria_lista' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MTD\\CategoriasTrabajoBundle\\Controller\\ListaCategoriaController::listarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/categoria/lista',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_categoria_editar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\CategoriasTrabajoBundle\\Controller\\EditaCategoriaController::editarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/categoria/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_categoria_eliminar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\CategoriasTrabajoBundle\\Controller\\EliminaCategoriaController::eliminarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/categoria/eliminar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}

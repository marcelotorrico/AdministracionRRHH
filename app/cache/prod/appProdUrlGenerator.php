<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'mtd_seleccion_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'MTD\\SeleccionBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_reclutamiento_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_postulante_registro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\RegistroPostulanteController::registrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/postulante/registro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_postulante_requisito' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\FormularioPerfilTecnicoController::registrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/postulante/registroPerfil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_postulante_mostrar_requisito' => array (  0 =>   array (    0 => 'id',    1 => 'idEmpleado',  ),  1 =>   array (    '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\FormularioPerfilTecnicoController::mostrarRequisitosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idEmpleado',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/postulante/registroPerfil/requisitos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_postulante_registrar_requisito' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\RegistroPerfilTecnicoController::registrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/postulante/registroRequisitoPerfil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_postulante_lista' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MTD\\ReclutamientoBundle\\Controller\\ListaController::listarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/postulantes/lista',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_proyecto_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'MTD\\ProyectoBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_proyecto_registro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MTD\\ProyectoBundle\\Controller\\RegistroProyectoController::registroAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/proyecto/registro',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_cliente_registro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MTD\\ProyectoBundle\\Controller\\RegistroClienteController::registroClienteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/registro/cliente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_tipoProyecto_registro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MTD\\ProyectoBundle\\Controller\\TipoProyectoController::registroTipoProyectoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/registro/tipoProyecto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_lista_proyecto' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MTD\\ProyectoBundle\\Controller\\ListaProyectoController::listaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/proyecto/lista',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_editar_proyecto' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\ProyectoBundle\\Controller\\EditaProyectoController::editarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/proyecto/editar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_eliminar_proyecto' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\ProyectoBundle\\Controller\\EliminaProyectoController::eliminarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/proyecto/eliminar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_mostrar_proyecto' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\ProyectoBundle\\Controller\\InformacionProyectoController::mostrarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/proyecto/mostrar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mtd_categorias_proyecto' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MTD\\ProyectoBundle\\Controller\\CategoriaProyectoController::listarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/categoria/proyecto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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

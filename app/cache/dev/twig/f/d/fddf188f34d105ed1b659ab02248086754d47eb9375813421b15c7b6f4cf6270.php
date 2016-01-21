<?php

/* menu.html.twig */
class __TwigTemplate_3a5a0f751dff9f6cc13f01464f401feca4d23c5bca37b04fcd306aed6364dc3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82bea44f9e978cdd054606c89babbd332be279af78bf6b457f74bd2866bfd199 = $this->env->getExtension("native_profiler");
        $__internal_82bea44f9e978cdd054606c89babbd332be279af78bf6b457f74bd2866bfd199->enter($__internal_82bea44f9e978cdd054606c89babbd332be279af78bf6b457f74bd2866bfd199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<div class=\"\">
    <header>
        <!--<nav class=\"navbar navbar-default navbar-fixed-top role=\"navigation\">       -->
        <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("mtd_inicio");
        echo "\">Inicio</a>
                </div>

                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <!--  <ul class=\"nav navbar-nav role=\"tablist\">     -->
                    <ul class=\"nav navbar-nav\">
                        
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Proyecto <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("mtd_proyecto_registro");
        echo "\">Registrar Proyecto</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("mtd_lista_proyecto");
        echo "\">Lista de Proyectos</a></li>
                            </ul>
                        </li>
                        
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Categoria de Trabajo <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li ><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("mtd_categoria_crear");
        echo "\">Registrar Categoria de Trabajo </a></li>
                                <li ><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("mtd_categoria_lista");
        echo "\">Lista de las Categorias </a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li ><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("mtd_requisito_crear");
        echo "\">Perfil Tecnico </a></li>
                            </ul>
                        </li>
                        
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Reclutamiento <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li ><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("mtd_postulante_registro");
        echo "\">Registrar Postulante </a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li ><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("mtd_postulante_lista");
        echo "\">Lista de los Postulantes </a></li>
                            </ul>
                        </li>
                        
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Seleccion <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li ><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("mtd_buscar_empleado");
        echo "\">Buscar Empleado </a></li>
                            </ul>
                        </li>
                        
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Empleados <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li ><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("mtd_empleados_lista");
        echo "\">Lista de Empleados </a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>
</div>
<div id=\"cuerpo\"></div>";
        
        $__internal_82bea44f9e978cdd054606c89babbd332be279af78bf6b457f74bd2866bfd199->leave($__internal_82bea44f9e978cdd054606c89babbd332be279af78bf6b457f74bd2866bfd199_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 58,  98 => 51,  88 => 44,  83 => 42,  73 => 35,  68 => 33,  64 => 32,  54 => 25,  49 => 23,  36 => 13,  22 => 1,);
    }
}
/* <div class="">*/
/*     <header>*/
/*         <!--<nav class="navbar navbar-default navbar-fixed-top role="navigation">       -->*/
/*         <nav class="navbar navbar-default navbar-static-top" role="navigation">*/
/*             <div class="container-fluid">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="{{ path('mtd_inicio') }}">Inicio</a>*/
/*                 </div>*/
/* */
/*                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                     <!--  <ul class="nav navbar-nav role="tablist">     -->*/
/*                     <ul class="nav navbar-nav">*/
/*                         */
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Proyecto <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="{{ path('mtd_proyecto_registro') }}">Registrar Proyecto</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="{{ path('mtd_lista_proyecto') }}">Lista de Proyectos</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         */
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categoria de Trabajo <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li ><a href="{{ path('mtd_categoria_crear') }}">Registrar Categoria de Trabajo </a></li>*/
/*                                 <li ><a href="{{ path('mtd_categoria_lista') }}">Lista de las Categorias </a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li ><a href="{{ path('mtd_requisito_crear') }}">Perfil Tecnico </a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         */
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reclutamiento <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li ><a href="{{ path('mtd_postulante_registro') }}">Registrar Postulante </a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li ><a href="{{ path('mtd_postulante_lista') }}">Lista de los Postulantes </a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         */
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Seleccion <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li ><a href="{{ path('mtd_buscar_empleado') }}">Buscar Empleado </a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         */
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Empleados <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li ><a href="{{ path('mtd_empleados_lista') }}">Lista de Empleados </a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         */
/*                     </ul>*/
/*                 </div><!-- /.navbar-collapse -->*/
/*             </div><!-- /.container-fluid -->*/
/*         </nav>*/
/*     </header>*/
/* </div>*/
/* <div id="cuerpo"></div>*/

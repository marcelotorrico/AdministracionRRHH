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
        $__internal_15936baada1e7cec76e153ef53738bfc919fb649865ceed534cbef987d7c7e0e = $this->env->getExtension("native_profiler");
        $__internal_15936baada1e7cec76e153ef53738bfc919fb649865ceed534cbef987d7c7e0e->enter($__internal_15936baada1e7cec76e153ef53738bfc919fb649865ceed534cbef987d7c7e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

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
                    <a class=\"navbar-brand\" href=\"#\">Inicio</a>
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
                        
                        <li ><a href=\"\">Crear Categoria de Trabajo <span class=\"sr-only\">(current)</span></a></li>
                        <li><a href=\"#\">Link</a></li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Registro Materia</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"\">Cerrar Sesion</a></li>
                        
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Action</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>
</div>
<div id=\"cuerpo\"></div>";
        
        $__internal_15936baada1e7cec76e153ef53738bfc919fb649865ceed534cbef987d7c7e0e->leave($__internal_15936baada1e7cec76e153ef53738bfc919fb649865ceed534cbef987d7c7e0e_prof);

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
        return array (  105 => 58,  95 => 51,  85 => 44,  80 => 42,  70 => 35,  65 => 33,  61 => 32,  51 => 25,  46 => 23,  22 => 1,);
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
/*                     <a class="navbar-brand" href="#">Inicio</a>*/
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
/*                         <li ><a href="">Crear Categoria de Trabajo <span class="sr-only">(current)</span></a></li>*/
/*                         <li><a href="#">Link</a></li>*/
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="#">Registro Materia</a></li>*/
/*                                 <li><a href="#">Another action</a></li>*/
/*                                 <li><a href="#">Something else here</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Separated link</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">One more separated link</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         <li><a href="">Cerrar Sesion</a></li>*/
/*                         */
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="#">Action</a></li>*/
/*                                 <li><a href="#">Another action</a></li>*/
/*                                 <li><a href="#">Something else here</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Separated link</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div><!-- /.navbar-collapse -->*/
/*             </div><!-- /.container-fluid -->*/
/*         </nav>*/
/*     </header>*/
/* </div>*/
/* <div id="cuerpo"></div>*/

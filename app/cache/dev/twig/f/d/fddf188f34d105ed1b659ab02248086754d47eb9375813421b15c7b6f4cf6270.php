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
        $__internal_9684ec2cb999a6e57d2f5c662fa91d101eeea1b533350d1df811607322d26e8c = $this->env->getExtension("native_profiler");
        $__internal_9684ec2cb999a6e57d2f5c662fa91d101eeea1b533350d1df811607322d26e8c->enter($__internal_9684ec2cb999a6e57d2f5c662fa91d101eeea1b533350d1df811607322d26e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

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
        // line 22
        echo $this->env->getExtension('routing')->getPath("mtd_proyecto_registro");
        echo "\">Agregar Proyecto</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("mtd_lista_proyecto");
        echo "\">Lista de Proyectos</a></li>
                            </ul>
                        </li>
                        <li class=\"active\"><a href=\"\">Agregar Proyecto <span class=\"sr-only\">(current)</span></a></li>
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
                    <form class=\"navbar-form navbar-left\" role=\"search\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                    </form>
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
        
        $__internal_9684ec2cb999a6e57d2f5c662fa91d101eeea1b533350d1df811607322d26e8c->leave($__internal_9684ec2cb999a6e57d2f5c662fa91d101eeea1b533350d1df811607322d26e8c_prof);

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
        return array (  50 => 24,  45 => 22,  22 => 1,);
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
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Proyecto <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="{{ path('mtd_proyecto_registro') }}">Agregar Proyecto</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="{{ path('mtd_lista_proyecto') }}">Lista de Proyectos</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li class="active"><a href="">Agregar Proyecto <span class="sr-only">(current)</span></a></li>*/
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
/*                     <form class="navbar-form navbar-left" role="search">*/
/*                         <div class="form-group">*/
/*                             <input type="text" class="form-control" placeholder="Search">*/
/*                         </div>*/
/*                         <button type="submit" class="btn btn-default">Submit</button>*/
/*                     </form>*/
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

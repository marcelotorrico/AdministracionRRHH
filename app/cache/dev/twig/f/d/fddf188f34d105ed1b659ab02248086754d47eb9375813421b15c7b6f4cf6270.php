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
        $__internal_3be25888d4b7951421e1285eaf1fc075418f27dea81f6b29e158fd453085ea28 = $this->env->getExtension("native_profiler");
        $__internal_3be25888d4b7951421e1285eaf1fc075418f27dea81f6b29e158fd453085ea28->enter($__internal_3be25888d4b7951421e1285eaf1fc075418f27dea81f6b29e158fd453085ea28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

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
                                <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("mtd_lista_proyecto");
        echo "\">Lista de Proyectos</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("mtd_lista_proyecto_terminados");
        echo "\">Lista de Proyectos Terminados</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("mtd_lista_clientes");
        echo "\">Lista de Clientes</a></li>
                            </ul>
                        </li>
                        
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Categoria de Trabajo <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li ><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("mtd_categoria_crear");
        echo "\">Registrar Categoria de Trabajo </a></li>
                                <li ><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("mtd_categoria_lista");
        echo "\">Lista de las Categorias </a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li ><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("mtd_requisito_crear");
        echo "\">Perfil Tecnico </a></li>
                            </ul>
                        </li>
                        
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Reclutamiento <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li ><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("mtd_postulante_registro");
        echo "\">Registrar Postulante Operativo</a></li>
                                <li ><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("mtd_postulante_lista");
        echo "\">Lista de Postulantes Operativos</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li ><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("mtd_postulante_administrativo_registro");
        echo "\">Registrar Postulante Administrativos</a></li>
                                <li ><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("mtd_postulante_administrativo_lista");
        echo "\">Lista de Postulantes Administrativos</a></li>
                            </ul>
                        </li>
                        
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Seleccion <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li ><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("mtd_buscar_empleado");
        echo "\">Buscar Empleado </a></li>
                            </ul>
                        </li>
                        
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Empleados <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li ><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("mtd_empleados_lista");
        echo "\">Lista de Empleados Operativos </a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li ><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("mtd_empleados_lista_administrativos");
        echo "\">Lista de Empleados Administrativos </a></li>
                            </ul>
                        </li>
                        
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Asistencia <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li ><a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("mtd_asistencia_operativos");
        echo "\">Empleados Operativos </a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li ><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("mtd_asistencia_administrativos");
        echo "\">Empleados Administrativos </a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li ><a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("mtd_asistencia_configuracion");
        echo "\">Configuracion </a></li>
                            </ul>
                        </li>
                        
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Sueldos y Salarios <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li ><a href=\"#emitirSueldos\" data-toggle=\"modal\">Emitir Sueldos </a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li ><a href=\"#fechaSueldos\" data-toggle=\"modal\">Sueldos Emitidos </a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li ><a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("mtd_descuentos_empleados");
        echo "\">Descuentos, Premios y Viaticos</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>
    
    <div class=\"modal fade\" id=\"emitirSueldos\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">Emitir Sueldos</h4>
                </div>
                <div class=\"modal-body\">
                    <div id=\"mainLugar\">

                        <form action=\"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("mtd_sueldos_emitir");
        echo "\" method=\"post\" role=\"form\" data-async data-target=\"#rating-modal\" class=\"text-left\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class =\"form-group\">
                                        <div class=\"input-group\">
                                            <label class=\"input-group-addon addonGroup required\" for=\"fecha\">Mes y año:</label>
                                            <input type=\"text\" id=\"fechaEmision\" name=\"fechaEmision\" required=\"required\" data-provide=\"datepicker\"
                                            data-date-format=\"dd-mm-yyyy\" placeholder=\"Seleccione la fecha de la asistencia\" 
                                            class=\"sueldosSalarios feriado form-control input-inline datepicker inputGroup\" title=\"Mes y año de los sueldos y salarios\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer form-group\">
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
                                <button type=\"submit\" id =\"enviarSueldos\" name=\"enviarSueldos\" class=\"enviarSueldos btn btn-primary\">Buscar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"modal fade\" id=\"fechaSueldos\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\">Sueldos Emitidos</h4>
                </div>
                <div class=\"modal-body\">
                    <div id=\"mainLugar\">

                        <form action=\"";
        // line 141
        echo $this->env->getExtension('routing')->getPath("mtd_sueldos_ver");
        echo "\" method=\"post\" role=\"form\" data-async data-target=\"#rating-modal\" class=\"text-left\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class =\"form-group\">
                                        <div class=\"input-group\">
                                            <label class=\"input-group-addon addonGroup required\" for=\"fecha\">Mes y año:</label>
                                            <input type=\"text\" id=\"sueldosSalarios\" name=\"sueldosSalarios\" required=\"required\" data-provide=\"datepicker\"
                                            data-date-format=\"dd-mm-yyyy\" placeholder=\"Seleccione la fecha de la asistencia\" 
                                            class=\"sueldosSalarios feriado form-control input-inline datepicker inputGroup\" title=\"Mes y año de los sueldos y salarios\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"modal-footer form-group\">
                                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
                                <button type=\"submit\" id =\"enviarSueldo\" name=\"enviarSueldos\" class=\"enviarSueldos btn btn-primary\">Buscar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
<div id=\"cuerpo\"></div>";
        
        $__internal_3be25888d4b7951421e1285eaf1fc075418f27dea81f6b29e158fd453085ea28->leave($__internal_3be25888d4b7951421e1285eaf1fc075418f27dea81f6b29e158fd453085ea28_prof);

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
        return array (  224 => 141,  187 => 107,  164 => 87,  150 => 76,  145 => 74,  140 => 72,  130 => 65,  125 => 63,  115 => 56,  105 => 49,  101 => 48,  96 => 46,  92 => 45,  82 => 38,  77 => 36,  73 => 35,  63 => 28,  58 => 26,  53 => 24,  49 => 23,  36 => 13,  22 => 1,);
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
/*                                 <li><a href="{{ path('mtd_lista_proyecto') }}">Lista de Proyectos</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="{{ path('mtd_lista_proyecto_terminados') }}">Lista de Proyectos Terminados</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="{{ path('mtd_lista_clientes') }}">Lista de Clientes</a></li>*/
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
/*                                 <li ><a href="{{ path('mtd_postulante_registro') }}">Registrar Postulante Operativo</a></li>*/
/*                                 <li ><a href="{{ path('mtd_postulante_lista') }}">Lista de Postulantes Operativos</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li ><a href="{{ path('mtd_postulante_administrativo_registro') }}">Registrar Postulante Administrativos</a></li>*/
/*                                 <li ><a href="{{ path('mtd_postulante_administrativo_lista') }}">Lista de Postulantes Administrativos</a></li>*/
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
/*                                 <li ><a href="{{ path('mtd_empleados_lista') }}">Lista de Empleados Operativos </a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li ><a href="{{ path('mtd_empleados_lista_administrativos') }}">Lista de Empleados Administrativos </a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         */
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Asistencia <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li ><a href="{{ path('mtd_asistencia_operativos') }}">Empleados Operativos </a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li ><a href="{{ path('mtd_asistencia_administrativos') }}">Empleados Administrativos </a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li ><a href="{{ path('mtd_asistencia_configuracion') }}">Configuracion </a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         */
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sueldos y Salarios <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li ><a href="#emitirSueldos" data-toggle="modal">Emitir Sueldos </a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li ><a href="#fechaSueldos" data-toggle="modal">Sueldos Emitidos </a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li ><a href="{{ path('mtd_descuentos_empleados') }}">Descuentos, Premios y Viaticos</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         */
/*                     </ul>*/
/*                 </div><!-- /.navbar-collapse -->*/
/*             </div><!-- /.container-fluid -->*/
/*         </nav>*/
/*     </header>*/
/*     */
/*     <div class="modal fade" id="emitirSueldos">*/
/*         <div class="modal-dialog">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                     <h4 class="modal-title">Emitir Sueldos</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     <div id="mainLugar">*/
/* */
/*                         <form action="{{ path('mtd_sueldos_emitir') }}" method="post" role="form" data-async data-target="#rating-modal" class="text-left">*/
/*                             <div class="row">*/
/*                                 <div class="col-md-12">*/
/*                                     <div class ="form-group">*/
/*                                         <div class="input-group">*/
/*                                             <label class="input-group-addon addonGroup required" for="fecha">Mes y año:</label>*/
/*                                             <input type="text" id="fechaEmision" name="fechaEmision" required="required" data-provide="datepicker"*/
/*                                             data-date-format="dd-mm-yyyy" placeholder="Seleccione la fecha de la asistencia" */
/*                                             class="sueldosSalarios feriado form-control input-inline datepicker inputGroup" title="Mes y año de los sueldos y salarios">*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="modal-footer form-group">*/
/*                                 <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>*/
/*                                 <button type="submit" id ="enviarSueldos" name="enviarSueldos" class="enviarSueldos btn btn-primary">Buscar</button>*/
/*                             </div>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     */
/*     <div class="modal fade" id="fechaSueldos">*/
/*         <div class="modal-dialog">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                     <h4 class="modal-title">Sueldos Emitidos</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     <div id="mainLugar">*/
/* */
/*                         <form action="{{ path('mtd_sueldos_ver') }}" method="post" role="form" data-async data-target="#rating-modal" class="text-left">*/
/*                             <div class="row">*/
/*                                 <div class="col-md-12">*/
/*                                     <div class ="form-group">*/
/*                                         <div class="input-group">*/
/*                                             <label class="input-group-addon addonGroup required" for="fecha">Mes y año:</label>*/
/*                                             <input type="text" id="sueldosSalarios" name="sueldosSalarios" required="required" data-provide="datepicker"*/
/*                                             data-date-format="dd-mm-yyyy" placeholder="Seleccione la fecha de la asistencia" */
/*                                             class="sueldosSalarios feriado form-control input-inline datepicker inputGroup" title="Mes y año de los sueldos y salarios">*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="modal-footer form-group">*/
/*                                 <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>*/
/*                                 <button type="submit" id ="enviarSueldo" name="enviarSueldos" class="enviarSueldos btn btn-primary">Buscar</button>*/
/*                             </div>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     */
/* </div>*/
/* <div id="cuerpo"></div>*/

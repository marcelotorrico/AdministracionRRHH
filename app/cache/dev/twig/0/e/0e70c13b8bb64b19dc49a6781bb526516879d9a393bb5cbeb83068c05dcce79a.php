<?php

/* MTDProyectoBundle:Proyecto:lista.html.twig */
class __TwigTemplate_f3ed32bcb384e771c2511ca90568223f8f645c0bd80f823e43b21958c2d9e645 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "MTDProyectoBundle:Proyecto:lista.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d1eff5aec891cb1165a5510d6e525e436f0894c241433921602109657f3918a = $this->env->getExtension("native_profiler");
        $__internal_6d1eff5aec891cb1165a5510d6e525e436f0894c241433921602109657f3918a->enter($__internal_6d1eff5aec891cb1165a5510d6e525e436f0894c241433921602109657f3918a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MTDProyectoBundle:Proyecto:lista.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d1eff5aec891cb1165a5510d6e525e436f0894c241433921602109657f3918a->leave($__internal_6d1eff5aec891cb1165a5510d6e525e436f0894c241433921602109657f3918a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f75f37c28f41310a3fd49b31f7a200f9134531ee9499b23c224762f85cfc0dcc = $this->env->getExtension("native_profiler");
        $__internal_f75f37c28f41310a3fd49b31f7a200f9134531ee9499b23c224762f85cfc0dcc->enter($__internal_f75f37c28f41310a3fd49b31f7a200f9134531ee9499b23c224762f85cfc0dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 7
            echo "        <script>alert('";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "');</script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        
    <section class=\"jumbotron\">
        <div class=\"container \">
            <h2>Lista de Proyectos</h2>
        </div>
    </section>
    <div class =\"container-fluid\">
        <div class=\"col-md-12\">
            <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>Nombre del Proyecto</th>
                            <th>Monto del contrato</th>
                            <th>Plazo de Entrega</th>
                            <th>Lugar</th>
                            <th>Cliente</th>
                            <th>Tipo de Proyecto</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")));
        foreach ($context['_seq'] as $context["_key"] => $context["proyecto"]) {
            // line 32
            echo "                            ";
            if ((($this->getAttribute($context["proyecto"], "activo", array()) == true) && ($this->getAttribute($context["proyecto"], "terminado", array()) == false))) {
                // line 33
                echo "                                <tr>
                                    <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["proyecto"], "nombre", array()), "html", null, true);
                echo "</td>
                                    <td><strong>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["proyecto"], "montoContrato", array()), "html", null, true);
                echo "</strong></td>
                                    <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["proyecto"], "plazoEntrega", array()), "d-m-Y"), "html", null, true);
                echo "</td>
                                    <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proyecto"], "lugar", array()), "nombre", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proyecto"], "cliente", array()), "nombre", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proyecto"], "cliente", array()), "apellido", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proyecto"], "tipoProyecto", array()), "nombre", array()), "html", null, true);
                echo "</td>
                                    <td>
                                        <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mtd_mostrar_proyecto", array("id" => $this->getAttribute($context["proyecto"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">
                                            Ver
                                        </a>
                                        <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mtd_editar_proyecto", array("id" => $this->getAttribute($context["proyecto"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">
                                            Editar
                                        </a>
                                        <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mtd_proyecto_terminado", array("id" => $this->getAttribute($context["proyecto"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-success\">
                                            Terminado
                                        </a>
                                        <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mtd_eliminar_proyecto", array("id" => $this->getAttribute($context["proyecto"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-danger btn-delete confirmarEliminacion\">
                                            Eliminar
                                        </a>
                                    </td>
                                </tr>
                            ";
            }
            // line 56
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyecto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                    </tbody>    
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_f75f37c28f41310a3fd49b31f7a200f9134531ee9499b23c224762f85cfc0dcc->leave($__internal_f75f37c28f41310a3fd49b31f7a200f9134531ee9499b23c224762f85cfc0dcc_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_41a3ef622f4f0f55089735d8d9d4fa6540cab2b3571ab8df0283e93549db7b99 = $this->env->getExtension("native_profiler");
        $__internal_41a3ef622f4f0f55089735d8d9d4fa6540cab2b3571ab8df0283e93549db7b99->enter($__internal_41a3ef622f4f0f55089735d8d9d4fa6540cab2b3571ab8df0283e93549db7b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/eliminar/eliminarProyecto.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_41a3ef622f4f0f55089735d8d9d4fa6540cab2b3571ab8df0283e93549db7b99->leave($__internal_41a3ef622f4f0f55089735d8d9d4fa6540cab2b3571ab8df0283e93549db7b99_prof);

    }

    public function getTemplateName()
    {
        return "MTDProyectoBundle:Proyecto:lista.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 66,  172 => 65,  166 => 64,  154 => 57,  148 => 56,  139 => 50,  133 => 47,  127 => 44,  121 => 41,  116 => 39,  110 => 38,  106 => 37,  102 => 36,  98 => 35,  94 => 34,  91 => 33,  88 => 32,  84 => 31,  60 => 9,  51 => 7,  47 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ parent() }}*/
/* */
/*     {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*         <script>alert('{{ flashMessage }}');</script>*/
/*     {% endfor %}*/
/*         */
/*     <section class="jumbotron">*/
/*         <div class="container ">*/
/*             <h2>Lista de Proyectos</h2>*/
/*         </div>*/
/*     </section>*/
/*     <div class ="container-fluid">*/
/*         <div class="col-md-12">*/
/*             <div class="table-responsive">*/
/*                 <table class="table table-striped table-hover">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>Nombre del Proyecto</th>*/
/*                             <th>Monto del contrato</th>*/
/*                             <th>Plazo de Entrega</th>*/
/*                             <th>Lugar</th>*/
/*                             <th>Cliente</th>*/
/*                             <th>Tipo de Proyecto</th>*/
/*                             <th>Acciones</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for proyecto in proyectos %}*/
/*                             {% if proyecto.activo == true and proyecto.terminado == false%}*/
/*                                 <tr>*/
/*                                     <td>{{ proyecto.nombre }}</td>*/
/*                                     <td><strong>{{ proyecto.montoContrato }}</strong></td>*/
/*                                     <td>{{ proyecto.plazoEntrega|date('d-m-Y') }}</td>*/
/*                                     <td>{{ proyecto.lugar.nombre }}</td>*/
/*                                     <td>{{ proyecto.cliente.nombre }} {{ proyecto.cliente.apellido }}</td>*/
/*                                     <td>{{ proyecto.tipoProyecto.nombre }}</td>*/
/*                                     <td>*/
/*                                         <a href="{{ path('mtd_mostrar_proyecto', { 'id': proyecto.id }) }}" class="btn btn-sm btn-info">*/
/*                                             Ver*/
/*                                         </a>*/
/*                                         <a href="{{ path('mtd_editar_proyecto', { 'id': proyecto.id }) }}" class="btn btn-sm btn-primary">*/
/*                                             Editar*/
/*                                         </a>*/
/*                                         <a href="{{ path('mtd_proyecto_terminado', { 'id': proyecto.id }) }}" class="btn btn-sm btn-success">*/
/*                                             Terminado*/
/*                                         </a>*/
/*                                         <a href="{{ path('mtd_eliminar_proyecto', { 'id': proyecto.id }) }}" class="btn btn-sm btn-danger btn-delete confirmarEliminacion">*/
/*                                             Eliminar*/
/*                                         </a>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </tbody>    */
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="{{ asset('public/js/eliminar/eliminarProyecto.js') }}"></script>*/
/* {% endblock %}*/

<?php

/* MTDContratacionEmpleadosBundle:Proyecto:lista.html.twig */
class __TwigTemplate_6638b68243e62a5ca18cce4f976666758aa36c8af8565fc6587d48443cff9275 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "MTDContratacionEmpleadosBundle:Proyecto:lista.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8598cbe04173df89bfef95248979252922e663803794d24df78f6135add17589 = $this->env->getExtension("native_profiler");
        $__internal_8598cbe04173df89bfef95248979252922e663803794d24df78f6135add17589->enter($__internal_8598cbe04173df89bfef95248979252922e663803794d24df78f6135add17589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MTDContratacionEmpleadosBundle:Proyecto:lista.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8598cbe04173df89bfef95248979252922e663803794d24df78f6135add17589->leave($__internal_8598cbe04173df89bfef95248979252922e663803794d24df78f6135add17589_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_985090b72adcbdfd32b4d5f76eb04d1e46ca83a73d3f882963a3e3d436778cba = $this->env->getExtension("native_profiler");
        $__internal_985090b72adcbdfd32b4d5f76eb04d1e46ca83a73d3f882963a3e3d436778cba->enter($__internal_985090b72adcbdfd32b4d5f76eb04d1e46ca83a73d3f882963a3e3d436778cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <div class =\"container\">
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
            echo "                            <tr>
                                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["proyecto"], "nombre", array()), "html", null, true);
            echo "</td>
                                <td><strong>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["proyecto"], "montoContrato", array()), "html", null, true);
            echo "</strong></td>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["proyecto"], "plazoEntrega", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["proyecto"], "lugar", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proyecto"], "cliente", array()), "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proyecto"], "cliente", array()), "apellido", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["proyecto"], "tipoProyecto", array()), "nombre", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"#\" class=\"btn btn-sm btn-info\">
                                        Ver
                                    </a>
                                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mtd_editar_proyecto", array("id" => $this->getAttribute($context["proyecto"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">
                                        Editar
                                    </a>
                                    <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                        Eliminar
                                    </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyecto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                    </tbody>    
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_985090b72adcbdfd32b4d5f76eb04d1e46ca83a73d3f882963a3e3d436778cba->leave($__internal_985090b72adcbdfd32b4d5f76eb04d1e46ca83a73d3f882963a3e3d436778cba_prof);

    }

    public function getTemplateName()
    {
        return "MTDContratacionEmpleadosBundle:Proyecto:lista.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 52,  120 => 43,  112 => 38,  106 => 37,  102 => 36,  98 => 35,  94 => 34,  90 => 33,  87 => 32,  83 => 31,  59 => 9,  50 => 7,  46 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
/*     <div class ="container">*/
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
/*                             <tr>*/
/*                                 <td>{{ proyecto.nombre }}</td>*/
/*                                 <td><strong>{{ proyecto.montoContrato }}</strong></td>*/
/*                                 <td>{{ proyecto.plazoEntrega|date('d-m-Y') }}</td>*/
/*                                 <td>{{ proyecto.lugar }}</td>*/
/*                                 <td>{{ proyecto.cliente.nombre }} {{ proyecto.cliente.apellido }}</td>*/
/*                                 <td>{{ proyecto.tipoProyecto.nombre }}</td>*/
/*                                 <td>*/
/*                                     <a href="#" class="btn btn-sm btn-info">*/
/*                                         Ver*/
/*                                     </a>*/
/*                                     <a href="{{ path('mtd_editar_proyecto', { 'id': proyecto.id }) }}" class="btn btn-sm btn-primary">*/
/*                                         Editar*/
/*                                     </a>*/
/*                                     <a href="#" class="btn btn-sm btn-danger btn-delete">*/
/*                                         Eliminar*/
/*                                     </a>*/
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     </tbody>    */
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/

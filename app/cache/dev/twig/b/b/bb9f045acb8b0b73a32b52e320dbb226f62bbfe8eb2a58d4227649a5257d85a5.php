<?php

/* MTDCategoriasTrabajoBundle:Categoria:lista.html.twig */
class __TwigTemplate_48f8c26f176ff64cad7be5e603e6c30bdd0629a19e1d9b0168dbf0c6d26e3810 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "MTDCategoriasTrabajoBundle:Categoria:lista.html.twig", 1);
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
        $__internal_36fc7dd0ff594b08c1e0ecccb1c1338545609e3239e80d687ac33aed622f7508 = $this->env->getExtension("native_profiler");
        $__internal_36fc7dd0ff594b08c1e0ecccb1c1338545609e3239e80d687ac33aed622f7508->enter($__internal_36fc7dd0ff594b08c1e0ecccb1c1338545609e3239e80d687ac33aed622f7508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MTDCategoriasTrabajoBundle:Categoria:lista.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36fc7dd0ff594b08c1e0ecccb1c1338545609e3239e80d687ac33aed622f7508->leave($__internal_36fc7dd0ff594b08c1e0ecccb1c1338545609e3239e80d687ac33aed622f7508_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac440b1e7c057adfea75065ac351faf5bce0879ad932be0e5d40a00152177c47 = $this->env->getExtension("native_profiler");
        $__internal_ac440b1e7c057adfea75065ac351faf5bce0879ad932be0e5d40a00152177c47->enter($__internal_ac440b1e7c057adfea75065ac351faf5bce0879ad932be0e5d40a00152177c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <h2>Lista de las Categorias de Trabajo</h2>
        </div>
    </section>
    <div class =\"container\">
        <div class=\"col-md-12\">
            <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>Nombre de la Categoria</th>
                            <th>Sueldo Basico</th>
                            <th>Monto Viatico</th>
                            <th>Monto Premio</th>
                            <th>Total</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 31
            echo "                            ";
            if (($this->getAttribute($context["categoria"], "activo", array()) == true)) {
                // line 32
                echo "                                <tr>
                                    <td><strong>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "nombre", array()), "html", null, true);
                echo "</strong></td>
                                    <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "sueldoBasico", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "viatico", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "premio", array()), "html", null, true);
                echo "</td>
                                    <td><strong>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "total", array()), "html", null, true);
                echo "</strong></td>
                                    <td>
                                        <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mtd_categoria_editar", array("id" => $this->getAttribute($context["categoria"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">
                                            Editar
                                        </a>
                                        <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mtd_categoria_eliminar", array("id" => $this->getAttribute($context["categoria"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-danger btn-delete confirmarEliminacion\">
                                            Eliminar
                                        </a>
                                    </td>
                                </tr>
                            ";
            }
            // line 48
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                    </tbody>    
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_ac440b1e7c057adfea75065ac351faf5bce0879ad932be0e5d40a00152177c47->leave($__internal_ac440b1e7c057adfea75065ac351faf5bce0879ad932be0e5d40a00152177c47_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0bd9e71486fcb170936c3df56bf67c63069a5e6d6791ddf820f1a2ba5be37622 = $this->env->getExtension("native_profiler");
        $__internal_0bd9e71486fcb170936c3df56bf67c63069a5e6d6791ddf820f1a2ba5be37622->enter($__internal_0bd9e71486fcb170936c3df56bf67c63069a5e6d6791ddf820f1a2ba5be37622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/eliminar/eliminaCategoria.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_0bd9e71486fcb170936c3df56bf67c63069a5e6d6791ddf820f1a2ba5be37622->leave($__internal_0bd9e71486fcb170936c3df56bf67c63069a5e6d6791ddf820f1a2ba5be37622_prof);

    }

    public function getTemplateName()
    {
        return "MTDCategoriasTrabajoBundle:Categoria:lista.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 58,  153 => 57,  147 => 56,  135 => 49,  129 => 48,  120 => 42,  114 => 39,  109 => 37,  105 => 36,  101 => 35,  97 => 34,  93 => 33,  90 => 32,  87 => 31,  83 => 30,  60 => 9,  51 => 7,  47 => 6,  41 => 4,  35 => 3,  11 => 1,);
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
/*             <h2>Lista de las Categorias de Trabajo</h2>*/
/*         </div>*/
/*     </section>*/
/*     <div class ="container">*/
/*         <div class="col-md-12">*/
/*             <div class="table-responsive">*/
/*                 <table class="table table-striped table-hover">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>Nombre de la Categoria</th>*/
/*                             <th>Sueldo Basico</th>*/
/*                             <th>Monto Viatico</th>*/
/*                             <th>Monto Premio</th>*/
/*                             <th>Total</th>*/
/*                             <th>Acciones</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for categoria in categorias %}*/
/*                             {% if categoria.activo == true %}*/
/*                                 <tr>*/
/*                                     <td><strong>{{ categoria.nombre }}</strong></td>*/
/*                                     <td>{{ categoria.sueldoBasico }}</td>*/
/*                                     <td>{{ categoria.viatico }}</td>*/
/*                                     <td>{{ categoria.premio }}</td>*/
/*                                     <td><strong>{{ categoria.total }}</strong></td>*/
/*                                     <td>*/
/*                                         <a href="{{ path('mtd_categoria_editar', { 'id': categoria.id }) }}" class="btn btn-sm btn-primary">*/
/*                                             Editar*/
/*                                         </a>*/
/*                                         <a href="{{ path('mtd_categoria_eliminar', { 'id': categoria.id }) }}" class="btn btn-sm btn-danger btn-delete confirmarEliminacion">*/
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
/*     <script src="{{ asset('public/js/eliminar/eliminaCategoria.js') }}"></script>*/
/* {% endblock %}*/

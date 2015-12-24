<?php

/* MTDCategoriasTrabajoBundle:Categoria:requisito.html.twig */
class __TwigTemplate_49b86cbc9061302ba4f48070b809b793d5d964b8079ec1b9a460e04260013dc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "MTDCategoriasTrabajoBundle:Categoria:requisito.html.twig", 1);
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
        $__internal_ae356f498f0e2439e322063b74cac0ddb82ffbb53abcc91172fe03b18170eff3 = $this->env->getExtension("native_profiler");
        $__internal_ae356f498f0e2439e322063b74cac0ddb82ffbb53abcc91172fe03b18170eff3->enter($__internal_ae356f498f0e2439e322063b74cac0ddb82ffbb53abcc91172fe03b18170eff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MTDCategoriasTrabajoBundle:Categoria:requisito.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae356f498f0e2439e322063b74cac0ddb82ffbb53abcc91172fe03b18170eff3->leave($__internal_ae356f498f0e2439e322063b74cac0ddb82ffbb53abcc91172fe03b18170eff3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1895e949940a1c5dff1dba9892a1b6cbd07eefbddf6f4cdfeb92cfa4b92ce61b = $this->env->getExtension("native_profiler");
        $__internal_1895e949940a1c5dff1dba9892a1b6cbd07eefbddf6f4cdfeb92cfa4b92ce61b->enter($__internal_1895e949940a1c5dff1dba9892a1b6cbd07eefbddf6f4cdfeb92cfa4b92ce61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <div class=\"container\">
            <h2>Crear Requisito para una Categoria</h2>
        </div>
    </section>

    <div class=\"container\">
        <div id=\"main\">
            <form action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("mtd_requisito_registrar");
        echo "\" method=\"post\" role=\"form\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class =\"form-group\">
                            <div class=\"input-group\">
                                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Nombre del Requisito:"));
        echo "

                                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("placeholder" => "Escriba el nombre del requisito", "class" => "form-control inputGroup", "title" => "Nombre del Requisito")));
        // line 28
        echo "      
                            </div>
                            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class =\"form-group\">
                            <div class=\"input-group\">
                                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Descripcion:"));
        echo "

                                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'widget', array("attr" => array("placeholder" => "Escriba una descripcion del requisito", "class" => "form-control inputGroup", "title" => "Descripcion del Requisito")));
        // line 41
        echo "      
                            </div>
                            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'errors');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class =\"form-group\">
                            <div class=\"input-group\">
                                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Categoria:"));
        echo "

                                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'widget', array("attr" => array("class" => "form-control inputGroup", "title" => "Seleccione la categoria")));
        // line 54
        echo "      
                            </div>
                            ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'errors');
        echo "
                        </div>
                    </div>
                </div>

                <div class =\"form-group\">
                    <button type=\"submit\" id =\"enviar\" name=\"enviar\" class=\"btn btn-primary\"> Registrar</button>
                </div>
            </form>
        </div>
    </div>
    <div class=\"container\">    
        <div class=\"panel panel-danger\">
            <div class=\"panel-heading\" role=\"tab\" id=\"heading1\">
                <h4 class=\"panel-title\">
                    <a href=\"#collapse1\" data-toggle=\"collapse\" data-parent=\"#accordion\">
                        Lista de los Requisitos para las Categorias
                    </a>
                </h4>
            </div>
            <div id=\"collapse1\" class=\"panel-collapse collapse in\">
                <div class=\"panel-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-striped table-hover\">
                            <thead>
                                <tr>
                                    <th>Nombre del Requisito</th>
                                    <th>Descripcion</th>
                                    <th>Categoria</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["requisitos"]) ? $context["requisitos"] : $this->getContext($context, "requisitos")));
        foreach ($context['_seq'] as $context["_key"] => $context["requisito"]) {
            // line 90
            echo "                                    ";
            if (($this->getAttribute($context["requisito"], "activo", array()) == true)) {
                // line 91
                echo "                                        <tr>
                                            <td><strong>";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["requisito"], "nombre", array()), "html", null, true);
                echo "</strong></td>
                                            <td>";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($context["requisito"], "descripcion", array()), "html", null, true);
                echo "</td>
                                            <td><strong>";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["requisito"], "categoria", array()), "nombre", array()), "html", null, true);
                echo "</strong></td>
                                            <td>

                                                <a href=\"\" class=\"btn btn-sm btn-danger btn-delete confirmarEliminacion\">
                                                    Eliminar
                                                </a>
                                            </td>
                                        </tr>
                                    ";
            }
            // line 103
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requisito'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                            </tbody>    
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_1895e949940a1c5dff1dba9892a1b6cbd07eefbddf6f4cdfeb92cfa4b92ce61b->leave($__internal_1895e949940a1c5dff1dba9892a1b6cbd07eefbddf6f4cdfeb92cfa4b92ce61b_prof);

    }

    // line 113
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aa823eb89a36f1692dee316cbec87060eb06cb5634a12196ca878136c6720895 = $this->env->getExtension("native_profiler");
        $__internal_aa823eb89a36f1692dee316cbec87060eb06cb5634a12196ca878136c6720895->enter($__internal_aa823eb89a36f1692dee316cbec87060eb06cb5634a12196ca878136c6720895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 114
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/guardar/guardarRequisito.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-blockUI.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_aa823eb89a36f1692dee316cbec87060eb06cb5634a12196ca878136c6720895->leave($__internal_aa823eb89a36f1692dee316cbec87060eb06cb5634a12196ca878136c6720895_prof);

    }

    public function getTemplateName()
    {
        return "MTDCategoriasTrabajoBundle:Categoria:requisito.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 116,  236 => 115,  231 => 114,  225 => 113,  211 => 104,  205 => 103,  193 => 94,  189 => 93,  185 => 92,  182 => 91,  179 => 90,  175 => 89,  139 => 56,  135 => 54,  133 => 53,  128 => 51,  117 => 43,  113 => 41,  111 => 40,  106 => 38,  95 => 30,  91 => 28,  89 => 27,  84 => 25,  75 => 19,  71 => 18,  60 => 9,  51 => 7,  47 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/*     */
/* {% block body %}*/
/*     {{ parent() }}*/
/*     */
/*     {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*         <script>alert('{{ flashMessage }}');</script>*/
/*     {% endfor %}*/
/*     */
/*     <section class="jumbotron">*/
/*         <div class="container">*/
/*             <h2>Crear Requisito para una Categoria</h2>*/
/*         </div>*/
/*     </section>*/
/* */
/*     <div class="container">*/
/*         <div id="main">*/
/*             <form action="{{ path("mtd_requisito_registrar") }}" method="post" role="form">*/
/*                 {{form_errors(form)}}*/
/* */
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/*                         <div class ="form-group">*/
/*                             <div class="input-group">*/
/*                                 {{ form_label(form.nombre, 'Nombre del Requisito:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                                 {{ form_widget(form.nombre, { 'attr': {'placeholder': 'Escriba el nombre del requisito', 'class': 'form-control inputGroup',*/
/*                                                              'title': 'Nombre del Requisito' } }) }}      */
/*                             </div>*/
/*                             {{ form_errors(form.nombre) }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/*                         <div class ="form-group">*/
/*                             <div class="input-group">*/
/*                                 {{ form_label(form.descripcion, 'Descripcion:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                                 {{ form_widget(form.descripcion, { 'attr': {'placeholder': 'Escriba una descripcion del requisito', 'class': 'form-control inputGroup',*/
/*                                                              'title': 'Descripcion del Requisito' } }) }}      */
/*                             </div>*/
/*                             {{ form_errors(form.descripcion) }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/*                         <div class ="form-group">*/
/*                             <div class="input-group">*/
/*                                 {{ form_label(form.categoria, 'Categoria:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                                 {{ form_widget(form.categoria, { 'attr': { 'class': 'form-control inputGroup',*/
/*                                                              'title': 'Seleccione la categoria' } }) }}      */
/*                             </div>*/
/*                             {{ form_errors(form.categoria) }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class ="form-group">*/
/*                     <button type="submit" id ="enviar" name="enviar" class="btn btn-primary"> Registrar</button>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container">    */
/*         <div class="panel panel-danger">*/
/*             <div class="panel-heading" role="tab" id="heading1">*/
/*                 <h4 class="panel-title">*/
/*                     <a href="#collapse1" data-toggle="collapse" data-parent="#accordion">*/
/*                         Lista de los Requisitos para las Categorias*/
/*                     </a>*/
/*                 </h4>*/
/*             </div>*/
/*             <div id="collapse1" class="panel-collapse collapse in">*/
/*                 <div class="panel-body">*/
/*                     <div class="table-responsive">*/
/*                         <table class="table table-striped table-hover">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     <th>Nombre del Requisito</th>*/
/*                                     <th>Descripcion</th>*/
/*                                     <th>Categoria</th>*/
/*                                     <th>Acciones</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 {% for requisito in requisitos %}*/
/*                                     {% if requisito.activo == true %}*/
/*                                         <tr>*/
/*                                             <td><strong>{{ requisito.nombre }}</strong></td>*/
/*                                             <td>{{ requisito.descripcion }}</td>*/
/*                                             <td><strong>{{ requisito.categoria.nombre }}</strong></td>*/
/*                                             <td>*/
/* */
/*                                                 <a href="" class="btn btn-sm btn-danger btn-delete confirmarEliminacion">*/
/*                                                     Eliminar*/
/*                                                 </a>*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </tbody>    */
/*                         </table>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/*     */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="{{ asset('public/js/guardar/guardarRequisito.js') }}"></script>*/
/*     <script src="{{ asset('public/js/jquery-blockUI.js') }}"></script>*/
/* {% endblock %}*/

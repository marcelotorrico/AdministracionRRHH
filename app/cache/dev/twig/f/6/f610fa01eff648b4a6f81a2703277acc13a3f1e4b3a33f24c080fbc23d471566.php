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
        $__internal_189ba0b5e8b763796934e6d69672f63f67ebb0ab90b7c39209b8cfacfd866624 = $this->env->getExtension("native_profiler");
        $__internal_189ba0b5e8b763796934e6d69672f63f67ebb0ab90b7c39209b8cfacfd866624->enter($__internal_189ba0b5e8b763796934e6d69672f63f67ebb0ab90b7c39209b8cfacfd866624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MTDCategoriasTrabajoBundle:Categoria:requisito.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_189ba0b5e8b763796934e6d69672f63f67ebb0ab90b7c39209b8cfacfd866624->leave($__internal_189ba0b5e8b763796934e6d69672f63f67ebb0ab90b7c39209b8cfacfd866624_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_97ecedaefe2f1be31aa61b7b595de4fd9f0384da748756bfbe8fa04f240fbbba = $this->env->getExtension("native_profiler");
        $__internal_97ecedaefe2f1be31aa61b7b595de4fd9f0384da748756bfbe8fa04f240fbbba->enter($__internal_97ecedaefe2f1be31aa61b7b595de4fd9f0384da748756bfbe8fa04f240fbbba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <table class=\"table table-striped table-bordered table-hover table-condensed\" id=\"tabla\">
                            <thead>
                                <tr class=\"danger\">
                                    <th>Categoria</th>
                                    <th>Nombre del Requisito</th>
                                    <th>Descripcion</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 91
            echo "                                    ";
            $context["contador"] = 0;
            // line 92
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["requisitos"]) ? $context["requisitos"] : $this->getContext($context, "requisitos")));
            foreach ($context['_seq'] as $context["_key"] => $context["requisito"]) {
                // line 93
                echo "                                        ";
                if ((($this->getAttribute($context["categoria"], "nombre", array()) == $this->getAttribute($this->getAttribute($context["requisito"], "categoria", array()), "nombre", array())) && ($this->getAttribute($context["requisito"], "activo", array()) == true))) {
                    // line 94
                    echo "                                            ";
                    $context["contador"] = ((isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")) + 1);
                    // line 95
                    echo "                                        ";
                }
                // line 96
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requisito'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "                                    <tr>
                                        <td rowspan=\"";
            // line 98
            echo twig_escape_filter($this->env, (isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")), "html", null, true);
            echo "\">
                                            <strong>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "nombre", array()), "html", null, true);
            echo "</strong>
                                        </td>
                                        ";
            // line 101
            $context["contadorRequisito"] = 0;
            // line 102
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["requisitos"]) ? $context["requisitos"] : $this->getContext($context, "requisitos")));
            foreach ($context['_seq'] as $context["_key"] => $context["requisito"]) {
                // line 103
                echo "                                            ";
                if ((($this->getAttribute($context["categoria"], "nombre", array()) == $this->getAttribute($this->getAttribute($context["requisito"], "categoria", array()), "nombre", array())) && ($this->getAttribute($context["requisito"], "activo", array()) == true))) {
                    // line 104
                    echo "                                               ";
                    if (((isset($context["contadorRequisito"]) ? $context["contadorRequisito"] : $this->getContext($context, "contadorRequisito")) == 0)) {
                        // line 105
                        echo "                                                    <td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["requisito"], "nombre", array()), "html", null, true);
                        echo "</td>
                                                    <td>";
                        // line 106
                        echo twig_escape_filter($this->env, $this->getAttribute($context["requisito"], "descripcion", array()), "html", null, true);
                        echo "</td>
                                                    <td>
                                                        <a href=\"";
                        // line 108
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mtd_requisito_eliminar", array("id" => $this->getAttribute($context["requisito"], "id", array()))), "html", null, true);
                        echo "\" class=\"btn btn-sm btn-danger btn-delete confirmarEliminacion\">
                                                            Eliminar
                                                        </a>
                                                    </td>
                                               ";
                    } else {
                        // line 113
                        echo "                                                    <tr>
                                                        <td>";
                        // line 114
                        echo twig_escape_filter($this->env, $this->getAttribute($context["requisito"], "nombre", array()), "html", null, true);
                        echo "</td>
                                                        <td>";
                        // line 115
                        echo twig_escape_filter($this->env, $this->getAttribute($context["requisito"], "descripcion", array()), "html", null, true);
                        echo "</td>
                                                        <td>
                                                            <a href=\"";
                        // line 117
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mtd_requisito_eliminar", array("id" => $this->getAttribute($context["requisito"], "id", array()))), "html", null, true);
                        echo "\" class=\"btn btn-sm btn-danger btn-delete confirmarEliminacion\">
                                                                Eliminar
                                                            </a>
                                                        </td>
                                                    </tr>
                                               ";
                    }
                    // line 123
                    echo "                                               ";
                    $context["contadorRequisito"] = ((isset($context["contadorRequisito"]) ? $context["contadorRequisito"] : $this->getContext($context, "contadorRequisito")) + 1);
                    // line 124
                    echo "                                            ";
                }
                // line 125
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requisito'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                                 </tbody>    
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
";
        
        $__internal_97ecedaefe2f1be31aa61b7b595de4fd9f0384da748756bfbe8fa04f240fbbba->leave($__internal_97ecedaefe2f1be31aa61b7b595de4fd9f0384da748756bfbe8fa04f240fbbba_prof);

    }

    // line 137
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_417fef3e1eab0ab3cb0d2217f0e180bb1928386b936e1490e0c1bb86c8468c0f = $this->env->getExtension("native_profiler");
        $__internal_417fef3e1eab0ab3cb0d2217f0e180bb1928386b936e1490e0c1bb86c8468c0f->enter($__internal_417fef3e1eab0ab3cb0d2217f0e180bb1928386b936e1490e0c1bb86c8468c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 138
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/guardar/guardarRequisito.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-blockUI.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_417fef3e1eab0ab3cb0d2217f0e180bb1928386b936e1490e0c1bb86c8468c0f->leave($__internal_417fef3e1eab0ab3cb0d2217f0e180bb1928386b936e1490e0c1bb86c8468c0f_prof);

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
        return array (  315 => 140,  311 => 139,  306 => 138,  300 => 137,  286 => 128,  279 => 126,  273 => 125,  270 => 124,  267 => 123,  258 => 117,  253 => 115,  249 => 114,  246 => 113,  238 => 108,  233 => 106,  228 => 105,  225 => 104,  222 => 103,  217 => 102,  215 => 101,  210 => 99,  206 => 98,  203 => 97,  197 => 96,  194 => 95,  191 => 94,  188 => 93,  183 => 92,  180 => 91,  176 => 90,  139 => 56,  135 => 54,  133 => 53,  128 => 51,  117 => 43,  113 => 41,  111 => 40,  106 => 38,  95 => 30,  91 => 28,  89 => 27,  84 => 25,  75 => 19,  71 => 18,  60 => 9,  51 => 7,  47 => 6,  41 => 4,  35 => 3,  11 => 1,);
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
/*                         <table class="table table-striped table-bordered table-hover table-condensed" id="tabla">*/
/*                             <thead>*/
/*                                 <tr class="danger">*/
/*                                     <th>Categoria</th>*/
/*                                     <th>Nombre del Requisito</th>*/
/*                                     <th>Descripcion</th>*/
/*                                     <th>Acciones</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 */
/*                                 {% for categoria in categorias %}*/
/*                                     {% set contador = 0 %}*/
/*                                     {% for requisito in requisitos %}*/
/*                                         {% if categoria.nombre == requisito.categoria.nombre and requisito.activo == true %}*/
/*                                             {% set contador = contador + 1 %}*/
/*                                         {% endif %}*/
/*                                     {% endfor %}*/
/*                                     <tr>*/
/*                                         <td rowspan="{{ contador }}">*/
/*                                             <strong>{{ categoria.nombre }}</strong>*/
/*                                         </td>*/
/*                                         {% set contadorRequisito = 0 %}*/
/*                                         {% for requisito in requisitos %}*/
/*                                             {% if categoria.nombre == requisito.categoria.nombre and requisito.activo == true %}*/
/*                                                {% if contadorRequisito == 0%}*/
/*                                                     <td>{{ requisito.nombre }}</td>*/
/*                                                     <td>{{ requisito.descripcion }}</td>*/
/*                                                     <td>*/
/*                                                         <a href="{{ path('mtd_requisito_eliminar', { 'id': requisito.id }) }}" class="btn btn-sm btn-danger btn-delete confirmarEliminacion">*/
/*                                                             Eliminar*/
/*                                                         </a>*/
/*                                                     </td>*/
/*                                                {% else %}*/
/*                                                     <tr>*/
/*                                                         <td>{{ requisito.nombre }}</td>*/
/*                                                         <td>{{ requisito.descripcion }}</td>*/
/*                                                         <td>*/
/*                                                             <a href="{{ path('mtd_requisito_eliminar', { 'id': requisito.id }) }}" class="btn btn-sm btn-danger btn-delete confirmarEliminacion">*/
/*                                                                 Eliminar*/
/*                                                             </a>*/
/*                                                         </td>*/
/*                                                     </tr>*/
/*                                                {% endif %}*/
/*                                                {% set contadorRequisito = contadorRequisito + 1 %}*/
/*                                             {% endif %}*/
/*                                         {% endfor %}*/
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                  </tbody>    */
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* {% endblock %}*/
/*     */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="{{ asset('public/js/guardar/guardarRequisito.js') }}"></script>*/
/*     <script src="{{ asset('public/js/jquery-blockUI.js') }}"></script>*/
/* {% endblock %}*/

<?php

/* MTDCategoriasTrabajoBundle:Categoria:editaCategoria.html.twig */
class __TwigTemplate_92a62e7e1acde84c68720fed01490e1a34d60b0c3ce9734bb2ba9473d05d88f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "MTDCategoriasTrabajoBundle:Categoria:editaCategoria.html.twig", 1);
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
        $__internal_e080fe5186023a4d784478e592adced358b1f074ef043a10eb181f03d5d086cf = $this->env->getExtension("native_profiler");
        $__internal_e080fe5186023a4d784478e592adced358b1f074ef043a10eb181f03d5d086cf->enter($__internal_e080fe5186023a4d784478e592adced358b1f074ef043a10eb181f03d5d086cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MTDCategoriasTrabajoBundle:Categoria:editaCategoria.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e080fe5186023a4d784478e592adced358b1f074ef043a10eb181f03d5d086cf->leave($__internal_e080fe5186023a4d784478e592adced358b1f074ef043a10eb181f03d5d086cf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fbce5f601093fd853c3a288fa698ca05a93ed41476137d798fa772e1e8d0006 = $this->env->getExtension("native_profiler");
        $__internal_5fbce5f601093fd853c3a288fa698ca05a93ed41476137d798fa772e1e8d0006->enter($__internal_5fbce5f601093fd853c3a288fa698ca05a93ed41476137d798fa772e1e8d0006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 6
            echo "        <script>alert('";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "');</script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    <section class=\"jumbotron\">
        <div class=\"container\">
            <h2>Editar Categoria de Trabajo</h2>
        </div>
    </section>

    <div class=\"container\">
        
        ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class =\"form-group\">
                    <div class=\"input-group\">
                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Nombre de la Categoria:"));
        echo "

                        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("placeholder" => "Escriba el nombre de la categoria", "class" => "form-control inputGroup", "title" => "El nombre de la categoria tiene que ser unico", "value" => $this->getAttribute(        // line 27
(isset($context["categoriaSeleccionada"]) ? $context["categoriaSeleccionada"] : $this->getContext($context, "categoriaSeleccionada")), "nombre", array()))));
        echo "      
                    </div>
                    ";
        // line 29
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
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sueldoBasico", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Sueldo Basico:"));
        echo "

                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sueldoBasico", array()), 'widget', array("attr" => array("placeholder" => "Escriba el monto del sueldo basico", "class" => "form-control inputGroup", "title" => "Ingrese montos validos", "value" => $this->getAttribute(        // line 41
(isset($context["categoriaSeleccionada"]) ? $context["categoriaSeleccionada"] : $this->getContext($context, "categoriaSeleccionada")), "sueldoBasico", array()))));
        echo "      
                    </div>
                    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sueldoBasico", array()), 'errors');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "viatico", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Monto Viatico:"));
        echo "

                        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "viatico", array()), 'widget', array("attr" => array("placeholder" => "Escriba el monto por los viaticos", "class" => "form-control inputGroup", "title" => "Ingrese montos validos", "value" => $this->getAttribute(        // line 55
(isset($context["categoriaSeleccionada"]) ? $context["categoriaSeleccionada"] : $this->getContext($context, "categoriaSeleccionada")), "viatico", array()))));
        echo "      
                    </div>
                    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "viatico", array()), 'errors');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class =\"form-group\">
                    <div class=\"input-group\">
                        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "premio", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Monto Premio:"));
        echo "

                        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "premio", array()), 'widget', array("attr" => array("placeholder" => "Escriba el monto por los premios", "class" => "form-control inputGroup", "title" => "Ingrese montos validos", "value" => $this->getAttribute(        // line 69
(isset($context["categoriaSeleccionada"]) ? $context["categoriaSeleccionada"] : $this->getContext($context, "categoriaSeleccionada")), "premio", array()))));
        echo "      
                    </div>
                    ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "premio", array()), 'errors');
        echo "
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class =\"form-group\">
                    <div class=\"input-group\">
                        ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "total", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Total:"));
        echo "

                        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "total", array()), 'widget', array("attr" => array("placeholder" => "Total", "class" => "form-control inputGroup", "title" => "Total", "value" => $this->getAttribute(        // line 83
(isset($context["categoriaSeleccionada"]) ? $context["categoriaSeleccionada"] : $this->getContext($context, "categoriaSeleccionada")), "total", array()), "readonly" => "readonly")));
        echo "      
                    </div>
                    ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "total", array()), 'errors');
        echo "
                </div>
            </div>
        </div>
        
        <div class =\"form-group\">
            <a type=\"button\" href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("mtd_categoria_lista");
        echo "\" class=\"btn btn-default\"> Cancelar</a>
            <button type=\"submit\" id =\"enviar\" name=\"enviar\" class=\"btn btn-primary\"> Actualizar</button>
        </div>

        ";
        // line 95
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_5fbce5f601093fd853c3a288fa698ca05a93ed41476137d798fa772e1e8d0006->leave($__internal_5fbce5f601093fd853c3a288fa698ca05a93ed41476137d798fa772e1e8d0006_prof);

    }

    // line 99
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_efd87e770f299a1e0850390269fed2633ab596184d861cf8ae8dd4e8cde55d98 = $this->env->getExtension("native_profiler");
        $__internal_efd87e770f299a1e0850390269fed2633ab596184d861cf8ae8dd4e8cde55d98->enter($__internal_efd87e770f299a1e0850390269fed2633ab596184d861cf8ae8dd4e8cde55d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/modificar/modificarInput.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_efd87e770f299a1e0850390269fed2633ab596184d861cf8ae8dd4e8cde55d98->leave($__internal_efd87e770f299a1e0850390269fed2633ab596184d861cf8ae8dd4e8cde55d98_prof);

    }

    public function getTemplateName()
    {
        return "MTDCategoriasTrabajoBundle:Categoria:editaCategoria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 101,  213 => 100,  207 => 99,  197 => 95,  190 => 91,  181 => 85,  176 => 83,  175 => 81,  170 => 79,  159 => 71,  154 => 69,  153 => 67,  148 => 65,  137 => 57,  132 => 55,  131 => 53,  126 => 51,  115 => 43,  110 => 41,  109 => 39,  104 => 37,  93 => 29,  88 => 27,  87 => 25,  82 => 23,  73 => 17,  69 => 16,  59 => 8,  50 => 6,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/*     */
/* {% block body %}*/
/*     {{ parent() }}*/
/*     {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*         <script>alert('{{ flashMessage }}');</script>*/
/*     {% endfor %}*/
/*     <section class="jumbotron">*/
/*         <div class="container">*/
/*             <h2>Editar Categoria de Trabajo</h2>*/
/*         </div>*/
/*     </section>*/
/* */
/*     <div class="container">*/
/*         */
/*         {{ form_start(form) }}*/
/*         {{form_errors(form)}}*/
/*         */
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class ="form-group">*/
/*                     <div class="input-group">*/
/*                         {{ form_label(form.nombre, 'Nombre de la Categoria:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                         {{ form_widget(form.nombre, { 'attr': {'placeholder': 'Escriba el nombre de la categoria', 'class': 'form-control inputGroup',*/
/*                                                      'title': 'El nombre de la categoria tiene que ser unico',*/
/*                                                       'value': categoriaSeleccionada.nombre } }) }}      */
/*                     </div>*/
/*                     {{ form_errors(form.nombre) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class ="form-group">*/
/*                     <div class="input-group">*/
/*                         {{ form_label(form.sueldoBasico, 'Sueldo Basico:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                         {{ form_widget(form.sueldoBasico, { 'attr': {'placeholder': 'Escriba el monto del sueldo basico', 'class': 'form-control inputGroup',*/
/*                                                      'title': 'Ingrese montos validos',*/
/*                                                       'value': categoriaSeleccionada.sueldoBasico} }) }}      */
/*                     </div>*/
/*                     {{ form_errors(form.sueldoBasico) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class ="form-group">*/
/*                     <div class="input-group">*/
/*                         {{ form_label(form.viatico, 'Monto Viatico:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                         {{ form_widget(form.viatico, { 'attr': {'placeholder': 'Escriba el monto por los viaticos', 'class': 'form-control inputGroup',*/
/*                                                      'title': 'Ingrese montos validos',*/
/*                                                       'value': categoriaSeleccionada.viatico } }) }}      */
/*                     </div>*/
/*                     {{ form_errors(form.viatico) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class ="form-group">*/
/*                     <div class="input-group">*/
/*                         {{ form_label(form.premio, 'Monto Premio:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                         {{ form_widget(form.premio, { 'attr': {'placeholder': 'Escriba el monto por los premios', 'class': 'form-control inputGroup',*/
/*                                                      'title': 'Ingrese montos validos',*/
/*                                                       'value': categoriaSeleccionada.premio } }) }}      */
/*                     </div>*/
/*                     {{ form_errors(form.premio) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class ="form-group">*/
/*                     <div class="input-group">*/
/*                         {{ form_label(form.total, 'Total:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                         {{ form_widget(form.total, { 'attr': {'placeholder': 'Total', 'class': 'form-control inputGroup',*/
/*                                                      'title': 'Total',*/
/*                                                       'value': categoriaSeleccionada.total, 'readonly':'readonly' } }) }}      */
/*                     </div>*/
/*                     {{ form_errors(form.total) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class ="form-group">*/
/*             <a type="button" href="{{ path('mtd_categoria_lista') }}" class="btn btn-default"> Cancelar</a>*/
/*             <button type="submit" id ="enviar" name="enviar" class="btn btn-primary"> Actualizar</button>*/
/*         </div>*/
/* */
/*         {{form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
/*         */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="{{ asset('public/js/modificar/modificarInput.js') }}"></script>*/
/* {% endblock %}*/

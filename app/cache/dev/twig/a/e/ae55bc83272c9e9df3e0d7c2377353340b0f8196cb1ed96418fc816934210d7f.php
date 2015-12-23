<?php

/* MTDCategoriasTrabajoBundle:Categoria:registro.html.twig */
class __TwigTemplate_450bcef1642b3a04e8c54d85ac2265ffb1a82e39e04861ea92cef775764b6e4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "MTDCategoriasTrabajoBundle:Categoria:registro.html.twig", 1);
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
        $__internal_ff87ab929a24c8272baa3c78be47693e997a74d2646ec74d28ff12458e760b57 = $this->env->getExtension("native_profiler");
        $__internal_ff87ab929a24c8272baa3c78be47693e997a74d2646ec74d28ff12458e760b57->enter($__internal_ff87ab929a24c8272baa3c78be47693e997a74d2646ec74d28ff12458e760b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MTDCategoriasTrabajoBundle:Categoria:registro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff87ab929a24c8272baa3c78be47693e997a74d2646ec74d28ff12458e760b57->leave($__internal_ff87ab929a24c8272baa3c78be47693e997a74d2646ec74d28ff12458e760b57_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_685f03c24cd77101765299ca7eaef1a3dbd0273b3e587e4cf07f3d317cccfdad = $this->env->getExtension("native_profiler");
        $__internal_685f03c24cd77101765299ca7eaef1a3dbd0273b3e587e4cf07f3d317cccfdad->enter($__internal_685f03c24cd77101765299ca7eaef1a3dbd0273b3e587e4cf07f3d317cccfdad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <h2>Crear Categoria de Trabajo</h2>
        </div>
    </section>

    <div class=\"container\">
        
        ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Nombre de la Categoria:"));
        echo "

                        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("placeholder" => "Escriba el nombre de la categoria", "class" => "form-control inputGroup", "title" => "El nombre de la categoria tiene que ser unico")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sueldoBasico", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Sueldo Basico:"));
        echo "

                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sueldoBasico", array()), 'widget', array("attr" => array("placeholder" => "Escriba el monto del sueldo basico", "class" => "form-control inputGroup", "title" => "Ingrese montos validos")));
        // line 41
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "viatico", array()), 'widget', array("attr" => array("placeholder" => "Escriba el monto por los viaticos", "class" => "form-control inputGroup", "title" => "Ingrese montos validos")));
        // line 54
        echo "      
                    </div>
                    ";
        // line 56
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
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "premio", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Monto Premio:"));
        echo "

                        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "premio", array()), 'widget', array("attr" => array("placeholder" => "Escriba el monto por los premios", "class" => "form-control inputGroup", "title" => "Ingrese montos validos")));
        // line 67
        echo "      
                    </div>
                    ";
        // line 69
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
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "total", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Total:"));
        echo "

                        ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "total", array()), 'widget', array("attr" => array("placeholder" => "Total", "class" => "form-control inputGroup", "title" => "Total", "disabled" => "disabled")));
        // line 80
        echo "      
                    </div>
                    ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "total", array()), 'errors');
        echo "
                </div>
            </div>
        </div>

        <div class =\"form-group\">
            <button type=\"submit\" id =\"enviar\" name=\"enviar\" class=\"btn btn-primary\"> Registrar</button>
        </div>

        ";
        // line 91
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_685f03c24cd77101765299ca7eaef1a3dbd0273b3e587e4cf07f3d317cccfdad->leave($__internal_685f03c24cd77101765299ca7eaef1a3dbd0273b3e587e4cf07f3d317cccfdad_prof);

    }

    // line 95
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec6e5b91b761253ebf61d91c1ee21e5db0336e84b9b1638e3609538d60ab2a4a = $this->env->getExtension("native_profiler");
        $__internal_ec6e5b91b761253ebf61d91c1ee21e5db0336e84b9b1638e3609538d60ab2a4a->enter($__internal_ec6e5b91b761253ebf61d91c1ee21e5db0336e84b9b1638e3609538d60ab2a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 96
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/modificar/modificarInput.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_ec6e5b91b761253ebf61d91c1ee21e5db0336e84b9b1638e3609538d60ab2a4a->leave($__internal_ec6e5b91b761253ebf61d91c1ee21e5db0336e84b9b1638e3609538d60ab2a4a_prof);

    }

    public function getTemplateName()
    {
        return "MTDCategoriasTrabajoBundle:Categoria:registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 97,  211 => 96,  205 => 95,  195 => 91,  183 => 82,  179 => 80,  177 => 79,  172 => 77,  161 => 69,  157 => 67,  155 => 66,  150 => 64,  139 => 56,  135 => 54,  133 => 53,  128 => 51,  117 => 43,  113 => 41,  111 => 40,  106 => 38,  95 => 30,  91 => 28,  89 => 27,  84 => 25,  75 => 19,  71 => 18,  60 => 9,  51 => 7,  47 => 6,  41 => 4,  35 => 3,  11 => 1,);
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
/*             <h2>Crear Categoria de Trabajo</h2>*/
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
/*                                                      'title': 'El nombre de la categoria tiene que ser unico' } }) }}      */
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
/*                                                      'title': 'Ingrese montos validos' } }) }}      */
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
/*                                                      'title': 'Ingrese montos validos' } }) }}      */
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
/*                                                      'title': 'Ingrese montos validos' } }) }}      */
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
/*                                                      'title': 'Total', 'disabled':'disabled' } }) }}      */
/*                     </div>*/
/*                     {{ form_errors(form.total) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class ="form-group">*/
/*             <button type="submit" id ="enviar" name="enviar" class="btn btn-primary"> Registrar</button>*/
/*         </div>*/
/* */
/*         {{form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
/*     */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="{{ asset('public/js/modificar/modificarInput.js') }}"></script>*/
/* {% endblock %}                */

<?php

/* MTDContratacionEmpleadosBundle:Proyecto:registro.html.twig */
class __TwigTemplate_2995af32914166698b87976443f07f497db886fa368df5d248e0aefabd4c35ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "MTDContratacionEmpleadosBundle:Proyecto:registro.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_22767934c967370401415a6a96393ec8a2d7e1b06182dbb67d2e4681c2bf11f5 = $this->env->getExtension("native_profiler");
        $__internal_22767934c967370401415a6a96393ec8a2d7e1b06182dbb67d2e4681c2bf11f5->enter($__internal_22767934c967370401415a6a96393ec8a2d7e1b06182dbb67d2e4681c2bf11f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MTDContratacionEmpleadosBundle:Proyecto:registro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22767934c967370401415a6a96393ec8a2d7e1b06182dbb67d2e4681c2bf11f5->leave($__internal_22767934c967370401415a6a96393ec8a2d7e1b06182dbb67d2e4681c2bf11f5_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_483c9187506ef904a8d0f5d41f4e76981162721b015d6ef368662f6549029f14 = $this->env->getExtension("native_profiler");
        $__internal_483c9187506ef904a8d0f5d41f4e76981162721b015d6ef368662f6549029f14->enter($__internal_483c9187506ef904a8d0f5d41f4e76981162721b015d6ef368662f6549029f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/datepicker.css"), "html", null, true);
        echo "\" /> 
";
        
        $__internal_483c9187506ef904a8d0f5d41f4e76981162721b015d6ef368662f6549029f14->leave($__internal_483c9187506ef904a8d0f5d41f4e76981162721b015d6ef368662f6549029f14_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e44b4cd5c1f5e9d67ade8b0861ba7f5033a541068481faac5127d839e044dda = $this->env->getExtension("native_profiler");
        $__internal_3e44b4cd5c1f5e9d67ade8b0861ba7f5033a541068481faac5127d839e044dda->enter($__internal_3e44b4cd5c1f5e9d67ade8b0861ba7f5033a541068481faac5127d839e044dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <section class=\"jumbotron\">
        <div class=\"container\">
            <h2>Agregar Proyecto</h2>
        </div>
    </section>

    <div class=\"container\">
                ";
        // line 17
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
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Nombre del Proyecto:"));
        echo "
                                        
                                        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("placeholder" => "Escriba un nombre de usuario", "class" => "form-control inputGroup", "title" => "Minimo 3 caracteres y Maximo 12. Los primeros tres caracteres tienen que ser letras.")));
        // line 27
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montoContrato", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Monto del Contrato:"));
        echo "
                                        
                                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montoContrato", array()), 'widget', array("attr" => array("placeholder" => "Escriba su nombre", "class" => "form-control inputGroup", "title" => "El nombre debe empezar con mayuscula.")));
        // line 40
        echo "      
                                    </div>
                                    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montoContrato", array()), 'errors');
        echo "
                                </div>
                            </div>
                    </div>
                    <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class =\"form-group\">
                                    <div class=\"input-group\">
                                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plazoEntrega", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Plazo de Entrega:"));
        echo "
                                        
                                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plazoEntrega", array()), 'widget', array("attr" => array("placeholder" => "Escriba su apellido", "class" => "form-control input-inline datepicker inputGroup", "title" => "El apellido debe empezar con mayuscula.")));
        // line 53
        echo "      
                                    </div>
                                    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plazoEntrega", array()), 'errors');
        echo "
                                </div>
                            </div>
                    </div>
                    <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class =\"form-group\">
                                    <div class=\"input-group\">
                                        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lugar", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Lugar:"));
        echo "
                                        
                                        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lugar", array()), 'widget', array("attr" => array("placeholder" => "Escriba su numero de telefono", "class" => "form-control inputGroup", "title" => "Ingrese solo números validos.")));
        // line 66
        echo "      
                                    </div>
                                    ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lugar", array()), 'errors');
        echo "
                                </div>
                            </div>
                    </div>
                    <div class=\"row\" id=\"ventCliente\">
                            <div class=\"col-md-6\">
                                <div class =\"form-group\">
                                    <div class=\"input-group\">
                                        
                                        ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Cliente:"));
        echo "
                                        
                                        ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'widget', array("attr" => array("placeholder" => "Escriba su correo electronico", "class" => "form-control inputGroup", "title" => "Ingrese un correo valido.")));
        // line 80
        echo "     
                                    </div>
                                    ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'errors');
        echo "   
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <a href=\"#ventanaCliente\" data-toggle=\"modal\">Pulse aqui para agregar un nuevo cliente</a>
                            </div>
                    </div>
                    <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class =\"form-group\">
                                    <div class=\"input-group\">
                                        ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo_proyecto", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Tipo Proyecto:"));
        echo "
                                        
                                        ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo_proyecto", array()), 'widget', array("attr" => array("placeholder" => "Escriba su correo electronico", "class" => "form-control inputGroup", "title" => "Ingrese un correo valido.")));
        // line 96
        echo "      
                                    </div>
                                    ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo_proyecto", array()), 'errors');
        echo "
                                </div>
                            </div>
                    </div>
                    <div class =\"form-group\">
                        <button type=\"submit\" id =\"enviar\" name=\"enviar\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-ok\"></span> Registrar</button>
                    </div>
                
                
                ";
        // line 107
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                
        <div class=\"modal fade\" id=\"ventanaCliente\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\">Registro de un Nuevo Cliente</h4>
                    </div>
                    <div class=\"modal-body\">
                        <div id=\"main\">
                        
                        <form action=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("mtd_proyecto_registro");
        echo "\" method=\"post\" role=\"form\" data-async data-target=\"#rating-modal\" class=\"text-left\">
                        ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), 'errors');
        echo "
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class =\"form-group\">
                                    <div class=\"input-group\">
                                        ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "nombre", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Nombre del Cliente:"));
        echo "

                                        ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "nombre", array()), 'widget', array("attr" => array("placeholder" => "Escriba el nombre del cliente", "class" => "form-control inputGroup", "title" => "El nombre debe empezar con mayuscula")));
        // line 128
        echo "      
                                    </div>
                                    ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "nombre", array()), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                           <div class=\"col-md-12\">
                                <div class =\"form-group\">
                                    <div class=\"input-group\">
                                        ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "apellido", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Apellido del Cliente:"));
        echo "

                                        ";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "apellido", array()), 'widget', array("attr" => array("placeholder" => "Escriba el apellido del cliente", "class" => "form-control inputGroup", "title" => "El apellido debe empezar con mayuscula.")));
        // line 141
        echo "      
                                    </div>
                                    ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "apellido", array()), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class =\"form-group\">
                                    <div class=\"input-group\">
                                        ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "direccion", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Direccion del Cliente:"));
        echo "

                                        ";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "direccion", array()), 'widget', array("attr" => array("placeholder" => "Escriba la direccion del cliente", "class" => "form-control input-inline datepicker inputGroup")));
        echo "      
                                    </div>
                                    ";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "direccion", array()), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class =\"form-group\">
                                    <div class=\"input-group\">
                                        ";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "telefono", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Telefono del Cliente:"));
        echo "

                                        ";
        // line 165
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "telefono", array()), 'widget', array("attr" => array("placeholder" => "Escriba el telefono del cliente", "class" => "form-control inputGroup", "title" => "Ingrese números telefonicos validos.")));
        // line 166
        echo "      
                                    </div>
                                    ";
        // line 168
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "telefono", array()), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class =\"form-group\">
                                    <div class=\"input-group\">

                                        ";
        // line 177
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "nit", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Nit del Cliente:"));
        echo "

                                        ";
        // line 179
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "nit", array()), 'widget', array("attr" => array("placeholder" => "Escriba el nit del cliente", "class" => "form-control inputGroup")));
        echo "     
                                    </div>
                                    ";
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "nit", array()), 'errors');
        echo "   
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class =\"form-group\">
                                    <div class=\"input-group\">
                                        ";
        // line 189
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "banco", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Banco del Cliente:"));
        echo "

                                        ";
        // line 191
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "banco", array()), 'widget', array("attr" => array("placeholder" => "Escriba el banco del cliente", "class" => "form-control inputGroup")));
        echo "      
                                    </div>
                                    ";
        // line 193
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "banco", array()), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"modal-footer form-group\">
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
                            <button type=\"submit\" id =\"enviarCliente\" name=\"enviarCliente\" class=\"btn btn-primary\">Guardar Cambios</button>
                        </div>
                        </form>
                        
                        </div>
                </div>
                    
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_3e44b4cd5c1f5e9d67ade8b0861ba7f5033a541068481faac5127d839e044dda->leave($__internal_3e44b4cd5c1f5e9d67ade8b0861ba7f5033a541068481faac5127d839e044dda_prof);

    }

    // line 212
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e0d35007e9080dd3426792e3a36dfc53b20e66d01f579d04c67bca545e1bce7e = $this->env->getExtension("native_profiler");
        $__internal_e0d35007e9080dd3426792e3a36dfc53b20e66d01f579d04c67bca545e1bce7e->enter($__internal_e0d35007e9080dd3426792e3a36dfc53b20e66d01f579d04c67bca545e1bce7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 213
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/fechas/validacionFechas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/guardar/guardarCliente.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_e0d35007e9080dd3426792e3a36dfc53b20e66d01f579d04c67bca545e1bce7e->leave($__internal_e0d35007e9080dd3426792e3a36dfc53b20e66d01f579d04c67bca545e1bce7e_prof);

    }

    public function getTemplateName()
    {
        return "MTDContratacionEmpleadosBundle:Proyecto:registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  414 => 216,  410 => 215,  406 => 214,  401 => 213,  395 => 212,  370 => 193,  365 => 191,  360 => 189,  349 => 181,  344 => 179,  339 => 177,  327 => 168,  323 => 166,  321 => 165,  316 => 163,  305 => 155,  300 => 153,  295 => 151,  284 => 143,  280 => 141,  278 => 140,  273 => 138,  262 => 130,  258 => 128,  256 => 127,  251 => 125,  243 => 120,  239 => 119,  224 => 107,  212 => 98,  208 => 96,  206 => 95,  201 => 93,  187 => 82,  183 => 80,  181 => 79,  176 => 77,  164 => 68,  160 => 66,  158 => 65,  153 => 63,  142 => 55,  138 => 53,  136 => 52,  131 => 50,  120 => 42,  116 => 40,  114 => 39,  109 => 37,  98 => 29,  94 => 27,  92 => 26,  87 => 24,  79 => 19,  74 => 17,  62 => 9,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('public/css/datepicker.css') }}" /> */
/* {% endblock %}*/
/*     */
/* {% block body %}*/
/*     {{ parent() }}*/
/*     <section class="jumbotron">*/
/*         <div class="container">*/
/*             <h2>Agregar Proyecto</h2>*/
/*         </div>*/
/*     </section>*/
/* */
/*     <div class="container">*/
/*                 {{ form_start(form) }}*/
/*                 */
/*                     {{form_errors(form)}}*/
/*                     <div class="row">*/
/*                             <div class="col-md-12">*/
/*                                 <div class ="form-group">*/
/*                                     <div class="input-group">*/
/*                                         {{ form_label(form.nombre, 'Nombre del Proyecto:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/*                                         */
/*                                         {{ form_widget(form.nombre, { 'attr': {'placeholder': 'Escriba un nombre de usuario', 'class': 'form-control inputGroup',*/
/*                                                                      'title': 'Minimo 3 caracteres y Maximo 12. Los primeros tres caracteres tienen que ser letras.' } }) }}      */
/*                                     </div>*/
/*                                     {{ form_errors(form.nombre) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                             <div class="col-md-12">*/
/*                                 <div class ="form-group">*/
/*                                     <div class="input-group">*/
/*                                         {{ form_label(form.montoContrato, 'Monto del Contrato:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/*                                         */
/*                                         {{ form_widget(form.montoContrato, { 'attr': {'placeholder': 'Escriba su nombre', 'class': 'form-control inputGroup',*/
/*                                                                      'title': 'El nombre debe empezar con mayuscula.' } }) }}      */
/*                                     </div>*/
/*                                     {{ form_errors(form.montoContrato) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                             <div class="col-md-12">*/
/*                                 <div class ="form-group">*/
/*                                     <div class="input-group">*/
/*                                         {{ form_label(form.plazoEntrega, 'Plazo de Entrega:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/*                                         */
/*                                         {{ form_widget(form.plazoEntrega, { 'attr': {'placeholder': 'Escriba su apellido', 'class': 'form-control input-inline datepicker inputGroup',*/
/*                                                                      'title': 'El apellido debe empezar con mayuscula.' } }) }}      */
/*                                     </div>*/
/*                                     {{ form_errors(form.plazoEntrega) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                             <div class="col-md-12">*/
/*                                 <div class ="form-group">*/
/*                                     <div class="input-group">*/
/*                                         {{ form_label(form.lugar, 'Lugar:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/*                                         */
/*                                         {{ form_widget(form.lugar, { 'attr': {'placeholder': 'Escriba su numero de telefono', 'class': 'form-control inputGroup',*/
/*                                                                      'title': 'Ingrese solo números validos.' } }) }}      */
/*                                     </div>*/
/*                                     {{ form_errors(form.lugar) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                     </div>*/
/*                     <div class="row" id="ventCliente">*/
/*                             <div class="col-md-6">*/
/*                                 <div class ="form-group">*/
/*                                     <div class="input-group">*/
/*                                         */
/*                                         {{ form_label(form.cliente, 'Cliente:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/*                                         */
/*                                         {{ form_widget(form.cliente, { 'attr': {'placeholder': 'Escriba su correo electronico', 'class': 'form-control inputGroup',*/
/*                                                                      'title': 'Ingrese un correo valido.' } }) }}     */
/*                                     </div>*/
/*                                     {{ form_errors(form.cliente) }}   */
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-6">*/
/*                                 <a href="#ventanaCliente" data-toggle="modal">Pulse aqui para agregar un nuevo cliente</a>*/
/*                             </div>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                             <div class="col-md-12">*/
/*                                 <div class ="form-group">*/
/*                                     <div class="input-group">*/
/*                                         {{ form_label(form.tipo_proyecto, 'Tipo Proyecto:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/*                                         */
/*                                         {{ form_widget(form.tipo_proyecto, { 'attr': {'placeholder': 'Escriba su correo electronico', 'class': 'form-control inputGroup',*/
/*                                                                      'title': 'Ingrese un correo valido.' } }) }}      */
/*                                     </div>*/
/*                                     {{ form_errors(form.tipo_proyecto) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                     </div>*/
/*                     <div class ="form-group">*/
/*                         <button type="submit" id ="enviar" name="enviar" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Registrar</button>*/
/*                     </div>*/
/*                 */
/*                 */
/*                 {{form_end(form) }}*/
/*                 */
/*         <div class="modal fade" id="ventanaCliente">*/
/*             <div class="modal-dialog">*/
/*                 <div class="modal-content">*/
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                         <h4 class="modal-title">Registro de un Nuevo Cliente</h4>*/
/*                     </div>*/
/*                     <div class="modal-body">*/
/*                         <div id="main">*/
/*                         */
/*                         <form action="{{ path("mtd_proyecto_registro") }}" method="post" role="form" data-async data-target="#rating-modal" class="text-left">*/
/*                         {{form_errors(formularioCliente)}}*/
/*                         <div class="row">*/
/*                             <div class="col-md-12">*/
/*                                 <div class ="form-group">*/
/*                                     <div class="input-group">*/
/*                                         {{ form_label(formularioCliente.nombre, 'Nombre del Cliente:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                                         {{ form_widget(formularioCliente.nombre, { 'attr': {'placeholder': 'Escriba el nombre del cliente', 'class': 'form-control inputGroup',*/
/*                                                                      'title': 'El nombre debe empezar con mayuscula' } }) }}      */
/*                                     </div>*/
/*                                     {{ form_errors(formularioCliente.nombre) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                            <div class="col-md-12">*/
/*                                 <div class ="form-group">*/
/*                                     <div class="input-group">*/
/*                                         {{ form_label(formularioCliente.apellido, 'Apellido del Cliente:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                                         {{ form_widget(formularioCliente.apellido, { 'attr': {'placeholder': 'Escriba el apellido del cliente', 'class': 'form-control inputGroup',*/
/*                                                                      'title': 'El apellido debe empezar con mayuscula.' } }) }}      */
/*                                     </div>*/
/*                                     {{ form_errors(formularioCliente.apellido) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="col-md-12">*/
/*                                 <div class ="form-group">*/
/*                                     <div class="input-group">*/
/*                                         {{ form_label(formularioCliente.direccion, 'Direccion del Cliente:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                                         {{ form_widget(formularioCliente.direccion, { 'attr': {'placeholder': 'Escriba la direccion del cliente', 'class': 'form-control input-inline datepicker inputGroup'} }) }}      */
/*                                     </div>*/
/*                                     {{ form_errors(formularioCliente.direccion) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="col-md-12">*/
/*                                 <div class ="form-group">*/
/*                                     <div class="input-group">*/
/*                                         {{ form_label(formularioCliente.telefono, 'Telefono del Cliente:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                                         {{ form_widget(formularioCliente.telefono, { 'attr': {'placeholder': 'Escriba el telefono del cliente', 'class': 'form-control inputGroup',*/
/*                                                                      'title': 'Ingrese números telefonicos validos.' } }) }}      */
/*                                     </div>*/
/*                                     {{ form_errors(formularioCliente.telefono) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="col-md-12">*/
/*                                 <div class ="form-group">*/
/*                                     <div class="input-group">*/
/* */
/*                                         {{ form_label(formularioCliente.nit, 'Nit del Cliente:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                                         {{ form_widget(formularioCliente.nit, { 'attr': {'placeholder': 'Escriba el nit del cliente', 'class': 'form-control inputGroup'} }) }}     */
/*                                     </div>*/
/*                                     {{ form_errors(formularioCliente.nit) }}   */
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="col-md-12">*/
/*                                 <div class ="form-group">*/
/*                                     <div class="input-group">*/
/*                                         {{ form_label(formularioCliente.banco, 'Banco del Cliente:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                                         {{ form_widget(formularioCliente.banco, { 'attr': {'placeholder': 'Escriba el banco del cliente', 'class': 'form-control inputGroup'} }) }}      */
/*                                     </div>*/
/*                                     {{ form_errors(formularioCliente.banco) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="modal-footer form-group">*/
/*                             <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>*/
/*                             <button type="submit" id ="enviarCliente" name="enviarCliente" class="btn btn-primary">Guardar Cambios</button>*/
/*                         </div>*/
/*                         </form>*/
/*                         */
/*                         </div>*/
/*                 </div>*/
/*                     */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/*     */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="{{ asset('public/js/fechas/validacionFechas.js') }}"></script>*/
/*     <script src="{{ asset('public/js/jquery-datepicker.js') }}"></script>*/
/*     <script src="{{ asset('public/js/guardar/guardarCliente.js') }}"></script>*/
/* {% endblock %}                */

<?php

/* MTDProyectoBundle:Proyecto:registro.html.twig */
class __TwigTemplate_4d811ca9963af9eeb16b8675f2534c35ff9e69273412697cafe298bbe850915a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "MTDProyectoBundle:Proyecto:registro.html.twig", 1);
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
        $__internal_8cc9d88805ae5f603634ad338c3cfd9baf040dd6743225725cabc9fe1800214c = $this->env->getExtension("native_profiler");
        $__internal_8cc9d88805ae5f603634ad338c3cfd9baf040dd6743225725cabc9fe1800214c->enter($__internal_8cc9d88805ae5f603634ad338c3cfd9baf040dd6743225725cabc9fe1800214c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MTDProyectoBundle:Proyecto:registro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cc9d88805ae5f603634ad338c3cfd9baf040dd6743225725cabc9fe1800214c->leave($__internal_8cc9d88805ae5f603634ad338c3cfd9baf040dd6743225725cabc9fe1800214c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2a53f9b22cb91f5549a09ead328efed4dbebb755b327ca0d5f99cb6c0bd5b31b = $this->env->getExtension("native_profiler");
        $__internal_2a53f9b22cb91f5549a09ead328efed4dbebb755b327ca0d5f99cb6c0bd5b31b->enter($__internal_2a53f9b22cb91f5549a09ead328efed4dbebb755b327ca0d5f99cb6c0bd5b31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/datepicker.css"), "html", null, true);
        echo "\" /> 
";
        
        $__internal_2a53f9b22cb91f5549a09ead328efed4dbebb755b327ca0d5f99cb6c0bd5b31b->leave($__internal_2a53f9b22cb91f5549a09ead328efed4dbebb755b327ca0d5f99cb6c0bd5b31b_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_bcf8e87df5940f5763f0b4fd1e4029e306cc804d41c70f6b093e17489abf539b = $this->env->getExtension("native_profiler");
        $__internal_bcf8e87df5940f5763f0b4fd1e4029e306cc804d41c70f6b093e17489abf539b->enter($__internal_bcf8e87df5940f5763f0b4fd1e4029e306cc804d41c70f6b093e17489abf539b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <script>alert('";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "');</script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    
    <section class=\"jumbotron\">
        <div class=\"container\">
            <h2>Registrar Proyecto</h2>
        </div>
    </section>

    <div class=\"container-fluid full-height\">
        
        ";
        // line 23
        echo twig_include($this->env, $context, "menuListaProyectos.html.twig");
        echo "
        
        <div class=\"col-md-9\">
            <br><br>
            ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class =\"form-group\">
                        <div class=\"input-group\">
                            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Nombre del Proyecto:"));
        echo "

                            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("placeholder" => "Escriba el nombre del proyecto", "class" => "form-control inputGroup", "title" => "El nombre del proyecto tiene que ser unico")));
        // line 37
        echo "      
                        </div>
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class =\"form-group\">
                        <div class=\"input-group\">
                            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montoContrato", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Monto del Contrato:"));
        echo "

                            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montoContrato", array()), 'widget', array("attr" => array("placeholder" => "Escriba el monto del contrato", "class" => "form-control inputGroup", "title" => "Ingrese el monto del contrato.")));
        // line 50
        echo "      
                        </div>
                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montoContrato", array()), 'errors');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class =\"form-group\">
                        <div class=\"input-group\">
                            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plazoEntrega", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Plazo de Entrega:"));
        echo "

                            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plazoEntrega", array()), 'widget', array("attr" => array("placeholder" => "Elija la fecha de entrega", "class" => "form-control input-inline datepicker inputGroup", "title" => "Ingrese la fecha de entrega.")));
        // line 63
        echo "      
                        </div>
                        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plazoEntrega", array()), 'errors');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\" id=\"ventLugar\">
                <div class=\"col-md-6\">
                    <div class =\"form-group\">
                        <div class=\"input-group\">
                            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lugar", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Lugar:"));
        echo "

                            ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lugar", array()), 'widget', array("attr" => array("placeholder" => "Seleccione el nombre del lugar", "class" => "form-control inputGroup", "title" => "Seleccione el nombre del lugar.")));
        // line 76
        echo "      
                        </div>
                        ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lugar", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <a href=\"#ventanaLugar\" data-toggle=\"modal\">Presione aqui para agregar un nuevo lugar</a>
                </div>
            </div>
            <div class=\"row\" id=\"ventCliente\">
                <div class=\"col-md-6\">
                    <div class =\"form-group\">
                        <div class=\"input-group\">

                            ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Cliente:"));
        echo "

                            ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'widget', array("attr" => array("placeholder" => "Seleccione el nombre del cliente", "class" => "form-control inputGroup", "title" => "Seleccione el nombre del cliente.")));
        // line 93
        echo "     
                        </div>
                        ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'errors');
        echo "   
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <a href=\"#ventanaCliente\" data-toggle=\"modal\">Presione aqui para agregar un nuevo cliente</a>
                </div>
            </div>
            <div class=\"row\" id=\"ventTipoProyecto\">
                <div class=\"col-md-6\">
                    <div class =\"form-group\">
                        <div class=\"input-group\">
                            ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo_proyecto", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Tipo Proyecto:"));
        echo "

                            ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo_proyecto", array()), 'widget', array("attr" => array("placeholder" => "Seleccione el tipo de proyecto", "class" => "form-control inputGroup", "title" => "Seleccione el tipo de proyecto.")));
        // line 109
        echo "      
                        </div>
                        ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo_proyecto", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <a href=\"#ventanaTipoProyecto\" data-toggle=\"modal\">Presione aqui para agregar un nuevo tipo de proyecto</a>
                </div>
            </div>
            <div class =\"form-group\">
                <button type=\"submit\" id =\"enviar\" name=\"enviar\" class=\"btn btn-primary\"> Registrar</button>
            </div>

            ";
        // line 122
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        
        </div>

        <div class=\"modal fade\" id=\"ventanaTipoProyecto\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\">Registro de un Nuevo Tipo de Proyecto</h4>
                    </div>
                    <div class=\"modal-body\">
                        <div id=\"mainTipo\">

                            <form action=\"";
        // line 136
        echo $this->env->getExtension('routing')->getPath("mtd_tipoProyecto_registro");
        echo "\" method=\"post\" role=\"form\" data-async data-target=\"#rating-modal\" class=\"text-left\">
                                ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formularioTipoProyecto"]) ? $context["formularioTipoProyecto"] : $this->getContext($context, "formularioTipoProyecto")), 'errors');
        echo "
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class =\"form-group\">
                                            <div class=\"input-group\">
                                                ";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioTipoProyecto"]) ? $context["formularioTipoProyecto"] : $this->getContext($context, "formularioTipoProyecto")), "nombre", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Nombre del Tipo de Proyecto:"));
        echo "

                                                ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioTipoProyecto"]) ? $context["formularioTipoProyecto"] : $this->getContext($context, "formularioTipoProyecto")), "nombre", array()), 'widget', array("attr" => array("placeholder" => "Escriba el nombre del tipo de proyecto", "class" => "form-control inputGroupTipo", "title" => "El nombre del tipo de proyecto debe ser unico.")));
        // line 145
        echo "      
                                            </div>
                                            ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioTipoProyecto"]) ? $context["formularioTipoProyecto"] : $this->getContext($context, "formularioTipoProyecto")), "nombre", array()), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"modal-footer form-group\">
                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
                                    <button type=\"submit\" id =\"enviarTipoProyecto\" name=\"enviarTipoProyecto\" class=\"btn btn-primary\">Guardar Cambios</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"modal fade\" id=\"ventanaLugar\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\">Registro de un Nuevo Lugar</h4>
                    </div>
                    <div class=\"modal-body\">
                        <div id=\"mainLugar\">

                            <form action=\"";
        // line 172
        echo $this->env->getExtension('routing')->getPath("mtd_lugar_registro");
        echo "\" method=\"post\" role=\"form\" data-async data-target=\"#rating-modal\" class=\"text-left\">
                                ";
        // line 173
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formularioLugar"]) ? $context["formularioLugar"] : $this->getContext($context, "formularioLugar")), 'errors');
        echo "
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class =\"form-group\">
                                            <div class=\"input-group\">
                                                ";
        // line 178
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioLugar"]) ? $context["formularioLugar"] : $this->getContext($context, "formularioLugar")), "nombre", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Nombre del Lugar:"));
        echo "

                                                ";
        // line 180
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioLugar"]) ? $context["formularioLugar"] : $this->getContext($context, "formularioLugar")), "nombre", array()), 'widget', array("attr" => array("placeholder" => "Escriba el nombre del lugar", "class" => "form-control inputGroupTipo", "title" => "El nombre del lugar debe ser unico.")));
        // line 181
        echo "      
                                            </div>
                                            ";
        // line 183
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioLugar"]) ? $context["formularioLugar"] : $this->getContext($context, "formularioLugar")), "nombre", array()), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"modal-footer form-group\">
                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
                                    <button type=\"submit\" id =\"enviarLugar\" name=\"enviarLugar\" class=\"btn btn-primary\">Guardar Cambios</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
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
        // line 208
        echo $this->env->getExtension('routing')->getPath("mtd_cliente_registro");
        echo "\" method=\"post\" role=\"form\" data-async data-target=\"#rating-modal\" class=\"text-left\">
                                ";
        // line 209
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), 'errors');
        echo "
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class =\"form-group\">
                                            <div class=\"input-group\">
                                                ";
        // line 214
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "nombre", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Nombre del Cliente:"));
        echo "

                                                ";
        // line 216
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "nombre", array()), 'widget', array("attr" => array("placeholder" => "Escriba el nombre del cliente", "class" => "form-control inputGroup", "title" => "El nombre debe empezar con mayuscula")));
        // line 217
        echo "      
                                            </div>
                                            ";
        // line 219
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
        // line 227
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "apellido", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Apellido del Cliente:"));
        echo "

                                                ";
        // line 229
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "apellido", array()), 'widget', array("attr" => array("placeholder" => "Escriba el apellido del cliente", "class" => "form-control inputGroup", "title" => "El apellido debe empezar con mayuscula.")));
        // line 230
        echo "      
                                            </div>
                                            ";
        // line 232
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
        // line 240
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "direccion", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Direccion del Cliente:"));
        echo "

                                                ";
        // line 242
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "direccion", array()), 'widget', array("attr" => array("placeholder" => "Escriba la direccion del cliente", "class" => "form-control input-inline datepicker inputGroup")));
        echo "      
                                            </div>
                                            ";
        // line 244
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
        // line 252
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "telefono", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Telefono del Cliente:"));
        echo "

                                                ";
        // line 254
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "telefono", array()), 'widget', array("attr" => array("placeholder" => "Escriba el telefono del cliente", "class" => "form-control inputGroup", "title" => "Ingrese números telefonicos validos.")));
        // line 255
        echo "      
                                            </div>
                                            ";
        // line 257
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
        // line 266
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "nit", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Nit del Cliente:"));
        echo "

                                                ";
        // line 268
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "nit", array()), 'widget', array("attr" => array("placeholder" => "Escriba el nit del cliente", "class" => "form-control inputGroup")));
        echo "     
                                            </div>
                                            ";
        // line 270
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
        // line 278
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "banco", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Banco del Cliente:"));
        echo "

                                                ";
        // line 280
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "banco", array()), 'widget', array("attr" => array("placeholder" => "Escriba el banco del cliente", "class" => "form-control inputGroup")));
        echo "      
                                            </div>
                                            ";
        // line 282
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
        
        $__internal_bcf8e87df5940f5763f0b4fd1e4029e306cc804d41c70f6b093e17489abf539b->leave($__internal_bcf8e87df5940f5763f0b4fd1e4029e306cc804d41c70f6b093e17489abf539b_prof);

    }

    // line 299
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7dc55ed0a070151263373cd7b62c7e8b47d66f761c54c386ae96c76052720bb8 = $this->env->getExtension("native_profiler");
        $__internal_7dc55ed0a070151263373cd7b62c7e8b47d66f761c54c386ae96c76052720bb8->enter($__internal_7dc55ed0a070151263373cd7b62c7e8b47d66f761c54c386ae96c76052720bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 300
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/fechas/validacionFechas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/guardar/guardarCliente.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/guardar/guardarTipoProyecto.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/guardar/guardarLugar.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-blockUI.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_7dc55ed0a070151263373cd7b62c7e8b47d66f761c54c386ae96c76052720bb8->leave($__internal_7dc55ed0a070151263373cd7b62c7e8b47d66f761c54c386ae96c76052720bb8_prof);

    }

    public function getTemplateName()
    {
        return "MTDProyectoBundle:Proyecto:registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  558 => 306,  554 => 305,  550 => 304,  546 => 303,  542 => 302,  538 => 301,  533 => 300,  527 => 299,  504 => 282,  499 => 280,  494 => 278,  483 => 270,  478 => 268,  473 => 266,  461 => 257,  457 => 255,  455 => 254,  450 => 252,  439 => 244,  434 => 242,  429 => 240,  418 => 232,  414 => 230,  412 => 229,  407 => 227,  396 => 219,  392 => 217,  390 => 216,  385 => 214,  377 => 209,  373 => 208,  345 => 183,  341 => 181,  339 => 180,  334 => 178,  326 => 173,  322 => 172,  294 => 147,  290 => 145,  288 => 144,  283 => 142,  275 => 137,  271 => 136,  254 => 122,  240 => 111,  236 => 109,  234 => 108,  229 => 106,  215 => 95,  211 => 93,  209 => 92,  204 => 90,  189 => 78,  185 => 76,  183 => 75,  178 => 73,  167 => 65,  163 => 63,  161 => 62,  156 => 60,  145 => 52,  141 => 50,  139 => 49,  134 => 47,  123 => 39,  119 => 37,  117 => 36,  112 => 34,  103 => 28,  99 => 27,  92 => 23,  81 => 14,  72 => 12,  68 => 11,  62 => 9,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
/*     */
/*     {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*         <script>alert('{{ flashMessage }}');</script>*/
/*     {% endfor %}*/
/*     */
/*     <section class="jumbotron">*/
/*         <div class="container">*/
/*             <h2>Registrar Proyecto</h2>*/
/*         </div>*/
/*     </section>*/
/* */
/*     <div class="container-fluid full-height">*/
/*         */
/*         {{ include('menuListaProyectos.html.twig')}}*/
/*         */
/*         <div class="col-md-9">*/
/*             <br><br>*/
/*             {{ form_start(form) }}*/
/*             {{form_errors(form)}}*/
/* */
/*             <div class="row">*/
/*                 <div class="col-md-6">*/
/*                     <div class ="form-group">*/
/*                         <div class="input-group">*/
/*                             {{ form_label(form.nombre, 'Nombre del Proyecto:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                             {{ form_widget(form.nombre, { 'attr': {'placeholder': 'Escriba el nombre del proyecto', 'class': 'form-control inputGroup',*/
/*                                                          'title': 'El nombre del proyecto tiene que ser unico' } }) }}      */
/*                         </div>*/
/*                         {{ form_errors(form.nombre) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-md-6">*/
/*                     <div class ="form-group">*/
/*                         <div class="input-group">*/
/*                             {{ form_label(form.montoContrato, 'Monto del Contrato:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                             {{ form_widget(form.montoContrato, { 'attr': {'placeholder': 'Escriba el monto del contrato', 'class': 'form-control inputGroup',*/
/*                                                          'title': 'Ingrese el monto del contrato.' } }) }}      */
/*                         </div>*/
/*                         {{ form_errors(form.montoContrato) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-md-6">*/
/*                     <div class ="form-group">*/
/*                         <div class="input-group">*/
/*                             {{ form_label(form.plazoEntrega, 'Plazo de Entrega:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                             {{ form_widget(form.plazoEntrega, { 'attr': {'placeholder': 'Elija la fecha de entrega', 'class': 'form-control input-inline datepicker inputGroup',*/
/*                                                          'title': 'Ingrese la fecha de entrega.' } }) }}      */
/*                         </div>*/
/*                         {{ form_errors(form.plazoEntrega) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row" id="ventLugar">*/
/*                 <div class="col-md-6">*/
/*                     <div class ="form-group">*/
/*                         <div class="input-group">*/
/*                             {{ form_label(form.lugar, 'Lugar:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                             {{ form_widget(form.lugar, { 'attr': {'placeholder': 'Seleccione el nombre del lugar', 'class': 'form-control inputGroup',*/
/*                                                          'title': 'Seleccione el nombre del lugar.' } }) }}      */
/*                         </div>*/
/*                         {{ form_errors(form.lugar) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                     <a href="#ventanaLugar" data-toggle="modal">Presione aqui para agregar un nuevo lugar</a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row" id="ventCliente">*/
/*                 <div class="col-md-6">*/
/*                     <div class ="form-group">*/
/*                         <div class="input-group">*/
/* */
/*                             {{ form_label(form.cliente, 'Cliente:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                             {{ form_widget(form.cliente, { 'attr': {'placeholder': 'Seleccione el nombre del cliente', 'class': 'form-control inputGroup',*/
/*                                                          'title': 'Seleccione el nombre del cliente.' } }) }}     */
/*                         </div>*/
/*                         {{ form_errors(form.cliente) }}   */
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                     <a href="#ventanaCliente" data-toggle="modal">Presione aqui para agregar un nuevo cliente</a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row" id="ventTipoProyecto">*/
/*                 <div class="col-md-6">*/
/*                     <div class ="form-group">*/
/*                         <div class="input-group">*/
/*                             {{ form_label(form.tipo_proyecto, 'Tipo Proyecto:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                             {{ form_widget(form.tipo_proyecto, { 'attr': {'placeholder': 'Seleccione el tipo de proyecto', 'class': 'form-control inputGroup',*/
/*                                                          'title': 'Seleccione el tipo de proyecto.' } }) }}      */
/*                         </div>*/
/*                         {{ form_errors(form.tipo_proyecto) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                     <a href="#ventanaTipoProyecto" data-toggle="modal">Presione aqui para agregar un nuevo tipo de proyecto</a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class ="form-group">*/
/*                 <button type="submit" id ="enviar" name="enviar" class="btn btn-primary"> Registrar</button>*/
/*             </div>*/
/* */
/*             {{form_end(form) }}*/
/*         */
/*         </div>*/
/* */
/*         <div class="modal fade" id="ventanaTipoProyecto">*/
/*             <div class="modal-dialog">*/
/*                 <div class="modal-content">*/
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                         <h4 class="modal-title">Registro de un Nuevo Tipo de Proyecto</h4>*/
/*                     </div>*/
/*                     <div class="modal-body">*/
/*                         <div id="mainTipo">*/
/* */
/*                             <form action="{{ path("mtd_tipoProyecto_registro") }}" method="post" role="form" data-async data-target="#rating-modal" class="text-left">*/
/*                                 {{form_errors(formularioTipoProyecto)}}*/
/*                                 <div class="row">*/
/*                                     <div class="col-md-12">*/
/*                                         <div class ="form-group">*/
/*                                             <div class="input-group">*/
/*                                                 {{ form_label(formularioTipoProyecto.nombre, 'Nombre del Tipo de Proyecto:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                                                 {{ form_widget(formularioTipoProyecto.nombre, { 'attr': {'placeholder': 'Escriba el nombre del tipo de proyecto', 'class': 'form-control inputGroupTipo',*/
/*                                                                              'title': 'El nombre del tipo de proyecto debe ser unico.' } }) }}      */
/*                                             </div>*/
/*                                             {{ form_errors(formularioTipoProyecto.nombre) }}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="modal-footer form-group">*/
/*                                     <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>*/
/*                                     <button type="submit" id ="enviarTipoProyecto" name="enviarTipoProyecto" class="btn btn-primary">Guardar Cambios</button>*/
/*                                 </div>*/
/*                             </form>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="modal fade" id="ventanaLugar">*/
/*             <div class="modal-dialog">*/
/*                 <div class="modal-content">*/
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                         <h4 class="modal-title">Registro de un Nuevo Lugar</h4>*/
/*                     </div>*/
/*                     <div class="modal-body">*/
/*                         <div id="mainLugar">*/
/* */
/*                             <form action="{{ path("mtd_lugar_registro") }}" method="post" role="form" data-async data-target="#rating-modal" class="text-left">*/
/*                                 {{form_errors(formularioLugar)}}*/
/*                                 <div class="row">*/
/*                                     <div class="col-md-12">*/
/*                                         <div class ="form-group">*/
/*                                             <div class="input-group">*/
/*                                                 {{ form_label(formularioLugar.nombre, 'Nombre del Lugar:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                                                 {{ form_widget(formularioLugar.nombre, { 'attr': {'placeholder': 'Escriba el nombre del lugar', 'class': 'form-control inputGroupTipo',*/
/*                                                                              'title': 'El nombre del lugar debe ser unico.' } }) }}      */
/*                                             </div>*/
/*                                             {{ form_errors(formularioLugar.nombre) }}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="modal-footer form-group">*/
/*                                     <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>*/
/*                                     <button type="submit" id ="enviarLugar" name="enviarLugar" class="btn btn-primary">Guardar Cambios</button>*/
/*                                 </div>*/
/*                             </form>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         */
/*         <div class="modal fade" id="ventanaCliente">*/
/*             <div class="modal-dialog">*/
/*                 <div class="modal-content">*/
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                         <h4 class="modal-title">Registro de un Nuevo Cliente</h4>*/
/*                     </div>*/
/*                     <div class="modal-body">*/
/*                         <div id="main">*/
/* */
/*                             <form action="{{ path("mtd_cliente_registro") }}" method="post" role="form" data-async data-target="#rating-modal" class="text-left">*/
/*                                 {{form_errors(formularioCliente)}}*/
/*                                 <div class="row">*/
/*                                     <div class="col-md-12">*/
/*                                         <div class ="form-group">*/
/*                                             <div class="input-group">*/
/*                                                 {{ form_label(formularioCliente.nombre, 'Nombre del Cliente:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                                                 {{ form_widget(formularioCliente.nombre, { 'attr': {'placeholder': 'Escriba el nombre del cliente', 'class': 'form-control inputGroup',*/
/*                                                                              'title': 'El nombre debe empezar con mayuscula' } }) }}      */
/*                                             </div>*/
/*                                             {{ form_errors(formularioCliente.nombre) }}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="row">*/
/*                                    <div class="col-md-12">*/
/*                                         <div class ="form-group">*/
/*                                             <div class="input-group">*/
/*                                                 {{ form_label(formularioCliente.apellido, 'Apellido del Cliente:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                                                 {{ form_widget(formularioCliente.apellido, { 'attr': {'placeholder': 'Escriba el apellido del cliente', 'class': 'form-control inputGroup',*/
/*                                                                              'title': 'El apellido debe empezar con mayuscula.' } }) }}      */
/*                                             </div>*/
/*                                             {{ form_errors(formularioCliente.apellido) }}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="row">*/
/*                                     <div class="col-md-12">*/
/*                                         <div class ="form-group">*/
/*                                             <div class="input-group">*/
/*                                                 {{ form_label(formularioCliente.direccion, 'Direccion del Cliente:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                                                 {{ form_widget(formularioCliente.direccion, { 'attr': {'placeholder': 'Escriba la direccion del cliente', 'class': 'form-control input-inline datepicker inputGroup'} }) }}      */
/*                                             </div>*/
/*                                             {{ form_errors(formularioCliente.direccion) }}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="row">*/
/*                                     <div class="col-md-12">*/
/*                                         <div class ="form-group">*/
/*                                             <div class="input-group">*/
/*                                                 {{ form_label(formularioCliente.telefono, 'Telefono del Cliente:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                                                 {{ form_widget(formularioCliente.telefono, { 'attr': {'placeholder': 'Escriba el telefono del cliente', 'class': 'form-control inputGroup',*/
/*                                                                              'title': 'Ingrese números telefonicos validos.' } }) }}      */
/*                                             </div>*/
/*                                             {{ form_errors(formularioCliente.telefono) }}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="row">*/
/*                                     <div class="col-md-12">*/
/*                                         <div class ="form-group">*/
/*                                             <div class="input-group">*/
/* */
/*                                                 {{ form_label(formularioCliente.nit, 'Nit del Cliente:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                                                 {{ form_widget(formularioCliente.nit, { 'attr': {'placeholder': 'Escriba el nit del cliente', 'class': 'form-control inputGroup'} }) }}     */
/*                                             </div>*/
/*                                             {{ form_errors(formularioCliente.nit) }}   */
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="row">*/
/*                                     <div class="col-md-12">*/
/*                                         <div class ="form-group">*/
/*                                             <div class="input-group">*/
/*                                                 {{ form_label(formularioCliente.banco, 'Banco del Cliente:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                                                 {{ form_widget(formularioCliente.banco, { 'attr': {'placeholder': 'Escriba el banco del cliente', 'class': 'form-control inputGroup'} }) }}      */
/*                                             </div>*/
/*                                             {{ form_errors(formularioCliente.banco) }}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="modal-footer form-group">*/
/*                                     <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>*/
/*                                     <button type="submit" id ="enviarCliente" name="enviarCliente" class="btn btn-primary">Guardar Cambios</button>*/
/*                                 </div>*/
/*                             </form>*/
/*                         </div>*/
/*                     </div>*/
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
/*     <script src="{{ asset('public/js/guardar/guardarTipoProyecto.js') }}"></script>*/
/*     <script src="{{ asset('public/js/guardar/guardarLugar.js') }}"></script>*/
/*     <script src="{{ asset('public/js/jquery-blockUI.js') }}"></script>*/
/* {% endblock %}                */

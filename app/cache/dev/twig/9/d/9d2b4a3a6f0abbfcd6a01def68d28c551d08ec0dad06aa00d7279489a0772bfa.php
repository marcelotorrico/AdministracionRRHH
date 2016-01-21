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
        $__internal_a0504b315e0a6a71addcd776de2c9a907d6f8d3b62a96d15d79ba52b90416b3c = $this->env->getExtension("native_profiler");
        $__internal_a0504b315e0a6a71addcd776de2c9a907d6f8d3b62a96d15d79ba52b90416b3c->enter($__internal_a0504b315e0a6a71addcd776de2c9a907d6f8d3b62a96d15d79ba52b90416b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MTDProyectoBundle:Proyecto:registro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0504b315e0a6a71addcd776de2c9a907d6f8d3b62a96d15d79ba52b90416b3c->leave($__internal_a0504b315e0a6a71addcd776de2c9a907d6f8d3b62a96d15d79ba52b90416b3c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e1831b8cdc5266276bf5bf8e470bc2dc88e8d33e199e82e916e85edbea2494a7 = $this->env->getExtension("native_profiler");
        $__internal_e1831b8cdc5266276bf5bf8e470bc2dc88e8d33e199e82e916e85edbea2494a7->enter($__internal_e1831b8cdc5266276bf5bf8e470bc2dc88e8d33e199e82e916e85edbea2494a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/datepicker.css"), "html", null, true);
        echo "\" /> 
";
        
        $__internal_e1831b8cdc5266276bf5bf8e470bc2dc88e8d33e199e82e916e85edbea2494a7->leave($__internal_e1831b8cdc5266276bf5bf8e470bc2dc88e8d33e199e82e916e85edbea2494a7_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_e38aa7cf4991718befde0bb2fbd1fbea3616c23fda822f7a20e2608ebdb842ec = $this->env->getExtension("native_profiler");
        $__internal_e38aa7cf4991718befde0bb2fbd1fbea3616c23fda822f7a20e2608ebdb842ec->enter($__internal_e38aa7cf4991718befde0bb2fbd1fbea3616c23fda822f7a20e2608ebdb842ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class =\"form-group\">
                        <div class=\"input-group\">
                            ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lugar", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Lugar:"));
        echo "

                            ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lugar", array()), 'widget', array("attr" => array("placeholder" => "Escriba el lugar donde se realiza el proyecto", "class" => "form-control inputGroup", "title" => "Ingrese el lugar del proyecto.")));
        // line 76
        echo "      
                        </div>
                        ";
        // line 78
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
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Cliente:"));
        echo "

                            ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'widget', array("attr" => array("placeholder" => "Seleccione el nombre del cliente", "class" => "form-control inputGroup", "title" => "Seleccione el nombre del cliente.")));
        // line 90
        echo "     
                        </div>
                        ";
        // line 92
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
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo_proyecto", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Tipo Proyecto:"));
        echo "

                            ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo_proyecto", array()), 'widget', array("attr" => array("placeholder" => "Seleccione el tipo de proyecto", "class" => "form-control inputGroup", "title" => "Seleccione el tipo de proyecto.")));
        // line 106
        echo "      
                        </div>
                        ";
        // line 108
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
        // line 119
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
        // line 133
        echo $this->env->getExtension('routing')->getPath("mtd_tipoProyecto_registro");
        echo "\" method=\"post\" role=\"form\" data-async data-target=\"#rating-modal\" class=\"text-left\">
                                ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formularioTipoProyecto"]) ? $context["formularioTipoProyecto"] : $this->getContext($context, "formularioTipoProyecto")), 'errors');
        echo "
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class =\"form-group\">
                                            <div class=\"input-group\">
                                                ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioTipoProyecto"]) ? $context["formularioTipoProyecto"] : $this->getContext($context, "formularioTipoProyecto")), "nombre", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Nombre del Tipo de Proyecto:"));
        echo "

                                                ";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioTipoProyecto"]) ? $context["formularioTipoProyecto"] : $this->getContext($context, "formularioTipoProyecto")), "nombre", array()), 'widget', array("attr" => array("placeholder" => "Escriba el nombre del tipo de proyecto", "class" => "form-control inputGroupTipo", "title" => "El nombre del tipo de proyecto debe ser unico.")));
        // line 142
        echo "      
                                            </div>
                                            ";
        // line 144
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
        // line 169
        echo $this->env->getExtension('routing')->getPath("mtd_cliente_registro");
        echo "\" method=\"post\" role=\"form\" data-async data-target=\"#rating-modal\" class=\"text-left\">
                                ";
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), 'errors');
        echo "
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class =\"form-group\">
                                            <div class=\"input-group\">
                                                ";
        // line 175
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "nombre", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Nombre del Cliente:"));
        echo "

                                                ";
        // line 177
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "nombre", array()), 'widget', array("attr" => array("placeholder" => "Escriba el nombre del cliente", "class" => "form-control inputGroup", "title" => "El nombre debe empezar con mayuscula")));
        // line 178
        echo "      
                                            </div>
                                            ";
        // line 180
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
        // line 188
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "apellido", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Apellido del Cliente:"));
        echo "

                                                ";
        // line 190
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "apellido", array()), 'widget', array("attr" => array("placeholder" => "Escriba el apellido del cliente", "class" => "form-control inputGroup", "title" => "El apellido debe empezar con mayuscula.")));
        // line 191
        echo "      
                                            </div>
                                            ";
        // line 193
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
        // line 201
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "direccion", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Direccion del Cliente:"));
        echo "

                                                ";
        // line 203
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "direccion", array()), 'widget', array("attr" => array("placeholder" => "Escriba la direccion del cliente", "class" => "form-control input-inline datepicker inputGroup")));
        echo "      
                                            </div>
                                            ";
        // line 205
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
        // line 213
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "telefono", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Telefono del Cliente:"));
        echo "

                                                ";
        // line 215
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "telefono", array()), 'widget', array("attr" => array("placeholder" => "Escriba el telefono del cliente", "class" => "form-control inputGroup", "title" => "Ingrese números telefonicos validos.")));
        // line 216
        echo "      
                                            </div>
                                            ";
        // line 218
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
        // line 227
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "nit", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Nit del Cliente:"));
        echo "

                                                ";
        // line 229
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "nit", array()), 'widget', array("attr" => array("placeholder" => "Escriba el nit del cliente", "class" => "form-control inputGroup")));
        echo "     
                                            </div>
                                            ";
        // line 231
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
        // line 239
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "banco", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Banco del Cliente:"));
        echo "

                                                ";
        // line 241
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "banco", array()), 'widget', array("attr" => array("placeholder" => "Escriba el banco del cliente", "class" => "form-control inputGroup")));
        echo "      
                                            </div>
                                            ";
        // line 243
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
        
        $__internal_e38aa7cf4991718befde0bb2fbd1fbea3616c23fda822f7a20e2608ebdb842ec->leave($__internal_e38aa7cf4991718befde0bb2fbd1fbea3616c23fda822f7a20e2608ebdb842ec_prof);

    }

    // line 260
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_40455c6cbadf5451d42c2e791ed761f697e86384f2f688859d721fef9d3d547a = $this->env->getExtension("native_profiler");
        $__internal_40455c6cbadf5451d42c2e791ed761f697e86384f2f688859d721fef9d3d547a->enter($__internal_40455c6cbadf5451d42c2e791ed761f697e86384f2f688859d721fef9d3d547a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 261
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/fechas/validacionFechas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/guardar/guardarCliente.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/guardar/guardarTipoProyecto.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-blockUI.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_40455c6cbadf5451d42c2e791ed761f697e86384f2f688859d721fef9d3d547a->leave($__internal_40455c6cbadf5451d42c2e791ed761f697e86384f2f688859d721fef9d3d547a_prof);

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
        return array (  500 => 266,  496 => 265,  492 => 264,  488 => 263,  484 => 262,  479 => 261,  473 => 260,  450 => 243,  445 => 241,  440 => 239,  429 => 231,  424 => 229,  419 => 227,  407 => 218,  403 => 216,  401 => 215,  396 => 213,  385 => 205,  380 => 203,  375 => 201,  364 => 193,  360 => 191,  358 => 190,  353 => 188,  342 => 180,  338 => 178,  336 => 177,  331 => 175,  323 => 170,  319 => 169,  291 => 144,  287 => 142,  285 => 141,  280 => 139,  272 => 134,  268 => 133,  251 => 119,  237 => 108,  233 => 106,  231 => 105,  226 => 103,  212 => 92,  208 => 90,  206 => 89,  201 => 87,  189 => 78,  185 => 76,  183 => 75,  178 => 73,  167 => 65,  163 => 63,  161 => 62,  156 => 60,  145 => 52,  141 => 50,  139 => 49,  134 => 47,  123 => 39,  119 => 37,  117 => 36,  112 => 34,  103 => 28,  99 => 27,  92 => 23,  81 => 14,  72 => 12,  68 => 11,  62 => 9,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
/*             <div class="row">*/
/*                 <div class="col-md-6">*/
/*                     <div class ="form-group">*/
/*                         <div class="input-group">*/
/*                             {{ form_label(form.lugar, 'Lugar:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                             {{ form_widget(form.lugar, { 'attr': {'placeholder': 'Escriba el lugar donde se realiza el proyecto', 'class': 'form-control inputGroup',*/
/*                                                          'title': 'Ingrese el lugar del proyecto.' } }) }}      */
/*                         </div>*/
/*                         {{ form_errors(form.lugar) }}*/
/*                     </div>*/
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
/*     <script src="{{ asset('public/js/jquery-blockUI.js') }}"></script>*/
/* {% endblock %}                */

<?php

/* MTDContratacionEmpleadosBundle:Proyecto:registro.html.twig */
class __TwigTemplate_ee36aa393cee3b524e82bb9ae43d969c0791c414c2ec1d48e842ccf9b38200bb extends Twig_Template
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
        $__internal_d6d6de4637f02c82ca8dbad7dbe4cded98645811fa390238a8febbdb42659611 = $this->env->getExtension("native_profiler");
        $__internal_d6d6de4637f02c82ca8dbad7dbe4cded98645811fa390238a8febbdb42659611->enter($__internal_d6d6de4637f02c82ca8dbad7dbe4cded98645811fa390238a8febbdb42659611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MTDContratacionEmpleadosBundle:Proyecto:registro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6d6de4637f02c82ca8dbad7dbe4cded98645811fa390238a8febbdb42659611->leave($__internal_d6d6de4637f02c82ca8dbad7dbe4cded98645811fa390238a8febbdb42659611_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fce080812d7d338fda8064bc822bb5ef578847f72e1cdeeb1aa252df9821bb94 = $this->env->getExtension("native_profiler");
        $__internal_fce080812d7d338fda8064bc822bb5ef578847f72e1cdeeb1aa252df9821bb94->enter($__internal_fce080812d7d338fda8064bc822bb5ef578847f72e1cdeeb1aa252df9821bb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/datepicker.css"), "html", null, true);
        echo "\" /> 
";
        
        $__internal_fce080812d7d338fda8064bc822bb5ef578847f72e1cdeeb1aa252df9821bb94->leave($__internal_fce080812d7d338fda8064bc822bb5ef578847f72e1cdeeb1aa252df9821bb94_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e688c86c0b7d98e00747048b22666e43d7de2f570e430e7ded00d9de5f3273f = $this->env->getExtension("native_profiler");
        $__internal_2e688c86c0b7d98e00747048b22666e43d7de2f570e430e7ded00d9de5f3273f->enter($__internal_2e688c86c0b7d98e00747048b22666e43d7de2f570e430e7ded00d9de5f3273f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <h2>Agregar Proyecto</h2>
        </div>
    </section>

    <div class=\"container\">
        
        ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class =\"form-group\">
                    <div class=\"input-group\">
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Nombre del Proyecto:"));
        echo "

                        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("placeholder" => "Escriba el nombre del proyecto", "class" => "form-control inputGroup", "title" => "El nombre del proyecto tiene que ser unico")));
        // line 33
        echo "      
                    </div>
                    ";
        // line 35
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
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montoContrato", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Monto del Contrato:"));
        echo "

                        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montoContrato", array()), 'widget', array("attr" => array("placeholder" => "Escriba el monto del contrato", "class" => "form-control inputGroup", "title" => "Ingrese el monto del contrato.")));
        // line 46
        echo "      
                    </div>
                    ";
        // line 48
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
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plazoEntrega", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Plazo de Entrega:"));
        echo "

                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plazoEntrega", array()), 'widget', array("attr" => array("placeholder" => "Elija la fecha de entrega", "class" => "form-control input-inline datepicker inputGroup", "title" => "Ingrese la fecha de entrega.")));
        // line 59
        echo "      
                    </div>
                    ";
        // line 61
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
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lugar", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Lugar:"));
        echo "

                        ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lugar", array()), 'widget', array("attr" => array("placeholder" => "Escriba el lugar donde se realiza el proyecto", "class" => "form-control inputGroup", "title" => "Ingrese el lugar del proyecto.")));
        // line 72
        echo "      
                    </div>
                    ";
        // line 74
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
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Cliente:"));
        echo "

                        ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'widget', array("attr" => array("placeholder" => "Seleccione el nombre del cliente", "class" => "form-control inputGroup", "title" => "Seleccione el nombre del cliente.")));
        // line 86
        echo "     
                    </div>
                    ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'errors');
        echo "   
                </div>
            </div>
            <div class=\"col-md-6\">
                <a href=\"#ventanaCliente\" data-toggle=\"modal\">Pulse aqui para agregar un nuevo cliente</a>
            </div>
        </div>
        <div class=\"row\" id=\"ventTipoProyecto\">
            <div class=\"col-md-6\">
                <div class =\"form-group\">
                    <div class=\"input-group\">
                        ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo_proyecto", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Tipo Proyecto:"));
        echo "

                        ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo_proyecto", array()), 'widget', array("attr" => array("placeholder" => "Seleccione el tipo de proyecto", "class" => "form-control inputGroup", "title" => "Seleccione el tipo de proyecto.")));
        // line 102
        echo "      
                    </div>
                    ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo_proyecto", array()), 'errors');
        echo "
                </div>
            </div>
            <div class=\"col-md-6\">
                <a href=\"#ventanaTipoProyecto\" data-toggle=\"modal\">Pulse aqui para agregar un nuevo tipo de proyecto</a>
            </div>
        </div>
        <div class =\"form-group\">
            <button type=\"submit\" id =\"enviar\" name=\"enviar\" class=\"btn btn-primary\"> Registrar</button>
        </div>

        ";
        // line 115
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

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
        // line 127
        echo $this->env->getExtension('routing')->getPath("mtd_tipoProyecto_registro");
        echo "\" method=\"post\" role=\"form\" data-async data-target=\"#rating-modal\" class=\"text-left\">
                                ";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formularioTipoProyecto"]) ? $context["formularioTipoProyecto"] : $this->getContext($context, "formularioTipoProyecto")), 'errors');
        echo "
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class =\"form-group\">
                                            <div class=\"input-group\">
                                                ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioTipoProyecto"]) ? $context["formularioTipoProyecto"] : $this->getContext($context, "formularioTipoProyecto")), "nombre", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Nombre del Tipo de Proyecto:"));
        echo "

                                                ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioTipoProyecto"]) ? $context["formularioTipoProyecto"] : $this->getContext($context, "formularioTipoProyecto")), "nombre", array()), 'widget', array("attr" => array("placeholder" => "Escriba el nombre del tipo de proyecto", "class" => "form-control inputGroupTipo", "title" => "El nombre del tipo de proyecto debe ser unico.")));
        // line 136
        echo "      
                                            </div>
                                            ";
        // line 138
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
        // line 163
        echo $this->env->getExtension('routing')->getPath("mtd_cliente_registro");
        echo "\" method=\"post\" role=\"form\" data-async data-target=\"#rating-modal\" class=\"text-left\">
                                ";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), 'errors');
        echo "
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class =\"form-group\">
                                            <div class=\"input-group\">
                                                ";
        // line 169
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "nombre", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Nombre del Cliente:"));
        echo "

                                                ";
        // line 171
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "nombre", array()), 'widget', array("attr" => array("placeholder" => "Escriba el nombre del cliente", "class" => "form-control inputGroup", "title" => "El nombre debe empezar con mayuscula")));
        // line 172
        echo "      
                                            </div>
                                            ";
        // line 174
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
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "apellido", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Apellido del Cliente:"));
        echo "

                                                ";
        // line 184
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "apellido", array()), 'widget', array("attr" => array("placeholder" => "Escriba el apellido del cliente", "class" => "form-control inputGroup", "title" => "El apellido debe empezar con mayuscula.")));
        // line 185
        echo "      
                                            </div>
                                            ";
        // line 187
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
        // line 195
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "direccion", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Direccion del Cliente:"));
        echo "

                                                ";
        // line 197
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "direccion", array()), 'widget', array("attr" => array("placeholder" => "Escriba la direccion del cliente", "class" => "form-control input-inline datepicker inputGroup")));
        echo "      
                                            </div>
                                            ";
        // line 199
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
        // line 207
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "telefono", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Telefono del Cliente:"));
        echo "

                                                ";
        // line 209
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "telefono", array()), 'widget', array("attr" => array("placeholder" => "Escriba el telefono del cliente", "class" => "form-control inputGroup", "title" => "Ingrese números telefonicos validos.")));
        // line 210
        echo "      
                                            </div>
                                            ";
        // line 212
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
        // line 221
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "nit", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Nit del Cliente:"));
        echo "

                                                ";
        // line 223
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "nit", array()), 'widget', array("attr" => array("placeholder" => "Escriba el nit del cliente", "class" => "form-control inputGroup")));
        echo "     
                                            </div>
                                            ";
        // line 225
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
        // line 233
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "banco", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Banco del Cliente:"));
        echo "

                                                ";
        // line 235
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "banco", array()), 'widget', array("attr" => array("placeholder" => "Escriba el banco del cliente", "class" => "form-control inputGroup")));
        echo "      
                                            </div>
                                            ";
        // line 237
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
        
        $__internal_2e688c86c0b7d98e00747048b22666e43d7de2f570e430e7ded00d9de5f3273f->leave($__internal_2e688c86c0b7d98e00747048b22666e43d7de2f570e430e7ded00d9de5f3273f_prof);

    }

    // line 254
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8c32afd2c21476b64a37b1a7218c1d6821489ae743224ddcb07a3d68b654a45d = $this->env->getExtension("native_profiler");
        $__internal_8c32afd2c21476b64a37b1a7218c1d6821489ae743224ddcb07a3d68b654a45d->enter($__internal_8c32afd2c21476b64a37b1a7218c1d6821489ae743224ddcb07a3d68b654a45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 255
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/fechas/validacionFechas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/guardar/guardarCliente.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/guardar/guardarTipoProyecto.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-blockUI.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_8c32afd2c21476b64a37b1a7218c1d6821489ae743224ddcb07a3d68b654a45d->leave($__internal_8c32afd2c21476b64a37b1a7218c1d6821489ae743224ddcb07a3d68b654a45d_prof);

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
        return array (  491 => 260,  487 => 259,  483 => 258,  479 => 257,  475 => 256,  470 => 255,  464 => 254,  441 => 237,  436 => 235,  431 => 233,  420 => 225,  415 => 223,  410 => 221,  398 => 212,  394 => 210,  392 => 209,  387 => 207,  376 => 199,  371 => 197,  366 => 195,  355 => 187,  351 => 185,  349 => 184,  344 => 182,  333 => 174,  329 => 172,  327 => 171,  322 => 169,  314 => 164,  310 => 163,  282 => 138,  278 => 136,  276 => 135,  271 => 133,  263 => 128,  259 => 127,  244 => 115,  230 => 104,  226 => 102,  224 => 101,  219 => 99,  205 => 88,  201 => 86,  199 => 85,  194 => 83,  182 => 74,  178 => 72,  176 => 71,  171 => 69,  160 => 61,  156 => 59,  154 => 58,  149 => 56,  138 => 48,  134 => 46,  132 => 45,  127 => 43,  116 => 35,  112 => 33,  110 => 32,  105 => 30,  96 => 24,  92 => 23,  81 => 14,  72 => 12,  68 => 11,  62 => 9,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
/*             <h2>Agregar Proyecto</h2>*/
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
/*                         {{ form_label(form.nombre, 'Nombre del Proyecto:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                         {{ form_widget(form.nombre, { 'attr': {'placeholder': 'Escriba el nombre del proyecto', 'class': 'form-control inputGroup',*/
/*                                                      'title': 'El nombre del proyecto tiene que ser unico' } }) }}      */
/*                     </div>*/
/*                     {{ form_errors(form.nombre) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class ="form-group">*/
/*                     <div class="input-group">*/
/*                         {{ form_label(form.montoContrato, 'Monto del Contrato:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                         {{ form_widget(form.montoContrato, { 'attr': {'placeholder': 'Escriba el monto del contrato', 'class': 'form-control inputGroup',*/
/*                                                      'title': 'Ingrese el monto del contrato.' } }) }}      */
/*                     </div>*/
/*                     {{ form_errors(form.montoContrato) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class ="form-group">*/
/*                     <div class="input-group">*/
/*                         {{ form_label(form.plazoEntrega, 'Plazo de Entrega:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                         {{ form_widget(form.plazoEntrega, { 'attr': {'placeholder': 'Elija la fecha de entrega', 'class': 'form-control input-inline datepicker inputGroup',*/
/*                                                      'title': 'Ingrese la fecha de entrega.' } }) }}      */
/*                     </div>*/
/*                     {{ form_errors(form.plazoEntrega) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class ="form-group">*/
/*                     <div class="input-group">*/
/*                         {{ form_label(form.lugar, 'Lugar:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                         {{ form_widget(form.lugar, { 'attr': {'placeholder': 'Escriba el lugar donde se realiza el proyecto', 'class': 'form-control inputGroup',*/
/*                                                      'title': 'Ingrese el lugar del proyecto.' } }) }}      */
/*                     </div>*/
/*                     {{ form_errors(form.lugar) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row" id="ventCliente">*/
/*             <div class="col-md-6">*/
/*                 <div class ="form-group">*/
/*                     <div class="input-group">*/
/* */
/*                         {{ form_label(form.cliente, 'Cliente:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                         {{ form_widget(form.cliente, { 'attr': {'placeholder': 'Seleccione el nombre del cliente', 'class': 'form-control inputGroup',*/
/*                                                      'title': 'Seleccione el nombre del cliente.' } }) }}     */
/*                     </div>*/
/*                     {{ form_errors(form.cliente) }}   */
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <a href="#ventanaCliente" data-toggle="modal">Pulse aqui para agregar un nuevo cliente</a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row" id="ventTipoProyecto">*/
/*             <div class="col-md-6">*/
/*                 <div class ="form-group">*/
/*                     <div class="input-group">*/
/*                         {{ form_label(form.tipo_proyecto, 'Tipo Proyecto:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                         {{ form_widget(form.tipo_proyecto, { 'attr': {'placeholder': 'Seleccione el tipo de proyecto', 'class': 'form-control inputGroup',*/
/*                                                      'title': 'Seleccione el tipo de proyecto.' } }) }}      */
/*                     </div>*/
/*                     {{ form_errors(form.tipo_proyecto) }}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <a href="#ventanaTipoProyecto" data-toggle="modal">Pulse aqui para agregar un nuevo tipo de proyecto</a>*/
/*             </div>*/
/*         </div>*/
/*         <div class ="form-group">*/
/*             <button type="submit" id ="enviar" name="enviar" class="btn btn-primary"> Registrar</button>*/
/*         </div>*/
/* */
/*         {{form_end(form) }}*/
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

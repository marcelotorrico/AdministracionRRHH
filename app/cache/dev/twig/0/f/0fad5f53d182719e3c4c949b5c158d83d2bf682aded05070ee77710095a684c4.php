<?php

/* MTDProyectoBundle:Proyecto:edita.html.twig */
class __TwigTemplate_c70c6b6ef893b3bc04f08155dbb135715c7caf8e895348758ce3b37024d44377 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "MTDProyectoBundle:Proyecto:edita.html.twig", 1);
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
        $__internal_687835bc049b7951532843191b01d6718371a524a7c213144e1217eec6f79a07 = $this->env->getExtension("native_profiler");
        $__internal_687835bc049b7951532843191b01d6718371a524a7c213144e1217eec6f79a07->enter($__internal_687835bc049b7951532843191b01d6718371a524a7c213144e1217eec6f79a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MTDProyectoBundle:Proyecto:edita.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_687835bc049b7951532843191b01d6718371a524a7c213144e1217eec6f79a07->leave($__internal_687835bc049b7951532843191b01d6718371a524a7c213144e1217eec6f79a07_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1cabcce8a77a28b782535e15aa10aadcf5de075c059b483b59893ffd5884d64e = $this->env->getExtension("native_profiler");
        $__internal_1cabcce8a77a28b782535e15aa10aadcf5de075c059b483b59893ffd5884d64e->enter($__internal_1cabcce8a77a28b782535e15aa10aadcf5de075c059b483b59893ffd5884d64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/datepicker.css"), "html", null, true);
        echo "\" /> 
";
        
        $__internal_1cabcce8a77a28b782535e15aa10aadcf5de075c059b483b59893ffd5884d64e->leave($__internal_1cabcce8a77a28b782535e15aa10aadcf5de075c059b483b59893ffd5884d64e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ea55f75287971367ac871cd70f062dd9e49814815d1d78eec909a4c58d26ab7 = $this->env->getExtension("native_profiler");
        $__internal_4ea55f75287971367ac871cd70f062dd9e49814815d1d78eec909a4c58d26ab7->enter($__internal_4ea55f75287971367ac871cd70f062dd9e49814815d1d78eec909a4c58d26ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <script>alert('";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "');</script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    <section class=\"jumbotron\">
        <div class=\"container\">
            <h2>Editar el Proyecto: ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyectoSeleccionado"]) ? $context["proyectoSeleccionado"] : $this->getContext($context, "proyectoSeleccionado")), "nombre", array()), "html", null, true);
        echo "</h2>
        </div>
    </section>

    <div class=\"container\">
        
        ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class =\"form-group\">
                    <div class=\"input-group\">
                        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Nombre del Proyecto:"));
        echo "

                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("placeholder" => "Escriba el nombre del proyecto", "class" => "form-control inputGroup", "title" => "El nombre del proyecto tiene que ser unico", "value" => $this->getAttribute(        // line 32
(isset($context["proyectoSeleccionado"]) ? $context["proyectoSeleccionado"] : $this->getContext($context, "proyectoSeleccionado")), "nombre", array()))));
        echo "      
                    </div>
                    ";
        // line 34
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
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montoContrato", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Monto del Contrato:"));
        echo "

                        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montoContrato", array()), 'widget', array("attr" => array("placeholder" => "Escriba el monto del contrato", "class" => "form-control inputGroup", "title" => "Ingrese el monto del contrato.", "value" => $this->getAttribute(        // line 46
(isset($context["proyectoSeleccionado"]) ? $context["proyectoSeleccionado"] : $this->getContext($context, "proyectoSeleccionado")), "montoContrato", array()))));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plazoEntrega", array()), 'widget', array("attr" => array("placeholder" => "Elija la fecha de entrega", "class" => "form-control input-inline datepicker inputGroup", "title" => "Ingrese la fecha de entrega.", "value" => twig_date_format_filter($this->env, $this->getAttribute(        // line 60
(isset($context["proyectoSeleccionado"]) ? $context["proyectoSeleccionado"] : $this->getContext($context, "proyectoSeleccionado")), "plazoEntrega", array()), "d-m-Y"))));
        echo "      
                    </div>
                    ";
        // line 62
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
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lugar", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Lugar:"));
        echo "

                        ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lugar", array()), 'widget', array("attr" => array("placeholder" => "Escriba el lugar donde se realiza el proyecto", "class" => "form-control inputGroup", "title" => "Ingrese el lugar del proyecto.", "value" => $this->getAttribute(        // line 74
(isset($context["proyectoSeleccionado"]) ? $context["proyectoSeleccionado"] : $this->getContext($context, "proyectoSeleccionado")), "lugar", array()))));
        echo "      
                    </div>
                    ";
        // line 76
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
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Cliente:"));
        echo "

                        ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'widget', array("attr" => array("placeholder" => "Seleccione el nombre del cliente", "class" => "form-control inputGroup", "title" => "Seleccione el nombre del cliente.")));
        // line 88
        echo "
                    </div>
                    ";
        // line 90
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
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo_proyecto", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Tipo Proyecto:"));
        echo "

                        ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo_proyecto", array()), 'widget', array("attr" => array("placeholder" => "Seleccione el tipo de proyecto", "class" => "form-control inputGroup", "title" => "Seleccione el tipo de proyecto.")));
        // line 104
        echo "      
                    </div>
                    ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo_proyecto", array()), 'errors');
        echo "
                </div>
            </div>
            <div class=\"col-md-6\">
                <a href=\"#ventanaTipoProyecto\" data-toggle=\"modal\">Presione aqui para agregar un nuevo tipo de proyecto</a>
            </div>
        </div>
        <div class =\"form-group\">
            <a type=\"button\" href=\"";
        // line 114
        echo $this->env->getExtension('routing')->getPath("mtd_lista_proyecto");
        echo "\" class=\"btn btn-default\"> Cancelar</a>
            <button type=\"submit\" id =\"enviar\" name=\"enviar\" class=\"btn btn-primary\"> Actualizar</button>
        </div>

        ";
        // line 118
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
        // line 130
        echo $this->env->getExtension('routing')->getPath("mtd_tipoProyecto_registro");
        echo "\" method=\"post\" role=\"form\" data-async data-target=\"#rating-modal\" class=\"text-left\">
                                ";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formularioTipoProyecto"]) ? $context["formularioTipoProyecto"] : $this->getContext($context, "formularioTipoProyecto")), 'errors');
        echo "
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class =\"form-group\">
                                            <div class=\"input-group\">
                                                ";
        // line 136
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioTipoProyecto"]) ? $context["formularioTipoProyecto"] : $this->getContext($context, "formularioTipoProyecto")), "nombre", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Nombre del Tipo de Proyecto:"));
        echo "

                                                ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioTipoProyecto"]) ? $context["formularioTipoProyecto"] : $this->getContext($context, "formularioTipoProyecto")), "nombre", array()), 'widget', array("attr" => array("placeholder" => "Escriba el nombre del tipo de proyecto", "class" => "form-control inputGroupTipo", "title" => "El nombre del tipo de proyecto debe ser unico.")));
        // line 139
        echo "      
                                            </div>
                                            ";
        // line 141
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
        // line 166
        echo $this->env->getExtension('routing')->getPath("mtd_cliente_registro");
        echo "\" method=\"post\" role=\"form\" data-async data-target=\"#rating-modal\" class=\"text-left\">
                                ";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), 'errors');
        echo "
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class =\"form-group\">
                                            <div class=\"input-group\">
                                                ";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "nombre", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Nombre del Cliente:"));
        echo "

                                                ";
        // line 174
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "nombre", array()), 'widget', array("attr" => array("placeholder" => "Escriba el nombre del cliente", "class" => "form-control inputGroup", "title" => "El nombre debe empezar con mayuscula")));
        // line 175
        echo "      
                                            </div>
                                            ";
        // line 177
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
        // line 185
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "apellido", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Apellido del Cliente:"));
        echo "

                                                ";
        // line 187
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "apellido", array()), 'widget', array("attr" => array("placeholder" => "Escriba el apellido del cliente", "class" => "form-control inputGroup", "title" => "El apellido debe empezar con mayuscula.")));
        // line 188
        echo "      
                                            </div>
                                            ";
        // line 190
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
        // line 198
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "direccion", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Direccion del Cliente:"));
        echo "

                                                ";
        // line 200
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "direccion", array()), 'widget', array("attr" => array("placeholder" => "Escriba la direccion del cliente", "class" => "form-control input-inline datepicker inputGroup")));
        echo "      
                                            </div>
                                            ";
        // line 202
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
        // line 210
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "telefono", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Telefono del Cliente:"));
        echo "

                                                ";
        // line 212
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "telefono", array()), 'widget', array("attr" => array("placeholder" => "Escriba el telefono del cliente", "class" => "form-control inputGroup", "title" => "Ingrese números telefonicos validos.")));
        // line 213
        echo "      
                                            </div>
                                            ";
        // line 215
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
        // line 224
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "nit", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Nit del Cliente:"));
        echo "

                                                ";
        // line 226
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "nit", array()), 'widget', array("attr" => array("placeholder" => "Escriba el nit del cliente", "class" => "form-control inputGroup")));
        echo "     
                                            </div>
                                            ";
        // line 228
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
        // line 236
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "banco", array()), 'label', array("label_attr" => array("class" => "input-group-addon addonGroup"), "label" => "Banco del Cliente:"));
        echo "

                                                ";
        // line 238
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formularioCliente"]) ? $context["formularioCliente"] : $this->getContext($context, "formularioCliente")), "banco", array()), 'widget', array("attr" => array("placeholder" => "Escriba el banco del cliente", "class" => "form-control inputGroup")));
        echo "      
                                            </div>
                                            ";
        // line 240
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
        
        $__internal_4ea55f75287971367ac871cd70f062dd9e49814815d1d78eec909a4c58d26ab7->leave($__internal_4ea55f75287971367ac871cd70f062dd9e49814815d1d78eec909a4c58d26ab7_prof);

    }

    // line 257
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0e8ca45bad212ff9dcbd6b331b643f266333db7befcde308f0bd6e9a9fd466e4 = $this->env->getExtension("native_profiler");
        $__internal_0e8ca45bad212ff9dcbd6b331b643f266333db7befcde308f0bd6e9a9fd466e4->enter($__internal_0e8ca45bad212ff9dcbd6b331b643f266333db7befcde308f0bd6e9a9fd466e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 258
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/fechas/validacionFechas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/guardar/guardarCliente.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/guardar/guardarTipoProyecto.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-blockUI.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_0e8ca45bad212ff9dcbd6b331b643f266333db7befcde308f0bd6e9a9fd466e4->leave($__internal_0e8ca45bad212ff9dcbd6b331b643f266333db7befcde308f0bd6e9a9fd466e4_prof);

    }

    public function getTemplateName()
    {
        return "MTDProyectoBundle:Proyecto:edita.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  496 => 263,  492 => 262,  488 => 261,  484 => 260,  480 => 259,  475 => 258,  469 => 257,  446 => 240,  441 => 238,  436 => 236,  425 => 228,  420 => 226,  415 => 224,  403 => 215,  399 => 213,  397 => 212,  392 => 210,  381 => 202,  376 => 200,  371 => 198,  360 => 190,  356 => 188,  354 => 187,  349 => 185,  338 => 177,  334 => 175,  332 => 174,  327 => 172,  319 => 167,  315 => 166,  287 => 141,  283 => 139,  281 => 138,  276 => 136,  268 => 131,  264 => 130,  249 => 118,  242 => 114,  231 => 106,  227 => 104,  225 => 103,  220 => 101,  206 => 90,  202 => 88,  200 => 87,  195 => 85,  183 => 76,  178 => 74,  177 => 72,  172 => 70,  161 => 62,  156 => 60,  155 => 58,  150 => 56,  139 => 48,  134 => 46,  133 => 44,  128 => 42,  117 => 34,  112 => 32,  111 => 30,  106 => 28,  97 => 22,  93 => 21,  84 => 15,  80 => 13,  71 => 11,  67 => 10,  62 => 9,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
/*     {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*         <script>alert('{{ flashMessage }}');</script>*/
/*     {% endfor %}*/
/*     <section class="jumbotron">*/
/*         <div class="container">*/
/*             <h2>Editar el Proyecto: {{proyectoSeleccionado.nombre}}</h2>*/
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
/*                                                      'title': 'El nombre del proyecto tiene que ser unico',*/
/*                                                       'value': proyectoSeleccionado.nombre } }) }}      */
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
/*                                                      'title': 'Ingrese el monto del contrato.',*/
/*                                                       'value': proyectoSeleccionado.montoContrato} }) }}      */
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
/*                                                      'title': 'Ingrese la fecha de entrega.',*/
/*                                                       'value': proyectoSeleccionado.plazoEntrega|date('d-m-Y') } }) }}      */
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
/*                                                      'title': 'Ingrese el lugar del proyecto.',*/
/*                                                       'value': proyectoSeleccionado.lugar } }) }}      */
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
/*                                                      'title': 'Seleccione el nombre del cliente.' } }) }}*/
/*                     </div>*/
/*                     {{ form_errors(form.cliente) }}   */
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <a href="#ventanaCliente" data-toggle="modal">Presione aqui para agregar un nuevo cliente</a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row" id="ventTipoProyecto">*/
/*             <div class="col-md-6">*/
/*                 <div class ="form-group">*/
/*                     <div class="input-group">*/
/*                         {{ form_label(form.tipo_proyecto, 'Tipo Proyecto:', {'label_attr': {'class': 'input-group-addon addonGroup'}}) }}*/
/* */
/*                         {{ form_widget(form.tipo_proyecto, { 'attr': {'placeholder': 'Seleccione el tipo de proyecto', 'class': 'form-control inputGroup',*/
/*                                                      'title': 'Seleccione el tipo de proyecto.'} }) }}      */
/*                     </div>*/
/*                     {{ form_errors(form.tipo_proyecto) }}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <a href="#ventanaTipoProyecto" data-toggle="modal">Presione aqui para agregar un nuevo tipo de proyecto</a>*/
/*             </div>*/
/*         </div>*/
/*         <div class ="form-group">*/
/*             <a type="button" href="{{ path('mtd_lista_proyecto') }}" class="btn btn-default"> Cancelar</a>*/
/*             <button type="submit" id ="enviar" name="enviar" class="btn btn-primary"> Actualizar</button>*/
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
/* {% endblock %}*/

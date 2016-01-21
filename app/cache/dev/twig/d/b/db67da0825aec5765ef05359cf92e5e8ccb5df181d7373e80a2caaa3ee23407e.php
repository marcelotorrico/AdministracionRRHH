<?php

/* layout.html.twig */
class __TwigTemplate_7b11abb48a0fa3dee5a491f07f44b8cd5ac170085bd295414814003f42887d19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9162402c09e75cdc972958a0435ec7cbc3f1a26770d7ddc29083aa4fbd40c691 = $this->env->getExtension("native_profiler");
        $__internal_9162402c09e75cdc972958a0435ec7cbc3f1a26770d7ddc29083aa4fbd40c691->enter($__internal_9162402c09e75cdc972958a0435ec7cbc3f1a26770d7ddc29083aa4fbd40c691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_9162402c09e75cdc972958a0435ec7cbc3f1a26770d7ddc29083aa4fbd40c691->leave($__internal_9162402c09e75cdc972958a0435ec7cbc3f1a26770d7ddc29083aa4fbd40c691_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_60b23f2aa829e3a4c1a6bb35d0aa478a7655d5edf20e597fec0b9c20e580cfb2 = $this->env->getExtension("native_profiler");
        $__internal_60b23f2aa829e3a4c1a6bb35d0aa478a7655d5edf20e597fec0b9c20e580cfb2->enter($__internal_60b23f2aa829e3a4c1a6bb35d0aa478a7655d5edf20e597fec0b9c20e580cfb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administracion RRHH";
        
        $__internal_60b23f2aa829e3a4c1a6bb35d0aa478a7655d5edf20e597fec0b9c20e580cfb2->leave($__internal_60b23f2aa829e3a4c1a6bb35d0aa478a7655d5edf20e597fec0b9c20e580cfb2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5aa613cefd2e1f2304b806fa02a4a93e86fd36ff748082719483e771d9c8deae = $this->env->getExtension("native_profiler");
        $__internal_5aa613cefd2e1f2304b806fa02a4a93e86fd36ff748082719483e771d9c8deae->enter($__internal_5aa613cefd2e1f2304b806fa02a4a93e86fd36ff748082719483e771d9c8deae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/estilos/principal.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_5aa613cefd2e1f2304b806fa02a4a93e86fd36ff748082719483e771d9c8deae->leave($__internal_5aa613cefd2e1f2304b806fa02a4a93e86fd36ff748082719483e771d9c8deae_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_f641998d5bdac0b8703330754d6274730f7dd4a60810d72855fbb1e20def9032 = $this->env->getExtension("native_profiler");
        $__internal_f641998d5bdac0b8703330754d6274730f7dd4a60810d72855fbb1e20def9032->enter($__internal_f641998d5bdac0b8703330754d6274730f7dd4a60810d72855fbb1e20def9032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "            ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
        ";
        
        $__internal_f641998d5bdac0b8703330754d6274730f7dd4a60810d72855fbb1e20def9032->leave($__internal_f641998d5bdac0b8703330754d6274730f7dd4a60810d72855fbb1e20def9032_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d624936defa9d77506bc24fd552f46861239e445b090aafda1497891ec92e1b4 = $this->env->getExtension("native_profiler");
        $__internal_d624936defa9d77506bc24fd552f46861239e445b090aafda1497891ec92e1b4->enter($__internal_d624936defa9d77506bc24fd552f46861239e445b090aafda1497891ec92e1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_d624936defa9d77506bc24fd552f46861239e445b090aafda1497891ec92e1b4->leave($__internal_d624936defa9d77506bc24fd552f46861239e445b090aafda1497891ec92e1b4_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 18,  113 => 17,  107 => 16,  97 => 14,  91 => 13,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 20,  47 => 16,  45 => 13,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Administracion RRHH{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}" />*/
/*             <link rel="stylesheet" href="{{ asset('public/estilos/principal.css') }}" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*             {{ include('menu.html.twig')}}*/
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('public/js/jquery.js') }}"></script>*/
/*             <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* {# empty Twig template #}*/

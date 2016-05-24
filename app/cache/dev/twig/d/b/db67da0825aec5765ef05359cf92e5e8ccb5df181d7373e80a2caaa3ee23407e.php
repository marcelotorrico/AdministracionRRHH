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
        $__internal_0c95959949a1bd163222e42f2afd82878dc1bcaff1104984ccf177f7ffd53ae0 = $this->env->getExtension("native_profiler");
        $__internal_0c95959949a1bd163222e42f2afd82878dc1bcaff1104984ccf177f7ffd53ae0->enter($__internal_0c95959949a1bd163222e42f2afd82878dc1bcaff1104984ccf177f7ffd53ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "    </body>
</html>
";
        
        $__internal_0c95959949a1bd163222e42f2afd82878dc1bcaff1104984ccf177f7ffd53ae0->leave($__internal_0c95959949a1bd163222e42f2afd82878dc1bcaff1104984ccf177f7ffd53ae0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4476f11b428b215319ba86fcd7dd1fafbe6e992c2d4327d392d2736f5de61909 = $this->env->getExtension("native_profiler");
        $__internal_4476f11b428b215319ba86fcd7dd1fafbe6e992c2d4327d392d2736f5de61909->enter($__internal_4476f11b428b215319ba86fcd7dd1fafbe6e992c2d4327d392d2736f5de61909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administracion RRHH";
        
        $__internal_4476f11b428b215319ba86fcd7dd1fafbe6e992c2d4327d392d2736f5de61909->leave($__internal_4476f11b428b215319ba86fcd7dd1fafbe6e992c2d4327d392d2736f5de61909_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dd8cbaa0ec2f714b092b98cb835b5f7a8edb2a903f5c6401a0fef4dd18efbbda = $this->env->getExtension("native_profiler");
        $__internal_dd8cbaa0ec2f714b092b98cb835b5f7a8edb2a903f5c6401a0fef4dd18efbbda->enter($__internal_dd8cbaa0ec2f714b092b98cb835b5f7a8edb2a903f5c6401a0fef4dd18efbbda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/estilos/principal.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/datepicker.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/estilos/feriado.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_dd8cbaa0ec2f714b092b98cb835b5f7a8edb2a903f5c6401a0fef4dd18efbbda->leave($__internal_dd8cbaa0ec2f714b092b98cb835b5f7a8edb2a903f5c6401a0fef4dd18efbbda_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_5eebc6fdcb93bce9b8df3c2a67b10c2f8bf2eedbdfcc5e5782fbca77318d2125 = $this->env->getExtension("native_profiler");
        $__internal_5eebc6fdcb93bce9b8df3c2a67b10c2f8bf2eedbdfcc5e5782fbca77318d2125->enter($__internal_5eebc6fdcb93bce9b8df3c2a67b10c2f8bf2eedbdfcc5e5782fbca77318d2125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "            ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
        ";
        
        $__internal_5eebc6fdcb93bce9b8df3c2a67b10c2f8bf2eedbdfcc5e5782fbca77318d2125->leave($__internal_5eebc6fdcb93bce9b8df3c2a67b10c2f8bf2eedbdfcc5e5782fbca77318d2125_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_751f35c4528c546933084e2afd1e9f8c441948c6861b9dab1514556a43bc4128 = $this->env->getExtension("native_profiler");
        $__internal_751f35c4528c546933084e2afd1e9f8c441948c6861b9dab1514556a43bc4128->enter($__internal_751f35c4528c546933084e2afd1e9f8c441948c6861b9dab1514556a43bc4128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery-datepicker.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/fechas/sueldosSalarios.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/guardar/asistenciaFeriado.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/fechas/fechaAsistencia.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_751f35c4528c546933084e2afd1e9f8c441948c6861b9dab1514556a43bc4128->leave($__internal_751f35c4528c546933084e2afd1e9f8c441948c6861b9dab1514556a43bc4128_prof);

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
        return array (  142 => 24,  138 => 23,  134 => 22,  130 => 21,  126 => 20,  121 => 19,  115 => 18,  105 => 16,  99 => 15,  90 => 10,  86 => 9,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 26,  47 => 18,  45 => 15,  38 => 12,  36 => 6,  32 => 5,  26 => 1,);
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
/*             <link rel="stylesheet" href="{{ asset('public/css/datepicker.css') }}" />*/
/*             <link rel="stylesheet" href="{{ asset('public/estilos/feriado.css') }}" />*/
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
/*             <script src="{{ asset('public/js/jquery-datepicker.js') }}"></script>*/
/*             <script src="{{ asset('public/js/fechas/sueldosSalarios.js') }}"></script>*/
/*             <script src="{{ asset('public/js/guardar/asistenciaFeriado.js') }}"></script>*/
/*             <script src="{{ asset('public/js/fechas/fechaAsistencia.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* {# empty Twig template #}*/

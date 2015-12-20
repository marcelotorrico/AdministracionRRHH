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
        $__internal_00f095f91f90342a2462966ce69239db64116a54076ee4a7876183c1b9b5a827 = $this->env->getExtension("native_profiler");
        $__internal_00f095f91f90342a2462966ce69239db64116a54076ee4a7876183c1b9b5a827->enter($__internal_00f095f91f90342a2462966ce69239db64116a54076ee4a7876183c1b9b5a827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_00f095f91f90342a2462966ce69239db64116a54076ee4a7876183c1b9b5a827->leave($__internal_00f095f91f90342a2462966ce69239db64116a54076ee4a7876183c1b9b5a827_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9cd1a7c4150aad663a6f7b907335e386b8702fb4ca254a567b0e0b3ca05c3d5 = $this->env->getExtension("native_profiler");
        $__internal_d9cd1a7c4150aad663a6f7b907335e386b8702fb4ca254a567b0e0b3ca05c3d5->enter($__internal_d9cd1a7c4150aad663a6f7b907335e386b8702fb4ca254a567b0e0b3ca05c3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administracion RRHH";
        
        $__internal_d9cd1a7c4150aad663a6f7b907335e386b8702fb4ca254a567b0e0b3ca05c3d5->leave($__internal_d9cd1a7c4150aad663a6f7b907335e386b8702fb4ca254a567b0e0b3ca05c3d5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c98dd087acb987ed4e645aa87e7f9bc740126d57568bbbc13f5bda38e13d64aa = $this->env->getExtension("native_profiler");
        $__internal_c98dd087acb987ed4e645aa87e7f9bc740126d57568bbbc13f5bda38e13d64aa->enter($__internal_c98dd087acb987ed4e645aa87e7f9bc740126d57568bbbc13f5bda38e13d64aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/estilos/principal.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_c98dd087acb987ed4e645aa87e7f9bc740126d57568bbbc13f5bda38e13d64aa->leave($__internal_c98dd087acb987ed4e645aa87e7f9bc740126d57568bbbc13f5bda38e13d64aa_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_44478f356e5a80e1c883fefc7838795678d14f366088d1b408135ed965cda467 = $this->env->getExtension("native_profiler");
        $__internal_44478f356e5a80e1c883fefc7838795678d14f366088d1b408135ed965cda467->enter($__internal_44478f356e5a80e1c883fefc7838795678d14f366088d1b408135ed965cda467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "            ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
        ";
        
        $__internal_44478f356e5a80e1c883fefc7838795678d14f366088d1b408135ed965cda467->leave($__internal_44478f356e5a80e1c883fefc7838795678d14f366088d1b408135ed965cda467_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d91dd8839d7fb872ae69853b146279e44a052e04fd609ca31df31e40a7bc22cf = $this->env->getExtension("native_profiler");
        $__internal_d91dd8839d7fb872ae69853b146279e44a052e04fd609ca31df31e40a7bc22cf->enter($__internal_d91dd8839d7fb872ae69853b146279e44a052e04fd609ca31df31e40a7bc22cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_d91dd8839d7fb872ae69853b146279e44a052e04fd609ca31df31e40a7bc22cf->leave($__internal_d91dd8839d7fb872ae69853b146279e44a052e04fd609ca31df31e40a7bc22cf_prof);

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
/* */

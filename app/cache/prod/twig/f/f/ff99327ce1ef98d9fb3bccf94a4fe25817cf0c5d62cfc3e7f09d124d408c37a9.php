<?php

/* layout.html.twig */
class __TwigTemplate_27d21b85ebe3cd7a1e49d57e78a6af98ddc333f12b68b568f5d327890e5af456 extends Twig_Template
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
        $__internal_031b3ff8e7a14c64df45d2b7522a0f394b553238416092b5a8b7e7ad51f9510a = $this->env->getExtension("native_profiler");
        $__internal_031b3ff8e7a14c64df45d2b7522a0f394b553238416092b5a8b7e7ad51f9510a->enter($__internal_031b3ff8e7a14c64df45d2b7522a0f394b553238416092b5a8b7e7ad51f9510a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_031b3ff8e7a14c64df45d2b7522a0f394b553238416092b5a8b7e7ad51f9510a->leave($__internal_031b3ff8e7a14c64df45d2b7522a0f394b553238416092b5a8b7e7ad51f9510a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5475800aaf24740a820b71c4b07e4328eae07478663de877b369b7cf4236b8e6 = $this->env->getExtension("native_profiler");
        $__internal_5475800aaf24740a820b71c4b07e4328eae07478663de877b369b7cf4236b8e6->enter($__internal_5475800aaf24740a820b71c4b07e4328eae07478663de877b369b7cf4236b8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administracion RRHH";
        
        $__internal_5475800aaf24740a820b71c4b07e4328eae07478663de877b369b7cf4236b8e6->leave($__internal_5475800aaf24740a820b71c4b07e4328eae07478663de877b369b7cf4236b8e6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e745553dafd2245f6f81fdec9df1d115f58b2711bc38934ab398ca6fdd76ab72 = $this->env->getExtension("native_profiler");
        $__internal_e745553dafd2245f6f81fdec9df1d115f58b2711bc38934ab398ca6fdd76ab72->enter($__internal_e745553dafd2245f6f81fdec9df1d115f58b2711bc38934ab398ca6fdd76ab72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/estilos/principal.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_e745553dafd2245f6f81fdec9df1d115f58b2711bc38934ab398ca6fdd76ab72->leave($__internal_e745553dafd2245f6f81fdec9df1d115f58b2711bc38934ab398ca6fdd76ab72_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a82971347f6d53065d175472ae56c96e51cf4711e51a3e52751c1a0d7b609ca = $this->env->getExtension("native_profiler");
        $__internal_4a82971347f6d53065d175472ae56c96e51cf4711e51a3e52751c1a0d7b609ca->enter($__internal_4a82971347f6d53065d175472ae56c96e51cf4711e51a3e52751c1a0d7b609ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "            ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
        ";
        
        $__internal_4a82971347f6d53065d175472ae56c96e51cf4711e51a3e52751c1a0d7b609ca->leave($__internal_4a82971347f6d53065d175472ae56c96e51cf4711e51a3e52751c1a0d7b609ca_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a53e0453d1985bbba29fcc425da053dd87d0dd2ac27a1a4e5c18c8580527566b = $this->env->getExtension("native_profiler");
        $__internal_a53e0453d1985bbba29fcc425da053dd87d0dd2ac27a1a4e5c18c8580527566b->enter($__internal_a53e0453d1985bbba29fcc425da053dd87d0dd2ac27a1a4e5c18c8580527566b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_a53e0453d1985bbba29fcc425da053dd87d0dd2ac27a1a4e5c18c8580527566b->leave($__internal_a53e0453d1985bbba29fcc425da053dd87d0dd2ac27a1a4e5c18c8580527566b_prof);

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

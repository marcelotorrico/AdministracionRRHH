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
        $__internal_3bf526bfa0c8ac039266a6b4518ba11fe73cbba4b2f47b8ab5ea381590879de6 = $this->env->getExtension("native_profiler");
        $__internal_3bf526bfa0c8ac039266a6b4518ba11fe73cbba4b2f47b8ab5ea381590879de6->enter($__internal_3bf526bfa0c8ac039266a6b4518ba11fe73cbba4b2f47b8ab5ea381590879de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_3bf526bfa0c8ac039266a6b4518ba11fe73cbba4b2f47b8ab5ea381590879de6->leave($__internal_3bf526bfa0c8ac039266a6b4518ba11fe73cbba4b2f47b8ab5ea381590879de6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_737bf26fa455324fb4647c2bce2c55916b0155ef3e2e9b026c1bc6634abe4f22 = $this->env->getExtension("native_profiler");
        $__internal_737bf26fa455324fb4647c2bce2c55916b0155ef3e2e9b026c1bc6634abe4f22->enter($__internal_737bf26fa455324fb4647c2bce2c55916b0155ef3e2e9b026c1bc6634abe4f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administracion RRHH";
        
        $__internal_737bf26fa455324fb4647c2bce2c55916b0155ef3e2e9b026c1bc6634abe4f22->leave($__internal_737bf26fa455324fb4647c2bce2c55916b0155ef3e2e9b026c1bc6634abe4f22_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f078cde297a1c5b35cce95e773f2995df5dfbe1a6c38770413e2a57f2f9f8b98 = $this->env->getExtension("native_profiler");
        $__internal_f078cde297a1c5b35cce95e773f2995df5dfbe1a6c38770413e2a57f2f9f8b98->enter($__internal_f078cde297a1c5b35cce95e773f2995df5dfbe1a6c38770413e2a57f2f9f8b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/estilos/principal.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_f078cde297a1c5b35cce95e773f2995df5dfbe1a6c38770413e2a57f2f9f8b98->leave($__internal_f078cde297a1c5b35cce95e773f2995df5dfbe1a6c38770413e2a57f2f9f8b98_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_84ce82a58b2cc2b77751668768d24e1cf69df5a3a4aa4316581bae783bf74827 = $this->env->getExtension("native_profiler");
        $__internal_84ce82a58b2cc2b77751668768d24e1cf69df5a3a4aa4316581bae783bf74827->enter($__internal_84ce82a58b2cc2b77751668768d24e1cf69df5a3a4aa4316581bae783bf74827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "            ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
        ";
        
        $__internal_84ce82a58b2cc2b77751668768d24e1cf69df5a3a4aa4316581bae783bf74827->leave($__internal_84ce82a58b2cc2b77751668768d24e1cf69df5a3a4aa4316581bae783bf74827_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4df050a53455a1769a1ebf8e08f65e540c143ee885a44be0cbaa7b875447f14b = $this->env->getExtension("native_profiler");
        $__internal_4df050a53455a1769a1ebf8e08f65e540c143ee885a44be0cbaa7b875447f14b->enter($__internal_4df050a53455a1769a1ebf8e08f65e540c143ee885a44be0cbaa7b875447f14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_4df050a53455a1769a1ebf8e08f65e540c143ee885a44be0cbaa7b875447f14b->leave($__internal_4df050a53455a1769a1ebf8e08f65e540c143ee885a44be0cbaa7b875447f14b_prof);

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

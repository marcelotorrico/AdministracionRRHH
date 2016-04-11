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
        $__internal_4e16ad20c4c2f963d891d348ef291c51bf6de99b6ce54f08cb965f1b9e067f83 = $this->env->getExtension("native_profiler");
        $__internal_4e16ad20c4c2f963d891d348ef291c51bf6de99b6ce54f08cb965f1b9e067f83->enter($__internal_4e16ad20c4c2f963d891d348ef291c51bf6de99b6ce54f08cb965f1b9e067f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        // line 24
        echo "    </body>
</html>
";
        
        $__internal_4e16ad20c4c2f963d891d348ef291c51bf6de99b6ce54f08cb965f1b9e067f83->leave($__internal_4e16ad20c4c2f963d891d348ef291c51bf6de99b6ce54f08cb965f1b9e067f83_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_34aca9245ba22112608c42c4e13ba693f2425bb4f25bb20f1291c810a81ee04c = $this->env->getExtension("native_profiler");
        $__internal_34aca9245ba22112608c42c4e13ba693f2425bb4f25bb20f1291c810a81ee04c->enter($__internal_34aca9245ba22112608c42c4e13ba693f2425bb4f25bb20f1291c810a81ee04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administracion RRHH";
        
        $__internal_34aca9245ba22112608c42c4e13ba693f2425bb4f25bb20f1291c810a81ee04c->leave($__internal_34aca9245ba22112608c42c4e13ba693f2425bb4f25bb20f1291c810a81ee04c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7b49770c017a022cc509d5a2edca7c7d2826819775ee92aefbb50652f63e685a = $this->env->getExtension("native_profiler");
        $__internal_7b49770c017a022cc509d5a2edca7c7d2826819775ee92aefbb50652f63e685a->enter($__internal_7b49770c017a022cc509d5a2edca7c7d2826819775ee92aefbb50652f63e685a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7b49770c017a022cc509d5a2edca7c7d2826819775ee92aefbb50652f63e685a->leave($__internal_7b49770c017a022cc509d5a2edca7c7d2826819775ee92aefbb50652f63e685a_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3078ba689a13ec7a60971cb2dbd8217010289280650d354c8d26744cf01369d = $this->env->getExtension("native_profiler");
        $__internal_a3078ba689a13ec7a60971cb2dbd8217010289280650d354c8d26744cf01369d->enter($__internal_a3078ba689a13ec7a60971cb2dbd8217010289280650d354c8d26744cf01369d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "            ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
        ";
        
        $__internal_a3078ba689a13ec7a60971cb2dbd8217010289280650d354c8d26744cf01369d->leave($__internal_a3078ba689a13ec7a60971cb2dbd8217010289280650d354c8d26744cf01369d_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_06ed9e6ca5cbd6c638b9eae2f98119c059521e290652cdd32b1e0f17914af506 = $this->env->getExtension("native_profiler");
        $__internal_06ed9e6ca5cbd6c638b9eae2f98119c059521e290652cdd32b1e0f17914af506->enter($__internal_06ed9e6ca5cbd6c638b9eae2f98119c059521e290652cdd32b1e0f17914af506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        ";
        
        $__internal_06ed9e6ca5cbd6c638b9eae2f98119c059521e290652cdd32b1e0f17914af506->leave($__internal_06ed9e6ca5cbd6c638b9eae2f98119c059521e290652cdd32b1e0f17914af506_prof);

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
        return array (  134 => 22,  130 => 21,  126 => 20,  121 => 19,  115 => 18,  105 => 16,  99 => 15,  90 => 10,  86 => 9,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 24,  47 => 18,  45 => 15,  38 => 12,  36 => 6,  32 => 5,  26 => 1,);
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
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* {# empty Twig template #}*/

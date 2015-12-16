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
        $__internal_4ebf14316e0a2e4afbcf561ffd3d3bf749f0c441e80ebe328cf82991347b9b91 = $this->env->getExtension("native_profiler");
        $__internal_4ebf14316e0a2e4afbcf561ffd3d3bf749f0c441e80ebe328cf82991347b9b91->enter($__internal_4ebf14316e0a2e4afbcf561ffd3d3bf749f0c441e80ebe328cf82991347b9b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_4ebf14316e0a2e4afbcf561ffd3d3bf749f0c441e80ebe328cf82991347b9b91->leave($__internal_4ebf14316e0a2e4afbcf561ffd3d3bf749f0c441e80ebe328cf82991347b9b91_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5688bab2a32677d7db761d49953b492645483b38aa29e5d496ac2852a257d23 = $this->env->getExtension("native_profiler");
        $__internal_d5688bab2a32677d7db761d49953b492645483b38aa29e5d496ac2852a257d23->enter($__internal_d5688bab2a32677d7db761d49953b492645483b38aa29e5d496ac2852a257d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Administracion RRHH";
        
        $__internal_d5688bab2a32677d7db761d49953b492645483b38aa29e5d496ac2852a257d23->leave($__internal_d5688bab2a32677d7db761d49953b492645483b38aa29e5d496ac2852a257d23_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_143af2d429f732efc35e71912d45ee05b8818e9266d4eaeba8ac691876e194af = $this->env->getExtension("native_profiler");
        $__internal_143af2d429f732efc35e71912d45ee05b8818e9266d4eaeba8ac691876e194af->enter($__internal_143af2d429f732efc35e71912d45ee05b8818e9266d4eaeba8ac691876e194af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/estilos/principal.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_143af2d429f732efc35e71912d45ee05b8818e9266d4eaeba8ac691876e194af->leave($__internal_143af2d429f732efc35e71912d45ee05b8818e9266d4eaeba8ac691876e194af_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_97d5166739a334f31b98dbb7cd5686408e5e85d29658d035209058e325e79fb9 = $this->env->getExtension("native_profiler");
        $__internal_97d5166739a334f31b98dbb7cd5686408e5e85d29658d035209058e325e79fb9->enter($__internal_97d5166739a334f31b98dbb7cd5686408e5e85d29658d035209058e325e79fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "            ";
        echo twig_include($this->env, $context, "menu.html.twig");
        echo "
        ";
        
        $__internal_97d5166739a334f31b98dbb7cd5686408e5e85d29658d035209058e325e79fb9->leave($__internal_97d5166739a334f31b98dbb7cd5686408e5e85d29658d035209058e325e79fb9_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_55d488fc82fcc3980d8486d0e92bb16052939aa6f91a8968bc9538ff961bd9e3 = $this->env->getExtension("native_profiler");
        $__internal_55d488fc82fcc3980d8486d0e92bb16052939aa6f91a8968bc9538ff961bd9e3->enter($__internal_55d488fc82fcc3980d8486d0e92bb16052939aa6f91a8968bc9538ff961bd9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_55d488fc82fcc3980d8486d0e92bb16052939aa6f91a8968bc9538ff961bd9e3->leave($__internal_55d488fc82fcc3980d8486d0e92bb16052939aa6f91a8968bc9538ff961bd9e3_prof);

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

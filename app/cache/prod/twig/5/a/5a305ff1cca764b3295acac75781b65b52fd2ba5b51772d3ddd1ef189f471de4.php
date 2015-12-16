<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d9056bd2d649015fc0b8c64f04128d950643c0546b6ad862a1040b5c03377358 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09a96281b8434ad8f18f8bd33def2a31b2e63620cf0a083e9000f7bb14f581ef = $this->env->getExtension("native_profiler");
        $__internal_09a96281b8434ad8f18f8bd33def2a31b2e63620cf0a083e9000f7bb14f581ef->enter($__internal_09a96281b8434ad8f18f8bd33def2a31b2e63620cf0a083e9000f7bb14f581ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09a96281b8434ad8f18f8bd33def2a31b2e63620cf0a083e9000f7bb14f581ef->leave($__internal_09a96281b8434ad8f18f8bd33def2a31b2e63620cf0a083e9000f7bb14f581ef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c46a5becefabc7df139fc0d13f90b5f52a5e566e765edd6c04cf78f2558ac98e = $this->env->getExtension("native_profiler");
        $__internal_c46a5becefabc7df139fc0d13f90b5f52a5e566e765edd6c04cf78f2558ac98e->enter($__internal_c46a5becefabc7df139fc0d13f90b5f52a5e566e765edd6c04cf78f2558ac98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c46a5becefabc7df139fc0d13f90b5f52a5e566e765edd6c04cf78f2558ac98e->leave($__internal_c46a5becefabc7df139fc0d13f90b5f52a5e566e765edd6c04cf78f2558ac98e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fea6d7a477407aeef1191b123873cf6fd7ea945377233ff806fcc78ebf1f5c5d = $this->env->getExtension("native_profiler");
        $__internal_fea6d7a477407aeef1191b123873cf6fd7ea945377233ff806fcc78ebf1f5c5d->enter($__internal_fea6d7a477407aeef1191b123873cf6fd7ea945377233ff806fcc78ebf1f5c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fea6d7a477407aeef1191b123873cf6fd7ea945377233ff806fcc78ebf1f5c5d->leave($__internal_fea6d7a477407aeef1191b123873cf6fd7ea945377233ff806fcc78ebf1f5c5d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec72aaa1cd4012ba44b9689ecba1f11cc8c86ef60f9c43ec640193dd9869eaea = $this->env->getExtension("native_profiler");
        $__internal_ec72aaa1cd4012ba44b9689ecba1f11cc8c86ef60f9c43ec640193dd9869eaea->enter($__internal_ec72aaa1cd4012ba44b9689ecba1f11cc8c86ef60f9c43ec640193dd9869eaea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ec72aaa1cd4012ba44b9689ecba1f11cc8c86ef60f9c43ec640193dd9869eaea->leave($__internal_ec72aaa1cd4012ba44b9689ecba1f11cc8c86ef60f9c43ec640193dd9869eaea_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */

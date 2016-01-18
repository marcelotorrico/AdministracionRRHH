<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b653dceeeebae371aa19dcce0d3e1b25a9f1609664e8fbb9ca9467eb04f5f9b5 extends Twig_Template
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
        $__internal_4bbebf2660deb2a69f05aebccc2f18f5e457ac83aacfe8fc0ae4b7d110f0763f = $this->env->getExtension("native_profiler");
        $__internal_4bbebf2660deb2a69f05aebccc2f18f5e457ac83aacfe8fc0ae4b7d110f0763f->enter($__internal_4bbebf2660deb2a69f05aebccc2f18f5e457ac83aacfe8fc0ae4b7d110f0763f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bbebf2660deb2a69f05aebccc2f18f5e457ac83aacfe8fc0ae4b7d110f0763f->leave($__internal_4bbebf2660deb2a69f05aebccc2f18f5e457ac83aacfe8fc0ae4b7d110f0763f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_79f55008e5d7aa8b15a4fa8444e095d1a7b6027b78e54f9eb92246f053e1f4a9 = $this->env->getExtension("native_profiler");
        $__internal_79f55008e5d7aa8b15a4fa8444e095d1a7b6027b78e54f9eb92246f053e1f4a9->enter($__internal_79f55008e5d7aa8b15a4fa8444e095d1a7b6027b78e54f9eb92246f053e1f4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_79f55008e5d7aa8b15a4fa8444e095d1a7b6027b78e54f9eb92246f053e1f4a9->leave($__internal_79f55008e5d7aa8b15a4fa8444e095d1a7b6027b78e54f9eb92246f053e1f4a9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e1e9a3147871806ccf8f11b175fdcdd88218ad425179248d79f1976219f1a60 = $this->env->getExtension("native_profiler");
        $__internal_6e1e9a3147871806ccf8f11b175fdcdd88218ad425179248d79f1976219f1a60->enter($__internal_6e1e9a3147871806ccf8f11b175fdcdd88218ad425179248d79f1976219f1a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6e1e9a3147871806ccf8f11b175fdcdd88218ad425179248d79f1976219f1a60->leave($__internal_6e1e9a3147871806ccf8f11b175fdcdd88218ad425179248d79f1976219f1a60_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7204c0e0505c0855a03547cfa9b838b213b9336bea76874310438abe96579b5d = $this->env->getExtension("native_profiler");
        $__internal_7204c0e0505c0855a03547cfa9b838b213b9336bea76874310438abe96579b5d->enter($__internal_7204c0e0505c0855a03547cfa9b838b213b9336bea76874310438abe96579b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7204c0e0505c0855a03547cfa9b838b213b9336bea76874310438abe96579b5d->leave($__internal_7204c0e0505c0855a03547cfa9b838b213b9336bea76874310438abe96579b5d_prof);

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

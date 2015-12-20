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
        $__internal_1b6f0ab3978c4b0ef1a512af43bd41ac514e7744d377024efcd9a9836867f47b = $this->env->getExtension("native_profiler");
        $__internal_1b6f0ab3978c4b0ef1a512af43bd41ac514e7744d377024efcd9a9836867f47b->enter($__internal_1b6f0ab3978c4b0ef1a512af43bd41ac514e7744d377024efcd9a9836867f47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b6f0ab3978c4b0ef1a512af43bd41ac514e7744d377024efcd9a9836867f47b->leave($__internal_1b6f0ab3978c4b0ef1a512af43bd41ac514e7744d377024efcd9a9836867f47b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8d87a56a93250720ec6db7c3733d358953464bd557b5f557758911479b1b3065 = $this->env->getExtension("native_profiler");
        $__internal_8d87a56a93250720ec6db7c3733d358953464bd557b5f557758911479b1b3065->enter($__internal_8d87a56a93250720ec6db7c3733d358953464bd557b5f557758911479b1b3065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8d87a56a93250720ec6db7c3733d358953464bd557b5f557758911479b1b3065->leave($__internal_8d87a56a93250720ec6db7c3733d358953464bd557b5f557758911479b1b3065_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_10e80411ad49df2969268dfd6ba6b5d192d324c9e7332e3212cefee5d698061a = $this->env->getExtension("native_profiler");
        $__internal_10e80411ad49df2969268dfd6ba6b5d192d324c9e7332e3212cefee5d698061a->enter($__internal_10e80411ad49df2969268dfd6ba6b5d192d324c9e7332e3212cefee5d698061a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_10e80411ad49df2969268dfd6ba6b5d192d324c9e7332e3212cefee5d698061a->leave($__internal_10e80411ad49df2969268dfd6ba6b5d192d324c9e7332e3212cefee5d698061a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b53497c3c07d636280befe2de199b755e3f3f70f3c31195c2bd019f1503f2837 = $this->env->getExtension("native_profiler");
        $__internal_b53497c3c07d636280befe2de199b755e3f3f70f3c31195c2bd019f1503f2837->enter($__internal_b53497c3c07d636280befe2de199b755e3f3f70f3c31195c2bd019f1503f2837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b53497c3c07d636280befe2de199b755e3f3f70f3c31195c2bd019f1503f2837->leave($__internal_b53497c3c07d636280befe2de199b755e3f3f70f3c31195c2bd019f1503f2837_prof);

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

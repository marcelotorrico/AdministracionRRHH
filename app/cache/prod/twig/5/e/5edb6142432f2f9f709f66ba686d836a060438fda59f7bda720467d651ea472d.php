<?php

/* MTDContratacionEmpleadosBundle:Default:index.html.twig */
class __TwigTemplate_b9d93aa729a7680e03fc5ec80becd16b541f5530b2c3fb061245c9d2c30f8316 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7358169285a0fb274b7c7951c44a4cd1d8b2bf6e5ef90993919b8739616d7af0 = $this->env->getExtension("native_profiler");
        $__internal_7358169285a0fb274b7c7951c44a4cd1d8b2bf6e5ef90993919b8739616d7af0->enter($__internal_7358169285a0fb274b7c7951c44a4cd1d8b2bf6e5ef90993919b8739616d7af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MTDContratacionEmpleadosBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_7358169285a0fb274b7c7951c44a4cd1d8b2bf6e5ef90993919b8739616d7af0->leave($__internal_7358169285a0fb274b7c7951c44a4cd1d8b2bf6e5ef90993919b8739616d7af0_prof);

    }

    public function getTemplateName()
    {
        return "MTDContratacionEmpleadosBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */

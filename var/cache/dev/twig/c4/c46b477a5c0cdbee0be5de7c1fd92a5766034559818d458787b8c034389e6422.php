<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_0ff31e265b000e6248a340ee0afd87d890b8b629ecc4d1083b7fecee4bdf8700 extends Twig_Template
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
        $__internal_a5f4dd17cb8c9dd754066d91fcaf0a53992912a7668e7907bb5cf697c6fd6c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5f4dd17cb8c9dd754066d91fcaf0a53992912a7668e7907bb5cf697c6fd6c21->enter($__internal_a5f4dd17cb8c9dd754066d91fcaf0a53992912a7668e7907bb5cf697c6fd6c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_29107eeb82e0d386ba3a106c33684102985ef3ff19a96c63a13e402744b9f8bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29107eeb82e0d386ba3a106c33684102985ef3ff19a96c63a13e402744b9f8bd->enter($__internal_29107eeb82e0d386ba3a106c33684102985ef3ff19a96c63a13e402744b9f8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_a5f4dd17cb8c9dd754066d91fcaf0a53992912a7668e7907bb5cf697c6fd6c21->leave($__internal_a5f4dd17cb8c9dd754066d91fcaf0a53992912a7668e7907bb5cf697c6fd6c21_prof);

        
        $__internal_29107eeb82e0d386ba3a106c33684102985ef3ff19a96c63a13e402744b9f8bd->leave($__internal_29107eeb82e0d386ba3a106c33684102985ef3ff19a96c63a13e402744b9f8bd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}

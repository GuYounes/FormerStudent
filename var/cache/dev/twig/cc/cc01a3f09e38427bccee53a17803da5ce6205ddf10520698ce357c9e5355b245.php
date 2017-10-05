<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_13efe0c3c28f888259847f8b248d49e3287de2dc4db04dde9ef8faf062b38904 extends Twig_Template
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
        $__internal_f0dd0c95638d0c9b5ed062a4ed9f50184834e4d8ba1a6a4036e929a3dadc94dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0dd0c95638d0c9b5ed062a4ed9f50184834e4d8ba1a6a4036e929a3dadc94dc->enter($__internal_f0dd0c95638d0c9b5ed062a4ed9f50184834e4d8ba1a6a4036e929a3dadc94dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_ca892540ae9c48abc41a8de4f84e649a1c6645f308d3fd1d61f5f31ed98e990e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca892540ae9c48abc41a8de4f84e649a1c6645f308d3fd1d61f5f31ed98e990e->enter($__internal_ca892540ae9c48abc41a8de4f84e649a1c6645f308d3fd1d61f5f31ed98e990e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_f0dd0c95638d0c9b5ed062a4ed9f50184834e4d8ba1a6a4036e929a3dadc94dc->leave($__internal_f0dd0c95638d0c9b5ed062a4ed9f50184834e4d8ba1a6a4036e929a3dadc94dc_prof);

        
        $__internal_ca892540ae9c48abc41a8de4f84e649a1c6645f308d3fd1d61f5f31ed98e990e->leave($__internal_ca892540ae9c48abc41a8de4f84e649a1c6645f308d3fd1d61f5f31ed98e990e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}

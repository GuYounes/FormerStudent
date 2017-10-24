<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_cb1451a09bb278389e0433ed31c83d1f96ccf89346bc259f7e43aff22a8fabbb extends Twig_Template
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
        $__internal_91f5f4149b75ebe6c7372272fa53442e4327010964756382b6277da143cfd0e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91f5f4149b75ebe6c7372272fa53442e4327010964756382b6277da143cfd0e8->enter($__internal_91f5f4149b75ebe6c7372272fa53442e4327010964756382b6277da143cfd0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_c039d2c1a1b27ad0141da2128a0488a19a379c80ec8051bd795244316637eea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c039d2c1a1b27ad0141da2128a0488a19a379c80ec8051bd795244316637eea4->enter($__internal_c039d2c1a1b27ad0141da2128a0488a19a379c80ec8051bd795244316637eea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_91f5f4149b75ebe6c7372272fa53442e4327010964756382b6277da143cfd0e8->leave($__internal_91f5f4149b75ebe6c7372272fa53442e4327010964756382b6277da143cfd0e8_prof);

        
        $__internal_c039d2c1a1b27ad0141da2128a0488a19a379c80ec8051bd795244316637eea4->leave($__internal_c039d2c1a1b27ad0141da2128a0488a19a379c80ec8051bd795244316637eea4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}

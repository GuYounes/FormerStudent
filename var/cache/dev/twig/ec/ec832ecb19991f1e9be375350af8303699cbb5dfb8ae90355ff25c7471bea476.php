<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_1d3461428f95e25d6250357818aacc32d53fbc5d44592bf39bce523876e3f2eb extends Twig_Template
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
        $__internal_451c65ced9b7bc872356d0e7873337dc6307f1628f0cba470ebb337dbf5b186a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_451c65ced9b7bc872356d0e7873337dc6307f1628f0cba470ebb337dbf5b186a->enter($__internal_451c65ced9b7bc872356d0e7873337dc6307f1628f0cba470ebb337dbf5b186a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_ad619b98dbc2d8d902366b094e4ce2c1358100ec25940daf8c1c5ce293da1d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad619b98dbc2d8d902366b094e4ce2c1358100ec25940daf8c1c5ce293da1d66->enter($__internal_ad619b98dbc2d8d902366b094e4ce2c1358100ec25940daf8c1c5ce293da1d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_451c65ced9b7bc872356d0e7873337dc6307f1628f0cba470ebb337dbf5b186a->leave($__internal_451c65ced9b7bc872356d0e7873337dc6307f1628f0cba470ebb337dbf5b186a_prof);

        
        $__internal_ad619b98dbc2d8d902366b094e4ce2c1358100ec25940daf8c1c5ce293da1d66->leave($__internal_ad619b98dbc2d8d902366b094e4ce2c1358100ec25940daf8c1c5ce293da1d66_prof);

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

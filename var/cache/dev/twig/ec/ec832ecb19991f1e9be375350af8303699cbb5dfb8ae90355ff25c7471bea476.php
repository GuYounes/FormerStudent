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
        $__internal_8fb8da8a85ef2805a38f6bcb5222f0b82978b92197deb8a8d7b913a7dab17250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fb8da8a85ef2805a38f6bcb5222f0b82978b92197deb8a8d7b913a7dab17250->enter($__internal_8fb8da8a85ef2805a38f6bcb5222f0b82978b92197deb8a8d7b913a7dab17250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_8dd0424dedc5b7c2ccebc0ad61bb5e9d048e398cb40228553a6b2918d95775b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd0424dedc5b7c2ccebc0ad61bb5e9d048e398cb40228553a6b2918d95775b1->enter($__internal_8dd0424dedc5b7c2ccebc0ad61bb5e9d048e398cb40228553a6b2918d95775b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_8fb8da8a85ef2805a38f6bcb5222f0b82978b92197deb8a8d7b913a7dab17250->leave($__internal_8fb8da8a85ef2805a38f6bcb5222f0b82978b92197deb8a8d7b913a7dab17250_prof);

        
        $__internal_8dd0424dedc5b7c2ccebc0ad61bb5e9d048e398cb40228553a6b2918d95775b1->leave($__internal_8dd0424dedc5b7c2ccebc0ad61bb5e9d048e398cb40228553a6b2918d95775b1_prof);

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

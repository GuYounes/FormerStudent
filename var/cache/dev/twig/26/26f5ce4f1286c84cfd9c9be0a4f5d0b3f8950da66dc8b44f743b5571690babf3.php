<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_e3167912f7055e62afe30df9677915754e8b4da92950620948dd2b7f2c859cf7 extends Twig_Template
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
        $__internal_ef3e75f284a5608424e34cea9b8794e9b98e0a8ea80e701c745628a4fa644cd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef3e75f284a5608424e34cea9b8794e9b98e0a8ea80e701c745628a4fa644cd7->enter($__internal_ef3e75f284a5608424e34cea9b8794e9b98e0a8ea80e701c745628a4fa644cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_1d30565a2d94e69ad2e8d206efdf852c31f4d678f1c1a48c2c11057a4c06e3fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d30565a2d94e69ad2e8d206efdf852c31f4d678f1c1a48c2c11057a4c06e3fe->enter($__internal_1d30565a2d94e69ad2e8d206efdf852c31f4d678f1c1a48c2c11057a4c06e3fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_ef3e75f284a5608424e34cea9b8794e9b98e0a8ea80e701c745628a4fa644cd7->leave($__internal_ef3e75f284a5608424e34cea9b8794e9b98e0a8ea80e701c745628a4fa644cd7_prof);

        
        $__internal_1d30565a2d94e69ad2e8d206efdf852c31f4d678f1c1a48c2c11057a4c06e3fe->leave($__internal_1d30565a2d94e69ad2e8d206efdf852c31f4d678f1c1a48c2c11057a4c06e3fe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}

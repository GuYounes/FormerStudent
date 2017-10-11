<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_bd65b39c99b56e1de337f9a51137690df4c3462b79e954cb301a18d64e20b71a extends Twig_Template
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
        $__internal_08b508753ce3f4ac622cf3d6be59a18edb72c5105ce24ff77c033cb262268728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08b508753ce3f4ac622cf3d6be59a18edb72c5105ce24ff77c033cb262268728->enter($__internal_08b508753ce3f4ac622cf3d6be59a18edb72c5105ce24ff77c033cb262268728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_da3ef3048636e87afb7cef686e93fb8e11bc085df7911bafd7bd6eaa02f8d9d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da3ef3048636e87afb7cef686e93fb8e11bc085df7911bafd7bd6eaa02f8d9d5->enter($__internal_da3ef3048636e87afb7cef686e93fb8e11bc085df7911bafd7bd6eaa02f8d9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_08b508753ce3f4ac622cf3d6be59a18edb72c5105ce24ff77c033cb262268728->leave($__internal_08b508753ce3f4ac622cf3d6be59a18edb72c5105ce24ff77c033cb262268728_prof);

        
        $__internal_da3ef3048636e87afb7cef686e93fb8e11bc085df7911bafd7bd6eaa02f8d9d5->leave($__internal_da3ef3048636e87afb7cef686e93fb8e11bc085df7911bafd7bd6eaa02f8d9d5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}

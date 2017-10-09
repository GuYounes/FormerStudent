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
        $__internal_326eea199a2a2be02acd1579ba5ce7494a6ba155a77a7c198dab40abea549914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_326eea199a2a2be02acd1579ba5ce7494a6ba155a77a7c198dab40abea549914->enter($__internal_326eea199a2a2be02acd1579ba5ce7494a6ba155a77a7c198dab40abea549914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_d762f94545d82fa005730a93affa740eb68a66a6520c67a21a795640ab7be2db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d762f94545d82fa005730a93affa740eb68a66a6520c67a21a795640ab7be2db->enter($__internal_d762f94545d82fa005730a93affa740eb68a66a6520c67a21a795640ab7be2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_326eea199a2a2be02acd1579ba5ce7494a6ba155a77a7c198dab40abea549914->leave($__internal_326eea199a2a2be02acd1579ba5ce7494a6ba155a77a7c198dab40abea549914_prof);

        
        $__internal_d762f94545d82fa005730a93affa740eb68a66a6520c67a21a795640ab7be2db->leave($__internal_d762f94545d82fa005730a93affa740eb68a66a6520c67a21a795640ab7be2db_prof);

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

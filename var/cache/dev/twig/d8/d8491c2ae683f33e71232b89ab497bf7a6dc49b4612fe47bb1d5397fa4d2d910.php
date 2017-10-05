<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_483b30f23b5c874e922906102e9c49d39bf8d17ebc9c47194732de1d28df11ca extends Twig_Template
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
        $__internal_5f21b0d899d1b9aeee16372d8f56367d126f415f12a3aac1ff833c9a688d0ba0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f21b0d899d1b9aeee16372d8f56367d126f415f12a3aac1ff833c9a688d0ba0->enter($__internal_5f21b0d899d1b9aeee16372d8f56367d126f415f12a3aac1ff833c9a688d0ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_e161840ff9163c352c20e94682487e78c0e3a2caf9d63a334aaf87d0e411bed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e161840ff9163c352c20e94682487e78c0e3a2caf9d63a334aaf87d0e411bed7->enter($__internal_e161840ff9163c352c20e94682487e78c0e3a2caf9d63a334aaf87d0e411bed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_5f21b0d899d1b9aeee16372d8f56367d126f415f12a3aac1ff833c9a688d0ba0->leave($__internal_5f21b0d899d1b9aeee16372d8f56367d126f415f12a3aac1ff833c9a688d0ba0_prof);

        
        $__internal_e161840ff9163c352c20e94682487e78c0e3a2caf9d63a334aaf87d0e411bed7->leave($__internal_e161840ff9163c352c20e94682487e78c0e3a2caf9d63a334aaf87d0e411bed7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}

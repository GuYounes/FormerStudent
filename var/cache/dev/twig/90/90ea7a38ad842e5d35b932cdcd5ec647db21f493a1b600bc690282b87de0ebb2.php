<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_b582d411e33a5b2e7465b1bf758094b07190c28af9a2ae6de061e08158a0d636 extends Twig_Template
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
        $__internal_1130f6045c244794b974393fc75cd8bd351d31fa01730793404898c993f80965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1130f6045c244794b974393fc75cd8bd351d31fa01730793404898c993f80965->enter($__internal_1130f6045c244794b974393fc75cd8bd351d31fa01730793404898c993f80965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_6886e232e20acf3cb4948cff0269e5d8e25bed460b7b01a27bf40a67cbe406ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6886e232e20acf3cb4948cff0269e5d8e25bed460b7b01a27bf40a67cbe406ab->enter($__internal_6886e232e20acf3cb4948cff0269e5d8e25bed460b7b01a27bf40a67cbe406ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1130f6045c244794b974393fc75cd8bd351d31fa01730793404898c993f80965->leave($__internal_1130f6045c244794b974393fc75cd8bd351d31fa01730793404898c993f80965_prof);

        
        $__internal_6886e232e20acf3cb4948cff0269e5d8e25bed460b7b01a27bf40a67cbe406ab->leave($__internal_6886e232e20acf3cb4948cff0269e5d8e25bed460b7b01a27bf40a67cbe406ab_prof);

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

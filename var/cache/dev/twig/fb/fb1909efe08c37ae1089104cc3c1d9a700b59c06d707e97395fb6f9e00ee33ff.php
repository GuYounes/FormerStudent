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
        $__internal_cfe59523fff0f0bc942918c53abee2451804c61b793a7b4728feb383dddc51f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfe59523fff0f0bc942918c53abee2451804c61b793a7b4728feb383dddc51f7->enter($__internal_cfe59523fff0f0bc942918c53abee2451804c61b793a7b4728feb383dddc51f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_a8dbc9e8d40bb5a15858d56897abe30e0d3821d014188b0a6b415058c039f126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8dbc9e8d40bb5a15858d56897abe30e0d3821d014188b0a6b415058c039f126->enter($__internal_a8dbc9e8d40bb5a15858d56897abe30e0d3821d014188b0a6b415058c039f126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_cfe59523fff0f0bc942918c53abee2451804c61b793a7b4728feb383dddc51f7->leave($__internal_cfe59523fff0f0bc942918c53abee2451804c61b793a7b4728feb383dddc51f7_prof);

        
        $__internal_a8dbc9e8d40bb5a15858d56897abe30e0d3821d014188b0a6b415058c039f126->leave($__internal_a8dbc9e8d40bb5a15858d56897abe30e0d3821d014188b0a6b415058c039f126_prof);

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
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}

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
        $__internal_490121e5b23ce249ddd20c1f891452305fdcd3f486de122f80269f242caa6679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_490121e5b23ce249ddd20c1f891452305fdcd3f486de122f80269f242caa6679->enter($__internal_490121e5b23ce249ddd20c1f891452305fdcd3f486de122f80269f242caa6679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_4d8f262a721c7b0eb249c13be35edd638fa7c65128ec2209f42d9b46bedec3ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d8f262a721c7b0eb249c13be35edd638fa7c65128ec2209f42d9b46bedec3ea->enter($__internal_4d8f262a721c7b0eb249c13be35edd638fa7c65128ec2209f42d9b46bedec3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_490121e5b23ce249ddd20c1f891452305fdcd3f486de122f80269f242caa6679->leave($__internal_490121e5b23ce249ddd20c1f891452305fdcd3f486de122f80269f242caa6679_prof);

        
        $__internal_4d8f262a721c7b0eb249c13be35edd638fa7c65128ec2209f42d9b46bedec3ea->leave($__internal_4d8f262a721c7b0eb249c13be35edd638fa7c65128ec2209f42d9b46bedec3ea_prof);

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

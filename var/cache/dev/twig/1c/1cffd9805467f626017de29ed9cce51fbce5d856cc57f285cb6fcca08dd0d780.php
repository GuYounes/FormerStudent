<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_59ec4706824ffe5c596cd9f663934ea6f8b29e0bf0ee3a4e15a78255ec323ca0 extends Twig_Template
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
        $__internal_36eb9fe390511a026e2e2550e1428cd9b9a7fe8a197f00dcce30f7d910286b62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36eb9fe390511a026e2e2550e1428cd9b9a7fe8a197f00dcce30f7d910286b62->enter($__internal_36eb9fe390511a026e2e2550e1428cd9b9a7fe8a197f00dcce30f7d910286b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_0c9e744e215996b578107483ac78e53c8d036a6b8051f24c248dc133cb2e9f34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c9e744e215996b578107483ac78e53c8d036a6b8051f24c248dc133cb2e9f34->enter($__internal_0c9e744e215996b578107483ac78e53c8d036a6b8051f24c248dc133cb2e9f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_36eb9fe390511a026e2e2550e1428cd9b9a7fe8a197f00dcce30f7d910286b62->leave($__internal_36eb9fe390511a026e2e2550e1428cd9b9a7fe8a197f00dcce30f7d910286b62_prof);

        
        $__internal_0c9e744e215996b578107483ac78e53c8d036a6b8051f24c248dc133cb2e9f34->leave($__internal_0c9e744e215996b578107483ac78e53c8d036a6b8051f24c248dc133cb2e9f34_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}

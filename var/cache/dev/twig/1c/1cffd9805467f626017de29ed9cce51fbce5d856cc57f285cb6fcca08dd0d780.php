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
        $__internal_d61762175b6b4a3314ce6f940402558fc9994739a37b87770964e1fc120f1740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d61762175b6b4a3314ce6f940402558fc9994739a37b87770964e1fc120f1740->enter($__internal_d61762175b6b4a3314ce6f940402558fc9994739a37b87770964e1fc120f1740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_d4fbc0f1a9870f19000a85129f627b301e7295aacc712eceb787e0a39ff9d25c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4fbc0f1a9870f19000a85129f627b301e7295aacc712eceb787e0a39ff9d25c->enter($__internal_d4fbc0f1a9870f19000a85129f627b301e7295aacc712eceb787e0a39ff9d25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_d61762175b6b4a3314ce6f940402558fc9994739a37b87770964e1fc120f1740->leave($__internal_d61762175b6b4a3314ce6f940402558fc9994739a37b87770964e1fc120f1740_prof);

        
        $__internal_d4fbc0f1a9870f19000a85129f627b301e7295aacc712eceb787e0a39ff9d25c->leave($__internal_d4fbc0f1a9870f19000a85129f627b301e7295aacc712eceb787e0a39ff9d25c_prof);

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
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}

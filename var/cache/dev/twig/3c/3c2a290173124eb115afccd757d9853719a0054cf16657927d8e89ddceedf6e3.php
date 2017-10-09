<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_31f3ba4f07c5d3421eabc91e44216edc47f62b5cc0b8b26ff465bc445891ae26 extends Twig_Template
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
        $__internal_4f5b5b7e700e72f309d4c2b20529f477d94af25b157306d1f29b1b067a599f42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f5b5b7e700e72f309d4c2b20529f477d94af25b157306d1f29b1b067a599f42->enter($__internal_4f5b5b7e700e72f309d4c2b20529f477d94af25b157306d1f29b1b067a599f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_76ab30423ccd5fa88d3a572fe48d3c96128cdf27dbe07fa621eb48bb01a42ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ab30423ccd5fa88d3a572fe48d3c96128cdf27dbe07fa621eb48bb01a42ca3->enter($__internal_76ab30423ccd5fa88d3a572fe48d3c96128cdf27dbe07fa621eb48bb01a42ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_4f5b5b7e700e72f309d4c2b20529f477d94af25b157306d1f29b1b067a599f42->leave($__internal_4f5b5b7e700e72f309d4c2b20529f477d94af25b157306d1f29b1b067a599f42_prof);

        
        $__internal_76ab30423ccd5fa88d3a572fe48d3c96128cdf27dbe07fa621eb48bb01a42ca3->leave($__internal_76ab30423ccd5fa88d3a572fe48d3c96128cdf27dbe07fa621eb48bb01a42ca3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}

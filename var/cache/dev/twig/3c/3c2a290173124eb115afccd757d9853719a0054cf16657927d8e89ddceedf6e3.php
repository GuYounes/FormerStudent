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
        $__internal_d64c94e2ad98f01e58e6fc25fef436476f87fa46c7bfba70c4a63fd88ef35940 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d64c94e2ad98f01e58e6fc25fef436476f87fa46c7bfba70c4a63fd88ef35940->enter($__internal_d64c94e2ad98f01e58e6fc25fef436476f87fa46c7bfba70c4a63fd88ef35940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_5a49a0888298b5467c7637c102983937400068b45b62a918c53fd00ab41a5e14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a49a0888298b5467c7637c102983937400068b45b62a918c53fd00ab41a5e14->enter($__internal_5a49a0888298b5467c7637c102983937400068b45b62a918c53fd00ab41a5e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d64c94e2ad98f01e58e6fc25fef436476f87fa46c7bfba70c4a63fd88ef35940->leave($__internal_d64c94e2ad98f01e58e6fc25fef436476f87fa46c7bfba70c4a63fd88ef35940_prof);

        
        $__internal_5a49a0888298b5467c7637c102983937400068b45b62a918c53fd00ab41a5e14->leave($__internal_5a49a0888298b5467c7637c102983937400068b45b62a918c53fd00ab41a5e14_prof);

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

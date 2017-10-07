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
        $__internal_5f098563fff4801afdc1a77c401fae26eb854227a1daa5b301c0f29631d10c70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f098563fff4801afdc1a77c401fae26eb854227a1daa5b301c0f29631d10c70->enter($__internal_5f098563fff4801afdc1a77c401fae26eb854227a1daa5b301c0f29631d10c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_566230641c640ad36f39182716fdc992776122ec5792f1896221eab27b0afb17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566230641c640ad36f39182716fdc992776122ec5792f1896221eab27b0afb17->enter($__internal_566230641c640ad36f39182716fdc992776122ec5792f1896221eab27b0afb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_5f098563fff4801afdc1a77c401fae26eb854227a1daa5b301c0f29631d10c70->leave($__internal_5f098563fff4801afdc1a77c401fae26eb854227a1daa5b301c0f29631d10c70_prof);

        
        $__internal_566230641c640ad36f39182716fdc992776122ec5792f1896221eab27b0afb17->leave($__internal_566230641c640ad36f39182716fdc992776122ec5792f1896221eab27b0afb17_prof);

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

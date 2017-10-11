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
        $__internal_100bd7bbeb2347852801440162eb7174348591ae834b083c08ee1cb0eb615a2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_100bd7bbeb2347852801440162eb7174348591ae834b083c08ee1cb0eb615a2d->enter($__internal_100bd7bbeb2347852801440162eb7174348591ae834b083c08ee1cb0eb615a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_baac843ef517f0b76fca2449a610cf5f6f5033d3cbbc03dbd411c966cfcd8323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baac843ef517f0b76fca2449a610cf5f6f5033d3cbbc03dbd411c966cfcd8323->enter($__internal_baac843ef517f0b76fca2449a610cf5f6f5033d3cbbc03dbd411c966cfcd8323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_100bd7bbeb2347852801440162eb7174348591ae834b083c08ee1cb0eb615a2d->leave($__internal_100bd7bbeb2347852801440162eb7174348591ae834b083c08ee1cb0eb615a2d_prof);

        
        $__internal_baac843ef517f0b76fca2449a610cf5f6f5033d3cbbc03dbd411c966cfcd8323->leave($__internal_baac843ef517f0b76fca2449a610cf5f6f5033d3cbbc03dbd411c966cfcd8323_prof);

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
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}

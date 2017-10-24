<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_194d7c0c008c33af5e9dd059c01e71d149efe9fe22656850a8fdf887fa214466 extends Twig_Template
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
        $__internal_b86b41865182bb5742e865f6837d7451a5c167075611eedf31dc9e46413fed9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b86b41865182bb5742e865f6837d7451a5c167075611eedf31dc9e46413fed9b->enter($__internal_b86b41865182bb5742e865f6837d7451a5c167075611eedf31dc9e46413fed9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_8c7afd57c8e09311d9b7b28a1ea80cb12a1a6655dd88415ace57528250f0308b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7afd57c8e09311d9b7b28a1ea80cb12a1a6655dd88415ace57528250f0308b->enter($__internal_8c7afd57c8e09311d9b7b28a1ea80cb12a1a6655dd88415ace57528250f0308b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_b86b41865182bb5742e865f6837d7451a5c167075611eedf31dc9e46413fed9b->leave($__internal_b86b41865182bb5742e865f6837d7451a5c167075611eedf31dc9e46413fed9b_prof);

        
        $__internal_8c7afd57c8e09311d9b7b28a1ea80cb12a1a6655dd88415ace57528250f0308b->leave($__internal_8c7afd57c8e09311d9b7b28a1ea80cb12a1a6655dd88415ace57528250f0308b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}

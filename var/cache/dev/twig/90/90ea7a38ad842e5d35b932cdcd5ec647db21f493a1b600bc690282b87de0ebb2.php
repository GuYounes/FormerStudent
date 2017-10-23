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
        $__internal_3fc7a09abf1f522d87109af7daf8dbe8e95c0d2d0424df66a6a6c7a414bc1632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fc7a09abf1f522d87109af7daf8dbe8e95c0d2d0424df66a6a6c7a414bc1632->enter($__internal_3fc7a09abf1f522d87109af7daf8dbe8e95c0d2d0424df66a6a6c7a414bc1632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_2996a8c40008d6d37ada691b2a05b4a88489542edd934995b192cf5a0b0d9a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2996a8c40008d6d37ada691b2a05b4a88489542edd934995b192cf5a0b0d9a52->enter($__internal_2996a8c40008d6d37ada691b2a05b4a88489542edd934995b192cf5a0b0d9a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_3fc7a09abf1f522d87109af7daf8dbe8e95c0d2d0424df66a6a6c7a414bc1632->leave($__internal_3fc7a09abf1f522d87109af7daf8dbe8e95c0d2d0424df66a6a6c7a414bc1632_prof);

        
        $__internal_2996a8c40008d6d37ada691b2a05b4a88489542edd934995b192cf5a0b0d9a52->leave($__internal_2996a8c40008d6d37ada691b2a05b4a88489542edd934995b192cf5a0b0d9a52_prof);

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

<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_e1bb44f12152d7e2a61577e512417483fd6db51d1a3750a0c2e1efc66062fc7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_682f9ef344a5c7839fb8da0b278a9e95abb7e2f43dcfa833b3229ea4d2ee8166 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_682f9ef344a5c7839fb8da0b278a9e95abb7e2f43dcfa833b3229ea4d2ee8166->enter($__internal_682f9ef344a5c7839fb8da0b278a9e95abb7e2f43dcfa833b3229ea4d2ee8166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_09d0dbcb418bd8c094624306fc548143b80d2892db68bc9b6cc5b37add8b4ec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09d0dbcb418bd8c094624306fc548143b80d2892db68bc9b6cc5b37add8b4ec5->enter($__internal_09d0dbcb418bd8c094624306fc548143b80d2892db68bc9b6cc5b37add8b4ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_682f9ef344a5c7839fb8da0b278a9e95abb7e2f43dcfa833b3229ea4d2ee8166->leave($__internal_682f9ef344a5c7839fb8da0b278a9e95abb7e2f43dcfa833b3229ea4d2ee8166_prof);

        
        $__internal_09d0dbcb418bd8c094624306fc548143b80d2892db68bc9b6cc5b37add8b4ec5->leave($__internal_09d0dbcb418bd8c094624306fc548143b80d2892db68bc9b6cc5b37add8b4ec5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_db959bf08087aae62c84777256d333e4e3c4dbfd65b789121e33387212ad56a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db959bf08087aae62c84777256d333e4e3c4dbfd65b789121e33387212ad56a4->enter($__internal_db959bf08087aae62c84777256d333e4e3c4dbfd65b789121e33387212ad56a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d80d18431ae009d2afd7b6307aad06bdea08ca33e25058b6e5baf068a760f35b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d80d18431ae009d2afd7b6307aad06bdea08ca33e25058b6e5baf068a760f35b->enter($__internal_d80d18431ae009d2afd7b6307aad06bdea08ca33e25058b6e5baf068a760f35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d80d18431ae009d2afd7b6307aad06bdea08ca33e25058b6e5baf068a760f35b->leave($__internal_d80d18431ae009d2afd7b6307aad06bdea08ca33e25058b6e5baf068a760f35b_prof);

        
        $__internal_db959bf08087aae62c84777256d333e4e3c4dbfd65b789121e33387212ad56a4->leave($__internal_db959bf08087aae62c84777256d333e4e3c4dbfd65b789121e33387212ad56a4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}

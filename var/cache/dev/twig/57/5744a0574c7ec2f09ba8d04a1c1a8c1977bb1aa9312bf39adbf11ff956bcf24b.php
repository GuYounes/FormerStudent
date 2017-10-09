<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_885d90fcef4746a33e0f03abfffc73eca5de41b4c94f58da0ec469155f9c094a extends Twig_Template
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
        $__internal_89f47f43cbf7961201f7fb490db7c299fa29b16a1442b9657605125e9e466dd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89f47f43cbf7961201f7fb490db7c299fa29b16a1442b9657605125e9e466dd3->enter($__internal_89f47f43cbf7961201f7fb490db7c299fa29b16a1442b9657605125e9e466dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_dfc963a8779d7843526ac1298aafdaf45b4d82ef6923bd9f39391efaf2897a73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc963a8779d7843526ac1298aafdaf45b4d82ef6923bd9f39391efaf2897a73->enter($__internal_dfc963a8779d7843526ac1298aafdaf45b4d82ef6923bd9f39391efaf2897a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_89f47f43cbf7961201f7fb490db7c299fa29b16a1442b9657605125e9e466dd3->leave($__internal_89f47f43cbf7961201f7fb490db7c299fa29b16a1442b9657605125e9e466dd3_prof);

        
        $__internal_dfc963a8779d7843526ac1298aafdaf45b4d82ef6923bd9f39391efaf2897a73->leave($__internal_dfc963a8779d7843526ac1298aafdaf45b4d82ef6923bd9f39391efaf2897a73_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1d7c85594f2d98d76959ba5d2914f89a27f57ff3e23d3997ff4610a10b32309e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d7c85594f2d98d76959ba5d2914f89a27f57ff3e23d3997ff4610a10b32309e->enter($__internal_1d7c85594f2d98d76959ba5d2914f89a27f57ff3e23d3997ff4610a10b32309e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a3395a237d483a3e06e8baf9c63dbea025f27177a1c48a2a35e452144d2375d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3395a237d483a3e06e8baf9c63dbea025f27177a1c48a2a35e452144d2375d0->enter($__internal_a3395a237d483a3e06e8baf9c63dbea025f27177a1c48a2a35e452144d2375d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a3395a237d483a3e06e8baf9c63dbea025f27177a1c48a2a35e452144d2375d0->leave($__internal_a3395a237d483a3e06e8baf9c63dbea025f27177a1c48a2a35e452144d2375d0_prof);

        
        $__internal_1d7c85594f2d98d76959ba5d2914f89a27f57ff3e23d3997ff4610a10b32309e->leave($__internal_1d7c85594f2d98d76959ba5d2914f89a27f57ff3e23d3997ff4610a10b32309e_prof);

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

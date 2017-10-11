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
        $__internal_a8b7ab9bc3d12a7cf59bd63cc05188d2aa5819d5d40a3ea91215760dc48eaabf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8b7ab9bc3d12a7cf59bd63cc05188d2aa5819d5d40a3ea91215760dc48eaabf->enter($__internal_a8b7ab9bc3d12a7cf59bd63cc05188d2aa5819d5d40a3ea91215760dc48eaabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_5bb705363cc1e2150f0047b02df5bcbe1ceeebc7e4c5a8e256d6c87e9294a643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bb705363cc1e2150f0047b02df5bcbe1ceeebc7e4c5a8e256d6c87e9294a643->enter($__internal_5bb705363cc1e2150f0047b02df5bcbe1ceeebc7e4c5a8e256d6c87e9294a643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a8b7ab9bc3d12a7cf59bd63cc05188d2aa5819d5d40a3ea91215760dc48eaabf->leave($__internal_a8b7ab9bc3d12a7cf59bd63cc05188d2aa5819d5d40a3ea91215760dc48eaabf_prof);

        
        $__internal_5bb705363cc1e2150f0047b02df5bcbe1ceeebc7e4c5a8e256d6c87e9294a643->leave($__internal_5bb705363cc1e2150f0047b02df5bcbe1ceeebc7e4c5a8e256d6c87e9294a643_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e50cabd73da86b34dfcee96cb48203b570a9c61ebd86693b1ec1b502dcdc3c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e50cabd73da86b34dfcee96cb48203b570a9c61ebd86693b1ec1b502dcdc3c0->enter($__internal_1e50cabd73da86b34dfcee96cb48203b570a9c61ebd86693b1ec1b502dcdc3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7bfd2a2335ec75e43c2e28d62dd17b5ad0fdb10e3f1424e3a38c11a90094d1b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bfd2a2335ec75e43c2e28d62dd17b5ad0fdb10e3f1424e3a38c11a90094d1b3->enter($__internal_7bfd2a2335ec75e43c2e28d62dd17b5ad0fdb10e3f1424e3a38c11a90094d1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7bfd2a2335ec75e43c2e28d62dd17b5ad0fdb10e3f1424e3a38c11a90094d1b3->leave($__internal_7bfd2a2335ec75e43c2e28d62dd17b5ad0fdb10e3f1424e3a38c11a90094d1b3_prof);

        
        $__internal_1e50cabd73da86b34dfcee96cb48203b570a9c61ebd86693b1ec1b502dcdc3c0->leave($__internal_1e50cabd73da86b34dfcee96cb48203b570a9c61ebd86693b1ec1b502dcdc3c0_prof);

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

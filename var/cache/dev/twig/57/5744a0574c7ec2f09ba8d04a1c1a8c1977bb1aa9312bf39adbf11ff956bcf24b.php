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
        $__internal_de986029276149e7c1723771704ea53106309791645fb0528bd482e39b75ced9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de986029276149e7c1723771704ea53106309791645fb0528bd482e39b75ced9->enter($__internal_de986029276149e7c1723771704ea53106309791645fb0528bd482e39b75ced9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_9e2a3b333bde677f9eed7c77eada2a5b6ca47485c2e54cebb9a4fbebbc81ac25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e2a3b333bde677f9eed7c77eada2a5b6ca47485c2e54cebb9a4fbebbc81ac25->enter($__internal_9e2a3b333bde677f9eed7c77eada2a5b6ca47485c2e54cebb9a4fbebbc81ac25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_de986029276149e7c1723771704ea53106309791645fb0528bd482e39b75ced9->leave($__internal_de986029276149e7c1723771704ea53106309791645fb0528bd482e39b75ced9_prof);

        
        $__internal_9e2a3b333bde677f9eed7c77eada2a5b6ca47485c2e54cebb9a4fbebbc81ac25->leave($__internal_9e2a3b333bde677f9eed7c77eada2a5b6ca47485c2e54cebb9a4fbebbc81ac25_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd26c58dd6e4464d0f71d70736d0e0a97b1fed0703bfbef954ea550bc99a8aa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd26c58dd6e4464d0f71d70736d0e0a97b1fed0703bfbef954ea550bc99a8aa1->enter($__internal_bd26c58dd6e4464d0f71d70736d0e0a97b1fed0703bfbef954ea550bc99a8aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1729584166b2dd228fb2b6d4dc101a41cb957ed86e879f21a22578d67278d24a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1729584166b2dd228fb2b6d4dc101a41cb957ed86e879f21a22578d67278d24a->enter($__internal_1729584166b2dd228fb2b6d4dc101a41cb957ed86e879f21a22578d67278d24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1729584166b2dd228fb2b6d4dc101a41cb957ed86e879f21a22578d67278d24a->leave($__internal_1729584166b2dd228fb2b6d4dc101a41cb957ed86e879f21a22578d67278d24a_prof);

        
        $__internal_bd26c58dd6e4464d0f71d70736d0e0a97b1fed0703bfbef954ea550bc99a8aa1->leave($__internal_bd26c58dd6e4464d0f71d70736d0e0a97b1fed0703bfbef954ea550bc99a8aa1_prof);

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

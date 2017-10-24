<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_84ca4b74081d5a33432a7957cfeca3c0ebb430fba6e438dadc3c187cb084ba47 extends Twig_Template
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
        $__internal_b3d6284a62e19c6ce934228c91bfffefbcea697d2793e2194359b0cec075a382 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3d6284a62e19c6ce934228c91bfffefbcea697d2793e2194359b0cec075a382->enter($__internal_b3d6284a62e19c6ce934228c91bfffefbcea697d2793e2194359b0cec075a382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_b764e610df00810186170582889bd2ce15872d8e4ea967813321ad3ef7d6fd88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b764e610df00810186170582889bd2ce15872d8e4ea967813321ad3ef7d6fd88->enter($__internal_b764e610df00810186170582889bd2ce15872d8e4ea967813321ad3ef7d6fd88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b3d6284a62e19c6ce934228c91bfffefbcea697d2793e2194359b0cec075a382->leave($__internal_b3d6284a62e19c6ce934228c91bfffefbcea697d2793e2194359b0cec075a382_prof);

        
        $__internal_b764e610df00810186170582889bd2ce15872d8e4ea967813321ad3ef7d6fd88->leave($__internal_b764e610df00810186170582889bd2ce15872d8e4ea967813321ad3ef7d6fd88_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_773983d61539d077588abe7597ae25728ae5d95e6a0e64db1a0378be23f01261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_773983d61539d077588abe7597ae25728ae5d95e6a0e64db1a0378be23f01261->enter($__internal_773983d61539d077588abe7597ae25728ae5d95e6a0e64db1a0378be23f01261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0a08831a8a97a76e109cc4bf46be0317dc7484b3d896724d139165bef9ebe2fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a08831a8a97a76e109cc4bf46be0317dc7484b3d896724d139165bef9ebe2fb->enter($__internal_0a08831a8a97a76e109cc4bf46be0317dc7484b3d896724d139165bef9ebe2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0a08831a8a97a76e109cc4bf46be0317dc7484b3d896724d139165bef9ebe2fb->leave($__internal_0a08831a8a97a76e109cc4bf46be0317dc7484b3d896724d139165bef9ebe2fb_prof);

        
        $__internal_773983d61539d077588abe7597ae25728ae5d95e6a0e64db1a0378be23f01261->leave($__internal_773983d61539d077588abe7597ae25728ae5d95e6a0e64db1a0378be23f01261_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

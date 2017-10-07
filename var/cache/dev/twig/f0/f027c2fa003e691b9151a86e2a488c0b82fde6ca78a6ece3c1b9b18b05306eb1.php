<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f23d9801af9e2c0ceca399882f364700afbdee4e4ef7b60c3f94578bc22707e8 extends Twig_Template
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
        $__internal_ea835bf1367d72a3cdbddc87800c13e64f132b294e4901e00f15bc4d1d1d83dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea835bf1367d72a3cdbddc87800c13e64f132b294e4901e00f15bc4d1d1d83dc->enter($__internal_ea835bf1367d72a3cdbddc87800c13e64f132b294e4901e00f15bc4d1d1d83dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_2e57d462eb850402b8e446483e78d20bc2f7deb027a25f5b75aab594c87e1433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e57d462eb850402b8e446483e78d20bc2f7deb027a25f5b75aab594c87e1433->enter($__internal_2e57d462eb850402b8e446483e78d20bc2f7deb027a25f5b75aab594c87e1433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ea835bf1367d72a3cdbddc87800c13e64f132b294e4901e00f15bc4d1d1d83dc->leave($__internal_ea835bf1367d72a3cdbddc87800c13e64f132b294e4901e00f15bc4d1d1d83dc_prof);

        
        $__internal_2e57d462eb850402b8e446483e78d20bc2f7deb027a25f5b75aab594c87e1433->leave($__internal_2e57d462eb850402b8e446483e78d20bc2f7deb027a25f5b75aab594c87e1433_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f7ebf1edd5c6c45fb6e0cb9ae2b7721255612f23c167c76fb5882937eb9e8e8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7ebf1edd5c6c45fb6e0cb9ae2b7721255612f23c167c76fb5882937eb9e8e8d->enter($__internal_f7ebf1edd5c6c45fb6e0cb9ae2b7721255612f23c167c76fb5882937eb9e8e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c16d436fefb6d7f5a4191b00b72379d973638a129ccf957a8b602e8572809eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16d436fefb6d7f5a4191b00b72379d973638a129ccf957a8b602e8572809eb5->enter($__internal_c16d436fefb6d7f5a4191b00b72379d973638a129ccf957a8b602e8572809eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c16d436fefb6d7f5a4191b00b72379d973638a129ccf957a8b602e8572809eb5->leave($__internal_c16d436fefb6d7f5a4191b00b72379d973638a129ccf957a8b602e8572809eb5_prof);

        
        $__internal_f7ebf1edd5c6c45fb6e0cb9ae2b7721255612f23c167c76fb5882937eb9e8e8d->leave($__internal_f7ebf1edd5c6c45fb6e0cb9ae2b7721255612f23c167c76fb5882937eb9e8e8d_prof);

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

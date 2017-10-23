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
        $__internal_66ffcbfbbdce1d8ec36426b60d3862239c28822631e39797e196197e1bd7e0f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66ffcbfbbdce1d8ec36426b60d3862239c28822631e39797e196197e1bd7e0f1->enter($__internal_66ffcbfbbdce1d8ec36426b60d3862239c28822631e39797e196197e1bd7e0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_3a7c1adb9bee7e30869c5a3deca67ba660deb477bb93c92470cd528d947afa01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a7c1adb9bee7e30869c5a3deca67ba660deb477bb93c92470cd528d947afa01->enter($__internal_3a7c1adb9bee7e30869c5a3deca67ba660deb477bb93c92470cd528d947afa01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_66ffcbfbbdce1d8ec36426b60d3862239c28822631e39797e196197e1bd7e0f1->leave($__internal_66ffcbfbbdce1d8ec36426b60d3862239c28822631e39797e196197e1bd7e0f1_prof);

        
        $__internal_3a7c1adb9bee7e30869c5a3deca67ba660deb477bb93c92470cd528d947afa01->leave($__internal_3a7c1adb9bee7e30869c5a3deca67ba660deb477bb93c92470cd528d947afa01_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c3b2148a32e2242c3e3809d4cd8253af3785f1e4f8bc2969d10d7f806de608c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3b2148a32e2242c3e3809d4cd8253af3785f1e4f8bc2969d10d7f806de608c2->enter($__internal_c3b2148a32e2242c3e3809d4cd8253af3785f1e4f8bc2969d10d7f806de608c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dfcead2bf09303934dfd687069e1929a583ccff143caa0e416e7902ec639b070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfcead2bf09303934dfd687069e1929a583ccff143caa0e416e7902ec639b070->enter($__internal_dfcead2bf09303934dfd687069e1929a583ccff143caa0e416e7902ec639b070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_dfcead2bf09303934dfd687069e1929a583ccff143caa0e416e7902ec639b070->leave($__internal_dfcead2bf09303934dfd687069e1929a583ccff143caa0e416e7902ec639b070_prof);

        
        $__internal_c3b2148a32e2242c3e3809d4cd8253af3785f1e4f8bc2969d10d7f806de608c2->leave($__internal_c3b2148a32e2242c3e3809d4cd8253af3785f1e4f8bc2969d10d7f806de608c2_prof);

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

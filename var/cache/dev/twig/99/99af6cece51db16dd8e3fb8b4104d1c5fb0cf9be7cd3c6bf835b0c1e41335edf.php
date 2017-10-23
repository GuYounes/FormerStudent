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
        $__internal_633faa62f7b6c0cc84ca236e423e2f85d21ad85e32145d90b65e5d9246018cd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_633faa62f7b6c0cc84ca236e423e2f85d21ad85e32145d90b65e5d9246018cd1->enter($__internal_633faa62f7b6c0cc84ca236e423e2f85d21ad85e32145d90b65e5d9246018cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_77251daf972e45bd0175eb9416eddb9d32dd393b9da4ef06a5b9058156376395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77251daf972e45bd0175eb9416eddb9d32dd393b9da4ef06a5b9058156376395->enter($__internal_77251daf972e45bd0175eb9416eddb9d32dd393b9da4ef06a5b9058156376395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_633faa62f7b6c0cc84ca236e423e2f85d21ad85e32145d90b65e5d9246018cd1->leave($__internal_633faa62f7b6c0cc84ca236e423e2f85d21ad85e32145d90b65e5d9246018cd1_prof);

        
        $__internal_77251daf972e45bd0175eb9416eddb9d32dd393b9da4ef06a5b9058156376395->leave($__internal_77251daf972e45bd0175eb9416eddb9d32dd393b9da4ef06a5b9058156376395_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd0bb52a2a9d98b34759ff569aeb4b088cffd54a3a70762423f2b6c93f3889ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd0bb52a2a9d98b34759ff569aeb4b088cffd54a3a70762423f2b6c93f3889ed->enter($__internal_cd0bb52a2a9d98b34759ff569aeb4b088cffd54a3a70762423f2b6c93f3889ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ff8ee3086ebe1232d87e0ed72d898b991854274263655ceae36266ff76cae4fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8ee3086ebe1232d87e0ed72d898b991854274263655ceae36266ff76cae4fd->enter($__internal_ff8ee3086ebe1232d87e0ed72d898b991854274263655ceae36266ff76cae4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ff8ee3086ebe1232d87e0ed72d898b991854274263655ceae36266ff76cae4fd->leave($__internal_ff8ee3086ebe1232d87e0ed72d898b991854274263655ceae36266ff76cae4fd_prof);

        
        $__internal_cd0bb52a2a9d98b34759ff569aeb4b088cffd54a3a70762423f2b6c93f3889ed->leave($__internal_cd0bb52a2a9d98b34759ff569aeb4b088cffd54a3a70762423f2b6c93f3889ed_prof);

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

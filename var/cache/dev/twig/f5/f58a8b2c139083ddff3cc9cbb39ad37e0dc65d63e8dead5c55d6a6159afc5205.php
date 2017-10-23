<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_dec1cc0ac201dfe96970ca5002be77745fed6335ce09a57bbdd75ecb0eb78a13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21f07e1f5c94daa7450e4bcd0914b896a1bf2678fe12bfddd26cd5e202766af6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21f07e1f5c94daa7450e4bcd0914b896a1bf2678fe12bfddd26cd5e202766af6->enter($__internal_21f07e1f5c94daa7450e4bcd0914b896a1bf2678fe12bfddd26cd5e202766af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_9b662e256334c44e70984b3c68a7c2c37588f83c9098a9f3c7886e5a405c7214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b662e256334c44e70984b3c68a7c2c37588f83c9098a9f3c7886e5a405c7214->enter($__internal_9b662e256334c44e70984b3c68a7c2c37588f83c9098a9f3c7886e5a405c7214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21f07e1f5c94daa7450e4bcd0914b896a1bf2678fe12bfddd26cd5e202766af6->leave($__internal_21f07e1f5c94daa7450e4bcd0914b896a1bf2678fe12bfddd26cd5e202766af6_prof);

        
        $__internal_9b662e256334c44e70984b3c68a7c2c37588f83c9098a9f3c7886e5a405c7214->leave($__internal_9b662e256334c44e70984b3c68a7c2c37588f83c9098a9f3c7886e5a405c7214_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_14e31b3948503c8fab963567d8f3a47e7c3a3346c391b3f872202f94ab29e648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14e31b3948503c8fab963567d8f3a47e7c3a3346c391b3f872202f94ab29e648->enter($__internal_14e31b3948503c8fab963567d8f3a47e7c3a3346c391b3f872202f94ab29e648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fe8cc1463fb45109ab6d2a15e4d6cd9c7876c9eddd28fd0be162ecd3a44a9d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe8cc1463fb45109ab6d2a15e4d6cd9c7876c9eddd28fd0be162ecd3a44a9d25->enter($__internal_fe8cc1463fb45109ab6d2a15e4d6cd9c7876c9eddd28fd0be162ecd3a44a9d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fe8cc1463fb45109ab6d2a15e4d6cd9c7876c9eddd28fd0be162ecd3a44a9d25->leave($__internal_fe8cc1463fb45109ab6d2a15e4d6cd9c7876c9eddd28fd0be162ecd3a44a9d25_prof);

        
        $__internal_14e31b3948503c8fab963567d8f3a47e7c3a3346c391b3f872202f94ab29e648->leave($__internal_14e31b3948503c8fab963567d8f3a47e7c3a3346c391b3f872202f94ab29e648_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddfb971ddc65523c3b02ac801c128623d3bb25e429f0073f3153f1fe0e21befa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddfb971ddc65523c3b02ac801c128623d3bb25e429f0073f3153f1fe0e21befa->enter($__internal_ddfb971ddc65523c3b02ac801c128623d3bb25e429f0073f3153f1fe0e21befa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f68d207a8ab6ee8f39d5d1941d52535bfc81a5a96acc7e2250594a2ecf11a7e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f68d207a8ab6ee8f39d5d1941d52535bfc81a5a96acc7e2250594a2ecf11a7e3->enter($__internal_f68d207a8ab6ee8f39d5d1941d52535bfc81a5a96acc7e2250594a2ecf11a7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_f68d207a8ab6ee8f39d5d1941d52535bfc81a5a96acc7e2250594a2ecf11a7e3->leave($__internal_f68d207a8ab6ee8f39d5d1941d52535bfc81a5a96acc7e2250594a2ecf11a7e3_prof);

        
        $__internal_ddfb971ddc65523c3b02ac801c128623d3bb25e429f0073f3153f1fe0e21befa->leave($__internal_ddfb971ddc65523c3b02ac801c128623d3bb25e429f0073f3153f1fe0e21befa_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

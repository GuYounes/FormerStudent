<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_585bffdfd2e68c7bc6b83321fa10fcd00fc1153d073b259227fe9f0246588d60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2000022fa9c19b810db27aa6fdcb5d9dbc84383e692fc6ec1d8b38384ed63ade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2000022fa9c19b810db27aa6fdcb5d9dbc84383e692fc6ec1d8b38384ed63ade->enter($__internal_2000022fa9c19b810db27aa6fdcb5d9dbc84383e692fc6ec1d8b38384ed63ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_1a0b888b8b8533f4e3234e50ba2695542a9d20ba23f13380ad99ff4332893d51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a0b888b8b8533f4e3234e50ba2695542a9d20ba23f13380ad99ff4332893d51->enter($__internal_1a0b888b8b8533f4e3234e50ba2695542a9d20ba23f13380ad99ff4332893d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2000022fa9c19b810db27aa6fdcb5d9dbc84383e692fc6ec1d8b38384ed63ade->leave($__internal_2000022fa9c19b810db27aa6fdcb5d9dbc84383e692fc6ec1d8b38384ed63ade_prof);

        
        $__internal_1a0b888b8b8533f4e3234e50ba2695542a9d20ba23f13380ad99ff4332893d51->leave($__internal_1a0b888b8b8533f4e3234e50ba2695542a9d20ba23f13380ad99ff4332893d51_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e6caa42e8ee0f9a71367c84d423f70f4321e463a85a2728a822ac5ed522287fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6caa42e8ee0f9a71367c84d423f70f4321e463a85a2728a822ac5ed522287fb->enter($__internal_e6caa42e8ee0f9a71367c84d423f70f4321e463a85a2728a822ac5ed522287fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f94b9139db04ffd67c6d13927c6fa7f24226032b2c66b68711201ed9debe5f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f94b9139db04ffd67c6d13927c6fa7f24226032b2c66b68711201ed9debe5f54->enter($__internal_f94b9139db04ffd67c6d13927c6fa7f24226032b2c66b68711201ed9debe5f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_f94b9139db04ffd67c6d13927c6fa7f24226032b2c66b68711201ed9debe5f54->leave($__internal_f94b9139db04ffd67c6d13927c6fa7f24226032b2c66b68711201ed9debe5f54_prof);

        
        $__internal_e6caa42e8ee0f9a71367c84d423f70f4321e463a85a2728a822ac5ed522287fb->leave($__internal_e6caa42e8ee0f9a71367c84d423f70f4321e463a85a2728a822ac5ed522287fb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}

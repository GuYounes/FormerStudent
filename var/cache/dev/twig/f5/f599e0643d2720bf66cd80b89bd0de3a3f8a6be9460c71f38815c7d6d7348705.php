<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_a8d29b2b357fd8f7eceb6443a2d43fa91e7e5e372acf97ad91004854a2fa7416 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_c4c65585221f1d352f6fedd06fcb970a5e91e9362f7e7b9f233549a8e853e5e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4c65585221f1d352f6fedd06fcb970a5e91e9362f7e7b9f233549a8e853e5e8->enter($__internal_c4c65585221f1d352f6fedd06fcb970a5e91e9362f7e7b9f233549a8e853e5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_062d2e969a1598665a213da684f4fd647211d4c8c29fc57293d272808c784c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_062d2e969a1598665a213da684f4fd647211d4c8c29fc57293d272808c784c41->enter($__internal_062d2e969a1598665a213da684f4fd647211d4c8c29fc57293d272808c784c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4c65585221f1d352f6fedd06fcb970a5e91e9362f7e7b9f233549a8e853e5e8->leave($__internal_c4c65585221f1d352f6fedd06fcb970a5e91e9362f7e7b9f233549a8e853e5e8_prof);

        
        $__internal_062d2e969a1598665a213da684f4fd647211d4c8c29fc57293d272808c784c41->leave($__internal_062d2e969a1598665a213da684f4fd647211d4c8c29fc57293d272808c784c41_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_57c21134c6b4ca6b0d471d3ec3282dab04e8837683d1aa721e48f753fac9ce0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57c21134c6b4ca6b0d471d3ec3282dab04e8837683d1aa721e48f753fac9ce0c->enter($__internal_57c21134c6b4ca6b0d471d3ec3282dab04e8837683d1aa721e48f753fac9ce0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e68ec30a03c403bad9252ae2cd9b85bf80ce23e9769ddccf8fc72afab28ddf25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e68ec30a03c403bad9252ae2cd9b85bf80ce23e9769ddccf8fc72afab28ddf25->enter($__internal_e68ec30a03c403bad9252ae2cd9b85bf80ce23e9769ddccf8fc72afab28ddf25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_e68ec30a03c403bad9252ae2cd9b85bf80ce23e9769ddccf8fc72afab28ddf25->leave($__internal_e68ec30a03c403bad9252ae2cd9b85bf80ce23e9769ddccf8fc72afab28ddf25_prof);

        
        $__internal_57c21134c6b4ca6b0d471d3ec3282dab04e8837683d1aa721e48f753fac9ce0c->leave($__internal_57c21134c6b4ca6b0d471d3ec3282dab04e8837683d1aa721e48f753fac9ce0c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}

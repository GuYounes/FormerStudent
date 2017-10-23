<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_a713b77e76bd2c531003ae4de0b15c3952471febb48bfe4a4d4bfc71f60455b1 extends Twig_Template
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
        $__internal_d4f627f46f91ae790626dd12158979bfd24addfb64355d17a32a770b55ac4c83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4f627f46f91ae790626dd12158979bfd24addfb64355d17a32a770b55ac4c83->enter($__internal_d4f627f46f91ae790626dd12158979bfd24addfb64355d17a32a770b55ac4c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_758cc6cbc75613182aa35510f0fa8ff4d5a25d215194cd02243e59b7fa76ea24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_758cc6cbc75613182aa35510f0fa8ff4d5a25d215194cd02243e59b7fa76ea24->enter($__internal_758cc6cbc75613182aa35510f0fa8ff4d5a25d215194cd02243e59b7fa76ea24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4f627f46f91ae790626dd12158979bfd24addfb64355d17a32a770b55ac4c83->leave($__internal_d4f627f46f91ae790626dd12158979bfd24addfb64355d17a32a770b55ac4c83_prof);

        
        $__internal_758cc6cbc75613182aa35510f0fa8ff4d5a25d215194cd02243e59b7fa76ea24->leave($__internal_758cc6cbc75613182aa35510f0fa8ff4d5a25d215194cd02243e59b7fa76ea24_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7334042779e2e9fe350cf45a3bc9bd8f2742c287f75781e7b4675096a7598b8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7334042779e2e9fe350cf45a3bc9bd8f2742c287f75781e7b4675096a7598b8b->enter($__internal_7334042779e2e9fe350cf45a3bc9bd8f2742c287f75781e7b4675096a7598b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d7eafb214dc17654418c238507ea0a432287a9eb531ab0a00766477c553bc4c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7eafb214dc17654418c238507ea0a432287a9eb531ab0a00766477c553bc4c9->enter($__internal_d7eafb214dc17654418c238507ea0a432287a9eb531ab0a00766477c553bc4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_d7eafb214dc17654418c238507ea0a432287a9eb531ab0a00766477c553bc4c9->leave($__internal_d7eafb214dc17654418c238507ea0a432287a9eb531ab0a00766477c553bc4c9_prof);

        
        $__internal_7334042779e2e9fe350cf45a3bc9bd8f2742c287f75781e7b4675096a7598b8b->leave($__internal_7334042779e2e9fe350cf45a3bc9bd8f2742c287f75781e7b4675096a7598b8b_prof);

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

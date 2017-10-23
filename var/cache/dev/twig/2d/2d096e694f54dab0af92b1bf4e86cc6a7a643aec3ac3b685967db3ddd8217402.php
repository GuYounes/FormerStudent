<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_7f5b353c0296614d5dea84086d15609ffd15d7db87f7156935619bd5ba2733ca extends Twig_Template
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
        $__internal_adc89b3329c0cb3270df6bb4d3c68c93484d7d80fc6dc3b13c137fec66cd976c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adc89b3329c0cb3270df6bb4d3c68c93484d7d80fc6dc3b13c137fec66cd976c->enter($__internal_adc89b3329c0cb3270df6bb4d3c68c93484d7d80fc6dc3b13c137fec66cd976c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_69f637b0fc656762c8d09b22f1e7e68796d5468528b41df6f17ebac2dc338757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f637b0fc656762c8d09b22f1e7e68796d5468528b41df6f17ebac2dc338757->enter($__internal_69f637b0fc656762c8d09b22f1e7e68796d5468528b41df6f17ebac2dc338757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adc89b3329c0cb3270df6bb4d3c68c93484d7d80fc6dc3b13c137fec66cd976c->leave($__internal_adc89b3329c0cb3270df6bb4d3c68c93484d7d80fc6dc3b13c137fec66cd976c_prof);

        
        $__internal_69f637b0fc656762c8d09b22f1e7e68796d5468528b41df6f17ebac2dc338757->leave($__internal_69f637b0fc656762c8d09b22f1e7e68796d5468528b41df6f17ebac2dc338757_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_57a6015095f0bc50790d88b85a5454aabc505c5360d1c88003540d0281a3e0f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57a6015095f0bc50790d88b85a5454aabc505c5360d1c88003540d0281a3e0f8->enter($__internal_57a6015095f0bc50790d88b85a5454aabc505c5360d1c88003540d0281a3e0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ff4a5543a805d4f74908fe7ad331616f9f74d5ae76b62b920e51b5c442f69dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff4a5543a805d4f74908fe7ad331616f9f74d5ae76b62b920e51b5c442f69dc3->enter($__internal_ff4a5543a805d4f74908fe7ad331616f9f74d5ae76b62b920e51b5c442f69dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_ff4a5543a805d4f74908fe7ad331616f9f74d5ae76b62b920e51b5c442f69dc3->leave($__internal_ff4a5543a805d4f74908fe7ad331616f9f74d5ae76b62b920e51b5c442f69dc3_prof);

        
        $__internal_57a6015095f0bc50790d88b85a5454aabc505c5360d1c88003540d0281a3e0f8->leave($__internal_57a6015095f0bc50790d88b85a5454aabc505c5360d1c88003540d0281a3e0f8_prof);

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

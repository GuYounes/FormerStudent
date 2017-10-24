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
        $__internal_7aba6881fbf5ef843ce6640e02bb2c952a41e911470e08fcecdebfc3ce4bfa65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aba6881fbf5ef843ce6640e02bb2c952a41e911470e08fcecdebfc3ce4bfa65->enter($__internal_7aba6881fbf5ef843ce6640e02bb2c952a41e911470e08fcecdebfc3ce4bfa65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_3c96cd6c2f0d1951651f26455f78f4b6176b412d7509784423a63a681d1bca62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c96cd6c2f0d1951651f26455f78f4b6176b412d7509784423a63a681d1bca62->enter($__internal_3c96cd6c2f0d1951651f26455f78f4b6176b412d7509784423a63a681d1bca62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aba6881fbf5ef843ce6640e02bb2c952a41e911470e08fcecdebfc3ce4bfa65->leave($__internal_7aba6881fbf5ef843ce6640e02bb2c952a41e911470e08fcecdebfc3ce4bfa65_prof);

        
        $__internal_3c96cd6c2f0d1951651f26455f78f4b6176b412d7509784423a63a681d1bca62->leave($__internal_3c96cd6c2f0d1951651f26455f78f4b6176b412d7509784423a63a681d1bca62_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_349879ab385b073683d67fabd60bb381d9ceffd69de6a8be6f765999467bd52f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_349879ab385b073683d67fabd60bb381d9ceffd69de6a8be6f765999467bd52f->enter($__internal_349879ab385b073683d67fabd60bb381d9ceffd69de6a8be6f765999467bd52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_061e9764177255601d47bbec66e41c9870d9861206db3ca3064d8f9d6f2e4232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_061e9764177255601d47bbec66e41c9870d9861206db3ca3064d8f9d6f2e4232->enter($__internal_061e9764177255601d47bbec66e41c9870d9861206db3ca3064d8f9d6f2e4232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_061e9764177255601d47bbec66e41c9870d9861206db3ca3064d8f9d6f2e4232->leave($__internal_061e9764177255601d47bbec66e41c9870d9861206db3ca3064d8f9d6f2e4232_prof);

        
        $__internal_349879ab385b073683d67fabd60bb381d9ceffd69de6a8be6f765999467bd52f->leave($__internal_349879ab385b073683d67fabd60bb381d9ceffd69de6a8be6f765999467bd52f_prof);

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

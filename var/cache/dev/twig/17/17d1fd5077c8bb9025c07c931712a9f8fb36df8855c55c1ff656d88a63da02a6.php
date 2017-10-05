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
        $__internal_80b43a4207e8c9fd94a9968980d74f58ac66bf8c988d57aae20f3e1c9741b63f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b43a4207e8c9fd94a9968980d74f58ac66bf8c988d57aae20f3e1c9741b63f->enter($__internal_80b43a4207e8c9fd94a9968980d74f58ac66bf8c988d57aae20f3e1c9741b63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_5ef12cd76b60830d3cdcd628b4623c53a76600a1fd3479c1fbeaa5e003ae7c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ef12cd76b60830d3cdcd628b4623c53a76600a1fd3479c1fbeaa5e003ae7c69->enter($__internal_5ef12cd76b60830d3cdcd628b4623c53a76600a1fd3479c1fbeaa5e003ae7c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80b43a4207e8c9fd94a9968980d74f58ac66bf8c988d57aae20f3e1c9741b63f->leave($__internal_80b43a4207e8c9fd94a9968980d74f58ac66bf8c988d57aae20f3e1c9741b63f_prof);

        
        $__internal_5ef12cd76b60830d3cdcd628b4623c53a76600a1fd3479c1fbeaa5e003ae7c69->leave($__internal_5ef12cd76b60830d3cdcd628b4623c53a76600a1fd3479c1fbeaa5e003ae7c69_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_615c95694f3355a176b84064763048891c8e066214c65395c7da0011de3eb532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_615c95694f3355a176b84064763048891c8e066214c65395c7da0011de3eb532->enter($__internal_615c95694f3355a176b84064763048891c8e066214c65395c7da0011de3eb532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_afaabc059953752e16488323013209332b6a870cb9f237a661c97538c9914f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afaabc059953752e16488323013209332b6a870cb9f237a661c97538c9914f53->enter($__internal_afaabc059953752e16488323013209332b6a870cb9f237a661c97538c9914f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_afaabc059953752e16488323013209332b6a870cb9f237a661c97538c9914f53->leave($__internal_afaabc059953752e16488323013209332b6a870cb9f237a661c97538c9914f53_prof);

        
        $__internal_615c95694f3355a176b84064763048891c8e066214c65395c7da0011de3eb532->leave($__internal_615c95694f3355a176b84064763048891c8e066214c65395c7da0011de3eb532_prof);

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
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}

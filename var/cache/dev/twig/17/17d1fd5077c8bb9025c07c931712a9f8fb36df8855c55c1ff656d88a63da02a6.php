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
        $__internal_ed9f335fe75cf7c2b959fe45c5f5b8e6600d8e60bb211e834f19deac61d7ae6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed9f335fe75cf7c2b959fe45c5f5b8e6600d8e60bb211e834f19deac61d7ae6b->enter($__internal_ed9f335fe75cf7c2b959fe45c5f5b8e6600d8e60bb211e834f19deac61d7ae6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_5dec247b509cd976f211abb8193f8913699e49abe09bb18ee5f174003b156658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dec247b509cd976f211abb8193f8913699e49abe09bb18ee5f174003b156658->enter($__internal_5dec247b509cd976f211abb8193f8913699e49abe09bb18ee5f174003b156658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed9f335fe75cf7c2b959fe45c5f5b8e6600d8e60bb211e834f19deac61d7ae6b->leave($__internal_ed9f335fe75cf7c2b959fe45c5f5b8e6600d8e60bb211e834f19deac61d7ae6b_prof);

        
        $__internal_5dec247b509cd976f211abb8193f8913699e49abe09bb18ee5f174003b156658->leave($__internal_5dec247b509cd976f211abb8193f8913699e49abe09bb18ee5f174003b156658_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3bb306fb0312ca343daedccdb5bb878c641e8789a606b1399bb3a93e667dd0fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bb306fb0312ca343daedccdb5bb878c641e8789a606b1399bb3a93e667dd0fe->enter($__internal_3bb306fb0312ca343daedccdb5bb878c641e8789a606b1399bb3a93e667dd0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_adb3c99efa7c53b3a1796f1a66eba480c59c8ffa6f66f2862f0d5dd5695c726c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb3c99efa7c53b3a1796f1a66eba480c59c8ffa6f66f2862f0d5dd5695c726c->enter($__internal_adb3c99efa7c53b3a1796f1a66eba480c59c8ffa6f66f2862f0d5dd5695c726c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_adb3c99efa7c53b3a1796f1a66eba480c59c8ffa6f66f2862f0d5dd5695c726c->leave($__internal_adb3c99efa7c53b3a1796f1a66eba480c59c8ffa6f66f2862f0d5dd5695c726c_prof);

        
        $__internal_3bb306fb0312ca343daedccdb5bb878c641e8789a606b1399bb3a93e667dd0fe->leave($__internal_3bb306fb0312ca343daedccdb5bb878c641e8789a606b1399bb3a93e667dd0fe_prof);

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

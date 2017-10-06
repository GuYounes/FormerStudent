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
        $__internal_f1061c3acdfb742ce3e1a631307965ede9e22eb598927b6379f2027fb5abe6a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1061c3acdfb742ce3e1a631307965ede9e22eb598927b6379f2027fb5abe6a0->enter($__internal_f1061c3acdfb742ce3e1a631307965ede9e22eb598927b6379f2027fb5abe6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ad550df67ba9d525e60e15d7ec7e648aea82c98d8574a994a6f31a75751424a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad550df67ba9d525e60e15d7ec7e648aea82c98d8574a994a6f31a75751424a8->enter($__internal_ad550df67ba9d525e60e15d7ec7e648aea82c98d8574a994a6f31a75751424a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1061c3acdfb742ce3e1a631307965ede9e22eb598927b6379f2027fb5abe6a0->leave($__internal_f1061c3acdfb742ce3e1a631307965ede9e22eb598927b6379f2027fb5abe6a0_prof);

        
        $__internal_ad550df67ba9d525e60e15d7ec7e648aea82c98d8574a994a6f31a75751424a8->leave($__internal_ad550df67ba9d525e60e15d7ec7e648aea82c98d8574a994a6f31a75751424a8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2bbbcbe9d64b1e7fce579e5b05730457244fc80f9aa311451c2f6d7170cf5c22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bbbcbe9d64b1e7fce579e5b05730457244fc80f9aa311451c2f6d7170cf5c22->enter($__internal_2bbbcbe9d64b1e7fce579e5b05730457244fc80f9aa311451c2f6d7170cf5c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5d47e549d1e64b52deb7b4645e26652faa6c4509494aca7725e3d04feba64b2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d47e549d1e64b52deb7b4645e26652faa6c4509494aca7725e3d04feba64b2e->enter($__internal_5d47e549d1e64b52deb7b4645e26652faa6c4509494aca7725e3d04feba64b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_5d47e549d1e64b52deb7b4645e26652faa6c4509494aca7725e3d04feba64b2e->leave($__internal_5d47e549d1e64b52deb7b4645e26652faa6c4509494aca7725e3d04feba64b2e_prof);

        
        $__internal_2bbbcbe9d64b1e7fce579e5b05730457244fc80f9aa311451c2f6d7170cf5c22->leave($__internal_2bbbcbe9d64b1e7fce579e5b05730457244fc80f9aa311451c2f6d7170cf5c22_prof);

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

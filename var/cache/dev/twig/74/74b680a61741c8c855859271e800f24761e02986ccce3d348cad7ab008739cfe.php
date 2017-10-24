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
        $__internal_3da4155e8bc10309d9fee225a97bd75307dea1cd39bd445b37f486522972530f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3da4155e8bc10309d9fee225a97bd75307dea1cd39bd445b37f486522972530f->enter($__internal_3da4155e8bc10309d9fee225a97bd75307dea1cd39bd445b37f486522972530f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_23142e3b14d0e8fb950d83ebb6a2c0d22095b71eff59130aa754f90d66a981b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23142e3b14d0e8fb950d83ebb6a2c0d22095b71eff59130aa754f90d66a981b0->enter($__internal_23142e3b14d0e8fb950d83ebb6a2c0d22095b71eff59130aa754f90d66a981b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3da4155e8bc10309d9fee225a97bd75307dea1cd39bd445b37f486522972530f->leave($__internal_3da4155e8bc10309d9fee225a97bd75307dea1cd39bd445b37f486522972530f_prof);

        
        $__internal_23142e3b14d0e8fb950d83ebb6a2c0d22095b71eff59130aa754f90d66a981b0->leave($__internal_23142e3b14d0e8fb950d83ebb6a2c0d22095b71eff59130aa754f90d66a981b0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2bf8d54b26a93e62c108b47b5b385502849da290b40db580891eb6dc648e6c0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bf8d54b26a93e62c108b47b5b385502849da290b40db580891eb6dc648e6c0c->enter($__internal_2bf8d54b26a93e62c108b47b5b385502849da290b40db580891eb6dc648e6c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cbae34a56a031ed0c2c754f4e9635d2089dfb874c9a4272b5c84714152156141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbae34a56a031ed0c2c754f4e9635d2089dfb874c9a4272b5c84714152156141->enter($__internal_cbae34a56a031ed0c2c754f4e9635d2089dfb874c9a4272b5c84714152156141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_cbae34a56a031ed0c2c754f4e9635d2089dfb874c9a4272b5c84714152156141->leave($__internal_cbae34a56a031ed0c2c754f4e9635d2089dfb874c9a4272b5c84714152156141_prof);

        
        $__internal_2bf8d54b26a93e62c108b47b5b385502849da290b40db580891eb6dc648e6c0c->leave($__internal_2bf8d54b26a93e62c108b47b5b385502849da290b40db580891eb6dc648e6c0c_prof);

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

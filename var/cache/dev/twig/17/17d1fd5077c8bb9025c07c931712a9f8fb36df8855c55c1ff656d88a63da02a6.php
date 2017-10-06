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
        $__internal_bf859ba369b9655903f2ac44e4fe06f9689daa30265f8c73a8dcfc2e74ded59a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf859ba369b9655903f2ac44e4fe06f9689daa30265f8c73a8dcfc2e74ded59a->enter($__internal_bf859ba369b9655903f2ac44e4fe06f9689daa30265f8c73a8dcfc2e74ded59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_c36b7452186920ef29bc8666be738562ff39b94158c17729325999343122cc01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36b7452186920ef29bc8666be738562ff39b94158c17729325999343122cc01->enter($__internal_c36b7452186920ef29bc8666be738562ff39b94158c17729325999343122cc01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf859ba369b9655903f2ac44e4fe06f9689daa30265f8c73a8dcfc2e74ded59a->leave($__internal_bf859ba369b9655903f2ac44e4fe06f9689daa30265f8c73a8dcfc2e74ded59a_prof);

        
        $__internal_c36b7452186920ef29bc8666be738562ff39b94158c17729325999343122cc01->leave($__internal_c36b7452186920ef29bc8666be738562ff39b94158c17729325999343122cc01_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ecd5642850b0db36e2cf3bd500c70e7ab53c705347072288a559abe191baff39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecd5642850b0db36e2cf3bd500c70e7ab53c705347072288a559abe191baff39->enter($__internal_ecd5642850b0db36e2cf3bd500c70e7ab53c705347072288a559abe191baff39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e61b3a8a50bce15219dedb2edb48f77c8ab0bf56aa8ed87fea5c7870674d405d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e61b3a8a50bce15219dedb2edb48f77c8ab0bf56aa8ed87fea5c7870674d405d->enter($__internal_e61b3a8a50bce15219dedb2edb48f77c8ab0bf56aa8ed87fea5c7870674d405d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_e61b3a8a50bce15219dedb2edb48f77c8ab0bf56aa8ed87fea5c7870674d405d->leave($__internal_e61b3a8a50bce15219dedb2edb48f77c8ab0bf56aa8ed87fea5c7870674d405d_prof);

        
        $__internal_ecd5642850b0db36e2cf3bd500c70e7ab53c705347072288a559abe191baff39->leave($__internal_ecd5642850b0db36e2cf3bd500c70e7ab53c705347072288a559abe191baff39_prof);

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

<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_10e9843ed85398beedaf7bc94c03747a8ab7d3e50f53c22131b41126c12132dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b144f41aa5e2a18d154c9ca2579b9bdc44ac43149b35643980b150dc4a775f08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b144f41aa5e2a18d154c9ca2579b9bdc44ac43149b35643980b150dc4a775f08->enter($__internal_b144f41aa5e2a18d154c9ca2579b9bdc44ac43149b35643980b150dc4a775f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c02250bde75df5c466cbfdee77f0a6edd52c5ad35f6c7666140a57346b389155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c02250bde75df5c466cbfdee77f0a6edd52c5ad35f6c7666140a57346b389155->enter($__internal_c02250bde75df5c466cbfdee77f0a6edd52c5ad35f6c7666140a57346b389155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b144f41aa5e2a18d154c9ca2579b9bdc44ac43149b35643980b150dc4a775f08->leave($__internal_b144f41aa5e2a18d154c9ca2579b9bdc44ac43149b35643980b150dc4a775f08_prof);

        
        $__internal_c02250bde75df5c466cbfdee77f0a6edd52c5ad35f6c7666140a57346b389155->leave($__internal_c02250bde75df5c466cbfdee77f0a6edd52c5ad35f6c7666140a57346b389155_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5d6efa2ea181c2021b1183ec7765d6443094f201458795ca868654dbf3ea5a4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d6efa2ea181c2021b1183ec7765d6443094f201458795ca868654dbf3ea5a4c->enter($__internal_5d6efa2ea181c2021b1183ec7765d6443094f201458795ca868654dbf3ea5a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cd99165a8735688b9c12aaf616f2a8fba0567bea2a868a817d2b4fb73ed6208b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd99165a8735688b9c12aaf616f2a8fba0567bea2a868a817d2b4fb73ed6208b->enter($__internal_cd99165a8735688b9c12aaf616f2a8fba0567bea2a868a817d2b4fb73ed6208b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_cd99165a8735688b9c12aaf616f2a8fba0567bea2a868a817d2b4fb73ed6208b->leave($__internal_cd99165a8735688b9c12aaf616f2a8fba0567bea2a868a817d2b4fb73ed6208b_prof);

        
        $__internal_5d6efa2ea181c2021b1183ec7765d6443094f201458795ca868654dbf3ea5a4c->leave($__internal_5d6efa2ea181c2021b1183ec7765d6443094f201458795ca868654dbf3ea5a4c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_568e081206ffe7e179d78f100965e832fa3a28a51f0f2b9bcffc28dc6ba5a8f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_568e081206ffe7e179d78f100965e832fa3a28a51f0f2b9bcffc28dc6ba5a8f8->enter($__internal_568e081206ffe7e179d78f100965e832fa3a28a51f0f2b9bcffc28dc6ba5a8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3b25856c9761c9a8bfe0a2a45bd2afb53ea2cf7617a4c5ba5e88f73e0fbe7556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b25856c9761c9a8bfe0a2a45bd2afb53ea2cf7617a4c5ba5e88f73e0fbe7556->enter($__internal_3b25856c9761c9a8bfe0a2a45bd2afb53ea2cf7617a4c5ba5e88f73e0fbe7556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3b25856c9761c9a8bfe0a2a45bd2afb53ea2cf7617a4c5ba5e88f73e0fbe7556->leave($__internal_3b25856c9761c9a8bfe0a2a45bd2afb53ea2cf7617a4c5ba5e88f73e0fbe7556_prof);

        
        $__internal_568e081206ffe7e179d78f100965e832fa3a28a51f0f2b9bcffc28dc6ba5a8f8->leave($__internal_568e081206ffe7e179d78f100965e832fa3a28a51f0f2b9bcffc28dc6ba5a8f8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_96f7a3c8c2818a973caea5f38eef2561385d237e3722b2892bde9bcc6903c2d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96f7a3c8c2818a973caea5f38eef2561385d237e3722b2892bde9bcc6903c2d4->enter($__internal_96f7a3c8c2818a973caea5f38eef2561385d237e3722b2892bde9bcc6903c2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b6793c227ff82085895872c19b3fc2ca004737dbd4abf22b3c7931c7ddbf16f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6793c227ff82085895872c19b3fc2ca004737dbd4abf22b3c7931c7ddbf16f3->enter($__internal_b6793c227ff82085895872c19b3fc2ca004737dbd4abf22b3c7931c7ddbf16f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_b6793c227ff82085895872c19b3fc2ca004737dbd4abf22b3c7931c7ddbf16f3->leave($__internal_b6793c227ff82085895872c19b3fc2ca004737dbd4abf22b3c7931c7ddbf16f3_prof);

        
        $__internal_96f7a3c8c2818a973caea5f38eef2561385d237e3722b2892bde9bcc6903c2d4->leave($__internal_96f7a3c8c2818a973caea5f38eef2561385d237e3722b2892bde9bcc6903c2d4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}

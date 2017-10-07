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
        $__internal_eb68697d4c20909fd6c40a507b92850ee29870ab3b6dba6a858a1302ec11de4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb68697d4c20909fd6c40a507b92850ee29870ab3b6dba6a858a1302ec11de4f->enter($__internal_eb68697d4c20909fd6c40a507b92850ee29870ab3b6dba6a858a1302ec11de4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_55d23e50b0d79f944d7c506384e923322769a7a9a0c63019d6ed5e3f8ef22245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55d23e50b0d79f944d7c506384e923322769a7a9a0c63019d6ed5e3f8ef22245->enter($__internal_55d23e50b0d79f944d7c506384e923322769a7a9a0c63019d6ed5e3f8ef22245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb68697d4c20909fd6c40a507b92850ee29870ab3b6dba6a858a1302ec11de4f->leave($__internal_eb68697d4c20909fd6c40a507b92850ee29870ab3b6dba6a858a1302ec11de4f_prof);

        
        $__internal_55d23e50b0d79f944d7c506384e923322769a7a9a0c63019d6ed5e3f8ef22245->leave($__internal_55d23e50b0d79f944d7c506384e923322769a7a9a0c63019d6ed5e3f8ef22245_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_975bacad45bbd158fcf9fa6bfbc221a6acf5d21d640813101a65b7f575ceff4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_975bacad45bbd158fcf9fa6bfbc221a6acf5d21d640813101a65b7f575ceff4c->enter($__internal_975bacad45bbd158fcf9fa6bfbc221a6acf5d21d640813101a65b7f575ceff4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6c422598d2764e793d36a998965d0afe4d5f21afcedecceb93fe2c1ce7af6115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c422598d2764e793d36a998965d0afe4d5f21afcedecceb93fe2c1ce7af6115->enter($__internal_6c422598d2764e793d36a998965d0afe4d5f21afcedecceb93fe2c1ce7af6115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6c422598d2764e793d36a998965d0afe4d5f21afcedecceb93fe2c1ce7af6115->leave($__internal_6c422598d2764e793d36a998965d0afe4d5f21afcedecceb93fe2c1ce7af6115_prof);

        
        $__internal_975bacad45bbd158fcf9fa6bfbc221a6acf5d21d640813101a65b7f575ceff4c->leave($__internal_975bacad45bbd158fcf9fa6bfbc221a6acf5d21d640813101a65b7f575ceff4c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0e58cbb505a808a78541cf049e0d14693799c3618dead6fce70a053bf9efc203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e58cbb505a808a78541cf049e0d14693799c3618dead6fce70a053bf9efc203->enter($__internal_0e58cbb505a808a78541cf049e0d14693799c3618dead6fce70a053bf9efc203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_afe9654630e755322764d794587a6ed791d291732ec4b87d61cf73a7419b8de7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe9654630e755322764d794587a6ed791d291732ec4b87d61cf73a7419b8de7->enter($__internal_afe9654630e755322764d794587a6ed791d291732ec4b87d61cf73a7419b8de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_afe9654630e755322764d794587a6ed791d291732ec4b87d61cf73a7419b8de7->leave($__internal_afe9654630e755322764d794587a6ed791d291732ec4b87d61cf73a7419b8de7_prof);

        
        $__internal_0e58cbb505a808a78541cf049e0d14693799c3618dead6fce70a053bf9efc203->leave($__internal_0e58cbb505a808a78541cf049e0d14693799c3618dead6fce70a053bf9efc203_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4fb48c34be80d8514b69804086c94e6b35e45eeff4e08172495d5a36f1e7540d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fb48c34be80d8514b69804086c94e6b35e45eeff4e08172495d5a36f1e7540d->enter($__internal_4fb48c34be80d8514b69804086c94e6b35e45eeff4e08172495d5a36f1e7540d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_42bff09f3eda504ae1e74e77235608bbcab7f6262df17862c7e510dace2e85b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42bff09f3eda504ae1e74e77235608bbcab7f6262df17862c7e510dace2e85b7->enter($__internal_42bff09f3eda504ae1e74e77235608bbcab7f6262df17862c7e510dace2e85b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_42bff09f3eda504ae1e74e77235608bbcab7f6262df17862c7e510dace2e85b7->leave($__internal_42bff09f3eda504ae1e74e77235608bbcab7f6262df17862c7e510dace2e85b7_prof);

        
        $__internal_4fb48c34be80d8514b69804086c94e6b35e45eeff4e08172495d5a36f1e7540d->leave($__internal_4fb48c34be80d8514b69804086c94e6b35e45eeff4e08172495d5a36f1e7540d_prof);

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

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
        $__internal_ccd5a2ea379f67edd9bcd851173d4eadfc8e533c4ab9964ee9428eb95a537d41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccd5a2ea379f67edd9bcd851173d4eadfc8e533c4ab9964ee9428eb95a537d41->enter($__internal_ccd5a2ea379f67edd9bcd851173d4eadfc8e533c4ab9964ee9428eb95a537d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2ea82921f4e9e651ab4c30a4e23d78bfe2603ff78bc5e90ec14323c3f63cb896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea82921f4e9e651ab4c30a4e23d78bfe2603ff78bc5e90ec14323c3f63cb896->enter($__internal_2ea82921f4e9e651ab4c30a4e23d78bfe2603ff78bc5e90ec14323c3f63cb896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccd5a2ea379f67edd9bcd851173d4eadfc8e533c4ab9964ee9428eb95a537d41->leave($__internal_ccd5a2ea379f67edd9bcd851173d4eadfc8e533c4ab9964ee9428eb95a537d41_prof);

        
        $__internal_2ea82921f4e9e651ab4c30a4e23d78bfe2603ff78bc5e90ec14323c3f63cb896->leave($__internal_2ea82921f4e9e651ab4c30a4e23d78bfe2603ff78bc5e90ec14323c3f63cb896_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_11fc759179aa5b00088502e176d803acca1d29502e268027a76db4312958bc9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11fc759179aa5b00088502e176d803acca1d29502e268027a76db4312958bc9a->enter($__internal_11fc759179aa5b00088502e176d803acca1d29502e268027a76db4312958bc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8af2ab6e180108098f715c9c0f047524109c596600773ce2b3019df25b7b8ed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8af2ab6e180108098f715c9c0f047524109c596600773ce2b3019df25b7b8ed8->enter($__internal_8af2ab6e180108098f715c9c0f047524109c596600773ce2b3019df25b7b8ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8af2ab6e180108098f715c9c0f047524109c596600773ce2b3019df25b7b8ed8->leave($__internal_8af2ab6e180108098f715c9c0f047524109c596600773ce2b3019df25b7b8ed8_prof);

        
        $__internal_11fc759179aa5b00088502e176d803acca1d29502e268027a76db4312958bc9a->leave($__internal_11fc759179aa5b00088502e176d803acca1d29502e268027a76db4312958bc9a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0fb1522850bef2c0dfbf4a0b4ea29be214ceb9d38e13840345950b58469b90d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fb1522850bef2c0dfbf4a0b4ea29be214ceb9d38e13840345950b58469b90d2->enter($__internal_0fb1522850bef2c0dfbf4a0b4ea29be214ceb9d38e13840345950b58469b90d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_340600a4e5129c8656718bf9116f4046d4168e09d3900f6a5add41be0ce6fedf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_340600a4e5129c8656718bf9116f4046d4168e09d3900f6a5add41be0ce6fedf->enter($__internal_340600a4e5129c8656718bf9116f4046d4168e09d3900f6a5add41be0ce6fedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_340600a4e5129c8656718bf9116f4046d4168e09d3900f6a5add41be0ce6fedf->leave($__internal_340600a4e5129c8656718bf9116f4046d4168e09d3900f6a5add41be0ce6fedf_prof);

        
        $__internal_0fb1522850bef2c0dfbf4a0b4ea29be214ceb9d38e13840345950b58469b90d2->leave($__internal_0fb1522850bef2c0dfbf4a0b4ea29be214ceb9d38e13840345950b58469b90d2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_de40e5e17e70391d8a36dfcd51e313a05ee165537b25168d82c4aa0240252146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de40e5e17e70391d8a36dfcd51e313a05ee165537b25168d82c4aa0240252146->enter($__internal_de40e5e17e70391d8a36dfcd51e313a05ee165537b25168d82c4aa0240252146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_de528af3380ac84a764c649c77022c73c044669dc12bc85c3b05402d17a266e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de528af3380ac84a764c649c77022c73c044669dc12bc85c3b05402d17a266e6->enter($__internal_de528af3380ac84a764c649c77022c73c044669dc12bc85c3b05402d17a266e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_de528af3380ac84a764c649c77022c73c044669dc12bc85c3b05402d17a266e6->leave($__internal_de528af3380ac84a764c649c77022c73c044669dc12bc85c3b05402d17a266e6_prof);

        
        $__internal_de40e5e17e70391d8a36dfcd51e313a05ee165537b25168d82c4aa0240252146->leave($__internal_de40e5e17e70391d8a36dfcd51e313a05ee165537b25168d82c4aa0240252146_prof);

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

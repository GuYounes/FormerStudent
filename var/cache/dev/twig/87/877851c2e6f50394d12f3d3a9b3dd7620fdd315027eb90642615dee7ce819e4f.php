<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_3baa7dd8ef44c66368de3566c100e1a5f4e370d7b52cd43d9d26a1392f9504c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_11f639b00600bb936fea36917b8d260a0f5da959df849c28adcd6a45e2525cd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11f639b00600bb936fea36917b8d260a0f5da959df849c28adcd6a45e2525cd1->enter($__internal_11f639b00600bb936fea36917b8d260a0f5da959df849c28adcd6a45e2525cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_96e51c70a0ed3038c1748618d6b87c2f032bb00f88395c849603cd344bf2321e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e51c70a0ed3038c1748618d6b87c2f032bb00f88395c849603cd344bf2321e->enter($__internal_96e51c70a0ed3038c1748618d6b87c2f032bb00f88395c849603cd344bf2321e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11f639b00600bb936fea36917b8d260a0f5da959df849c28adcd6a45e2525cd1->leave($__internal_11f639b00600bb936fea36917b8d260a0f5da959df849c28adcd6a45e2525cd1_prof);

        
        $__internal_96e51c70a0ed3038c1748618d6b87c2f032bb00f88395c849603cd344bf2321e->leave($__internal_96e51c70a0ed3038c1748618d6b87c2f032bb00f88395c849603cd344bf2321e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a2e5e4da18a1eec3952ec8070d49cb5944735c5a61b628e8e431e86bb25bf64a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2e5e4da18a1eec3952ec8070d49cb5944735c5a61b628e8e431e86bb25bf64a->enter($__internal_a2e5e4da18a1eec3952ec8070d49cb5944735c5a61b628e8e431e86bb25bf64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_abb1f8c742bf6329c53c4ec3f1812289a1ec2cd3b6de4cbb817b2c467eb7b4f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abb1f8c742bf6329c53c4ec3f1812289a1ec2cd3b6de4cbb817b2c467eb7b4f3->enter($__internal_abb1f8c742bf6329c53c4ec3f1812289a1ec2cd3b6de4cbb817b2c467eb7b4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_abb1f8c742bf6329c53c4ec3f1812289a1ec2cd3b6de4cbb817b2c467eb7b4f3->leave($__internal_abb1f8c742bf6329c53c4ec3f1812289a1ec2cd3b6de4cbb817b2c467eb7b4f3_prof);

        
        $__internal_a2e5e4da18a1eec3952ec8070d49cb5944735c5a61b628e8e431e86bb25bf64a->leave($__internal_a2e5e4da18a1eec3952ec8070d49cb5944735c5a61b628e8e431e86bb25bf64a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6e1544567ba190639b2f4630aa79c71db2a74b0103e55740aa37e9d11d03d6ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e1544567ba190639b2f4630aa79c71db2a74b0103e55740aa37e9d11d03d6ba->enter($__internal_6e1544567ba190639b2f4630aa79c71db2a74b0103e55740aa37e9d11d03d6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_44e027f64cf1d1af9bf414115fac87963c6e68428e55e9225b3442dbe90072e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e027f64cf1d1af9bf414115fac87963c6e68428e55e9225b3442dbe90072e8->enter($__internal_44e027f64cf1d1af9bf414115fac87963c6e68428e55e9225b3442dbe90072e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_44e027f64cf1d1af9bf414115fac87963c6e68428e55e9225b3442dbe90072e8->leave($__internal_44e027f64cf1d1af9bf414115fac87963c6e68428e55e9225b3442dbe90072e8_prof);

        
        $__internal_6e1544567ba190639b2f4630aa79c71db2a74b0103e55740aa37e9d11d03d6ba->leave($__internal_6e1544567ba190639b2f4630aa79c71db2a74b0103e55740aa37e9d11d03d6ba_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0dbc5d6e2c65d43d1e0ec186ce591e07b2a65ec2aa39e08fc4c1f09354210144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dbc5d6e2c65d43d1e0ec186ce591e07b2a65ec2aa39e08fc4c1f09354210144->enter($__internal_0dbc5d6e2c65d43d1e0ec186ce591e07b2a65ec2aa39e08fc4c1f09354210144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8a4e4ea7cb29868789773a90428f4c2cf0b1efe41a5f66349d07f704269fbc46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a4e4ea7cb29868789773a90428f4c2cf0b1efe41a5f66349d07f704269fbc46->enter($__internal_8a4e4ea7cb29868789773a90428f4c2cf0b1efe41a5f66349d07f704269fbc46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8a4e4ea7cb29868789773a90428f4c2cf0b1efe41a5f66349d07f704269fbc46->leave($__internal_8a4e4ea7cb29868789773a90428f4c2cf0b1efe41a5f66349d07f704269fbc46_prof);

        
        $__internal_0dbc5d6e2c65d43d1e0ec186ce591e07b2a65ec2aa39e08fc4c1f09354210144->leave($__internal_0dbc5d6e2c65d43d1e0ec186ce591e07b2a65ec2aa39e08fc4c1f09354210144_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

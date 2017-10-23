<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_8de3cfb9ac191b4714aa7aeba994d946182c1bb31bf74ff0a06e7d8387bb2a98 extends Twig_Template
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
        $__internal_26d7fff656b61d1e2eb77fe7ec76c097d09028e2229c7143e0e9082429b5711d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26d7fff656b61d1e2eb77fe7ec76c097d09028e2229c7143e0e9082429b5711d->enter($__internal_26d7fff656b61d1e2eb77fe7ec76c097d09028e2229c7143e0e9082429b5711d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_5004998410a6c785ac63d5afe0d72587a830a1812008d149463fe2b5e23c930e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5004998410a6c785ac63d5afe0d72587a830a1812008d149463fe2b5e23c930e->enter($__internal_5004998410a6c785ac63d5afe0d72587a830a1812008d149463fe2b5e23c930e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26d7fff656b61d1e2eb77fe7ec76c097d09028e2229c7143e0e9082429b5711d->leave($__internal_26d7fff656b61d1e2eb77fe7ec76c097d09028e2229c7143e0e9082429b5711d_prof);

        
        $__internal_5004998410a6c785ac63d5afe0d72587a830a1812008d149463fe2b5e23c930e->leave($__internal_5004998410a6c785ac63d5afe0d72587a830a1812008d149463fe2b5e23c930e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_49cbcd2419dd14835126903a8c3ef3ba3c2506e680f253e931eb8c8f6601944b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49cbcd2419dd14835126903a8c3ef3ba3c2506e680f253e931eb8c8f6601944b->enter($__internal_49cbcd2419dd14835126903a8c3ef3ba3c2506e680f253e931eb8c8f6601944b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ab032a1991071ccb4646b54a9bba645d030b7a6cb5587804d39463f1898a5616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab032a1991071ccb4646b54a9bba645d030b7a6cb5587804d39463f1898a5616->enter($__internal_ab032a1991071ccb4646b54a9bba645d030b7a6cb5587804d39463f1898a5616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ab032a1991071ccb4646b54a9bba645d030b7a6cb5587804d39463f1898a5616->leave($__internal_ab032a1991071ccb4646b54a9bba645d030b7a6cb5587804d39463f1898a5616_prof);

        
        $__internal_49cbcd2419dd14835126903a8c3ef3ba3c2506e680f253e931eb8c8f6601944b->leave($__internal_49cbcd2419dd14835126903a8c3ef3ba3c2506e680f253e931eb8c8f6601944b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8142476942ce96eba7bafc3ac4c7845fbf58d8e0750b514b4738777ce6749111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8142476942ce96eba7bafc3ac4c7845fbf58d8e0750b514b4738777ce6749111->enter($__internal_8142476942ce96eba7bafc3ac4c7845fbf58d8e0750b514b4738777ce6749111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_91a8139b32e1a9d571cfd08aed4d2ea5ee7bca4b711be014bd75769f1e9c4419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a8139b32e1a9d571cfd08aed4d2ea5ee7bca4b711be014bd75769f1e9c4419->enter($__internal_91a8139b32e1a9d571cfd08aed4d2ea5ee7bca4b711be014bd75769f1e9c4419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_91a8139b32e1a9d571cfd08aed4d2ea5ee7bca4b711be014bd75769f1e9c4419->leave($__internal_91a8139b32e1a9d571cfd08aed4d2ea5ee7bca4b711be014bd75769f1e9c4419_prof);

        
        $__internal_8142476942ce96eba7bafc3ac4c7845fbf58d8e0750b514b4738777ce6749111->leave($__internal_8142476942ce96eba7bafc3ac4c7845fbf58d8e0750b514b4738777ce6749111_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1d303fb7799473168a5f8425fd755585628386c6b0b35c252830153bf2b41b0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d303fb7799473168a5f8425fd755585628386c6b0b35c252830153bf2b41b0c->enter($__internal_1d303fb7799473168a5f8425fd755585628386c6b0b35c252830153bf2b41b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_085a830ac23e588f532da6201f9137c567948821b8f9535ebf118ba60967d8cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_085a830ac23e588f532da6201f9137c567948821b8f9535ebf118ba60967d8cb->enter($__internal_085a830ac23e588f532da6201f9137c567948821b8f9535ebf118ba60967d8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_085a830ac23e588f532da6201f9137c567948821b8f9535ebf118ba60967d8cb->leave($__internal_085a830ac23e588f532da6201f9137c567948821b8f9535ebf118ba60967d8cb_prof);

        
        $__internal_1d303fb7799473168a5f8425fd755585628386c6b0b35c252830153bf2b41b0c->leave($__internal_1d303fb7799473168a5f8425fd755585628386c6b0b35c252830153bf2b41b0c_prof);

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

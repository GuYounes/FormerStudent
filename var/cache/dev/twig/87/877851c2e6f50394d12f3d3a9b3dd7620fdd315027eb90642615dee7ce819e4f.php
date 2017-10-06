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
        $__internal_dbee84c5047ab5a02b76252a6350f85794b9937487ff35607f6f5ba34a744d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbee84c5047ab5a02b76252a6350f85794b9937487ff35607f6f5ba34a744d33->enter($__internal_dbee84c5047ab5a02b76252a6350f85794b9937487ff35607f6f5ba34a744d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_c25b3a95d4fb7a1c723c6f481519e182270f3b2eb876a1bcc8ac1cdb4f5f08f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c25b3a95d4fb7a1c723c6f481519e182270f3b2eb876a1bcc8ac1cdb4f5f08f6->enter($__internal_c25b3a95d4fb7a1c723c6f481519e182270f3b2eb876a1bcc8ac1cdb4f5f08f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbee84c5047ab5a02b76252a6350f85794b9937487ff35607f6f5ba34a744d33->leave($__internal_dbee84c5047ab5a02b76252a6350f85794b9937487ff35607f6f5ba34a744d33_prof);

        
        $__internal_c25b3a95d4fb7a1c723c6f481519e182270f3b2eb876a1bcc8ac1cdb4f5f08f6->leave($__internal_c25b3a95d4fb7a1c723c6f481519e182270f3b2eb876a1bcc8ac1cdb4f5f08f6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e8c7c76ba784851a86d2bb1ec87549279af6d28057b4f12eab913c74ee0f80d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e8c7c76ba784851a86d2bb1ec87549279af6d28057b4f12eab913c74ee0f80d->enter($__internal_9e8c7c76ba784851a86d2bb1ec87549279af6d28057b4f12eab913c74ee0f80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2e598a9b4e645060683d0ba2eeccf5256728ae5cf8a21174928a3f13864abb1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e598a9b4e645060683d0ba2eeccf5256728ae5cf8a21174928a3f13864abb1a->enter($__internal_2e598a9b4e645060683d0ba2eeccf5256728ae5cf8a21174928a3f13864abb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2e598a9b4e645060683d0ba2eeccf5256728ae5cf8a21174928a3f13864abb1a->leave($__internal_2e598a9b4e645060683d0ba2eeccf5256728ae5cf8a21174928a3f13864abb1a_prof);

        
        $__internal_9e8c7c76ba784851a86d2bb1ec87549279af6d28057b4f12eab913c74ee0f80d->leave($__internal_9e8c7c76ba784851a86d2bb1ec87549279af6d28057b4f12eab913c74ee0f80d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_36ceb79a0586a65f4d7f3c6a86a5f8ac7d9f952a681ed14a6b0912de2566c847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36ceb79a0586a65f4d7f3c6a86a5f8ac7d9f952a681ed14a6b0912de2566c847->enter($__internal_36ceb79a0586a65f4d7f3c6a86a5f8ac7d9f952a681ed14a6b0912de2566c847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8af477ac50ec36fc2477108f9895d487bd41063179ba2f7e0c0e4b3fb0b27a29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8af477ac50ec36fc2477108f9895d487bd41063179ba2f7e0c0e4b3fb0b27a29->enter($__internal_8af477ac50ec36fc2477108f9895d487bd41063179ba2f7e0c0e4b3fb0b27a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8af477ac50ec36fc2477108f9895d487bd41063179ba2f7e0c0e4b3fb0b27a29->leave($__internal_8af477ac50ec36fc2477108f9895d487bd41063179ba2f7e0c0e4b3fb0b27a29_prof);

        
        $__internal_36ceb79a0586a65f4d7f3c6a86a5f8ac7d9f952a681ed14a6b0912de2566c847->leave($__internal_36ceb79a0586a65f4d7f3c6a86a5f8ac7d9f952a681ed14a6b0912de2566c847_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7f5ec4164685d5bcd34572b9b79831db87f3d765f9c8a5ae119d20154258ae32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f5ec4164685d5bcd34572b9b79831db87f3d765f9c8a5ae119d20154258ae32->enter($__internal_7f5ec4164685d5bcd34572b9b79831db87f3d765f9c8a5ae119d20154258ae32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e34c9aeb4691acc1649b73016f83be1cd3a6ddea78b4faf75b790073448823ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e34c9aeb4691acc1649b73016f83be1cd3a6ddea78b4faf75b790073448823ee->enter($__internal_e34c9aeb4691acc1649b73016f83be1cd3a6ddea78b4faf75b790073448823ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e34c9aeb4691acc1649b73016f83be1cd3a6ddea78b4faf75b790073448823ee->leave($__internal_e34c9aeb4691acc1649b73016f83be1cd3a6ddea78b4faf75b790073448823ee_prof);

        
        $__internal_7f5ec4164685d5bcd34572b9b79831db87f3d765f9c8a5ae119d20154258ae32->leave($__internal_7f5ec4164685d5bcd34572b9b79831db87f3d765f9c8a5ae119d20154258ae32_prof);

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

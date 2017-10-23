<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a2234efdaa944908ce20d2299800989e5b86a7a7646aef819792ec3ce4bb5b92 extends Twig_Template
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
        $__internal_69789cec272bd6f3503990f63dc14d8c9bede04b49aa1f4c6ce545d00aae9cdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69789cec272bd6f3503990f63dc14d8c9bede04b49aa1f4c6ce545d00aae9cdc->enter($__internal_69789cec272bd6f3503990f63dc14d8c9bede04b49aa1f4c6ce545d00aae9cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f42af0f63bee1a5f6e0e5d9135fa89ee55d21e4d380e9fb4b963a360cf049372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f42af0f63bee1a5f6e0e5d9135fa89ee55d21e4d380e9fb4b963a360cf049372->enter($__internal_f42af0f63bee1a5f6e0e5d9135fa89ee55d21e4d380e9fb4b963a360cf049372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69789cec272bd6f3503990f63dc14d8c9bede04b49aa1f4c6ce545d00aae9cdc->leave($__internal_69789cec272bd6f3503990f63dc14d8c9bede04b49aa1f4c6ce545d00aae9cdc_prof);

        
        $__internal_f42af0f63bee1a5f6e0e5d9135fa89ee55d21e4d380e9fb4b963a360cf049372->leave($__internal_f42af0f63bee1a5f6e0e5d9135fa89ee55d21e4d380e9fb4b963a360cf049372_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_91840a299a721893d945882b0a40d2984c443c37afe6b49a1afb7a70a3d6d171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91840a299a721893d945882b0a40d2984c443c37afe6b49a1afb7a70a3d6d171->enter($__internal_91840a299a721893d945882b0a40d2984c443c37afe6b49a1afb7a70a3d6d171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_267addf561fdf0bd193003db0689d91afdbeda2ef33c427256bfea611d9e1f05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_267addf561fdf0bd193003db0689d91afdbeda2ef33c427256bfea611d9e1f05->enter($__internal_267addf561fdf0bd193003db0689d91afdbeda2ef33c427256bfea611d9e1f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_267addf561fdf0bd193003db0689d91afdbeda2ef33c427256bfea611d9e1f05->leave($__internal_267addf561fdf0bd193003db0689d91afdbeda2ef33c427256bfea611d9e1f05_prof);

        
        $__internal_91840a299a721893d945882b0a40d2984c443c37afe6b49a1afb7a70a3d6d171->leave($__internal_91840a299a721893d945882b0a40d2984c443c37afe6b49a1afb7a70a3d6d171_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_722b37da60e9049068be31276a804c8689928f68572d3e255474054330e17059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_722b37da60e9049068be31276a804c8689928f68572d3e255474054330e17059->enter($__internal_722b37da60e9049068be31276a804c8689928f68572d3e255474054330e17059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c72d6c5fee87ee4f8cf453152bc3217c2abb1d0107a317004d5a88d5af4265ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c72d6c5fee87ee4f8cf453152bc3217c2abb1d0107a317004d5a88d5af4265ac->enter($__internal_c72d6c5fee87ee4f8cf453152bc3217c2abb1d0107a317004d5a88d5af4265ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c72d6c5fee87ee4f8cf453152bc3217c2abb1d0107a317004d5a88d5af4265ac->leave($__internal_c72d6c5fee87ee4f8cf453152bc3217c2abb1d0107a317004d5a88d5af4265ac_prof);

        
        $__internal_722b37da60e9049068be31276a804c8689928f68572d3e255474054330e17059->leave($__internal_722b37da60e9049068be31276a804c8689928f68572d3e255474054330e17059_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_33a8b359adbf60d5d5109a83314da3ec4431efb0801ef97123c21ae3c41272c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33a8b359adbf60d5d5109a83314da3ec4431efb0801ef97123c21ae3c41272c1->enter($__internal_33a8b359adbf60d5d5109a83314da3ec4431efb0801ef97123c21ae3c41272c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_56f690bc132f933386484868fe57b5a0a2bf464a4ff5d839be17dcc3abbd7cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f690bc132f933386484868fe57b5a0a2bf464a4ff5d839be17dcc3abbd7cbb->enter($__internal_56f690bc132f933386484868fe57b5a0a2bf464a4ff5d839be17dcc3abbd7cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_56f690bc132f933386484868fe57b5a0a2bf464a4ff5d839be17dcc3abbd7cbb->leave($__internal_56f690bc132f933386484868fe57b5a0a2bf464a4ff5d839be17dcc3abbd7cbb_prof);

        
        $__internal_33a8b359adbf60d5d5109a83314da3ec4431efb0801ef97123c21ae3c41272c1->leave($__internal_33a8b359adbf60d5d5109a83314da3ec4431efb0801ef97123c21ae3c41272c1_prof);

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

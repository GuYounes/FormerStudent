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
        $__internal_0caa2d6c60414623413b5a5df5c64edcd209921bc4ad0cace43a5b19c8b843fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0caa2d6c60414623413b5a5df5c64edcd209921bc4ad0cace43a5b19c8b843fd->enter($__internal_0caa2d6c60414623413b5a5df5c64edcd209921bc4ad0cace43a5b19c8b843fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_c6f4df4d417d82bfa7ef0c980adafac3ecd56f59878692f758c3345d56b38fd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f4df4d417d82bfa7ef0c980adafac3ecd56f59878692f758c3345d56b38fd7->enter($__internal_c6f4df4d417d82bfa7ef0c980adafac3ecd56f59878692f758c3345d56b38fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0caa2d6c60414623413b5a5df5c64edcd209921bc4ad0cace43a5b19c8b843fd->leave($__internal_0caa2d6c60414623413b5a5df5c64edcd209921bc4ad0cace43a5b19c8b843fd_prof);

        
        $__internal_c6f4df4d417d82bfa7ef0c980adafac3ecd56f59878692f758c3345d56b38fd7->leave($__internal_c6f4df4d417d82bfa7ef0c980adafac3ecd56f59878692f758c3345d56b38fd7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c6bd30cefda7f83908edd01f56483ce60bdad10989503c3e9eda6a3e9d75ca22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6bd30cefda7f83908edd01f56483ce60bdad10989503c3e9eda6a3e9d75ca22->enter($__internal_c6bd30cefda7f83908edd01f56483ce60bdad10989503c3e9eda6a3e9d75ca22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_35e5b6a5b0a0dae1cd9ee96914434059308b6c44a426c67ecea785a6308601be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35e5b6a5b0a0dae1cd9ee96914434059308b6c44a426c67ecea785a6308601be->enter($__internal_35e5b6a5b0a0dae1cd9ee96914434059308b6c44a426c67ecea785a6308601be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_35e5b6a5b0a0dae1cd9ee96914434059308b6c44a426c67ecea785a6308601be->leave($__internal_35e5b6a5b0a0dae1cd9ee96914434059308b6c44a426c67ecea785a6308601be_prof);

        
        $__internal_c6bd30cefda7f83908edd01f56483ce60bdad10989503c3e9eda6a3e9d75ca22->leave($__internal_c6bd30cefda7f83908edd01f56483ce60bdad10989503c3e9eda6a3e9d75ca22_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7aeaf3c71477d91c4e5821080f1a3b7f6c38dbc6e77b2557a8af0036b5195249 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aeaf3c71477d91c4e5821080f1a3b7f6c38dbc6e77b2557a8af0036b5195249->enter($__internal_7aeaf3c71477d91c4e5821080f1a3b7f6c38dbc6e77b2557a8af0036b5195249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f6cbb2635e82c265a136fc21da18bc9c726b4b6bf88c201c5d9193de2fccb1ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6cbb2635e82c265a136fc21da18bc9c726b4b6bf88c201c5d9193de2fccb1ec->enter($__internal_f6cbb2635e82c265a136fc21da18bc9c726b4b6bf88c201c5d9193de2fccb1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f6cbb2635e82c265a136fc21da18bc9c726b4b6bf88c201c5d9193de2fccb1ec->leave($__internal_f6cbb2635e82c265a136fc21da18bc9c726b4b6bf88c201c5d9193de2fccb1ec_prof);

        
        $__internal_7aeaf3c71477d91c4e5821080f1a3b7f6c38dbc6e77b2557a8af0036b5195249->leave($__internal_7aeaf3c71477d91c4e5821080f1a3b7f6c38dbc6e77b2557a8af0036b5195249_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b97a2f84304d46159bcd900a946783d8748c7afcb5e04c9200d2da557d2b39f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b97a2f84304d46159bcd900a946783d8748c7afcb5e04c9200d2da557d2b39f7->enter($__internal_b97a2f84304d46159bcd900a946783d8748c7afcb5e04c9200d2da557d2b39f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d478e534511c2d1230c4c6abb7a03bcfa00833aa899fba9f4ae200fc7a5016f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d478e534511c2d1230c4c6abb7a03bcfa00833aa899fba9f4ae200fc7a5016f4->enter($__internal_d478e534511c2d1230c4c6abb7a03bcfa00833aa899fba9f4ae200fc7a5016f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d478e534511c2d1230c4c6abb7a03bcfa00833aa899fba9f4ae200fc7a5016f4->leave($__internal_d478e534511c2d1230c4c6abb7a03bcfa00833aa899fba9f4ae200fc7a5016f4_prof);

        
        $__internal_b97a2f84304d46159bcd900a946783d8748c7afcb5e04c9200d2da557d2b39f7->leave($__internal_b97a2f84304d46159bcd900a946783d8748c7afcb5e04c9200d2da557d2b39f7_prof);

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

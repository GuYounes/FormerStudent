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
        $__internal_956658e47393efff7def92be456dae9f917989d1019d69125a1f006b2f3c6707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_956658e47393efff7def92be456dae9f917989d1019d69125a1f006b2f3c6707->enter($__internal_956658e47393efff7def92be456dae9f917989d1019d69125a1f006b2f3c6707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_e3cbb4963f6e8b3675eecb5b6ca5cb7b8ae7fa6d55a7098f21ff916b9cae5951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3cbb4963f6e8b3675eecb5b6ca5cb7b8ae7fa6d55a7098f21ff916b9cae5951->enter($__internal_e3cbb4963f6e8b3675eecb5b6ca5cb7b8ae7fa6d55a7098f21ff916b9cae5951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_956658e47393efff7def92be456dae9f917989d1019d69125a1f006b2f3c6707->leave($__internal_956658e47393efff7def92be456dae9f917989d1019d69125a1f006b2f3c6707_prof);

        
        $__internal_e3cbb4963f6e8b3675eecb5b6ca5cb7b8ae7fa6d55a7098f21ff916b9cae5951->leave($__internal_e3cbb4963f6e8b3675eecb5b6ca5cb7b8ae7fa6d55a7098f21ff916b9cae5951_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9dac16e03fa1ffed9f4851ce1e05e34afda34de76becfe9c5719ec4bdfbeb3d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dac16e03fa1ffed9f4851ce1e05e34afda34de76becfe9c5719ec4bdfbeb3d0->enter($__internal_9dac16e03fa1ffed9f4851ce1e05e34afda34de76becfe9c5719ec4bdfbeb3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_96535ebaa7e13d1cf9bb56733488b0a285f57ed7ebe36cb751e3dfab234f31dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96535ebaa7e13d1cf9bb56733488b0a285f57ed7ebe36cb751e3dfab234f31dc->enter($__internal_96535ebaa7e13d1cf9bb56733488b0a285f57ed7ebe36cb751e3dfab234f31dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_96535ebaa7e13d1cf9bb56733488b0a285f57ed7ebe36cb751e3dfab234f31dc->leave($__internal_96535ebaa7e13d1cf9bb56733488b0a285f57ed7ebe36cb751e3dfab234f31dc_prof);

        
        $__internal_9dac16e03fa1ffed9f4851ce1e05e34afda34de76becfe9c5719ec4bdfbeb3d0->leave($__internal_9dac16e03fa1ffed9f4851ce1e05e34afda34de76becfe9c5719ec4bdfbeb3d0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dafe7fa1326ddc3540d350d134d478143a8fabeff11a7b91b2ae9490453efc78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dafe7fa1326ddc3540d350d134d478143a8fabeff11a7b91b2ae9490453efc78->enter($__internal_dafe7fa1326ddc3540d350d134d478143a8fabeff11a7b91b2ae9490453efc78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9d9c43c053dad9542c76c2df14b89e95ba3336f8a5cb6f5c93964f69b6832b3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d9c43c053dad9542c76c2df14b89e95ba3336f8a5cb6f5c93964f69b6832b3b->enter($__internal_9d9c43c053dad9542c76c2df14b89e95ba3336f8a5cb6f5c93964f69b6832b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_9d9c43c053dad9542c76c2df14b89e95ba3336f8a5cb6f5c93964f69b6832b3b->leave($__internal_9d9c43c053dad9542c76c2df14b89e95ba3336f8a5cb6f5c93964f69b6832b3b_prof);

        
        $__internal_dafe7fa1326ddc3540d350d134d478143a8fabeff11a7b91b2ae9490453efc78->leave($__internal_dafe7fa1326ddc3540d350d134d478143a8fabeff11a7b91b2ae9490453efc78_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_50bd732394beb2591c694670febe81bf27c364087cc0c406d4d1432daf203f20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50bd732394beb2591c694670febe81bf27c364087cc0c406d4d1432daf203f20->enter($__internal_50bd732394beb2591c694670febe81bf27c364087cc0c406d4d1432daf203f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d59bacdcf629b2bfca4596812d4635bc90cf0b0a05ec3b659765ea906422f2ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d59bacdcf629b2bfca4596812d4635bc90cf0b0a05ec3b659765ea906422f2ca->enter($__internal_d59bacdcf629b2bfca4596812d4635bc90cf0b0a05ec3b659765ea906422f2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d59bacdcf629b2bfca4596812d4635bc90cf0b0a05ec3b659765ea906422f2ca->leave($__internal_d59bacdcf629b2bfca4596812d4635bc90cf0b0a05ec3b659765ea906422f2ca_prof);

        
        $__internal_50bd732394beb2591c694670febe81bf27c364087cc0c406d4d1432daf203f20->leave($__internal_50bd732394beb2591c694670febe81bf27c364087cc0c406d4d1432daf203f20_prof);

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

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
        $__internal_4876790050540b72aa2703a4bc99573f9a4ef9c32e48bd7452b040766ee74132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4876790050540b72aa2703a4bc99573f9a4ef9c32e48bd7452b040766ee74132->enter($__internal_4876790050540b72aa2703a4bc99573f9a4ef9c32e48bd7452b040766ee74132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_657232407cb2906dafd8c27d02dd3d5e2e0f162e9338da017ceb9c60432d919b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_657232407cb2906dafd8c27d02dd3d5e2e0f162e9338da017ceb9c60432d919b->enter($__internal_657232407cb2906dafd8c27d02dd3d5e2e0f162e9338da017ceb9c60432d919b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4876790050540b72aa2703a4bc99573f9a4ef9c32e48bd7452b040766ee74132->leave($__internal_4876790050540b72aa2703a4bc99573f9a4ef9c32e48bd7452b040766ee74132_prof);

        
        $__internal_657232407cb2906dafd8c27d02dd3d5e2e0f162e9338da017ceb9c60432d919b->leave($__internal_657232407cb2906dafd8c27d02dd3d5e2e0f162e9338da017ceb9c60432d919b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1e6f6d86efff5978876ea704ddfb66adae62998c47fda1a3bd9ba4e4d16ca910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e6f6d86efff5978876ea704ddfb66adae62998c47fda1a3bd9ba4e4d16ca910->enter($__internal_1e6f6d86efff5978876ea704ddfb66adae62998c47fda1a3bd9ba4e4d16ca910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0d2b4509887e6ca566536a18057c5caa8e62df107fedab1fc577d4145634ce21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d2b4509887e6ca566536a18057c5caa8e62df107fedab1fc577d4145634ce21->enter($__internal_0d2b4509887e6ca566536a18057c5caa8e62df107fedab1fc577d4145634ce21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0d2b4509887e6ca566536a18057c5caa8e62df107fedab1fc577d4145634ce21->leave($__internal_0d2b4509887e6ca566536a18057c5caa8e62df107fedab1fc577d4145634ce21_prof);

        
        $__internal_1e6f6d86efff5978876ea704ddfb66adae62998c47fda1a3bd9ba4e4d16ca910->leave($__internal_1e6f6d86efff5978876ea704ddfb66adae62998c47fda1a3bd9ba4e4d16ca910_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3b076c36dcf71c78384cbd049257907ccb1721c3e3eaa8745ab36462ca3acb5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b076c36dcf71c78384cbd049257907ccb1721c3e3eaa8745ab36462ca3acb5b->enter($__internal_3b076c36dcf71c78384cbd049257907ccb1721c3e3eaa8745ab36462ca3acb5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8cfc83a759a738574dc72893e89fbccbd94400b7cfef73cc8245af282730b639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cfc83a759a738574dc72893e89fbccbd94400b7cfef73cc8245af282730b639->enter($__internal_8cfc83a759a738574dc72893e89fbccbd94400b7cfef73cc8245af282730b639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8cfc83a759a738574dc72893e89fbccbd94400b7cfef73cc8245af282730b639->leave($__internal_8cfc83a759a738574dc72893e89fbccbd94400b7cfef73cc8245af282730b639_prof);

        
        $__internal_3b076c36dcf71c78384cbd049257907ccb1721c3e3eaa8745ab36462ca3acb5b->leave($__internal_3b076c36dcf71c78384cbd049257907ccb1721c3e3eaa8745ab36462ca3acb5b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3c9ccb0bc17c389eba96e1100d8800554869a013bf770d7a6eaf0e8d824e593a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c9ccb0bc17c389eba96e1100d8800554869a013bf770d7a6eaf0e8d824e593a->enter($__internal_3c9ccb0bc17c389eba96e1100d8800554869a013bf770d7a6eaf0e8d824e593a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8df1d5d9bbf8a4c0858f1120c63386d58d9c5a373fcfb0cc5b161fa3730c999a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8df1d5d9bbf8a4c0858f1120c63386d58d9c5a373fcfb0cc5b161fa3730c999a->enter($__internal_8df1d5d9bbf8a4c0858f1120c63386d58d9c5a373fcfb0cc5b161fa3730c999a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8df1d5d9bbf8a4c0858f1120c63386d58d9c5a373fcfb0cc5b161fa3730c999a->leave($__internal_8df1d5d9bbf8a4c0858f1120c63386d58d9c5a373fcfb0cc5b161fa3730c999a_prof);

        
        $__internal_3c9ccb0bc17c389eba96e1100d8800554869a013bf770d7a6eaf0e8d824e593a->leave($__internal_3c9ccb0bc17c389eba96e1100d8800554869a013bf770d7a6eaf0e8d824e593a_prof);

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

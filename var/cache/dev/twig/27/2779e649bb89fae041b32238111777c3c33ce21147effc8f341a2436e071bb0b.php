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
        $__internal_f2d6f8e774f21c483f9dc557daf564a8d3cba36ffd9dd9dee33c1e4ebd5180b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2d6f8e774f21c483f9dc557daf564a8d3cba36ffd9dd9dee33c1e4ebd5180b3->enter($__internal_f2d6f8e774f21c483f9dc557daf564a8d3cba36ffd9dd9dee33c1e4ebd5180b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_57825a43cc647a59c654f24ad6756f102843d43f060f8f48e622708edfea6c37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57825a43cc647a59c654f24ad6756f102843d43f060f8f48e622708edfea6c37->enter($__internal_57825a43cc647a59c654f24ad6756f102843d43f060f8f48e622708edfea6c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2d6f8e774f21c483f9dc557daf564a8d3cba36ffd9dd9dee33c1e4ebd5180b3->leave($__internal_f2d6f8e774f21c483f9dc557daf564a8d3cba36ffd9dd9dee33c1e4ebd5180b3_prof);

        
        $__internal_57825a43cc647a59c654f24ad6756f102843d43f060f8f48e622708edfea6c37->leave($__internal_57825a43cc647a59c654f24ad6756f102843d43f060f8f48e622708edfea6c37_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9af0a8cf709620f1529593ba1fdb84bb2eeb55e8c5172a8cde4c74acf2fead11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9af0a8cf709620f1529593ba1fdb84bb2eeb55e8c5172a8cde4c74acf2fead11->enter($__internal_9af0a8cf709620f1529593ba1fdb84bb2eeb55e8c5172a8cde4c74acf2fead11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3e72d8412dd6dc78ab9f3bddb946de54ae54906db2ace416548d2f18d1851b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e72d8412dd6dc78ab9f3bddb946de54ae54906db2ace416548d2f18d1851b2d->enter($__internal_3e72d8412dd6dc78ab9f3bddb946de54ae54906db2ace416548d2f18d1851b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3e72d8412dd6dc78ab9f3bddb946de54ae54906db2ace416548d2f18d1851b2d->leave($__internal_3e72d8412dd6dc78ab9f3bddb946de54ae54906db2ace416548d2f18d1851b2d_prof);

        
        $__internal_9af0a8cf709620f1529593ba1fdb84bb2eeb55e8c5172a8cde4c74acf2fead11->leave($__internal_9af0a8cf709620f1529593ba1fdb84bb2eeb55e8c5172a8cde4c74acf2fead11_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3d0e6429b90d84412789ed4030ebf6cb95d21babdabb53bd40ce7b3d570a65ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d0e6429b90d84412789ed4030ebf6cb95d21babdabb53bd40ce7b3d570a65ea->enter($__internal_3d0e6429b90d84412789ed4030ebf6cb95d21babdabb53bd40ce7b3d570a65ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fe4177b8bef894d74d57218b0c7086954acf6db6a627160a93f36d54a6d85400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe4177b8bef894d74d57218b0c7086954acf6db6a627160a93f36d54a6d85400->enter($__internal_fe4177b8bef894d74d57218b0c7086954acf6db6a627160a93f36d54a6d85400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_fe4177b8bef894d74d57218b0c7086954acf6db6a627160a93f36d54a6d85400->leave($__internal_fe4177b8bef894d74d57218b0c7086954acf6db6a627160a93f36d54a6d85400_prof);

        
        $__internal_3d0e6429b90d84412789ed4030ebf6cb95d21babdabb53bd40ce7b3d570a65ea->leave($__internal_3d0e6429b90d84412789ed4030ebf6cb95d21babdabb53bd40ce7b3d570a65ea_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_065e2cbeaa41c83bdc94e014f2904944bda311b8035a0e4246482ac326a72689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_065e2cbeaa41c83bdc94e014f2904944bda311b8035a0e4246482ac326a72689->enter($__internal_065e2cbeaa41c83bdc94e014f2904944bda311b8035a0e4246482ac326a72689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_426bbea7f2ad10ca0ff3040b878f90717c37367e27d0be9cbd20026793544edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_426bbea7f2ad10ca0ff3040b878f90717c37367e27d0be9cbd20026793544edc->enter($__internal_426bbea7f2ad10ca0ff3040b878f90717c37367e27d0be9cbd20026793544edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_426bbea7f2ad10ca0ff3040b878f90717c37367e27d0be9cbd20026793544edc->leave($__internal_426bbea7f2ad10ca0ff3040b878f90717c37367e27d0be9cbd20026793544edc_prof);

        
        $__internal_065e2cbeaa41c83bdc94e014f2904944bda311b8035a0e4246482ac326a72689->leave($__internal_065e2cbeaa41c83bdc94e014f2904944bda311b8035a0e4246482ac326a72689_prof);

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

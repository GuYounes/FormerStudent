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
        $__internal_87f424a0b966305c0c468c71854eb1b54378049db89a68f616dc18463ca107f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f424a0b966305c0c468c71854eb1b54378049db89a68f616dc18463ca107f8->enter($__internal_87f424a0b966305c0c468c71854eb1b54378049db89a68f616dc18463ca107f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_85631ac09829f2cc5633cbe3d39d7c766448d76e471d1a094b2d27ef1aeb6f86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85631ac09829f2cc5633cbe3d39d7c766448d76e471d1a094b2d27ef1aeb6f86->enter($__internal_85631ac09829f2cc5633cbe3d39d7c766448d76e471d1a094b2d27ef1aeb6f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87f424a0b966305c0c468c71854eb1b54378049db89a68f616dc18463ca107f8->leave($__internal_87f424a0b966305c0c468c71854eb1b54378049db89a68f616dc18463ca107f8_prof);

        
        $__internal_85631ac09829f2cc5633cbe3d39d7c766448d76e471d1a094b2d27ef1aeb6f86->leave($__internal_85631ac09829f2cc5633cbe3d39d7c766448d76e471d1a094b2d27ef1aeb6f86_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_36e42f45a51225b3fa0b97da0df1a7856a3272dc32565ebf875b83ef213d842f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36e42f45a51225b3fa0b97da0df1a7856a3272dc32565ebf875b83ef213d842f->enter($__internal_36e42f45a51225b3fa0b97da0df1a7856a3272dc32565ebf875b83ef213d842f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8a59df3765a1511c27ddd872fda214ca81ade79fb5013029cdd3315be0a65e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a59df3765a1511c27ddd872fda214ca81ade79fb5013029cdd3315be0a65e93->enter($__internal_8a59df3765a1511c27ddd872fda214ca81ade79fb5013029cdd3315be0a65e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8a59df3765a1511c27ddd872fda214ca81ade79fb5013029cdd3315be0a65e93->leave($__internal_8a59df3765a1511c27ddd872fda214ca81ade79fb5013029cdd3315be0a65e93_prof);

        
        $__internal_36e42f45a51225b3fa0b97da0df1a7856a3272dc32565ebf875b83ef213d842f->leave($__internal_36e42f45a51225b3fa0b97da0df1a7856a3272dc32565ebf875b83ef213d842f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c66dba49a9d9cb04406cf9d90d0afed28cf9a510ce11f94c2c950ff6a7644d0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c66dba49a9d9cb04406cf9d90d0afed28cf9a510ce11f94c2c950ff6a7644d0f->enter($__internal_c66dba49a9d9cb04406cf9d90d0afed28cf9a510ce11f94c2c950ff6a7644d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_59ca1528b44aaf8a2eb7d214fb289eac2a6679162b37f6707ae9161b198222a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59ca1528b44aaf8a2eb7d214fb289eac2a6679162b37f6707ae9161b198222a2->enter($__internal_59ca1528b44aaf8a2eb7d214fb289eac2a6679162b37f6707ae9161b198222a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_59ca1528b44aaf8a2eb7d214fb289eac2a6679162b37f6707ae9161b198222a2->leave($__internal_59ca1528b44aaf8a2eb7d214fb289eac2a6679162b37f6707ae9161b198222a2_prof);

        
        $__internal_c66dba49a9d9cb04406cf9d90d0afed28cf9a510ce11f94c2c950ff6a7644d0f->leave($__internal_c66dba49a9d9cb04406cf9d90d0afed28cf9a510ce11f94c2c950ff6a7644d0f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c0932b0447f8247248645e9baf94129fff9adfe6240dcb79c15e9fa16d5658c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0932b0447f8247248645e9baf94129fff9adfe6240dcb79c15e9fa16d5658c0->enter($__internal_c0932b0447f8247248645e9baf94129fff9adfe6240dcb79c15e9fa16d5658c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_485441cba691f825ccb5044f8313e51700cfe8dbdbfc7b9d9ead5255e6b27b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_485441cba691f825ccb5044f8313e51700cfe8dbdbfc7b9d9ead5255e6b27b99->enter($__internal_485441cba691f825ccb5044f8313e51700cfe8dbdbfc7b9d9ead5255e6b27b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_485441cba691f825ccb5044f8313e51700cfe8dbdbfc7b9d9ead5255e6b27b99->leave($__internal_485441cba691f825ccb5044f8313e51700cfe8dbdbfc7b9d9ead5255e6b27b99_prof);

        
        $__internal_c0932b0447f8247248645e9baf94129fff9adfe6240dcb79c15e9fa16d5658c0->leave($__internal_c0932b0447f8247248645e9baf94129fff9adfe6240dcb79c15e9fa16d5658c0_prof);

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

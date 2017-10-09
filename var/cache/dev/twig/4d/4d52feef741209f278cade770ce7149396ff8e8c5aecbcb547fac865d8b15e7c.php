<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_194482d9950a10f4d2fd80cae44702698fad7f6a824d712699e203a16bbdeea6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f154b1f55492f4c0c903fcfee1dea839a1230388122ffe0adfd6376c6826ff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f154b1f55492f4c0c903fcfee1dea839a1230388122ffe0adfd6376c6826ff1->enter($__internal_1f154b1f55492f4c0c903fcfee1dea839a1230388122ffe0adfd6376c6826ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_cdcb26a6315010b840081d146d60755b1cd5e6bdcaba6dbdf8b5e09075408c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdcb26a6315010b840081d146d60755b1cd5e6bdcaba6dbdf8b5e09075408c44->enter($__internal_cdcb26a6315010b840081d146d60755b1cd5e6bdcaba6dbdf8b5e09075408c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f154b1f55492f4c0c903fcfee1dea839a1230388122ffe0adfd6376c6826ff1->leave($__internal_1f154b1f55492f4c0c903fcfee1dea839a1230388122ffe0adfd6376c6826ff1_prof);

        
        $__internal_cdcb26a6315010b840081d146d60755b1cd5e6bdcaba6dbdf8b5e09075408c44->leave($__internal_cdcb26a6315010b840081d146d60755b1cd5e6bdcaba6dbdf8b5e09075408c44_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_bff3fe096a035cedd9df81a0c25b8d114e29fe03c0d071f822a9fbd7a16ae8e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bff3fe096a035cedd9df81a0c25b8d114e29fe03c0d071f822a9fbd7a16ae8e9->enter($__internal_bff3fe096a035cedd9df81a0c25b8d114e29fe03c0d071f822a9fbd7a16ae8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_a31616d0281c29219f97c417e44bee9fe45d655255a9e5556aa56409909c509d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a31616d0281c29219f97c417e44bee9fe45d655255a9e5556aa56409909c509d->enter($__internal_a31616d0281c29219f97c417e44bee9fe45d655255a9e5556aa56409909c509d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_a31616d0281c29219f97c417e44bee9fe45d655255a9e5556aa56409909c509d->leave($__internal_a31616d0281c29219f97c417e44bee9fe45d655255a9e5556aa56409909c509d_prof);

        
        $__internal_bff3fe096a035cedd9df81a0c25b8d114e29fe03c0d071f822a9fbd7a16ae8e9->leave($__internal_bff3fe096a035cedd9df81a0c25b8d114e29fe03c0d071f822a9fbd7a16ae8e9_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f8a7d0d2c695ae42c7bd7e057678a21108a93281783b78f8e27d190238aa848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f8a7d0d2c695ae42c7bd7e057678a21108a93281783b78f8e27d190238aa848->enter($__internal_2f8a7d0d2c695ae42c7bd7e057678a21108a93281783b78f8e27d190238aa848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_124dfdda96030d5cca9386212b871e987eb1fe40b9b2d355cbbbb3fdd055c8cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_124dfdda96030d5cca9386212b871e987eb1fe40b9b2d355cbbbb3fdd055c8cf->enter($__internal_124dfdda96030d5cca9386212b871e987eb1fe40b9b2d355cbbbb3fdd055c8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_124dfdda96030d5cca9386212b871e987eb1fe40b9b2d355cbbbb3fdd055c8cf->leave($__internal_124dfdda96030d5cca9386212b871e987eb1fe40b9b2d355cbbbb3fdd055c8cf_prof);

        
        $__internal_2f8a7d0d2c695ae42c7bd7e057678a21108a93281783b78f8e27d190238aa848->leave($__internal_2f8a7d0d2c695ae42c7bd7e057678a21108a93281783b78f8e27d190238aa848_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}

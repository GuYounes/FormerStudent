<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_5fe0034cb3f9dd2f03525bb825002831a0dabff6281fb48153046936a4f6459e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_a8df086db8b3f6721a4c501ce58642dd0772160b75eb3ea44624c26cda6c5f6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8df086db8b3f6721a4c501ce58642dd0772160b75eb3ea44624c26cda6c5f6c->enter($__internal_a8df086db8b3f6721a4c501ce58642dd0772160b75eb3ea44624c26cda6c5f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_f07bb68910fde14977b0309db974379a9408381c747f60df492ca3ce396c8390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f07bb68910fde14977b0309db974379a9408381c747f60df492ca3ce396c8390->enter($__internal_f07bb68910fde14977b0309db974379a9408381c747f60df492ca3ce396c8390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8df086db8b3f6721a4c501ce58642dd0772160b75eb3ea44624c26cda6c5f6c->leave($__internal_a8df086db8b3f6721a4c501ce58642dd0772160b75eb3ea44624c26cda6c5f6c_prof);

        
        $__internal_f07bb68910fde14977b0309db974379a9408381c747f60df492ca3ce396c8390->leave($__internal_f07bb68910fde14977b0309db974379a9408381c747f60df492ca3ce396c8390_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_1b27049f298ddb76abd752da92c8597576036fae4724f0af9c111e1f263b5c0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b27049f298ddb76abd752da92c8597576036fae4724f0af9c111e1f263b5c0f->enter($__internal_1b27049f298ddb76abd752da92c8597576036fae4724f0af9c111e1f263b5c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_8767bc72aa9a7f03bcc073c3e5359ea53661c055335732cfce1a3ac7a89b6715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8767bc72aa9a7f03bcc073c3e5359ea53661c055335732cfce1a3ac7a89b6715->enter($__internal_8767bc72aa9a7f03bcc073c3e5359ea53661c055335732cfce1a3ac7a89b6715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_8767bc72aa9a7f03bcc073c3e5359ea53661c055335732cfce1a3ac7a89b6715->leave($__internal_8767bc72aa9a7f03bcc073c3e5359ea53661c055335732cfce1a3ac7a89b6715_prof);

        
        $__internal_1b27049f298ddb76abd752da92c8597576036fae4724f0af9c111e1f263b5c0f->leave($__internal_1b27049f298ddb76abd752da92c8597576036fae4724f0af9c111e1f263b5c0f_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f240623ff04254e984e4930b8013596238afaae25917739fcae6fb690831f888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f240623ff04254e984e4930b8013596238afaae25917739fcae6fb690831f888->enter($__internal_f240623ff04254e984e4930b8013596238afaae25917739fcae6fb690831f888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_75331ff0e84bbcc0401f23be3531b6382e80d84863f0880d040c16b7dde2573a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75331ff0e84bbcc0401f23be3531b6382e80d84863f0880d040c16b7dde2573a->enter($__internal_75331ff0e84bbcc0401f23be3531b6382e80d84863f0880d040c16b7dde2573a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_75331ff0e84bbcc0401f23be3531b6382e80d84863f0880d040c16b7dde2573a->leave($__internal_75331ff0e84bbcc0401f23be3531b6382e80d84863f0880d040c16b7dde2573a_prof);

        
        $__internal_f240623ff04254e984e4930b8013596238afaae25917739fcae6fb690831f888->leave($__internal_f240623ff04254e984e4930b8013596238afaae25917739fcae6fb690831f888_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}

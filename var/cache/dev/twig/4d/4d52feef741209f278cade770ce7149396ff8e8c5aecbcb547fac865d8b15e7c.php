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
        $__internal_7922fa1384862a67ae2bea9b6ed68f740c1a3f2690860fa2b4292bbc59fffe74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7922fa1384862a67ae2bea9b6ed68f740c1a3f2690860fa2b4292bbc59fffe74->enter($__internal_7922fa1384862a67ae2bea9b6ed68f740c1a3f2690860fa2b4292bbc59fffe74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_4ecea85ea2acc79e857a64f28e98879850578ed587c3f05486212b066d7650af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ecea85ea2acc79e857a64f28e98879850578ed587c3f05486212b066d7650af->enter($__internal_4ecea85ea2acc79e857a64f28e98879850578ed587c3f05486212b066d7650af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7922fa1384862a67ae2bea9b6ed68f740c1a3f2690860fa2b4292bbc59fffe74->leave($__internal_7922fa1384862a67ae2bea9b6ed68f740c1a3f2690860fa2b4292bbc59fffe74_prof);

        
        $__internal_4ecea85ea2acc79e857a64f28e98879850578ed587c3f05486212b066d7650af->leave($__internal_4ecea85ea2acc79e857a64f28e98879850578ed587c3f05486212b066d7650af_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_cd98f58b984b67fabd47140cb079c5c42fbf2e33bcd0e56f4fb8302a75ba342a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd98f58b984b67fabd47140cb079c5c42fbf2e33bcd0e56f4fb8302a75ba342a->enter($__internal_cd98f58b984b67fabd47140cb079c5c42fbf2e33bcd0e56f4fb8302a75ba342a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_d994e33cc915919f5afeb67376f8fa9792972b8bd8227b7968ecd7b292b44115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d994e33cc915919f5afeb67376f8fa9792972b8bd8227b7968ecd7b292b44115->enter($__internal_d994e33cc915919f5afeb67376f8fa9792972b8bd8227b7968ecd7b292b44115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_d994e33cc915919f5afeb67376f8fa9792972b8bd8227b7968ecd7b292b44115->leave($__internal_d994e33cc915919f5afeb67376f8fa9792972b8bd8227b7968ecd7b292b44115_prof);

        
        $__internal_cd98f58b984b67fabd47140cb079c5c42fbf2e33bcd0e56f4fb8302a75ba342a->leave($__internal_cd98f58b984b67fabd47140cb079c5c42fbf2e33bcd0e56f4fb8302a75ba342a_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_66858cc5d12a848f751a29e610887f33e5ffe50a287f2389a2824a06ac412962 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66858cc5d12a848f751a29e610887f33e5ffe50a287f2389a2824a06ac412962->enter($__internal_66858cc5d12a848f751a29e610887f33e5ffe50a287f2389a2824a06ac412962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_09ef7c2c078a423ebcea0673eb7eb7126a63291d1e56f4a5168aa067c3a3ef33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ef7c2c078a423ebcea0673eb7eb7126a63291d1e56f4a5168aa067c3a3ef33->enter($__internal_09ef7c2c078a423ebcea0673eb7eb7126a63291d1e56f4a5168aa067c3a3ef33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_09ef7c2c078a423ebcea0673eb7eb7126a63291d1e56f4a5168aa067c3a3ef33->leave($__internal_09ef7c2c078a423ebcea0673eb7eb7126a63291d1e56f4a5168aa067c3a3ef33_prof);

        
        $__internal_66858cc5d12a848f751a29e610887f33e5ffe50a287f2389a2824a06ac412962->leave($__internal_66858cc5d12a848f751a29e610887f33e5ffe50a287f2389a2824a06ac412962_prof);

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

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
        $__internal_a8bb1672a434e305569e06314fa9ff169c682cd65bcd8373b9401a411499b0df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8bb1672a434e305569e06314fa9ff169c682cd65bcd8373b9401a411499b0df->enter($__internal_a8bb1672a434e305569e06314fa9ff169c682cd65bcd8373b9401a411499b0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_1a11f3ad96c791f5292e5ceb564adfad2e409643a26312e86fb8866d47e66b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a11f3ad96c791f5292e5ceb564adfad2e409643a26312e86fb8866d47e66b30->enter($__internal_1a11f3ad96c791f5292e5ceb564adfad2e409643a26312e86fb8866d47e66b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8bb1672a434e305569e06314fa9ff169c682cd65bcd8373b9401a411499b0df->leave($__internal_a8bb1672a434e305569e06314fa9ff169c682cd65bcd8373b9401a411499b0df_prof);

        
        $__internal_1a11f3ad96c791f5292e5ceb564adfad2e409643a26312e86fb8866d47e66b30->leave($__internal_1a11f3ad96c791f5292e5ceb564adfad2e409643a26312e86fb8866d47e66b30_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_4c7072a124375706b2bff0db0dfb1c58cd52a6d830401b16b10eb30c357191c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c7072a124375706b2bff0db0dfb1c58cd52a6d830401b16b10eb30c357191c0->enter($__internal_4c7072a124375706b2bff0db0dfb1c58cd52a6d830401b16b10eb30c357191c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e60c0db16351f12bd72be6bf9974ea1e993769811a0b1ea4a23fda25c0da3367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e60c0db16351f12bd72be6bf9974ea1e993769811a0b1ea4a23fda25c0da3367->enter($__internal_e60c0db16351f12bd72be6bf9974ea1e993769811a0b1ea4a23fda25c0da3367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_e60c0db16351f12bd72be6bf9974ea1e993769811a0b1ea4a23fda25c0da3367->leave($__internal_e60c0db16351f12bd72be6bf9974ea1e993769811a0b1ea4a23fda25c0da3367_prof);

        
        $__internal_4c7072a124375706b2bff0db0dfb1c58cd52a6d830401b16b10eb30c357191c0->leave($__internal_4c7072a124375706b2bff0db0dfb1c58cd52a6d830401b16b10eb30c357191c0_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_45d91ceaacc177c83df7a715b2b2b14c0d3da8174692cbecf45f35906b88be82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45d91ceaacc177c83df7a715b2b2b14c0d3da8174692cbecf45f35906b88be82->enter($__internal_45d91ceaacc177c83df7a715b2b2b14c0d3da8174692cbecf45f35906b88be82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_35be7dd2325c2cb519dbe552df022fc93458ca2991e68cc1d7648848f4343184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35be7dd2325c2cb519dbe552df022fc93458ca2991e68cc1d7648848f4343184->enter($__internal_35be7dd2325c2cb519dbe552df022fc93458ca2991e68cc1d7648848f4343184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_35be7dd2325c2cb519dbe552df022fc93458ca2991e68cc1d7648848f4343184->leave($__internal_35be7dd2325c2cb519dbe552df022fc93458ca2991e68cc1d7648848f4343184_prof);

        
        $__internal_45d91ceaacc177c83df7a715b2b2b14c0d3da8174692cbecf45f35906b88be82->leave($__internal_45d91ceaacc177c83df7a715b2b2b14c0d3da8174692cbecf45f35906b88be82_prof);

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

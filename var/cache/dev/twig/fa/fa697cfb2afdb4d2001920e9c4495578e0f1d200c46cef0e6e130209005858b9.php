<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_dddad2b28bae177ba7199bc03a718ed05f4b98ce4993985a672df949f07c35f1 extends Twig_Template
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
        $__internal_5ef205fb8dc08017f54714f0fe1a09f43bbac056f87cb61c31571701e81f297f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ef205fb8dc08017f54714f0fe1a09f43bbac056f87cb61c31571701e81f297f->enter($__internal_5ef205fb8dc08017f54714f0fe1a09f43bbac056f87cb61c31571701e81f297f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_7961db653fbceccd8d44fe6d5670e1f661f775af24763370f7d4267cd2210e50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7961db653fbceccd8d44fe6d5670e1f661f775af24763370f7d4267cd2210e50->enter($__internal_7961db653fbceccd8d44fe6d5670e1f661f775af24763370f7d4267cd2210e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ef205fb8dc08017f54714f0fe1a09f43bbac056f87cb61c31571701e81f297f->leave($__internal_5ef205fb8dc08017f54714f0fe1a09f43bbac056f87cb61c31571701e81f297f_prof);

        
        $__internal_7961db653fbceccd8d44fe6d5670e1f661f775af24763370f7d4267cd2210e50->leave($__internal_7961db653fbceccd8d44fe6d5670e1f661f775af24763370f7d4267cd2210e50_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_191659118b48db0870802e58e9cde5f0d044e4d44c9620f2318dcd036fab6788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_191659118b48db0870802e58e9cde5f0d044e4d44c9620f2318dcd036fab6788->enter($__internal_191659118b48db0870802e58e9cde5f0d044e4d44c9620f2318dcd036fab6788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e6afdbfa62e0e04738c7561c4d763a157dbfe4dd8f8808f09d438ca11c3585b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6afdbfa62e0e04738c7561c4d763a157dbfe4dd8f8808f09d438ca11c3585b4->enter($__internal_e6afdbfa62e0e04738c7561c4d763a157dbfe4dd8f8808f09d438ca11c3585b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_e6afdbfa62e0e04738c7561c4d763a157dbfe4dd8f8808f09d438ca11c3585b4->leave($__internal_e6afdbfa62e0e04738c7561c4d763a157dbfe4dd8f8808f09d438ca11c3585b4_prof);

        
        $__internal_191659118b48db0870802e58e9cde5f0d044e4d44c9620f2318dcd036fab6788->leave($__internal_191659118b48db0870802e58e9cde5f0d044e4d44c9620f2318dcd036fab6788_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3c180f5187b785ff5f030a1dd26d901dd79c8f59b6f9d40b167affd213a14ecd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c180f5187b785ff5f030a1dd26d901dd79c8f59b6f9d40b167affd213a14ecd->enter($__internal_3c180f5187b785ff5f030a1dd26d901dd79c8f59b6f9d40b167affd213a14ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7366f07601f3a1dd82ca5e417d93872ae717f115f807a04dde710300f2df16bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7366f07601f3a1dd82ca5e417d93872ae717f115f807a04dde710300f2df16bd->enter($__internal_7366f07601f3a1dd82ca5e417d93872ae717f115f807a04dde710300f2df16bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_7366f07601f3a1dd82ca5e417d93872ae717f115f807a04dde710300f2df16bd->leave($__internal_7366f07601f3a1dd82ca5e417d93872ae717f115f807a04dde710300f2df16bd_prof);

        
        $__internal_3c180f5187b785ff5f030a1dd26d901dd79c8f59b6f9d40b167affd213a14ecd->leave($__internal_3c180f5187b785ff5f030a1dd26d901dd79c8f59b6f9d40b167affd213a14ecd_prof);

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

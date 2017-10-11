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
        $__internal_bc93efee97371217b4dca49918ca520f3f5dc075b24ee002d41437ae3100c996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc93efee97371217b4dca49918ca520f3f5dc075b24ee002d41437ae3100c996->enter($__internal_bc93efee97371217b4dca49918ca520f3f5dc075b24ee002d41437ae3100c996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_9a6817514ab408f11b1a92e70f9a263a5c35cab517cceec559bfa091a808c7f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a6817514ab408f11b1a92e70f9a263a5c35cab517cceec559bfa091a808c7f5->enter($__internal_9a6817514ab408f11b1a92e70f9a263a5c35cab517cceec559bfa091a808c7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc93efee97371217b4dca49918ca520f3f5dc075b24ee002d41437ae3100c996->leave($__internal_bc93efee97371217b4dca49918ca520f3f5dc075b24ee002d41437ae3100c996_prof);

        
        $__internal_9a6817514ab408f11b1a92e70f9a263a5c35cab517cceec559bfa091a808c7f5->leave($__internal_9a6817514ab408f11b1a92e70f9a263a5c35cab517cceec559bfa091a808c7f5_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_e2ae81f34b2c75cc05c18fe53465e5ee36d846bb103876ee5b354ba14e26bdb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2ae81f34b2c75cc05c18fe53465e5ee36d846bb103876ee5b354ba14e26bdb7->enter($__internal_e2ae81f34b2c75cc05c18fe53465e5ee36d846bb103876ee5b354ba14e26bdb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_759b9b5ed98da28c907f09f9f724a87725a541176405139b84147c2f582ca3c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_759b9b5ed98da28c907f09f9f724a87725a541176405139b84147c2f582ca3c4->enter($__internal_759b9b5ed98da28c907f09f9f724a87725a541176405139b84147c2f582ca3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_759b9b5ed98da28c907f09f9f724a87725a541176405139b84147c2f582ca3c4->leave($__internal_759b9b5ed98da28c907f09f9f724a87725a541176405139b84147c2f582ca3c4_prof);

        
        $__internal_e2ae81f34b2c75cc05c18fe53465e5ee36d846bb103876ee5b354ba14e26bdb7->leave($__internal_e2ae81f34b2c75cc05c18fe53465e5ee36d846bb103876ee5b354ba14e26bdb7_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_11e68134e283768dd679eb5fc7c2d684f9074e119ac3830015b602a9faa69421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11e68134e283768dd679eb5fc7c2d684f9074e119ac3830015b602a9faa69421->enter($__internal_11e68134e283768dd679eb5fc7c2d684f9074e119ac3830015b602a9faa69421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ce60a5a00a4d67613189db54705b94ddb30aad2e0d87014a71c900e94a63f67f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce60a5a00a4d67613189db54705b94ddb30aad2e0d87014a71c900e94a63f67f->enter($__internal_ce60a5a00a4d67613189db54705b94ddb30aad2e0d87014a71c900e94a63f67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_ce60a5a00a4d67613189db54705b94ddb30aad2e0d87014a71c900e94a63f67f->leave($__internal_ce60a5a00a4d67613189db54705b94ddb30aad2e0d87014a71c900e94a63f67f_prof);

        
        $__internal_11e68134e283768dd679eb5fc7c2d684f9074e119ac3830015b602a9faa69421->leave($__internal_11e68134e283768dd679eb5fc7c2d684f9074e119ac3830015b602a9faa69421_prof);

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

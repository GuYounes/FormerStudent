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
        $__internal_481d462416a0a3827a965bfba741af31b33f773dc1c1f9b14401edc78356e611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_481d462416a0a3827a965bfba741af31b33f773dc1c1f9b14401edc78356e611->enter($__internal_481d462416a0a3827a965bfba741af31b33f773dc1c1f9b14401edc78356e611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_f60c1289cc37f6324971d968fe53a5f1079e17bb8e5b8d0237c18faacf8601c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f60c1289cc37f6324971d968fe53a5f1079e17bb8e5b8d0237c18faacf8601c1->enter($__internal_f60c1289cc37f6324971d968fe53a5f1079e17bb8e5b8d0237c18faacf8601c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_481d462416a0a3827a965bfba741af31b33f773dc1c1f9b14401edc78356e611->leave($__internal_481d462416a0a3827a965bfba741af31b33f773dc1c1f9b14401edc78356e611_prof);

        
        $__internal_f60c1289cc37f6324971d968fe53a5f1079e17bb8e5b8d0237c18faacf8601c1->leave($__internal_f60c1289cc37f6324971d968fe53a5f1079e17bb8e5b8d0237c18faacf8601c1_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_b0137a5c4ab53ae52b85f7a1841ba5c2c95d1413d877bf2c56ae43e18f464061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0137a5c4ab53ae52b85f7a1841ba5c2c95d1413d877bf2c56ae43e18f464061->enter($__internal_b0137a5c4ab53ae52b85f7a1841ba5c2c95d1413d877bf2c56ae43e18f464061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_61d6441a8a41309989a84236e67b43da9ceca65c66dd9f2d5804f30901844113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61d6441a8a41309989a84236e67b43da9ceca65c66dd9f2d5804f30901844113->enter($__internal_61d6441a8a41309989a84236e67b43da9ceca65c66dd9f2d5804f30901844113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_61d6441a8a41309989a84236e67b43da9ceca65c66dd9f2d5804f30901844113->leave($__internal_61d6441a8a41309989a84236e67b43da9ceca65c66dd9f2d5804f30901844113_prof);

        
        $__internal_b0137a5c4ab53ae52b85f7a1841ba5c2c95d1413d877bf2c56ae43e18f464061->leave($__internal_b0137a5c4ab53ae52b85f7a1841ba5c2c95d1413d877bf2c56ae43e18f464061_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fd9b25dc99b7c819eb51f0e36f4e8b1e62b513e815b9a662c3c8120521cefe49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd9b25dc99b7c819eb51f0e36f4e8b1e62b513e815b9a662c3c8120521cefe49->enter($__internal_fd9b25dc99b7c819eb51f0e36f4e8b1e62b513e815b9a662c3c8120521cefe49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_649c0aa72dcb0e1a4b64d96d66b39724656c09e9874745f4daf16eaf5e7efd8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_649c0aa72dcb0e1a4b64d96d66b39724656c09e9874745f4daf16eaf5e7efd8e->enter($__internal_649c0aa72dcb0e1a4b64d96d66b39724656c09e9874745f4daf16eaf5e7efd8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_649c0aa72dcb0e1a4b64d96d66b39724656c09e9874745f4daf16eaf5e7efd8e->leave($__internal_649c0aa72dcb0e1a4b64d96d66b39724656c09e9874745f4daf16eaf5e7efd8e_prof);

        
        $__internal_fd9b25dc99b7c819eb51f0e36f4e8b1e62b513e815b9a662c3c8120521cefe49->leave($__internal_fd9b25dc99b7c819eb51f0e36f4e8b1e62b513e815b9a662c3c8120521cefe49_prof);

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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}

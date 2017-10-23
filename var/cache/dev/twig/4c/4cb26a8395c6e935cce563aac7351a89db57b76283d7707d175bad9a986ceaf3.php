<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_7189761eadc29ed00b626242fcf30293c4cd501f780ade8f41ff68b1e938394b extends Twig_Template
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
        $__internal_39775c1176591f5235fa891c79c8fa0d24c4aff5f29c5ed7d70e97f69eb7144f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39775c1176591f5235fa891c79c8fa0d24c4aff5f29c5ed7d70e97f69eb7144f->enter($__internal_39775c1176591f5235fa891c79c8fa0d24c4aff5f29c5ed7d70e97f69eb7144f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_11801c29e7a13e1b4f340a54aafc6fb15bbf6de65a37c9cc9394e2d4d2c32bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11801c29e7a13e1b4f340a54aafc6fb15bbf6de65a37c9cc9394e2d4d2c32bf2->enter($__internal_11801c29e7a13e1b4f340a54aafc6fb15bbf6de65a37c9cc9394e2d4d2c32bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39775c1176591f5235fa891c79c8fa0d24c4aff5f29c5ed7d70e97f69eb7144f->leave($__internal_39775c1176591f5235fa891c79c8fa0d24c4aff5f29c5ed7d70e97f69eb7144f_prof);

        
        $__internal_11801c29e7a13e1b4f340a54aafc6fb15bbf6de65a37c9cc9394e2d4d2c32bf2->leave($__internal_11801c29e7a13e1b4f340a54aafc6fb15bbf6de65a37c9cc9394e2d4d2c32bf2_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_3ed1178f3d5cbafdcbf7361076aa79c5ad969adbe1f6412cd4f28945c83e7621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ed1178f3d5cbafdcbf7361076aa79c5ad969adbe1f6412cd4f28945c83e7621->enter($__internal_3ed1178f3d5cbafdcbf7361076aa79c5ad969adbe1f6412cd4f28945c83e7621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_0ef8256de0a37ec9622d6bb9b3818133b84b3cb6e1d58a6945e7d426032f2acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef8256de0a37ec9622d6bb9b3818133b84b3cb6e1d58a6945e7d426032f2acc->enter($__internal_0ef8256de0a37ec9622d6bb9b3818133b84b3cb6e1d58a6945e7d426032f2acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_0ef8256de0a37ec9622d6bb9b3818133b84b3cb6e1d58a6945e7d426032f2acc->leave($__internal_0ef8256de0a37ec9622d6bb9b3818133b84b3cb6e1d58a6945e7d426032f2acc_prof);

        
        $__internal_3ed1178f3d5cbafdcbf7361076aa79c5ad969adbe1f6412cd4f28945c83e7621->leave($__internal_3ed1178f3d5cbafdcbf7361076aa79c5ad969adbe1f6412cd4f28945c83e7621_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0aa7ec2c7556125ed3ce0c7cd27be343ebe09788d597656b3081a6554447ccf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aa7ec2c7556125ed3ce0c7cd27be343ebe09788d597656b3081a6554447ccf0->enter($__internal_0aa7ec2c7556125ed3ce0c7cd27be343ebe09788d597656b3081a6554447ccf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_90600afd1939ab104ab8cba1bc628bb1c20f37945fa9a188f9ab376666344130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90600afd1939ab104ab8cba1bc628bb1c20f37945fa9a188f9ab376666344130->enter($__internal_90600afd1939ab104ab8cba1bc628bb1c20f37945fa9a188f9ab376666344130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_90600afd1939ab104ab8cba1bc628bb1c20f37945fa9a188f9ab376666344130->leave($__internal_90600afd1939ab104ab8cba1bc628bb1c20f37945fa9a188f9ab376666344130_prof);

        
        $__internal_0aa7ec2c7556125ed3ce0c7cd27be343ebe09788d597656b3081a6554447ccf0->leave($__internal_0aa7ec2c7556125ed3ce0c7cd27be343ebe09788d597656b3081a6554447ccf0_prof);

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

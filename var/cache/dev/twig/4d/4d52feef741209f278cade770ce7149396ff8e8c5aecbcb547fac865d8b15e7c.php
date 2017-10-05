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
        $__internal_848634cf100d6c56f2724c8eccf7675cd0035b14dcdb7622823480b21fb444c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_848634cf100d6c56f2724c8eccf7675cd0035b14dcdb7622823480b21fb444c8->enter($__internal_848634cf100d6c56f2724c8eccf7675cd0035b14dcdb7622823480b21fb444c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_ec59b7058689e223b8b0da38301d3a4bc886ad6c9c1172ad6fa0d04e59d42881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec59b7058689e223b8b0da38301d3a4bc886ad6c9c1172ad6fa0d04e59d42881->enter($__internal_ec59b7058689e223b8b0da38301d3a4bc886ad6c9c1172ad6fa0d04e59d42881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_848634cf100d6c56f2724c8eccf7675cd0035b14dcdb7622823480b21fb444c8->leave($__internal_848634cf100d6c56f2724c8eccf7675cd0035b14dcdb7622823480b21fb444c8_prof);

        
        $__internal_ec59b7058689e223b8b0da38301d3a4bc886ad6c9c1172ad6fa0d04e59d42881->leave($__internal_ec59b7058689e223b8b0da38301d3a4bc886ad6c9c1172ad6fa0d04e59d42881_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_d01d43200bbc9bd7dc0c9983fcc485eb3cdd6d8126e58bf90c4f12360d9e1f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d01d43200bbc9bd7dc0c9983fcc485eb3cdd6d8126e58bf90c4f12360d9e1f56->enter($__internal_d01d43200bbc9bd7dc0c9983fcc485eb3cdd6d8126e58bf90c4f12360d9e1f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_6bd2e48e6fc98199cbf4372e36bde5a279dd28949e0fb34024ebe282df9c18f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd2e48e6fc98199cbf4372e36bde5a279dd28949e0fb34024ebe282df9c18f0->enter($__internal_6bd2e48e6fc98199cbf4372e36bde5a279dd28949e0fb34024ebe282df9c18f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_6bd2e48e6fc98199cbf4372e36bde5a279dd28949e0fb34024ebe282df9c18f0->leave($__internal_6bd2e48e6fc98199cbf4372e36bde5a279dd28949e0fb34024ebe282df9c18f0_prof);

        
        $__internal_d01d43200bbc9bd7dc0c9983fcc485eb3cdd6d8126e58bf90c4f12360d9e1f56->leave($__internal_d01d43200bbc9bd7dc0c9983fcc485eb3cdd6d8126e58bf90c4f12360d9e1f56_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_79f85066e7787af21a904b4bf3a24fb51a4fe6ce35d0e227403351c6aa4c362d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79f85066e7787af21a904b4bf3a24fb51a4fe6ce35d0e227403351c6aa4c362d->enter($__internal_79f85066e7787af21a904b4bf3a24fb51a4fe6ce35d0e227403351c6aa4c362d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_95d10b021eb22492bda3397b6a3bb11dc57e439dfad688a5e6b41a3568bca267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d10b021eb22492bda3397b6a3bb11dc57e439dfad688a5e6b41a3568bca267->enter($__internal_95d10b021eb22492bda3397b6a3bb11dc57e439dfad688a5e6b41a3568bca267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_95d10b021eb22492bda3397b6a3bb11dc57e439dfad688a5e6b41a3568bca267->leave($__internal_95d10b021eb22492bda3397b6a3bb11dc57e439dfad688a5e6b41a3568bca267_prof);

        
        $__internal_79f85066e7787af21a904b4bf3a24fb51a4fe6ce35d0e227403351c6aa4c362d->leave($__internal_79f85066e7787af21a904b4bf3a24fb51a4fe6ce35d0e227403351c6aa4c362d_prof);

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
", "@WebProfiler/Profiler/info.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
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
        $__internal_574fbe006a12b73b9ebc5c447e7e26c247b8af0e7b5b4ef7def71faab1749416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_574fbe006a12b73b9ebc5c447e7e26c247b8af0e7b5b4ef7def71faab1749416->enter($__internal_574fbe006a12b73b9ebc5c447e7e26c247b8af0e7b5b4ef7def71faab1749416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_14f0cf1db4ae65c596a138f52ee910d8b4b3267d428f52d5909f27a8aca6e7ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f0cf1db4ae65c596a138f52ee910d8b4b3267d428f52d5909f27a8aca6e7ac->enter($__internal_14f0cf1db4ae65c596a138f52ee910d8b4b3267d428f52d5909f27a8aca6e7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_574fbe006a12b73b9ebc5c447e7e26c247b8af0e7b5b4ef7def71faab1749416->leave($__internal_574fbe006a12b73b9ebc5c447e7e26c247b8af0e7b5b4ef7def71faab1749416_prof);

        
        $__internal_14f0cf1db4ae65c596a138f52ee910d8b4b3267d428f52d5909f27a8aca6e7ac->leave($__internal_14f0cf1db4ae65c596a138f52ee910d8b4b3267d428f52d5909f27a8aca6e7ac_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_6635912ded9174b1f8df86db335d8e6c640b691273c0f93d8d55a165b5018707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6635912ded9174b1f8df86db335d8e6c640b691273c0f93d8d55a165b5018707->enter($__internal_6635912ded9174b1f8df86db335d8e6c640b691273c0f93d8d55a165b5018707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_cb6ed782e63ac95b2e441f19d95ac34c0d0dc7813b64b45eb7bc6f7788202479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb6ed782e63ac95b2e441f19d95ac34c0d0dc7813b64b45eb7bc6f7788202479->enter($__internal_cb6ed782e63ac95b2e441f19d95ac34c0d0dc7813b64b45eb7bc6f7788202479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_cb6ed782e63ac95b2e441f19d95ac34c0d0dc7813b64b45eb7bc6f7788202479->leave($__internal_cb6ed782e63ac95b2e441f19d95ac34c0d0dc7813b64b45eb7bc6f7788202479_prof);

        
        $__internal_6635912ded9174b1f8df86db335d8e6c640b691273c0f93d8d55a165b5018707->leave($__internal_6635912ded9174b1f8df86db335d8e6c640b691273c0f93d8d55a165b5018707_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dceeedf2c067f1db11dcf3fac83ae685dddde5de84b1995e7cc694e3df0afce5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dceeedf2c067f1db11dcf3fac83ae685dddde5de84b1995e7cc694e3df0afce5->enter($__internal_dceeedf2c067f1db11dcf3fac83ae685dddde5de84b1995e7cc694e3df0afce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ada5786d520a20bebc1fa00122dde162b131bdeea1f9afbcb5b59d9c3ef89a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ada5786d520a20bebc1fa00122dde162b131bdeea1f9afbcb5b59d9c3ef89a33->enter($__internal_ada5786d520a20bebc1fa00122dde162b131bdeea1f9afbcb5b59d9c3ef89a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_ada5786d520a20bebc1fa00122dde162b131bdeea1f9afbcb5b59d9c3ef89a33->leave($__internal_ada5786d520a20bebc1fa00122dde162b131bdeea1f9afbcb5b59d9c3ef89a33_prof);

        
        $__internal_dceeedf2c067f1db11dcf3fac83ae685dddde5de84b1995e7cc694e3df0afce5->leave($__internal_dceeedf2c067f1db11dcf3fac83ae685dddde5de84b1995e7cc694e3df0afce5_prof);

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

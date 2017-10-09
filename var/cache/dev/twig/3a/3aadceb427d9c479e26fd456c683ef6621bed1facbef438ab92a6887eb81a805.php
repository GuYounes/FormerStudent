<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_20f23f29e1195775636e6da9569a532c2d9298fa45bc097159b0f8ae6b0ff437 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55fa83032d94e453f1ef877f4f6a2b0d27b4370cc4b7b4174afd5014113a134f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55fa83032d94e453f1ef877f4f6a2b0d27b4370cc4b7b4174afd5014113a134f->enter($__internal_55fa83032d94e453f1ef877f4f6a2b0d27b4370cc4b7b4174afd5014113a134f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_7afec62308db0dea860639730fb800f626ee4829229a811f7cde05fa20b2d4bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7afec62308db0dea860639730fb800f626ee4829229a811f7cde05fa20b2d4bd->enter($__internal_7afec62308db0dea860639730fb800f626ee4829229a811f7cde05fa20b2d4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55fa83032d94e453f1ef877f4f6a2b0d27b4370cc4b7b4174afd5014113a134f->leave($__internal_55fa83032d94e453f1ef877f4f6a2b0d27b4370cc4b7b4174afd5014113a134f_prof);

        
        $__internal_7afec62308db0dea860639730fb800f626ee4829229a811f7cde05fa20b2d4bd->leave($__internal_7afec62308db0dea860639730fb800f626ee4829229a811f7cde05fa20b2d4bd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7473f244f7b3aac0e7f5a8eede6b88bc0e0c2b4301a1433f3119d93b36bf9664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7473f244f7b3aac0e7f5a8eede6b88bc0e0c2b4301a1433f3119d93b36bf9664->enter($__internal_7473f244f7b3aac0e7f5a8eede6b88bc0e0c2b4301a1433f3119d93b36bf9664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7115dd4bb2a9977cdeec4f47e746b268e5871a53e16cda5676e20bf9fb9d69ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7115dd4bb2a9977cdeec4f47e746b268e5871a53e16cda5676e20bf9fb9d69ea->enter($__internal_7115dd4bb2a9977cdeec4f47e746b268e5871a53e16cda5676e20bf9fb9d69ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7115dd4bb2a9977cdeec4f47e746b268e5871a53e16cda5676e20bf9fb9d69ea->leave($__internal_7115dd4bb2a9977cdeec4f47e746b268e5871a53e16cda5676e20bf9fb9d69ea_prof);

        
        $__internal_7473f244f7b3aac0e7f5a8eede6b88bc0e0c2b4301a1433f3119d93b36bf9664->leave($__internal_7473f244f7b3aac0e7f5a8eede6b88bc0e0c2b4301a1433f3119d93b36bf9664_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bd3b80b9f2ba56a8aaf1c5162045e627f40b5f85af2211142030b9d03101b0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bd3b80b9f2ba56a8aaf1c5162045e627f40b5f85af2211142030b9d03101b0c->enter($__internal_4bd3b80b9f2ba56a8aaf1c5162045e627f40b5f85af2211142030b9d03101b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0bb39ffee569b1b2cc24d5e83154411743a2589ce268277b808b5bb92773921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0bb39ffee569b1b2cc24d5e83154411743a2589ce268277b808b5bb92773921->enter($__internal_c0bb39ffee569b1b2cc24d5e83154411743a2589ce268277b808b5bb92773921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c0bb39ffee569b1b2cc24d5e83154411743a2589ce268277b808b5bb92773921->leave($__internal_c0bb39ffee569b1b2cc24d5e83154411743a2589ce268277b808b5bb92773921_prof);

        
        $__internal_4bd3b80b9f2ba56a8aaf1c5162045e627f40b5f85af2211142030b9d03101b0c->leave($__internal_4bd3b80b9f2ba56a8aaf1c5162045e627f40b5f85af2211142030b9d03101b0c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}

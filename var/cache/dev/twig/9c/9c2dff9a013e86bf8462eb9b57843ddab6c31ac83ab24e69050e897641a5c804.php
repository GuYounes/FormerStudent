<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_97ac3e2457da1f03a14fc71ece1e538546be990d7d2a9329467b1bff51e8a758 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_e0e7616e7ee05f2c26a0c43882c01436bb13fc75d872c5461950cfe2f300d0fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0e7616e7ee05f2c26a0c43882c01436bb13fc75d872c5461950cfe2f300d0fc->enter($__internal_e0e7616e7ee05f2c26a0c43882c01436bb13fc75d872c5461950cfe2f300d0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_665d7578e483dd1d204147b854bf7f2b0a403b4f493f555d49e3464066da8dae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_665d7578e483dd1d204147b854bf7f2b0a403b4f493f555d49e3464066da8dae->enter($__internal_665d7578e483dd1d204147b854bf7f2b0a403b4f493f555d49e3464066da8dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0e7616e7ee05f2c26a0c43882c01436bb13fc75d872c5461950cfe2f300d0fc->leave($__internal_e0e7616e7ee05f2c26a0c43882c01436bb13fc75d872c5461950cfe2f300d0fc_prof);

        
        $__internal_665d7578e483dd1d204147b854bf7f2b0a403b4f493f555d49e3464066da8dae->leave($__internal_665d7578e483dd1d204147b854bf7f2b0a403b4f493f555d49e3464066da8dae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_997641e362b39612847d829f7f49f1c8e8ed6848999d588ef170d546255b5938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_997641e362b39612847d829f7f49f1c8e8ed6848999d588ef170d546255b5938->enter($__internal_997641e362b39612847d829f7f49f1c8e8ed6848999d588ef170d546255b5938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e0818d622fafd679c11ecf1e16fc586f5b5b9a298fda68b521f12e12e04ee98e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0818d622fafd679c11ecf1e16fc586f5b5b9a298fda68b521f12e12e04ee98e->enter($__internal_e0818d622fafd679c11ecf1e16fc586f5b5b9a298fda68b521f12e12e04ee98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e0818d622fafd679c11ecf1e16fc586f5b5b9a298fda68b521f12e12e04ee98e->leave($__internal_e0818d622fafd679c11ecf1e16fc586f5b5b9a298fda68b521f12e12e04ee98e_prof);

        
        $__internal_997641e362b39612847d829f7f49f1c8e8ed6848999d588ef170d546255b5938->leave($__internal_997641e362b39612847d829f7f49f1c8e8ed6848999d588ef170d546255b5938_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bed6d7ea992ca4914ab9e1c5340c3bfadaa9053ca6364be0083d83a6cb247f57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bed6d7ea992ca4914ab9e1c5340c3bfadaa9053ca6364be0083d83a6cb247f57->enter($__internal_bed6d7ea992ca4914ab9e1c5340c3bfadaa9053ca6364be0083d83a6cb247f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9e050096200ee7b49fc4b9f17a9ae90a7ac7254d90569936f0f3c42816a4c4a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e050096200ee7b49fc4b9f17a9ae90a7ac7254d90569936f0f3c42816a4c4a2->enter($__internal_9e050096200ee7b49fc4b9f17a9ae90a7ac7254d90569936f0f3c42816a4c4a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9e050096200ee7b49fc4b9f17a9ae90a7ac7254d90569936f0f3c42816a4c4a2->leave($__internal_9e050096200ee7b49fc4b9f17a9ae90a7ac7254d90569936f0f3c42816a4c4a2_prof);

        
        $__internal_bed6d7ea992ca4914ab9e1c5340c3bfadaa9053ca6364be0083d83a6cb247f57->leave($__internal_bed6d7ea992ca4914ab9e1c5340c3bfadaa9053ca6364be0083d83a6cb247f57_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

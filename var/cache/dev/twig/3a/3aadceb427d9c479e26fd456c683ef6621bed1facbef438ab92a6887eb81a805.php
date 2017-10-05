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
        $__internal_fa4d75a3e0ff769998200dac8e55c59d4e273b0de45f9e392ef663499209d8ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa4d75a3e0ff769998200dac8e55c59d4e273b0de45f9e392ef663499209d8ea->enter($__internal_fa4d75a3e0ff769998200dac8e55c59d4e273b0de45f9e392ef663499209d8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_17d50f01b941cf296b31a476782f462acf0c4b0002c97e71ecef4af38a5c7241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d50f01b941cf296b31a476782f462acf0c4b0002c97e71ecef4af38a5c7241->enter($__internal_17d50f01b941cf296b31a476782f462acf0c4b0002c97e71ecef4af38a5c7241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa4d75a3e0ff769998200dac8e55c59d4e273b0de45f9e392ef663499209d8ea->leave($__internal_fa4d75a3e0ff769998200dac8e55c59d4e273b0de45f9e392ef663499209d8ea_prof);

        
        $__internal_17d50f01b941cf296b31a476782f462acf0c4b0002c97e71ecef4af38a5c7241->leave($__internal_17d50f01b941cf296b31a476782f462acf0c4b0002c97e71ecef4af38a5c7241_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f53b0a84f7df0666b625c2d064590b8e3994d06d52820fbedae7fce134adc9fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f53b0a84f7df0666b625c2d064590b8e3994d06d52820fbedae7fce134adc9fb->enter($__internal_f53b0a84f7df0666b625c2d064590b8e3994d06d52820fbedae7fce134adc9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2c1e823bf20b664d361e5543bbaf4cad6002963a984503739b5599b5f740e744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c1e823bf20b664d361e5543bbaf4cad6002963a984503739b5599b5f740e744->enter($__internal_2c1e823bf20b664d361e5543bbaf4cad6002963a984503739b5599b5f740e744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2c1e823bf20b664d361e5543bbaf4cad6002963a984503739b5599b5f740e744->leave($__internal_2c1e823bf20b664d361e5543bbaf4cad6002963a984503739b5599b5f740e744_prof);

        
        $__internal_f53b0a84f7df0666b625c2d064590b8e3994d06d52820fbedae7fce134adc9fb->leave($__internal_f53b0a84f7df0666b625c2d064590b8e3994d06d52820fbedae7fce134adc9fb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf8c80f7a3b2adf2842960394d8b0d3fc13aa940ccec615a131055ae4f0dfcba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf8c80f7a3b2adf2842960394d8b0d3fc13aa940ccec615a131055ae4f0dfcba->enter($__internal_bf8c80f7a3b2adf2842960394d8b0d3fc13aa940ccec615a131055ae4f0dfcba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b41f80b4d1ed2d6e3c1e1a2c966b6a1afb456a3f3f7bd5b4d19217d9a8cb302b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b41f80b4d1ed2d6e3c1e1a2c966b6a1afb456a3f3f7bd5b4d19217d9a8cb302b->enter($__internal_b41f80b4d1ed2d6e3c1e1a2c966b6a1afb456a3f3f7bd5b4d19217d9a8cb302b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b41f80b4d1ed2d6e3c1e1a2c966b6a1afb456a3f3f7bd5b4d19217d9a8cb302b->leave($__internal_b41f80b4d1ed2d6e3c1e1a2c966b6a1afb456a3f3f7bd5b4d19217d9a8cb302b_prof);

        
        $__internal_bf8c80f7a3b2adf2842960394d8b0d3fc13aa940ccec615a131055ae4f0dfcba->leave($__internal_bf8c80f7a3b2adf2842960394d8b0d3fc13aa940ccec615a131055ae4f0dfcba_prof);

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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}

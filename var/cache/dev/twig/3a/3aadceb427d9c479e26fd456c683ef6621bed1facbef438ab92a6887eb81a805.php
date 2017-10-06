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
        $__internal_59416139762a4424f621c9cb4f341bfed3a654ae194d7e3827b50ca8d70a5cc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59416139762a4424f621c9cb4f341bfed3a654ae194d7e3827b50ca8d70a5cc8->enter($__internal_59416139762a4424f621c9cb4f341bfed3a654ae194d7e3827b50ca8d70a5cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_4db607abc1f39a4d050d1e2edf7a3dadd9df24ca91b4e71b723a5d690655442d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db607abc1f39a4d050d1e2edf7a3dadd9df24ca91b4e71b723a5d690655442d->enter($__internal_4db607abc1f39a4d050d1e2edf7a3dadd9df24ca91b4e71b723a5d690655442d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59416139762a4424f621c9cb4f341bfed3a654ae194d7e3827b50ca8d70a5cc8->leave($__internal_59416139762a4424f621c9cb4f341bfed3a654ae194d7e3827b50ca8d70a5cc8_prof);

        
        $__internal_4db607abc1f39a4d050d1e2edf7a3dadd9df24ca91b4e71b723a5d690655442d->leave($__internal_4db607abc1f39a4d050d1e2edf7a3dadd9df24ca91b4e71b723a5d690655442d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_48e11b2a1cfd862416f54d7aa480d01b3615b41e6dc6a5a7cbcdd7bfc23201f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48e11b2a1cfd862416f54d7aa480d01b3615b41e6dc6a5a7cbcdd7bfc23201f7->enter($__internal_48e11b2a1cfd862416f54d7aa480d01b3615b41e6dc6a5a7cbcdd7bfc23201f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_64e771a88218ad965c29eda4fd5cf4bff92ce5e2e8e979ec2cee627d81ce7440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64e771a88218ad965c29eda4fd5cf4bff92ce5e2e8e979ec2cee627d81ce7440->enter($__internal_64e771a88218ad965c29eda4fd5cf4bff92ce5e2e8e979ec2cee627d81ce7440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_64e771a88218ad965c29eda4fd5cf4bff92ce5e2e8e979ec2cee627d81ce7440->leave($__internal_64e771a88218ad965c29eda4fd5cf4bff92ce5e2e8e979ec2cee627d81ce7440_prof);

        
        $__internal_48e11b2a1cfd862416f54d7aa480d01b3615b41e6dc6a5a7cbcdd7bfc23201f7->leave($__internal_48e11b2a1cfd862416f54d7aa480d01b3615b41e6dc6a5a7cbcdd7bfc23201f7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f3a501803f13009ac585fe6d2f9d5355c1b82cd9af4a925623f77cf998ea61b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f3a501803f13009ac585fe6d2f9d5355c1b82cd9af4a925623f77cf998ea61b->enter($__internal_9f3a501803f13009ac585fe6d2f9d5355c1b82cd9af4a925623f77cf998ea61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20b0950b6c8b387eee926cc394012cfc4aa40beceba35cbcc478d5724467ff7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20b0950b6c8b387eee926cc394012cfc4aa40beceba35cbcc478d5724467ff7e->enter($__internal_20b0950b6c8b387eee926cc394012cfc4aa40beceba35cbcc478d5724467ff7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_20b0950b6c8b387eee926cc394012cfc4aa40beceba35cbcc478d5724467ff7e->leave($__internal_20b0950b6c8b387eee926cc394012cfc4aa40beceba35cbcc478d5724467ff7e_prof);

        
        $__internal_9f3a501803f13009ac585fe6d2f9d5355c1b82cd9af4a925623f77cf998ea61b->leave($__internal_9f3a501803f13009ac585fe6d2f9d5355c1b82cd9af4a925623f77cf998ea61b_prof);

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

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
        $__internal_928317941e038a8090658ac45c6df04c8fb2ea57b1a693dac88629f372d01703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_928317941e038a8090658ac45c6df04c8fb2ea57b1a693dac88629f372d01703->enter($__internal_928317941e038a8090658ac45c6df04c8fb2ea57b1a693dac88629f372d01703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_4e20ad59bbe0e1c5880cf5897fd8d47593edd2bfe8c8853fb4e0ed402d62c6e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e20ad59bbe0e1c5880cf5897fd8d47593edd2bfe8c8853fb4e0ed402d62c6e7->enter($__internal_4e20ad59bbe0e1c5880cf5897fd8d47593edd2bfe8c8853fb4e0ed402d62c6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_928317941e038a8090658ac45c6df04c8fb2ea57b1a693dac88629f372d01703->leave($__internal_928317941e038a8090658ac45c6df04c8fb2ea57b1a693dac88629f372d01703_prof);

        
        $__internal_4e20ad59bbe0e1c5880cf5897fd8d47593edd2bfe8c8853fb4e0ed402d62c6e7->leave($__internal_4e20ad59bbe0e1c5880cf5897fd8d47593edd2bfe8c8853fb4e0ed402d62c6e7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_388dc14016c00a396a8acb956be2140d9e3cdf0b1d33f77f22cf9b4991a8274e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_388dc14016c00a396a8acb956be2140d9e3cdf0b1d33f77f22cf9b4991a8274e->enter($__internal_388dc14016c00a396a8acb956be2140d9e3cdf0b1d33f77f22cf9b4991a8274e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_52a7b82f9c97c9fe8892176f3db9a420010ee14f82b8fd9e8a6d760bc0557858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52a7b82f9c97c9fe8892176f3db9a420010ee14f82b8fd9e8a6d760bc0557858->enter($__internal_52a7b82f9c97c9fe8892176f3db9a420010ee14f82b8fd9e8a6d760bc0557858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_52a7b82f9c97c9fe8892176f3db9a420010ee14f82b8fd9e8a6d760bc0557858->leave($__internal_52a7b82f9c97c9fe8892176f3db9a420010ee14f82b8fd9e8a6d760bc0557858_prof);

        
        $__internal_388dc14016c00a396a8acb956be2140d9e3cdf0b1d33f77f22cf9b4991a8274e->leave($__internal_388dc14016c00a396a8acb956be2140d9e3cdf0b1d33f77f22cf9b4991a8274e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc30299a9ab956beb0d14c43c7c80fcf3aa10ba2a94a7ea01bf0bcc20a7cc7b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc30299a9ab956beb0d14c43c7c80fcf3aa10ba2a94a7ea01bf0bcc20a7cc7b9->enter($__internal_bc30299a9ab956beb0d14c43c7c80fcf3aa10ba2a94a7ea01bf0bcc20a7cc7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1442ee48674fd32a04a7abbd67d72e0b27662353f3506cff938b2e10219ba0a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1442ee48674fd32a04a7abbd67d72e0b27662353f3506cff938b2e10219ba0a3->enter($__internal_1442ee48674fd32a04a7abbd67d72e0b27662353f3506cff938b2e10219ba0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1442ee48674fd32a04a7abbd67d72e0b27662353f3506cff938b2e10219ba0a3->leave($__internal_1442ee48674fd32a04a7abbd67d72e0b27662353f3506cff938b2e10219ba0a3_prof);

        
        $__internal_bc30299a9ab956beb0d14c43c7c80fcf3aa10ba2a94a7ea01bf0bcc20a7cc7b9->leave($__internal_bc30299a9ab956beb0d14c43c7c80fcf3aa10ba2a94a7ea01bf0bcc20a7cc7b9_prof);

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

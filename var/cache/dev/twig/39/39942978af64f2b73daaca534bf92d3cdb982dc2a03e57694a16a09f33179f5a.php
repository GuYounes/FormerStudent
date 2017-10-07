<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c3c89c8a0f9f298765b9bc44803c212fdcc9797b05215efc851a7e28423c7d53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ce42e35cf578a74b6dd9c7c15a9a152f727a534e23388fcf01786e075042fcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ce42e35cf578a74b6dd9c7c15a9a152f727a534e23388fcf01786e075042fcf->enter($__internal_4ce42e35cf578a74b6dd9c7c15a9a152f727a534e23388fcf01786e075042fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d434397e301eefa0f35dd0d1c8e4b4591c62c60b0a42815ddd0bcb8dcd7aa84c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d434397e301eefa0f35dd0d1c8e4b4591c62c60b0a42815ddd0bcb8dcd7aa84c->enter($__internal_d434397e301eefa0f35dd0d1c8e4b4591c62c60b0a42815ddd0bcb8dcd7aa84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ce42e35cf578a74b6dd9c7c15a9a152f727a534e23388fcf01786e075042fcf->leave($__internal_4ce42e35cf578a74b6dd9c7c15a9a152f727a534e23388fcf01786e075042fcf_prof);

        
        $__internal_d434397e301eefa0f35dd0d1c8e4b4591c62c60b0a42815ddd0bcb8dcd7aa84c->leave($__internal_d434397e301eefa0f35dd0d1c8e4b4591c62c60b0a42815ddd0bcb8dcd7aa84c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e7a40b3918d2289741ea056cda9569ab3193f4799559a6c6f2f9b0f3543436c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7a40b3918d2289741ea056cda9569ab3193f4799559a6c6f2f9b0f3543436c6->enter($__internal_e7a40b3918d2289741ea056cda9569ab3193f4799559a6c6f2f9b0f3543436c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ab4b99e86814f16ffd69917f838ada2ee11ff9a19c1a81797ec63ab11f83e232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab4b99e86814f16ffd69917f838ada2ee11ff9a19c1a81797ec63ab11f83e232->enter($__internal_ab4b99e86814f16ffd69917f838ada2ee11ff9a19c1a81797ec63ab11f83e232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ab4b99e86814f16ffd69917f838ada2ee11ff9a19c1a81797ec63ab11f83e232->leave($__internal_ab4b99e86814f16ffd69917f838ada2ee11ff9a19c1a81797ec63ab11f83e232_prof);

        
        $__internal_e7a40b3918d2289741ea056cda9569ab3193f4799559a6c6f2f9b0f3543436c6->leave($__internal_e7a40b3918d2289741ea056cda9569ab3193f4799559a6c6f2f9b0f3543436c6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3cbc92a01144d3229edbf3b82040418e9cf163317d20d3ba468edf54c37b5cd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cbc92a01144d3229edbf3b82040418e9cf163317d20d3ba468edf54c37b5cd2->enter($__internal_3cbc92a01144d3229edbf3b82040418e9cf163317d20d3ba468edf54c37b5cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b7f2684ab11fcd312a40ee55794cd97efa59ec84fdeed6c81df426206d539689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7f2684ab11fcd312a40ee55794cd97efa59ec84fdeed6c81df426206d539689->enter($__internal_b7f2684ab11fcd312a40ee55794cd97efa59ec84fdeed6c81df426206d539689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b7f2684ab11fcd312a40ee55794cd97efa59ec84fdeed6c81df426206d539689->leave($__internal_b7f2684ab11fcd312a40ee55794cd97efa59ec84fdeed6c81df426206d539689_prof);

        
        $__internal_3cbc92a01144d3229edbf3b82040418e9cf163317d20d3ba468edf54c37b5cd2->leave($__internal_3cbc92a01144d3229edbf3b82040418e9cf163317d20d3ba468edf54c37b5cd2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c17f9b601cd00ae9f48e136a5fab97e34a0f588db51f8d66504c41ec4f0041b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c17f9b601cd00ae9f48e136a5fab97e34a0f588db51f8d66504c41ec4f0041b->enter($__internal_1c17f9b601cd00ae9f48e136a5fab97e34a0f588db51f8d66504c41ec4f0041b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_23802adb9b65a46c2fa79cf2b04cf1644d30c40652d5f8a3ea74a9436c70db6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23802adb9b65a46c2fa79cf2b04cf1644d30c40652d5f8a3ea74a9436c70db6b->enter($__internal_23802adb9b65a46c2fa79cf2b04cf1644d30c40652d5f8a3ea74a9436c70db6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_23802adb9b65a46c2fa79cf2b04cf1644d30c40652d5f8a3ea74a9436c70db6b->leave($__internal_23802adb9b65a46c2fa79cf2b04cf1644d30c40652d5f8a3ea74a9436c70db6b_prof);

        
        $__internal_1c17f9b601cd00ae9f48e136a5fab97e34a0f588db51f8d66504c41ec4f0041b->leave($__internal_1c17f9b601cd00ae9f48e136a5fab97e34a0f588db51f8d66504c41ec4f0041b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

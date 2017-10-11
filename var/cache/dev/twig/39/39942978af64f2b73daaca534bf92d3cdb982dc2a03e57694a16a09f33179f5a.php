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
        $__internal_2eb863b73151a9bff6ef6d5e8d41cbd1d10c4d83293848bc30e79459bac141a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eb863b73151a9bff6ef6d5e8d41cbd1d10c4d83293848bc30e79459bac141a7->enter($__internal_2eb863b73151a9bff6ef6d5e8d41cbd1d10c4d83293848bc30e79459bac141a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_dbfc6d921be9d98f0c1acc575954998770c4991169d75952fcaa9fafe01304b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbfc6d921be9d98f0c1acc575954998770c4991169d75952fcaa9fafe01304b8->enter($__internal_dbfc6d921be9d98f0c1acc575954998770c4991169d75952fcaa9fafe01304b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2eb863b73151a9bff6ef6d5e8d41cbd1d10c4d83293848bc30e79459bac141a7->leave($__internal_2eb863b73151a9bff6ef6d5e8d41cbd1d10c4d83293848bc30e79459bac141a7_prof);

        
        $__internal_dbfc6d921be9d98f0c1acc575954998770c4991169d75952fcaa9fafe01304b8->leave($__internal_dbfc6d921be9d98f0c1acc575954998770c4991169d75952fcaa9fafe01304b8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6973c8901f784a26155339bfe6c8593bd1279c3b5231ede3b8818d51cde71c17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6973c8901f784a26155339bfe6c8593bd1279c3b5231ede3b8818d51cde71c17->enter($__internal_6973c8901f784a26155339bfe6c8593bd1279c3b5231ede3b8818d51cde71c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5eed6d881adf68c4dddb1ee72f7ae42de3924509830d799d642f41f011fb6526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eed6d881adf68c4dddb1ee72f7ae42de3924509830d799d642f41f011fb6526->enter($__internal_5eed6d881adf68c4dddb1ee72f7ae42de3924509830d799d642f41f011fb6526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5eed6d881adf68c4dddb1ee72f7ae42de3924509830d799d642f41f011fb6526->leave($__internal_5eed6d881adf68c4dddb1ee72f7ae42de3924509830d799d642f41f011fb6526_prof);

        
        $__internal_6973c8901f784a26155339bfe6c8593bd1279c3b5231ede3b8818d51cde71c17->leave($__internal_6973c8901f784a26155339bfe6c8593bd1279c3b5231ede3b8818d51cde71c17_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_402ee6f1335e7b8d9c47f692d0cf16e2867d44c64b5de07cc9441b3f32daf56d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_402ee6f1335e7b8d9c47f692d0cf16e2867d44c64b5de07cc9441b3f32daf56d->enter($__internal_402ee6f1335e7b8d9c47f692d0cf16e2867d44c64b5de07cc9441b3f32daf56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_20936c5053da5f1e3082290edfb602d69b0ad54f062cc279565defde5403bba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20936c5053da5f1e3082290edfb602d69b0ad54f062cc279565defde5403bba1->enter($__internal_20936c5053da5f1e3082290edfb602d69b0ad54f062cc279565defde5403bba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_20936c5053da5f1e3082290edfb602d69b0ad54f062cc279565defde5403bba1->leave($__internal_20936c5053da5f1e3082290edfb602d69b0ad54f062cc279565defde5403bba1_prof);

        
        $__internal_402ee6f1335e7b8d9c47f692d0cf16e2867d44c64b5de07cc9441b3f32daf56d->leave($__internal_402ee6f1335e7b8d9c47f692d0cf16e2867d44c64b5de07cc9441b3f32daf56d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b2e4dcdc6b61736ca3bddaad0007d85deecf357a68504cf0ca9c21d9de4e7337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2e4dcdc6b61736ca3bddaad0007d85deecf357a68504cf0ca9c21d9de4e7337->enter($__internal_b2e4dcdc6b61736ca3bddaad0007d85deecf357a68504cf0ca9c21d9de4e7337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ba8fc383f5e4d1448829e8b5d4c8a2310ee16bf91c945477aa3ec82cbfe8dea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba8fc383f5e4d1448829e8b5d4c8a2310ee16bf91c945477aa3ec82cbfe8dea8->enter($__internal_ba8fc383f5e4d1448829e8b5d4c8a2310ee16bf91c945477aa3ec82cbfe8dea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_ba8fc383f5e4d1448829e8b5d4c8a2310ee16bf91c945477aa3ec82cbfe8dea8->leave($__internal_ba8fc383f5e4d1448829e8b5d4c8a2310ee16bf91c945477aa3ec82cbfe8dea8_prof);

        
        $__internal_b2e4dcdc6b61736ca3bddaad0007d85deecf357a68504cf0ca9c21d9de4e7337->leave($__internal_b2e4dcdc6b61736ca3bddaad0007d85deecf357a68504cf0ca9c21d9de4e7337_prof);

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

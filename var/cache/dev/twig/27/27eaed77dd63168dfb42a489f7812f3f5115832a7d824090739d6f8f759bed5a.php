<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_7bf3aa950f68667a47b2e5950bdbbb8a2795073af26cf3bb7f6f619060f8b1e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_7d920be9fc62d8da24140cc149da27a07a8e92e9305b1df7176dca5808fc44a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d920be9fc62d8da24140cc149da27a07a8e92e9305b1df7176dca5808fc44a4->enter($__internal_7d920be9fc62d8da24140cc149da27a07a8e92e9305b1df7176dca5808fc44a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_86e9af9d845a3c0850cb3f923f853bc7214ce58be5dc6a2126022fda7a6517c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e9af9d845a3c0850cb3f923f853bc7214ce58be5dc6a2126022fda7a6517c0->enter($__internal_86e9af9d845a3c0850cb3f923f853bc7214ce58be5dc6a2126022fda7a6517c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d920be9fc62d8da24140cc149da27a07a8e92e9305b1df7176dca5808fc44a4->leave($__internal_7d920be9fc62d8da24140cc149da27a07a8e92e9305b1df7176dca5808fc44a4_prof);

        
        $__internal_86e9af9d845a3c0850cb3f923f853bc7214ce58be5dc6a2126022fda7a6517c0->leave($__internal_86e9af9d845a3c0850cb3f923f853bc7214ce58be5dc6a2126022fda7a6517c0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9a0b06e9e773762db8f1db575a961a7952f54e18abfebbbf60ee299dce52b391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a0b06e9e773762db8f1db575a961a7952f54e18abfebbbf60ee299dce52b391->enter($__internal_9a0b06e9e773762db8f1db575a961a7952f54e18abfebbbf60ee299dce52b391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_17d53b2ac2385378b98cbc70b511faa63ca578fd3718c5e71a685a7bcdfed497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d53b2ac2385378b98cbc70b511faa63ca578fd3718c5e71a685a7bcdfed497->enter($__internal_17d53b2ac2385378b98cbc70b511faa63ca578fd3718c5e71a685a7bcdfed497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_17d53b2ac2385378b98cbc70b511faa63ca578fd3718c5e71a685a7bcdfed497->leave($__internal_17d53b2ac2385378b98cbc70b511faa63ca578fd3718c5e71a685a7bcdfed497_prof);

        
        $__internal_9a0b06e9e773762db8f1db575a961a7952f54e18abfebbbf60ee299dce52b391->leave($__internal_9a0b06e9e773762db8f1db575a961a7952f54e18abfebbbf60ee299dce52b391_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b4f7bb02bdbe56d72f6cf6f982bffbbf432d2f177c97f316cbae7f64a82a73f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4f7bb02bdbe56d72f6cf6f982bffbbf432d2f177c97f316cbae7f64a82a73f9->enter($__internal_b4f7bb02bdbe56d72f6cf6f982bffbbf432d2f177c97f316cbae7f64a82a73f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2341662cd72b31f9f7437e30ead445b6a3b27ae0ca80d3b6365aeed4f124a499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2341662cd72b31f9f7437e30ead445b6a3b27ae0ca80d3b6365aeed4f124a499->enter($__internal_2341662cd72b31f9f7437e30ead445b6a3b27ae0ca80d3b6365aeed4f124a499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2341662cd72b31f9f7437e30ead445b6a3b27ae0ca80d3b6365aeed4f124a499->leave($__internal_2341662cd72b31f9f7437e30ead445b6a3b27ae0ca80d3b6365aeed4f124a499_prof);

        
        $__internal_b4f7bb02bdbe56d72f6cf6f982bffbbf432d2f177c97f316cbae7f64a82a73f9->leave($__internal_b4f7bb02bdbe56d72f6cf6f982bffbbf432d2f177c97f316cbae7f64a82a73f9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c3175b1384bf0e3f3e6ba17331b37f27da9528f955ac15e327ea0c8005ecf717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3175b1384bf0e3f3e6ba17331b37f27da9528f955ac15e327ea0c8005ecf717->enter($__internal_c3175b1384bf0e3f3e6ba17331b37f27da9528f955ac15e327ea0c8005ecf717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_402c381359d3b8a2ad226d6bda92f8c6a42678339d5fce494b1f6a9f1a2bd1a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_402c381359d3b8a2ad226d6bda92f8c6a42678339d5fce494b1f6a9f1a2bd1a2->enter($__internal_402c381359d3b8a2ad226d6bda92f8c6a42678339d5fce494b1f6a9f1a2bd1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_402c381359d3b8a2ad226d6bda92f8c6a42678339d5fce494b1f6a9f1a2bd1a2->leave($__internal_402c381359d3b8a2ad226d6bda92f8c6a42678339d5fce494b1f6a9f1a2bd1a2_prof);

        
        $__internal_c3175b1384bf0e3f3e6ba17331b37f27da9528f955ac15e327ea0c8005ecf717->leave($__internal_c3175b1384bf0e3f3e6ba17331b37f27da9528f955ac15e327ea0c8005ecf717_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

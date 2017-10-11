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
        $__internal_62e69e7552d47d8f1163b7bdb3e1a9ea8943a80024dbfd964221faac342828d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62e69e7552d47d8f1163b7bdb3e1a9ea8943a80024dbfd964221faac342828d4->enter($__internal_62e69e7552d47d8f1163b7bdb3e1a9ea8943a80024dbfd964221faac342828d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_0545a2de0279e5ef66af43ba740446ed1188957e257bb8c8e66db42d9e2d6546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0545a2de0279e5ef66af43ba740446ed1188957e257bb8c8e66db42d9e2d6546->enter($__internal_0545a2de0279e5ef66af43ba740446ed1188957e257bb8c8e66db42d9e2d6546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62e69e7552d47d8f1163b7bdb3e1a9ea8943a80024dbfd964221faac342828d4->leave($__internal_62e69e7552d47d8f1163b7bdb3e1a9ea8943a80024dbfd964221faac342828d4_prof);

        
        $__internal_0545a2de0279e5ef66af43ba740446ed1188957e257bb8c8e66db42d9e2d6546->leave($__internal_0545a2de0279e5ef66af43ba740446ed1188957e257bb8c8e66db42d9e2d6546_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d071571319e309672575e3f9f57f5d3d8cfe423148a48f9b5fbc009a3ee7ba0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d071571319e309672575e3f9f57f5d3d8cfe423148a48f9b5fbc009a3ee7ba0f->enter($__internal_d071571319e309672575e3f9f57f5d3d8cfe423148a48f9b5fbc009a3ee7ba0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_22fd2975389220520b8d18155ab31e106e3db833eb5e04ebe841dd019e47c919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22fd2975389220520b8d18155ab31e106e3db833eb5e04ebe841dd019e47c919->enter($__internal_22fd2975389220520b8d18155ab31e106e3db833eb5e04ebe841dd019e47c919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_22fd2975389220520b8d18155ab31e106e3db833eb5e04ebe841dd019e47c919->leave($__internal_22fd2975389220520b8d18155ab31e106e3db833eb5e04ebe841dd019e47c919_prof);

        
        $__internal_d071571319e309672575e3f9f57f5d3d8cfe423148a48f9b5fbc009a3ee7ba0f->leave($__internal_d071571319e309672575e3f9f57f5d3d8cfe423148a48f9b5fbc009a3ee7ba0f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c0e12e76e40f487a0993f3dcaeca9e290f9ebade0e5d891283d147bd7d8d042c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0e12e76e40f487a0993f3dcaeca9e290f9ebade0e5d891283d147bd7d8d042c->enter($__internal_c0e12e76e40f487a0993f3dcaeca9e290f9ebade0e5d891283d147bd7d8d042c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d46ab8e9c160ecc4c5377897bcb0e0d6808a72ef563f4c4c7c11abb79a88cf0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d46ab8e9c160ecc4c5377897bcb0e0d6808a72ef563f4c4c7c11abb79a88cf0b->enter($__internal_d46ab8e9c160ecc4c5377897bcb0e0d6808a72ef563f4c4c7c11abb79a88cf0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d46ab8e9c160ecc4c5377897bcb0e0d6808a72ef563f4c4c7c11abb79a88cf0b->leave($__internal_d46ab8e9c160ecc4c5377897bcb0e0d6808a72ef563f4c4c7c11abb79a88cf0b_prof);

        
        $__internal_c0e12e76e40f487a0993f3dcaeca9e290f9ebade0e5d891283d147bd7d8d042c->leave($__internal_c0e12e76e40f487a0993f3dcaeca9e290f9ebade0e5d891283d147bd7d8d042c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_84f0c6243b925be8e47624dbfc6fce5255331536cd3a29960e154cb995676c98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84f0c6243b925be8e47624dbfc6fce5255331536cd3a29960e154cb995676c98->enter($__internal_84f0c6243b925be8e47624dbfc6fce5255331536cd3a29960e154cb995676c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3ea7a977b9f4260cbdd54360dcb77e50b2ab0947abb62d94dfa412d230793c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea7a977b9f4260cbdd54360dcb77e50b2ab0947abb62d94dfa412d230793c68->enter($__internal_3ea7a977b9f4260cbdd54360dcb77e50b2ab0947abb62d94dfa412d230793c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_3ea7a977b9f4260cbdd54360dcb77e50b2ab0947abb62d94dfa412d230793c68->leave($__internal_3ea7a977b9f4260cbdd54360dcb77e50b2ab0947abb62d94dfa412d230793c68_prof);

        
        $__internal_84f0c6243b925be8e47624dbfc6fce5255331536cd3a29960e154cb995676c98->leave($__internal_84f0c6243b925be8e47624dbfc6fce5255331536cd3a29960e154cb995676c98_prof);

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

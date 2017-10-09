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
        $__internal_e9133395584ca69bbd726a2569b8b14054c4217b0e8f3c6f930ecb0fc201c482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9133395584ca69bbd726a2569b8b14054c4217b0e8f3c6f930ecb0fc201c482->enter($__internal_e9133395584ca69bbd726a2569b8b14054c4217b0e8f3c6f930ecb0fc201c482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_63e77f9c2fd0b6a6218992aaca4fe9fe4b2ee8bbb44e8c680548418484792e25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63e77f9c2fd0b6a6218992aaca4fe9fe4b2ee8bbb44e8c680548418484792e25->enter($__internal_63e77f9c2fd0b6a6218992aaca4fe9fe4b2ee8bbb44e8c680548418484792e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9133395584ca69bbd726a2569b8b14054c4217b0e8f3c6f930ecb0fc201c482->leave($__internal_e9133395584ca69bbd726a2569b8b14054c4217b0e8f3c6f930ecb0fc201c482_prof);

        
        $__internal_63e77f9c2fd0b6a6218992aaca4fe9fe4b2ee8bbb44e8c680548418484792e25->leave($__internal_63e77f9c2fd0b6a6218992aaca4fe9fe4b2ee8bbb44e8c680548418484792e25_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3bb9c9cbd314177d823dcd18d47f5c25fadf9dd786f81a3730beb726aa4ba703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bb9c9cbd314177d823dcd18d47f5c25fadf9dd786f81a3730beb726aa4ba703->enter($__internal_3bb9c9cbd314177d823dcd18d47f5c25fadf9dd786f81a3730beb726aa4ba703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_71002d50fca5be0f3695aa4f40853cc3404eb4cf8573a7d26a92f7e7327efa58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71002d50fca5be0f3695aa4f40853cc3404eb4cf8573a7d26a92f7e7327efa58->enter($__internal_71002d50fca5be0f3695aa4f40853cc3404eb4cf8573a7d26a92f7e7327efa58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_71002d50fca5be0f3695aa4f40853cc3404eb4cf8573a7d26a92f7e7327efa58->leave($__internal_71002d50fca5be0f3695aa4f40853cc3404eb4cf8573a7d26a92f7e7327efa58_prof);

        
        $__internal_3bb9c9cbd314177d823dcd18d47f5c25fadf9dd786f81a3730beb726aa4ba703->leave($__internal_3bb9c9cbd314177d823dcd18d47f5c25fadf9dd786f81a3730beb726aa4ba703_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fb570d4b680a05dcff36d7c787af24c10b213a62dcb0dd0a42162d24da07b091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb570d4b680a05dcff36d7c787af24c10b213a62dcb0dd0a42162d24da07b091->enter($__internal_fb570d4b680a05dcff36d7c787af24c10b213a62dcb0dd0a42162d24da07b091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_326fec6233088afbf26f2b19f47748cd89eaa4e260a7911e6146e7c64d36fbfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_326fec6233088afbf26f2b19f47748cd89eaa4e260a7911e6146e7c64d36fbfc->enter($__internal_326fec6233088afbf26f2b19f47748cd89eaa4e260a7911e6146e7c64d36fbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_326fec6233088afbf26f2b19f47748cd89eaa4e260a7911e6146e7c64d36fbfc->leave($__internal_326fec6233088afbf26f2b19f47748cd89eaa4e260a7911e6146e7c64d36fbfc_prof);

        
        $__internal_fb570d4b680a05dcff36d7c787af24c10b213a62dcb0dd0a42162d24da07b091->leave($__internal_fb570d4b680a05dcff36d7c787af24c10b213a62dcb0dd0a42162d24da07b091_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_663849bb3a17e49cf4ff4d1e04e98dc7abe8a9a29bb4f3b7695a63068bc96643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_663849bb3a17e49cf4ff4d1e04e98dc7abe8a9a29bb4f3b7695a63068bc96643->enter($__internal_663849bb3a17e49cf4ff4d1e04e98dc7abe8a9a29bb4f3b7695a63068bc96643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a9d1bf2973df93ee49276c58f02a72b094f33963e067304412e551712973ff6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9d1bf2973df93ee49276c58f02a72b094f33963e067304412e551712973ff6f->enter($__internal_a9d1bf2973df93ee49276c58f02a72b094f33963e067304412e551712973ff6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_a9d1bf2973df93ee49276c58f02a72b094f33963e067304412e551712973ff6f->leave($__internal_a9d1bf2973df93ee49276c58f02a72b094f33963e067304412e551712973ff6f_prof);

        
        $__internal_663849bb3a17e49cf4ff4d1e04e98dc7abe8a9a29bb4f3b7695a63068bc96643->leave($__internal_663849bb3a17e49cf4ff4d1e04e98dc7abe8a9a29bb4f3b7695a63068bc96643_prof);

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

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
        $__internal_c4ead5acb70bdbbaac886522c05bfc02f93e483cd9e1cbe86490210d66aacea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4ead5acb70bdbbaac886522c05bfc02f93e483cd9e1cbe86490210d66aacea6->enter($__internal_c4ead5acb70bdbbaac886522c05bfc02f93e483cd9e1cbe86490210d66aacea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5709bbcd52ce1d636412cee35c0959816d68edf4c177c6024acd9cc21b510bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5709bbcd52ce1d636412cee35c0959816d68edf4c177c6024acd9cc21b510bf3->enter($__internal_5709bbcd52ce1d636412cee35c0959816d68edf4c177c6024acd9cc21b510bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4ead5acb70bdbbaac886522c05bfc02f93e483cd9e1cbe86490210d66aacea6->leave($__internal_c4ead5acb70bdbbaac886522c05bfc02f93e483cd9e1cbe86490210d66aacea6_prof);

        
        $__internal_5709bbcd52ce1d636412cee35c0959816d68edf4c177c6024acd9cc21b510bf3->leave($__internal_5709bbcd52ce1d636412cee35c0959816d68edf4c177c6024acd9cc21b510bf3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_00236f6461b74f1b5f0d635380154ead4f80f937f2e6cb1a187e2e8b40ca8023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00236f6461b74f1b5f0d635380154ead4f80f937f2e6cb1a187e2e8b40ca8023->enter($__internal_00236f6461b74f1b5f0d635380154ead4f80f937f2e6cb1a187e2e8b40ca8023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2327c23e4ee21d8b4b46b3a05da7056095726596f264de4bb2a660dc196ba08c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2327c23e4ee21d8b4b46b3a05da7056095726596f264de4bb2a660dc196ba08c->enter($__internal_2327c23e4ee21d8b4b46b3a05da7056095726596f264de4bb2a660dc196ba08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2327c23e4ee21d8b4b46b3a05da7056095726596f264de4bb2a660dc196ba08c->leave($__internal_2327c23e4ee21d8b4b46b3a05da7056095726596f264de4bb2a660dc196ba08c_prof);

        
        $__internal_00236f6461b74f1b5f0d635380154ead4f80f937f2e6cb1a187e2e8b40ca8023->leave($__internal_00236f6461b74f1b5f0d635380154ead4f80f937f2e6cb1a187e2e8b40ca8023_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_53e0ec5e4c6ad76c117cf6732a88cc438f74ed12264d8784fec814b8dbcb70f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53e0ec5e4c6ad76c117cf6732a88cc438f74ed12264d8784fec814b8dbcb70f6->enter($__internal_53e0ec5e4c6ad76c117cf6732a88cc438f74ed12264d8784fec814b8dbcb70f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6fe7884562ab575539936ae1147d52a544c63abc9995742a80df4976fadfb0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fe7884562ab575539936ae1147d52a544c63abc9995742a80df4976fadfb0f0->enter($__internal_6fe7884562ab575539936ae1147d52a544c63abc9995742a80df4976fadfb0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6fe7884562ab575539936ae1147d52a544c63abc9995742a80df4976fadfb0f0->leave($__internal_6fe7884562ab575539936ae1147d52a544c63abc9995742a80df4976fadfb0f0_prof);

        
        $__internal_53e0ec5e4c6ad76c117cf6732a88cc438f74ed12264d8784fec814b8dbcb70f6->leave($__internal_53e0ec5e4c6ad76c117cf6732a88cc438f74ed12264d8784fec814b8dbcb70f6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d1bd43ef0cf7da3584076e2d11745a975738ab63a630683ec8e12b81c85c3372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1bd43ef0cf7da3584076e2d11745a975738ab63a630683ec8e12b81c85c3372->enter($__internal_d1bd43ef0cf7da3584076e2d11745a975738ab63a630683ec8e12b81c85c3372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_26d4659afb982e2c6a5eafd0365052883551585d92acf4bb83ec01b266b00441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d4659afb982e2c6a5eafd0365052883551585d92acf4bb83ec01b266b00441->enter($__internal_26d4659afb982e2c6a5eafd0365052883551585d92acf4bb83ec01b266b00441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_26d4659afb982e2c6a5eafd0365052883551585d92acf4bb83ec01b266b00441->leave($__internal_26d4659afb982e2c6a5eafd0365052883551585d92acf4bb83ec01b266b00441_prof);

        
        $__internal_d1bd43ef0cf7da3584076e2d11745a975738ab63a630683ec8e12b81c85c3372->leave($__internal_d1bd43ef0cf7da3584076e2d11745a975738ab63a630683ec8e12b81c85c3372_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

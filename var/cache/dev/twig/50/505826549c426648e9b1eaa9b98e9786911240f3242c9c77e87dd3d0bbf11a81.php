<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_410588cb7e1d557ca8710c0c3d3ca9a2bfddd6a59e552808fab1290ba537690e extends Twig_Template
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
        $__internal_1afeed7fae642557917aba4761e5d224b529adba639e873861ef09b12299c26c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1afeed7fae642557917aba4761e5d224b529adba639e873861ef09b12299c26c->enter($__internal_1afeed7fae642557917aba4761e5d224b529adba639e873861ef09b12299c26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ccd12c7ae4c7891a87031ad79bc6a73e936060767d06185d2248d16e47f21427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd12c7ae4c7891a87031ad79bc6a73e936060767d06185d2248d16e47f21427->enter($__internal_ccd12c7ae4c7891a87031ad79bc6a73e936060767d06185d2248d16e47f21427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1afeed7fae642557917aba4761e5d224b529adba639e873861ef09b12299c26c->leave($__internal_1afeed7fae642557917aba4761e5d224b529adba639e873861ef09b12299c26c_prof);

        
        $__internal_ccd12c7ae4c7891a87031ad79bc6a73e936060767d06185d2248d16e47f21427->leave($__internal_ccd12c7ae4c7891a87031ad79bc6a73e936060767d06185d2248d16e47f21427_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_842e29066529e6a81bbc2f81a8c8408f2ec56827e8b4f60e596095054446db6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_842e29066529e6a81bbc2f81a8c8408f2ec56827e8b4f60e596095054446db6c->enter($__internal_842e29066529e6a81bbc2f81a8c8408f2ec56827e8b4f60e596095054446db6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_587331d6d8f7931fefb77390a81193f25871ecd38402e40af3258c1d6297c600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_587331d6d8f7931fefb77390a81193f25871ecd38402e40af3258c1d6297c600->enter($__internal_587331d6d8f7931fefb77390a81193f25871ecd38402e40af3258c1d6297c600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_587331d6d8f7931fefb77390a81193f25871ecd38402e40af3258c1d6297c600->leave($__internal_587331d6d8f7931fefb77390a81193f25871ecd38402e40af3258c1d6297c600_prof);

        
        $__internal_842e29066529e6a81bbc2f81a8c8408f2ec56827e8b4f60e596095054446db6c->leave($__internal_842e29066529e6a81bbc2f81a8c8408f2ec56827e8b4f60e596095054446db6c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_236988ec6ce4a0ba416a32f941f2151beb428d05eda95c883cec279b938cda2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_236988ec6ce4a0ba416a32f941f2151beb428d05eda95c883cec279b938cda2d->enter($__internal_236988ec6ce4a0ba416a32f941f2151beb428d05eda95c883cec279b938cda2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_56129a2edb5189314ff860bcd5e40e905911370e3babe59671f7f29b6dcd1f22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56129a2edb5189314ff860bcd5e40e905911370e3babe59671f7f29b6dcd1f22->enter($__internal_56129a2edb5189314ff860bcd5e40e905911370e3babe59671f7f29b6dcd1f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_56129a2edb5189314ff860bcd5e40e905911370e3babe59671f7f29b6dcd1f22->leave($__internal_56129a2edb5189314ff860bcd5e40e905911370e3babe59671f7f29b6dcd1f22_prof);

        
        $__internal_236988ec6ce4a0ba416a32f941f2151beb428d05eda95c883cec279b938cda2d->leave($__internal_236988ec6ce4a0ba416a32f941f2151beb428d05eda95c883cec279b938cda2d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_08ff88913946c0f7a788a04caceab517f6f69f500d252324309c21b503e74133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08ff88913946c0f7a788a04caceab517f6f69f500d252324309c21b503e74133->enter($__internal_08ff88913946c0f7a788a04caceab517f6f69f500d252324309c21b503e74133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_40a8dbeb7f9320dd40327952431469a13eb928b63b4e8d15880d14e925c38129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a8dbeb7f9320dd40327952431469a13eb928b63b4e8d15880d14e925c38129->enter($__internal_40a8dbeb7f9320dd40327952431469a13eb928b63b4e8d15880d14e925c38129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_40a8dbeb7f9320dd40327952431469a13eb928b63b4e8d15880d14e925c38129->leave($__internal_40a8dbeb7f9320dd40327952431469a13eb928b63b4e8d15880d14e925c38129_prof);

        
        $__internal_08ff88913946c0f7a788a04caceab517f6f69f500d252324309c21b503e74133->leave($__internal_08ff88913946c0f7a788a04caceab517f6f69f500d252324309c21b503e74133_prof);

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

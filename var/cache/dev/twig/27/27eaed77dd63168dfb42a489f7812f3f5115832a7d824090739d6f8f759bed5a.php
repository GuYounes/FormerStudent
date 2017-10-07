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
        $__internal_821a17b826292a4a24ab9d7f8998d3833ccaaea50d7232c02f21553e44952999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_821a17b826292a4a24ab9d7f8998d3833ccaaea50d7232c02f21553e44952999->enter($__internal_821a17b826292a4a24ab9d7f8998d3833ccaaea50d7232c02f21553e44952999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_86401b52e4036b6adcd0baa98d9f8af957cb987a7ce92512c9e86b21d48916f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86401b52e4036b6adcd0baa98d9f8af957cb987a7ce92512c9e86b21d48916f9->enter($__internal_86401b52e4036b6adcd0baa98d9f8af957cb987a7ce92512c9e86b21d48916f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_821a17b826292a4a24ab9d7f8998d3833ccaaea50d7232c02f21553e44952999->leave($__internal_821a17b826292a4a24ab9d7f8998d3833ccaaea50d7232c02f21553e44952999_prof);

        
        $__internal_86401b52e4036b6adcd0baa98d9f8af957cb987a7ce92512c9e86b21d48916f9->leave($__internal_86401b52e4036b6adcd0baa98d9f8af957cb987a7ce92512c9e86b21d48916f9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c2b69eb295b686ce271d26dac394d653cd35151595a52b5c03d571e31a388e88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2b69eb295b686ce271d26dac394d653cd35151595a52b5c03d571e31a388e88->enter($__internal_c2b69eb295b686ce271d26dac394d653cd35151595a52b5c03d571e31a388e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2f7d3e56fca5647b97ebbedc22c16ad37f654c91fb2c41db6356bffa79973868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f7d3e56fca5647b97ebbedc22c16ad37f654c91fb2c41db6356bffa79973868->enter($__internal_2f7d3e56fca5647b97ebbedc22c16ad37f654c91fb2c41db6356bffa79973868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2f7d3e56fca5647b97ebbedc22c16ad37f654c91fb2c41db6356bffa79973868->leave($__internal_2f7d3e56fca5647b97ebbedc22c16ad37f654c91fb2c41db6356bffa79973868_prof);

        
        $__internal_c2b69eb295b686ce271d26dac394d653cd35151595a52b5c03d571e31a388e88->leave($__internal_c2b69eb295b686ce271d26dac394d653cd35151595a52b5c03d571e31a388e88_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7d650a191de0f335e7a509f72152d28fa002a2be961b783835e8efd4e3c39e13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d650a191de0f335e7a509f72152d28fa002a2be961b783835e8efd4e3c39e13->enter($__internal_7d650a191de0f335e7a509f72152d28fa002a2be961b783835e8efd4e3c39e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8f2ecbff056477acde59307156bbb7bc3e3670edba896b3575bddfdcc505ba92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f2ecbff056477acde59307156bbb7bc3e3670edba896b3575bddfdcc505ba92->enter($__internal_8f2ecbff056477acde59307156bbb7bc3e3670edba896b3575bddfdcc505ba92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8f2ecbff056477acde59307156bbb7bc3e3670edba896b3575bddfdcc505ba92->leave($__internal_8f2ecbff056477acde59307156bbb7bc3e3670edba896b3575bddfdcc505ba92_prof);

        
        $__internal_7d650a191de0f335e7a509f72152d28fa002a2be961b783835e8efd4e3c39e13->leave($__internal_7d650a191de0f335e7a509f72152d28fa002a2be961b783835e8efd4e3c39e13_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_19498139b02431d1cd93d7a4ba075e5e81ca16f757c6fb29d74891d41416ba22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19498139b02431d1cd93d7a4ba075e5e81ca16f757c6fb29d74891d41416ba22->enter($__internal_19498139b02431d1cd93d7a4ba075e5e81ca16f757c6fb29d74891d41416ba22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ed07db806fea8ba939563a313da7e649e8119ba5fa619f39030ace33af5a0811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed07db806fea8ba939563a313da7e649e8119ba5fa619f39030ace33af5a0811->enter($__internal_ed07db806fea8ba939563a313da7e649e8119ba5fa619f39030ace33af5a0811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_ed07db806fea8ba939563a313da7e649e8119ba5fa619f39030ace33af5a0811->leave($__internal_ed07db806fea8ba939563a313da7e649e8119ba5fa619f39030ace33af5a0811_prof);

        
        $__internal_19498139b02431d1cd93d7a4ba075e5e81ca16f757c6fb29d74891d41416ba22->leave($__internal_19498139b02431d1cd93d7a4ba075e5e81ca16f757c6fb29d74891d41416ba22_prof);

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

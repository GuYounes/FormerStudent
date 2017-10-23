<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_c5491b9d8e86b96802e3ea8195ba0bdd88904883b417f410c0773002e3597360 extends Twig_Template
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
        $__internal_cba5b7f13d2297f1f150c2fc71fab0a9bdf0e2d3f8aae912a53010e856abdf8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cba5b7f13d2297f1f150c2fc71fab0a9bdf0e2d3f8aae912a53010e856abdf8e->enter($__internal_cba5b7f13d2297f1f150c2fc71fab0a9bdf0e2d3f8aae912a53010e856abdf8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_53cac114b114df3879de34d538d8242fac2af8c3cda682fd0bcb678c856fa853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53cac114b114df3879de34d538d8242fac2af8c3cda682fd0bcb678c856fa853->enter($__internal_53cac114b114df3879de34d538d8242fac2af8c3cda682fd0bcb678c856fa853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cba5b7f13d2297f1f150c2fc71fab0a9bdf0e2d3f8aae912a53010e856abdf8e->leave($__internal_cba5b7f13d2297f1f150c2fc71fab0a9bdf0e2d3f8aae912a53010e856abdf8e_prof);

        
        $__internal_53cac114b114df3879de34d538d8242fac2af8c3cda682fd0bcb678c856fa853->leave($__internal_53cac114b114df3879de34d538d8242fac2af8c3cda682fd0bcb678c856fa853_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_07a95abb8cbb03595e587113c34c2dc12bbe1c4a76edf17cc8f4149ce10efd7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07a95abb8cbb03595e587113c34c2dc12bbe1c4a76edf17cc8f4149ce10efd7d->enter($__internal_07a95abb8cbb03595e587113c34c2dc12bbe1c4a76edf17cc8f4149ce10efd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_702b1f69472c3ba598b50cd5e4ec19d1afdddccf3940c164f753f08cda349673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_702b1f69472c3ba598b50cd5e4ec19d1afdddccf3940c164f753f08cda349673->enter($__internal_702b1f69472c3ba598b50cd5e4ec19d1afdddccf3940c164f753f08cda349673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_702b1f69472c3ba598b50cd5e4ec19d1afdddccf3940c164f753f08cda349673->leave($__internal_702b1f69472c3ba598b50cd5e4ec19d1afdddccf3940c164f753f08cda349673_prof);

        
        $__internal_07a95abb8cbb03595e587113c34c2dc12bbe1c4a76edf17cc8f4149ce10efd7d->leave($__internal_07a95abb8cbb03595e587113c34c2dc12bbe1c4a76edf17cc8f4149ce10efd7d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f4ce1577ca20438ec3b48e793de11fd724800af264091e5f2d0367738d400373 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ce1577ca20438ec3b48e793de11fd724800af264091e5f2d0367738d400373->enter($__internal_f4ce1577ca20438ec3b48e793de11fd724800af264091e5f2d0367738d400373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_69e05eee6441d0f085c5759a8aa4b4cd8541193090a68a2e431d132027a3119e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e05eee6441d0f085c5759a8aa4b4cd8541193090a68a2e431d132027a3119e->enter($__internal_69e05eee6441d0f085c5759a8aa4b4cd8541193090a68a2e431d132027a3119e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_69e05eee6441d0f085c5759a8aa4b4cd8541193090a68a2e431d132027a3119e->leave($__internal_69e05eee6441d0f085c5759a8aa4b4cd8541193090a68a2e431d132027a3119e_prof);

        
        $__internal_f4ce1577ca20438ec3b48e793de11fd724800af264091e5f2d0367738d400373->leave($__internal_f4ce1577ca20438ec3b48e793de11fd724800af264091e5f2d0367738d400373_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bdefae3c9ba4df74c9493faaeb3e668a4570fc23811665bd2c478586be2d0a4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdefae3c9ba4df74c9493faaeb3e668a4570fc23811665bd2c478586be2d0a4b->enter($__internal_bdefae3c9ba4df74c9493faaeb3e668a4570fc23811665bd2c478586be2d0a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0ef14781396f43cdfb3191160a2ad850de598d5c1b13c53b8290985d5b7af425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef14781396f43cdfb3191160a2ad850de598d5c1b13c53b8290985d5b7af425->enter($__internal_0ef14781396f43cdfb3191160a2ad850de598d5c1b13c53b8290985d5b7af425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_0ef14781396f43cdfb3191160a2ad850de598d5c1b13c53b8290985d5b7af425->leave($__internal_0ef14781396f43cdfb3191160a2ad850de598d5c1b13c53b8290985d5b7af425_prof);

        
        $__internal_bdefae3c9ba4df74c9493faaeb3e668a4570fc23811665bd2c478586be2d0a4b->leave($__internal_bdefae3c9ba4df74c9493faaeb3e668a4570fc23811665bd2c478586be2d0a4b_prof);

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

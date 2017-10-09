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
        $__internal_5512048251c7b3f001bb85e9826c72247fcf60180abe356db7e8a6af6a3c5664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5512048251c7b3f001bb85e9826c72247fcf60180abe356db7e8a6af6a3c5664->enter($__internal_5512048251c7b3f001bb85e9826c72247fcf60180abe356db7e8a6af6a3c5664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f675bf68eee52c1d71252b9018641755559d341f414934ea9fcb820372657e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f675bf68eee52c1d71252b9018641755559d341f414934ea9fcb820372657e5d->enter($__internal_f675bf68eee52c1d71252b9018641755559d341f414934ea9fcb820372657e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5512048251c7b3f001bb85e9826c72247fcf60180abe356db7e8a6af6a3c5664->leave($__internal_5512048251c7b3f001bb85e9826c72247fcf60180abe356db7e8a6af6a3c5664_prof);

        
        $__internal_f675bf68eee52c1d71252b9018641755559d341f414934ea9fcb820372657e5d->leave($__internal_f675bf68eee52c1d71252b9018641755559d341f414934ea9fcb820372657e5d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7b664e6709b801217a6ee1d5fecb18580e6a84d465cfc6efeadebefe9bffa7e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b664e6709b801217a6ee1d5fecb18580e6a84d465cfc6efeadebefe9bffa7e3->enter($__internal_7b664e6709b801217a6ee1d5fecb18580e6a84d465cfc6efeadebefe9bffa7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_07215d8b8d40d289d4524f13325ef5b0689a2911f630459cc1e9bc3d71deda2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07215d8b8d40d289d4524f13325ef5b0689a2911f630459cc1e9bc3d71deda2e->enter($__internal_07215d8b8d40d289d4524f13325ef5b0689a2911f630459cc1e9bc3d71deda2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_07215d8b8d40d289d4524f13325ef5b0689a2911f630459cc1e9bc3d71deda2e->leave($__internal_07215d8b8d40d289d4524f13325ef5b0689a2911f630459cc1e9bc3d71deda2e_prof);

        
        $__internal_7b664e6709b801217a6ee1d5fecb18580e6a84d465cfc6efeadebefe9bffa7e3->leave($__internal_7b664e6709b801217a6ee1d5fecb18580e6a84d465cfc6efeadebefe9bffa7e3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bab1a52d7a035138fe5eecf5ef1275679bb6f97b4091e93cb5d3ce3b67c9b855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bab1a52d7a035138fe5eecf5ef1275679bb6f97b4091e93cb5d3ce3b67c9b855->enter($__internal_bab1a52d7a035138fe5eecf5ef1275679bb6f97b4091e93cb5d3ce3b67c9b855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f7fe11515e595565f275ce24969ac05380dbc7d71c8ac98cc045f61f70dd81e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7fe11515e595565f275ce24969ac05380dbc7d71c8ac98cc045f61f70dd81e0->enter($__internal_f7fe11515e595565f275ce24969ac05380dbc7d71c8ac98cc045f61f70dd81e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f7fe11515e595565f275ce24969ac05380dbc7d71c8ac98cc045f61f70dd81e0->leave($__internal_f7fe11515e595565f275ce24969ac05380dbc7d71c8ac98cc045f61f70dd81e0_prof);

        
        $__internal_bab1a52d7a035138fe5eecf5ef1275679bb6f97b4091e93cb5d3ce3b67c9b855->leave($__internal_bab1a52d7a035138fe5eecf5ef1275679bb6f97b4091e93cb5d3ce3b67c9b855_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_271404ac152a75807d0d06a7fa127ebe31235b6149016ca892e8b2397d994252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_271404ac152a75807d0d06a7fa127ebe31235b6149016ca892e8b2397d994252->enter($__internal_271404ac152a75807d0d06a7fa127ebe31235b6149016ca892e8b2397d994252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_00008a96662b51e6c62d6ad7447d74f53f6c28e62ed3b9a81fb5b9956cc8862f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00008a96662b51e6c62d6ad7447d74f53f6c28e62ed3b9a81fb5b9956cc8862f->enter($__internal_00008a96662b51e6c62d6ad7447d74f53f6c28e62ed3b9a81fb5b9956cc8862f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_00008a96662b51e6c62d6ad7447d74f53f6c28e62ed3b9a81fb5b9956cc8862f->leave($__internal_00008a96662b51e6c62d6ad7447d74f53f6c28e62ed3b9a81fb5b9956cc8862f_prof);

        
        $__internal_271404ac152a75807d0d06a7fa127ebe31235b6149016ca892e8b2397d994252->leave($__internal_271404ac152a75807d0d06a7fa127ebe31235b6149016ca892e8b2397d994252_prof);

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

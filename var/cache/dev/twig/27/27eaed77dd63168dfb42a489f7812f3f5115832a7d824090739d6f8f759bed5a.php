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
        $__internal_21e8dc9e66667ce4b16c41411e578fb782a2224c1c468e29d633861159a6ee7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21e8dc9e66667ce4b16c41411e578fb782a2224c1c468e29d633861159a6ee7f->enter($__internal_21e8dc9e66667ce4b16c41411e578fb782a2224c1c468e29d633861159a6ee7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_5e8032700c29bfd9d0b1b9f8761f7160c95ad6560bd203dff7fbb24edef5cd3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e8032700c29bfd9d0b1b9f8761f7160c95ad6560bd203dff7fbb24edef5cd3e->enter($__internal_5e8032700c29bfd9d0b1b9f8761f7160c95ad6560bd203dff7fbb24edef5cd3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21e8dc9e66667ce4b16c41411e578fb782a2224c1c468e29d633861159a6ee7f->leave($__internal_21e8dc9e66667ce4b16c41411e578fb782a2224c1c468e29d633861159a6ee7f_prof);

        
        $__internal_5e8032700c29bfd9d0b1b9f8761f7160c95ad6560bd203dff7fbb24edef5cd3e->leave($__internal_5e8032700c29bfd9d0b1b9f8761f7160c95ad6560bd203dff7fbb24edef5cd3e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3fb779492cbc464822b6f7ee03b0508e3d8557eaf6db595f3f66b0d680811b97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fb779492cbc464822b6f7ee03b0508e3d8557eaf6db595f3f66b0d680811b97->enter($__internal_3fb779492cbc464822b6f7ee03b0508e3d8557eaf6db595f3f66b0d680811b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_398e216db84fbc7cc1b0b33dfccdb0466723095e4b27646afd185b60a0a369d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398e216db84fbc7cc1b0b33dfccdb0466723095e4b27646afd185b60a0a369d0->enter($__internal_398e216db84fbc7cc1b0b33dfccdb0466723095e4b27646afd185b60a0a369d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_398e216db84fbc7cc1b0b33dfccdb0466723095e4b27646afd185b60a0a369d0->leave($__internal_398e216db84fbc7cc1b0b33dfccdb0466723095e4b27646afd185b60a0a369d0_prof);

        
        $__internal_3fb779492cbc464822b6f7ee03b0508e3d8557eaf6db595f3f66b0d680811b97->leave($__internal_3fb779492cbc464822b6f7ee03b0508e3d8557eaf6db595f3f66b0d680811b97_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_452a81b3d621aa50410fe0618bad47ce730b238ef59e490666bcc07e1e74c1d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_452a81b3d621aa50410fe0618bad47ce730b238ef59e490666bcc07e1e74c1d6->enter($__internal_452a81b3d621aa50410fe0618bad47ce730b238ef59e490666bcc07e1e74c1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cdda91609966cefdaecae03dbc8a4b5ffd099a5e644efa00bfe7633de8b62cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdda91609966cefdaecae03dbc8a4b5ffd099a5e644efa00bfe7633de8b62cca->enter($__internal_cdda91609966cefdaecae03dbc8a4b5ffd099a5e644efa00bfe7633de8b62cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cdda91609966cefdaecae03dbc8a4b5ffd099a5e644efa00bfe7633de8b62cca->leave($__internal_cdda91609966cefdaecae03dbc8a4b5ffd099a5e644efa00bfe7633de8b62cca_prof);

        
        $__internal_452a81b3d621aa50410fe0618bad47ce730b238ef59e490666bcc07e1e74c1d6->leave($__internal_452a81b3d621aa50410fe0618bad47ce730b238ef59e490666bcc07e1e74c1d6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7f9bea682c25aeb0f74f0b8a20d83fc052e2a035398f77fc783513734b8640e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f9bea682c25aeb0f74f0b8a20d83fc052e2a035398f77fc783513734b8640e3->enter($__internal_7f9bea682c25aeb0f74f0b8a20d83fc052e2a035398f77fc783513734b8640e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_46fada2bbc62f1607513101d65151a5eb369982fe71297037628697a2c3b8049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46fada2bbc62f1607513101d65151a5eb369982fe71297037628697a2c3b8049->enter($__internal_46fada2bbc62f1607513101d65151a5eb369982fe71297037628697a2c3b8049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_46fada2bbc62f1607513101d65151a5eb369982fe71297037628697a2c3b8049->leave($__internal_46fada2bbc62f1607513101d65151a5eb369982fe71297037628697a2c3b8049_prof);

        
        $__internal_7f9bea682c25aeb0f74f0b8a20d83fc052e2a035398f77fc783513734b8640e3->leave($__internal_7f9bea682c25aeb0f74f0b8a20d83fc052e2a035398f77fc783513734b8640e3_prof);

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

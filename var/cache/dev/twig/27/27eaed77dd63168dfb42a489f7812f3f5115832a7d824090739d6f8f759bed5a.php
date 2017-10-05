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
        $__internal_fb6d0fee12a4993f75f75e376d4c3f48b713063baf0096eaef68781f911daa6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb6d0fee12a4993f75f75e376d4c3f48b713063baf0096eaef68781f911daa6b->enter($__internal_fb6d0fee12a4993f75f75e376d4c3f48b713063baf0096eaef68781f911daa6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_43752d1115fdbd0a3dfe7a638d79c27aae3a523784e28f504c8059227db15e0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43752d1115fdbd0a3dfe7a638d79c27aae3a523784e28f504c8059227db15e0a->enter($__internal_43752d1115fdbd0a3dfe7a638d79c27aae3a523784e28f504c8059227db15e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb6d0fee12a4993f75f75e376d4c3f48b713063baf0096eaef68781f911daa6b->leave($__internal_fb6d0fee12a4993f75f75e376d4c3f48b713063baf0096eaef68781f911daa6b_prof);

        
        $__internal_43752d1115fdbd0a3dfe7a638d79c27aae3a523784e28f504c8059227db15e0a->leave($__internal_43752d1115fdbd0a3dfe7a638d79c27aae3a523784e28f504c8059227db15e0a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_83656a9c83faaa19771a90983fd1efc2b634f0539a5c3f7afdb1b5a28e47c0e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83656a9c83faaa19771a90983fd1efc2b634f0539a5c3f7afdb1b5a28e47c0e5->enter($__internal_83656a9c83faaa19771a90983fd1efc2b634f0539a5c3f7afdb1b5a28e47c0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1b5911899040742fe00a2e7500fda7d07112ec0bcb282150948e816bc4682d97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b5911899040742fe00a2e7500fda7d07112ec0bcb282150948e816bc4682d97->enter($__internal_1b5911899040742fe00a2e7500fda7d07112ec0bcb282150948e816bc4682d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1b5911899040742fe00a2e7500fda7d07112ec0bcb282150948e816bc4682d97->leave($__internal_1b5911899040742fe00a2e7500fda7d07112ec0bcb282150948e816bc4682d97_prof);

        
        $__internal_83656a9c83faaa19771a90983fd1efc2b634f0539a5c3f7afdb1b5a28e47c0e5->leave($__internal_83656a9c83faaa19771a90983fd1efc2b634f0539a5c3f7afdb1b5a28e47c0e5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4a9da9501de394599d55301ed69f379d6d0ddf65d6f0d55a6343cddd89273f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a9da9501de394599d55301ed69f379d6d0ddf65d6f0d55a6343cddd89273f00->enter($__internal_4a9da9501de394599d55301ed69f379d6d0ddf65d6f0d55a6343cddd89273f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0160808283dd187ed47e0059cc81dfde6653b738e7e9123445d35c3b941f0b2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0160808283dd187ed47e0059cc81dfde6653b738e7e9123445d35c3b941f0b2e->enter($__internal_0160808283dd187ed47e0059cc81dfde6653b738e7e9123445d35c3b941f0b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0160808283dd187ed47e0059cc81dfde6653b738e7e9123445d35c3b941f0b2e->leave($__internal_0160808283dd187ed47e0059cc81dfde6653b738e7e9123445d35c3b941f0b2e_prof);

        
        $__internal_4a9da9501de394599d55301ed69f379d6d0ddf65d6f0d55a6343cddd89273f00->leave($__internal_4a9da9501de394599d55301ed69f379d6d0ddf65d6f0d55a6343cddd89273f00_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_690c3d20995c8a116e59a5252ba63368a775ca10a1ef67af387bdda3c59ccd1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_690c3d20995c8a116e59a5252ba63368a775ca10a1ef67af387bdda3c59ccd1a->enter($__internal_690c3d20995c8a116e59a5252ba63368a775ca10a1ef67af387bdda3c59ccd1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9f1f91a87b46d218355930a45646822c96e07c3043f41098aa310a4cf682c239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f1f91a87b46d218355930a45646822c96e07c3043f41098aa310a4cf682c239->enter($__internal_9f1f91a87b46d218355930a45646822c96e07c3043f41098aa310a4cf682c239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_9f1f91a87b46d218355930a45646822c96e07c3043f41098aa310a4cf682c239->leave($__internal_9f1f91a87b46d218355930a45646822c96e07c3043f41098aa310a4cf682c239_prof);

        
        $__internal_690c3d20995c8a116e59a5252ba63368a775ca10a1ef67af387bdda3c59ccd1a->leave($__internal_690c3d20995c8a116e59a5252ba63368a775ca10a1ef67af387bdda3c59ccd1a_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

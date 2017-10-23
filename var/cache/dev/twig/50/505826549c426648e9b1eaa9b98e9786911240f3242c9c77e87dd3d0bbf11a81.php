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
        $__internal_29e86e62dcc6eaa56906eed2e1670f05dd4c5cedad9859a54d28ffc01a9178dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29e86e62dcc6eaa56906eed2e1670f05dd4c5cedad9859a54d28ffc01a9178dd->enter($__internal_29e86e62dcc6eaa56906eed2e1670f05dd4c5cedad9859a54d28ffc01a9178dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7e3f183b5516f16061487c5d8d1deb35ea12d8ea27b24f641ef935feb567aad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e3f183b5516f16061487c5d8d1deb35ea12d8ea27b24f641ef935feb567aad3->enter($__internal_7e3f183b5516f16061487c5d8d1deb35ea12d8ea27b24f641ef935feb567aad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29e86e62dcc6eaa56906eed2e1670f05dd4c5cedad9859a54d28ffc01a9178dd->leave($__internal_29e86e62dcc6eaa56906eed2e1670f05dd4c5cedad9859a54d28ffc01a9178dd_prof);

        
        $__internal_7e3f183b5516f16061487c5d8d1deb35ea12d8ea27b24f641ef935feb567aad3->leave($__internal_7e3f183b5516f16061487c5d8d1deb35ea12d8ea27b24f641ef935feb567aad3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7aed211024781e1412a5c39455f238c3ede9fd16f92d2f39e3e39f03f7b03076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aed211024781e1412a5c39455f238c3ede9fd16f92d2f39e3e39f03f7b03076->enter($__internal_7aed211024781e1412a5c39455f238c3ede9fd16f92d2f39e3e39f03f7b03076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e722d6357192954f0eee8cbd48d3841fd3854842f68ff92d4ac42119c342a91b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e722d6357192954f0eee8cbd48d3841fd3854842f68ff92d4ac42119c342a91b->enter($__internal_e722d6357192954f0eee8cbd48d3841fd3854842f68ff92d4ac42119c342a91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e722d6357192954f0eee8cbd48d3841fd3854842f68ff92d4ac42119c342a91b->leave($__internal_e722d6357192954f0eee8cbd48d3841fd3854842f68ff92d4ac42119c342a91b_prof);

        
        $__internal_7aed211024781e1412a5c39455f238c3ede9fd16f92d2f39e3e39f03f7b03076->leave($__internal_7aed211024781e1412a5c39455f238c3ede9fd16f92d2f39e3e39f03f7b03076_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8eed2cfdff8edc13b061faac78934c3df2f02f4ca23dd1ee86df3aed4a07ac8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eed2cfdff8edc13b061faac78934c3df2f02f4ca23dd1ee86df3aed4a07ac8f->enter($__internal_8eed2cfdff8edc13b061faac78934c3df2f02f4ca23dd1ee86df3aed4a07ac8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6929cca88a1d3cfe513556faa017a9577b7a2c18fef9e07a04b49205027d42fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6929cca88a1d3cfe513556faa017a9577b7a2c18fef9e07a04b49205027d42fc->enter($__internal_6929cca88a1d3cfe513556faa017a9577b7a2c18fef9e07a04b49205027d42fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6929cca88a1d3cfe513556faa017a9577b7a2c18fef9e07a04b49205027d42fc->leave($__internal_6929cca88a1d3cfe513556faa017a9577b7a2c18fef9e07a04b49205027d42fc_prof);

        
        $__internal_8eed2cfdff8edc13b061faac78934c3df2f02f4ca23dd1ee86df3aed4a07ac8f->leave($__internal_8eed2cfdff8edc13b061faac78934c3df2f02f4ca23dd1ee86df3aed4a07ac8f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6fcd810b7fb5e0a1101b5b6d275599e09c05d997e6f1c969932e96feffc2283d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fcd810b7fb5e0a1101b5b6d275599e09c05d997e6f1c969932e96feffc2283d->enter($__internal_6fcd810b7fb5e0a1101b5b6d275599e09c05d997e6f1c969932e96feffc2283d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_02a796e5a9c09d7c9b164e68e51e77e829811ce3fa12ddc29bb0148ec2fd21b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a796e5a9c09d7c9b164e68e51e77e829811ce3fa12ddc29bb0148ec2fd21b2->enter($__internal_02a796e5a9c09d7c9b164e68e51e77e829811ce3fa12ddc29bb0148ec2fd21b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_02a796e5a9c09d7c9b164e68e51e77e829811ce3fa12ddc29bb0148ec2fd21b2->leave($__internal_02a796e5a9c09d7c9b164e68e51e77e829811ce3fa12ddc29bb0148ec2fd21b2_prof);

        
        $__internal_6fcd810b7fb5e0a1101b5b6d275599e09c05d997e6f1c969932e96feffc2283d->leave($__internal_6fcd810b7fb5e0a1101b5b6d275599e09c05d997e6f1c969932e96feffc2283d_prof);

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

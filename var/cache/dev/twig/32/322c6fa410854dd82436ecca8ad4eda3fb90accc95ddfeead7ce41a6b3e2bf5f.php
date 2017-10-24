<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_18733bea11aae46763ebf5964208db0b14080ce2643d45af80822d62a8751129 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b96164f87584af5efc6587d14e4a64c8fefc85ef06918c01697b6b981448292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b96164f87584af5efc6587d14e4a64c8fefc85ef06918c01697b6b981448292->enter($__internal_1b96164f87584af5efc6587d14e4a64c8fefc85ef06918c01697b6b981448292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_cc36f9f8e7e7d0b41c5f9a535cd960bdf69db3716938522a61c67b48102061ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc36f9f8e7e7d0b41c5f9a535cd960bdf69db3716938522a61c67b48102061ce->enter($__internal_cc36f9f8e7e7d0b41c5f9a535cd960bdf69db3716938522a61c67b48102061ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b96164f87584af5efc6587d14e4a64c8fefc85ef06918c01697b6b981448292->leave($__internal_1b96164f87584af5efc6587d14e4a64c8fefc85ef06918c01697b6b981448292_prof);

        
        $__internal_cc36f9f8e7e7d0b41c5f9a535cd960bdf69db3716938522a61c67b48102061ce->leave($__internal_cc36f9f8e7e7d0b41c5f9a535cd960bdf69db3716938522a61c67b48102061ce_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_29d9d87175af81c608e9606b937d3a176f11d5b499939c4dbfb62bc4fda5e585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29d9d87175af81c608e9606b937d3a176f11d5b499939c4dbfb62bc4fda5e585->enter($__internal_29d9d87175af81c608e9606b937d3a176f11d5b499939c4dbfb62bc4fda5e585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_65f9889199386208384c67c01d654132fe35c593613d907c5f032c0b884d633d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f9889199386208384c67c01d654132fe35c593613d907c5f032c0b884d633d->enter($__internal_65f9889199386208384c67c01d654132fe35c593613d907c5f032c0b884d633d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_65f9889199386208384c67c01d654132fe35c593613d907c5f032c0b884d633d->leave($__internal_65f9889199386208384c67c01d654132fe35c593613d907c5f032c0b884d633d_prof);

        
        $__internal_29d9d87175af81c608e9606b937d3a176f11d5b499939c4dbfb62bc4fda5e585->leave($__internal_29d9d87175af81c608e9606b937d3a176f11d5b499939c4dbfb62bc4fda5e585_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_bdd5697c483a9bb089611d419bf23533b541c1d32fed272a6aa8dfe7631d3941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdd5697c483a9bb089611d419bf23533b541c1d32fed272a6aa8dfe7631d3941->enter($__internal_bdd5697c483a9bb089611d419bf23533b541c1d32fed272a6aa8dfe7631d3941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f3cd9adbfb539ec213a4da478d65f83ef7a862e7c6a88019a395f5a4695677c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3cd9adbfb539ec213a4da478d65f83ef7a862e7c6a88019a395f5a4695677c4->enter($__internal_f3cd9adbfb539ec213a4da478d65f83ef7a862e7c6a88019a395f5a4695677c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_f3cd9adbfb539ec213a4da478d65f83ef7a862e7c6a88019a395f5a4695677c4->leave($__internal_f3cd9adbfb539ec213a4da478d65f83ef7a862e7c6a88019a395f5a4695677c4_prof);

        
        $__internal_bdd5697c483a9bb089611d419bf23533b541c1d32fed272a6aa8dfe7631d3941->leave($__internal_bdd5697c483a9bb089611d419bf23533b541c1d32fed272a6aa8dfe7631d3941_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}

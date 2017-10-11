<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_f0b7ef844d3ef5726b45b54e14097dae0a55828f4ffbd939127abd358a91f5e3 extends Twig_Template
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
        $__internal_609ec3e001ed6290357d1b43a0ce4e13a5a86b49d333e17d4f4b0f3c6dea4329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_609ec3e001ed6290357d1b43a0ce4e13a5a86b49d333e17d4f4b0f3c6dea4329->enter($__internal_609ec3e001ed6290357d1b43a0ce4e13a5a86b49d333e17d4f4b0f3c6dea4329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_7ae09d4cf6575e46f94b87ea6a8fe1895cd66889d68a158fc0f0ddb5cbd79deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae09d4cf6575e46f94b87ea6a8fe1895cd66889d68a158fc0f0ddb5cbd79deb->enter($__internal_7ae09d4cf6575e46f94b87ea6a8fe1895cd66889d68a158fc0f0ddb5cbd79deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_609ec3e001ed6290357d1b43a0ce4e13a5a86b49d333e17d4f4b0f3c6dea4329->leave($__internal_609ec3e001ed6290357d1b43a0ce4e13a5a86b49d333e17d4f4b0f3c6dea4329_prof);

        
        $__internal_7ae09d4cf6575e46f94b87ea6a8fe1895cd66889d68a158fc0f0ddb5cbd79deb->leave($__internal_7ae09d4cf6575e46f94b87ea6a8fe1895cd66889d68a158fc0f0ddb5cbd79deb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1c756676b262271a97921facb55a7b39ca8c3f6be62f78d56f3678ef0f9802b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c756676b262271a97921facb55a7b39ca8c3f6be62f78d56f3678ef0f9802b3->enter($__internal_1c756676b262271a97921facb55a7b39ca8c3f6be62f78d56f3678ef0f9802b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_20669e796cfe3312cedba0a08423ddf4b53e5cd574cc1876e3eb2ea186f9a534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20669e796cfe3312cedba0a08423ddf4b53e5cd574cc1876e3eb2ea186f9a534->enter($__internal_20669e796cfe3312cedba0a08423ddf4b53e5cd574cc1876e3eb2ea186f9a534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_20669e796cfe3312cedba0a08423ddf4b53e5cd574cc1876e3eb2ea186f9a534->leave($__internal_20669e796cfe3312cedba0a08423ddf4b53e5cd574cc1876e3eb2ea186f9a534_prof);

        
        $__internal_1c756676b262271a97921facb55a7b39ca8c3f6be62f78d56f3678ef0f9802b3->leave($__internal_1c756676b262271a97921facb55a7b39ca8c3f6be62f78d56f3678ef0f9802b3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e34ce7da814efff028fedacd41e3ccc92e0ec9ae74662bb97dacee0156ef814b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e34ce7da814efff028fedacd41e3ccc92e0ec9ae74662bb97dacee0156ef814b->enter($__internal_e34ce7da814efff028fedacd41e3ccc92e0ec9ae74662bb97dacee0156ef814b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf6e651a7382f7d9e1da430e7eb28b38fb0d51fe7809d5f5cf84a5ca83a6d258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf6e651a7382f7d9e1da430e7eb28b38fb0d51fe7809d5f5cf84a5ca83a6d258->enter($__internal_cf6e651a7382f7d9e1da430e7eb28b38fb0d51fe7809d5f5cf84a5ca83a6d258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cf6e651a7382f7d9e1da430e7eb28b38fb0d51fe7809d5f5cf84a5ca83a6d258->leave($__internal_cf6e651a7382f7d9e1da430e7eb28b38fb0d51fe7809d5f5cf84a5ca83a6d258_prof);

        
        $__internal_e34ce7da814efff028fedacd41e3ccc92e0ec9ae74662bb97dacee0156ef814b->leave($__internal_e34ce7da814efff028fedacd41e3ccc92e0ec9ae74662bb97dacee0156ef814b_prof);

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

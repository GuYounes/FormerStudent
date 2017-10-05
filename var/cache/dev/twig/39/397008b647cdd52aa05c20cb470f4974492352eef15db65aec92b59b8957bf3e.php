<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_338c17e30cf39b9a3fa89a5a6c52b8f058937e14c4d5b91462fe7744d668ad34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_a27da6bf7346543ae2184c6f1ca37710f552ee5b4de89dffd642c19473409087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a27da6bf7346543ae2184c6f1ca37710f552ee5b4de89dffd642c19473409087->enter($__internal_a27da6bf7346543ae2184c6f1ca37710f552ee5b4de89dffd642c19473409087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_44ec49e69bbce67105847dffc1e1db93c78e8af5968f27671abf021275662466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44ec49e69bbce67105847dffc1e1db93c78e8af5968f27671abf021275662466->enter($__internal_44ec49e69bbce67105847dffc1e1db93c78e8af5968f27671abf021275662466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a27da6bf7346543ae2184c6f1ca37710f552ee5b4de89dffd642c19473409087->leave($__internal_a27da6bf7346543ae2184c6f1ca37710f552ee5b4de89dffd642c19473409087_prof);

        
        $__internal_44ec49e69bbce67105847dffc1e1db93c78e8af5968f27671abf021275662466->leave($__internal_44ec49e69bbce67105847dffc1e1db93c78e8af5968f27671abf021275662466_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6cbfee3e73dd7d54736f242a3878280b4b994514fbab225b12710136552ffd0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cbfee3e73dd7d54736f242a3878280b4b994514fbab225b12710136552ffd0e->enter($__internal_6cbfee3e73dd7d54736f242a3878280b4b994514fbab225b12710136552ffd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2731880cee0b441659d3d1dacacbfe24ea84c2cf4886da08f352cd857819ff38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2731880cee0b441659d3d1dacacbfe24ea84c2cf4886da08f352cd857819ff38->enter($__internal_2731880cee0b441659d3d1dacacbfe24ea84c2cf4886da08f352cd857819ff38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_2731880cee0b441659d3d1dacacbfe24ea84c2cf4886da08f352cd857819ff38->leave($__internal_2731880cee0b441659d3d1dacacbfe24ea84c2cf4886da08f352cd857819ff38_prof);

        
        $__internal_6cbfee3e73dd7d54736f242a3878280b4b994514fbab225b12710136552ffd0e->leave($__internal_6cbfee3e73dd7d54736f242a3878280b4b994514fbab225b12710136552ffd0e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ece8c504c07164926f5e0970f2d56039e9661a1b184cadcc97f6634e1fb8e69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ece8c504c07164926f5e0970f2d56039e9661a1b184cadcc97f6634e1fb8e69->enter($__internal_9ece8c504c07164926f5e0970f2d56039e9661a1b184cadcc97f6634e1fb8e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a4b6dd504b53092cf322881f6972f05104fa480a5483dfcae69d968506d1b5e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b6dd504b53092cf322881f6972f05104fa480a5483dfcae69d968506d1b5e1->enter($__internal_a4b6dd504b53092cf322881f6972f05104fa480a5483dfcae69d968506d1b5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a4b6dd504b53092cf322881f6972f05104fa480a5483dfcae69d968506d1b5e1->leave($__internal_a4b6dd504b53092cf322881f6972f05104fa480a5483dfcae69d968506d1b5e1_prof);

        
        $__internal_9ece8c504c07164926f5e0970f2d56039e9661a1b184cadcc97f6634e1fb8e69->leave($__internal_9ece8c504c07164926f5e0970f2d56039e9661a1b184cadcc97f6634e1fb8e69_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}

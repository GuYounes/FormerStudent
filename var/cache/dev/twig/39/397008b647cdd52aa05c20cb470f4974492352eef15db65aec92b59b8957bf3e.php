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
        $__internal_277e69dad143212a08e81c281207f00ca7a46d5dadafbb3b3f0ff1aec34afb54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_277e69dad143212a08e81c281207f00ca7a46d5dadafbb3b3f0ff1aec34afb54->enter($__internal_277e69dad143212a08e81c281207f00ca7a46d5dadafbb3b3f0ff1aec34afb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_629939b8adba7856ce705951acdd288fa576b5d410a9cdc6ae271501ca896207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629939b8adba7856ce705951acdd288fa576b5d410a9cdc6ae271501ca896207->enter($__internal_629939b8adba7856ce705951acdd288fa576b5d410a9cdc6ae271501ca896207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_277e69dad143212a08e81c281207f00ca7a46d5dadafbb3b3f0ff1aec34afb54->leave($__internal_277e69dad143212a08e81c281207f00ca7a46d5dadafbb3b3f0ff1aec34afb54_prof);

        
        $__internal_629939b8adba7856ce705951acdd288fa576b5d410a9cdc6ae271501ca896207->leave($__internal_629939b8adba7856ce705951acdd288fa576b5d410a9cdc6ae271501ca896207_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3709a510de643c38151ec1b75ed1a8ade5a30d6e54cb21ce6a571107b0aa26c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3709a510de643c38151ec1b75ed1a8ade5a30d6e54cb21ce6a571107b0aa26c6->enter($__internal_3709a510de643c38151ec1b75ed1a8ade5a30d6e54cb21ce6a571107b0aa26c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_54a8339298107d8119729734d46369ff5399ead60631c558f7748d92ac80eaa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a8339298107d8119729734d46369ff5399ead60631c558f7748d92ac80eaa3->enter($__internal_54a8339298107d8119729734d46369ff5399ead60631c558f7748d92ac80eaa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_54a8339298107d8119729734d46369ff5399ead60631c558f7748d92ac80eaa3->leave($__internal_54a8339298107d8119729734d46369ff5399ead60631c558f7748d92ac80eaa3_prof);

        
        $__internal_3709a510de643c38151ec1b75ed1a8ade5a30d6e54cb21ce6a571107b0aa26c6->leave($__internal_3709a510de643c38151ec1b75ed1a8ade5a30d6e54cb21ce6a571107b0aa26c6_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd6b6cdd170b77a35292c452f1f72dfe19aaf3c08c41300d7b1948a5e8893200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd6b6cdd170b77a35292c452f1f72dfe19aaf3c08c41300d7b1948a5e8893200->enter($__internal_fd6b6cdd170b77a35292c452f1f72dfe19aaf3c08c41300d7b1948a5e8893200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_117f4b0310eb7eb199c9bfe685fda89d9824598867d909d8e33cae8e57a820f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_117f4b0310eb7eb199c9bfe685fda89d9824598867d909d8e33cae8e57a820f0->enter($__internal_117f4b0310eb7eb199c9bfe685fda89d9824598867d909d8e33cae8e57a820f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_117f4b0310eb7eb199c9bfe685fda89d9824598867d909d8e33cae8e57a820f0->leave($__internal_117f4b0310eb7eb199c9bfe685fda89d9824598867d909d8e33cae8e57a820f0_prof);

        
        $__internal_fd6b6cdd170b77a35292c452f1f72dfe19aaf3c08c41300d7b1948a5e8893200->leave($__internal_fd6b6cdd170b77a35292c452f1f72dfe19aaf3c08c41300d7b1948a5e8893200_prof);

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
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}

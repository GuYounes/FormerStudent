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
        $__internal_359207faa1f5402a11c1c5cb28396ea580deb5ab085d5968f319119a64b04298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_359207faa1f5402a11c1c5cb28396ea580deb5ab085d5968f319119a64b04298->enter($__internal_359207faa1f5402a11c1c5cb28396ea580deb5ab085d5968f319119a64b04298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_3bd94fa79585a812ad0e18e8d307045cb6324b60dbcd2dc7c4e61d956040e42c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd94fa79585a812ad0e18e8d307045cb6324b60dbcd2dc7c4e61d956040e42c->enter($__internal_3bd94fa79585a812ad0e18e8d307045cb6324b60dbcd2dc7c4e61d956040e42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_359207faa1f5402a11c1c5cb28396ea580deb5ab085d5968f319119a64b04298->leave($__internal_359207faa1f5402a11c1c5cb28396ea580deb5ab085d5968f319119a64b04298_prof);

        
        $__internal_3bd94fa79585a812ad0e18e8d307045cb6324b60dbcd2dc7c4e61d956040e42c->leave($__internal_3bd94fa79585a812ad0e18e8d307045cb6324b60dbcd2dc7c4e61d956040e42c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9cfa51ca20f959affb7cd957604a46168ce903a876c19762c2ccb62cf700f02f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cfa51ca20f959affb7cd957604a46168ce903a876c19762c2ccb62cf700f02f->enter($__internal_9cfa51ca20f959affb7cd957604a46168ce903a876c19762c2ccb62cf700f02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_386544831dffc72e85c7226e682e4b8087dff6ce94e730c6fd9d6bbbfafec47a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_386544831dffc72e85c7226e682e4b8087dff6ce94e730c6fd9d6bbbfafec47a->enter($__internal_386544831dffc72e85c7226e682e4b8087dff6ce94e730c6fd9d6bbbfafec47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_386544831dffc72e85c7226e682e4b8087dff6ce94e730c6fd9d6bbbfafec47a->leave($__internal_386544831dffc72e85c7226e682e4b8087dff6ce94e730c6fd9d6bbbfafec47a_prof);

        
        $__internal_9cfa51ca20f959affb7cd957604a46168ce903a876c19762c2ccb62cf700f02f->leave($__internal_9cfa51ca20f959affb7cd957604a46168ce903a876c19762c2ccb62cf700f02f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f4f3cff3dd3cb55b2c15f5b77789ab55e26dfa3b05a3546d8622ca51ed37e01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f4f3cff3dd3cb55b2c15f5b77789ab55e26dfa3b05a3546d8622ca51ed37e01->enter($__internal_0f4f3cff3dd3cb55b2c15f5b77789ab55e26dfa3b05a3546d8622ca51ed37e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_238ac859c688d8e97f1ef14d4514f870be53c99639b4720cf839bd3631023d28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_238ac859c688d8e97f1ef14d4514f870be53c99639b4720cf839bd3631023d28->enter($__internal_238ac859c688d8e97f1ef14d4514f870be53c99639b4720cf839bd3631023d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_238ac859c688d8e97f1ef14d4514f870be53c99639b4720cf839bd3631023d28->leave($__internal_238ac859c688d8e97f1ef14d4514f870be53c99639b4720cf839bd3631023d28_prof);

        
        $__internal_0f4f3cff3dd3cb55b2c15f5b77789ab55e26dfa3b05a3546d8622ca51ed37e01->leave($__internal_0f4f3cff3dd3cb55b2c15f5b77789ab55e26dfa3b05a3546d8622ca51ed37e01_prof);

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

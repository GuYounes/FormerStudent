<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_96e9c4aa6c8226b54c6f60fe3955b84dbe24e2eea58639db76a57375a08d6d70 extends Twig_Template
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
        $__internal_e1863dba7da390829bbc6398ff8f967457256a36fbf1fb1633421f3c848c6191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1863dba7da390829bbc6398ff8f967457256a36fbf1fb1633421f3c848c6191->enter($__internal_e1863dba7da390829bbc6398ff8f967457256a36fbf1fb1633421f3c848c6191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_9e486885641ac0aa9f69a5d3d8a6eaf606a0a8cbff37f0d8bc2d2b95895531aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e486885641ac0aa9f69a5d3d8a6eaf606a0a8cbff37f0d8bc2d2b95895531aa->enter($__internal_9e486885641ac0aa9f69a5d3d8a6eaf606a0a8cbff37f0d8bc2d2b95895531aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1863dba7da390829bbc6398ff8f967457256a36fbf1fb1633421f3c848c6191->leave($__internal_e1863dba7da390829bbc6398ff8f967457256a36fbf1fb1633421f3c848c6191_prof);

        
        $__internal_9e486885641ac0aa9f69a5d3d8a6eaf606a0a8cbff37f0d8bc2d2b95895531aa->leave($__internal_9e486885641ac0aa9f69a5d3d8a6eaf606a0a8cbff37f0d8bc2d2b95895531aa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_af40fafc28ad4db5cc570d183a2a62fd2c51e63799bdbf03612fa238b100e1a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af40fafc28ad4db5cc570d183a2a62fd2c51e63799bdbf03612fa238b100e1a6->enter($__internal_af40fafc28ad4db5cc570d183a2a62fd2c51e63799bdbf03612fa238b100e1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bc833044d88f336677537379fe297aea19277351521b8948d85ecc11358febc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc833044d88f336677537379fe297aea19277351521b8948d85ecc11358febc3->enter($__internal_bc833044d88f336677537379fe297aea19277351521b8948d85ecc11358febc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_bc833044d88f336677537379fe297aea19277351521b8948d85ecc11358febc3->leave($__internal_bc833044d88f336677537379fe297aea19277351521b8948d85ecc11358febc3_prof);

        
        $__internal_af40fafc28ad4db5cc570d183a2a62fd2c51e63799bdbf03612fa238b100e1a6->leave($__internal_af40fafc28ad4db5cc570d183a2a62fd2c51e63799bdbf03612fa238b100e1a6_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8cbc2eb921a08e0549c8c7aefe0494e9c8af4b0a63ae94d1a276e2c63408fd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8cbc2eb921a08e0549c8c7aefe0494e9c8af4b0a63ae94d1a276e2c63408fd0->enter($__internal_b8cbc2eb921a08e0549c8c7aefe0494e9c8af4b0a63ae94d1a276e2c63408fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_495df31c968c17da99365705a0b687859f7bd6a3462305bded5e46823ece83b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_495df31c968c17da99365705a0b687859f7bd6a3462305bded5e46823ece83b3->enter($__internal_495df31c968c17da99365705a0b687859f7bd6a3462305bded5e46823ece83b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_495df31c968c17da99365705a0b687859f7bd6a3462305bded5e46823ece83b3->leave($__internal_495df31c968c17da99365705a0b687859f7bd6a3462305bded5e46823ece83b3_prof);

        
        $__internal_b8cbc2eb921a08e0549c8c7aefe0494e9c8af4b0a63ae94d1a276e2c63408fd0->leave($__internal_b8cbc2eb921a08e0549c8c7aefe0494e9c8af4b0a63ae94d1a276e2c63408fd0_prof);

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

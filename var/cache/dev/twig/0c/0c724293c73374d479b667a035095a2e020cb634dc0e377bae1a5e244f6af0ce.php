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
        $__internal_2919ce2380c4b49b33badc9f3a89b52504e0192cb4b6d4a8c4ccc4797f21a6dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2919ce2380c4b49b33badc9f3a89b52504e0192cb4b6d4a8c4ccc4797f21a6dd->enter($__internal_2919ce2380c4b49b33badc9f3a89b52504e0192cb4b6d4a8c4ccc4797f21a6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_75c58bb717444c64020c4e399bbd3cd8a2c519b6cb82b1b294aee7ddabc42cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c58bb717444c64020c4e399bbd3cd8a2c519b6cb82b1b294aee7ddabc42cbc->enter($__internal_75c58bb717444c64020c4e399bbd3cd8a2c519b6cb82b1b294aee7ddabc42cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2919ce2380c4b49b33badc9f3a89b52504e0192cb4b6d4a8c4ccc4797f21a6dd->leave($__internal_2919ce2380c4b49b33badc9f3a89b52504e0192cb4b6d4a8c4ccc4797f21a6dd_prof);

        
        $__internal_75c58bb717444c64020c4e399bbd3cd8a2c519b6cb82b1b294aee7ddabc42cbc->leave($__internal_75c58bb717444c64020c4e399bbd3cd8a2c519b6cb82b1b294aee7ddabc42cbc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_294da01f52a0a04cb243d7b1d231426fc4d1f90aeb5450dc2f9e27194003a5ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_294da01f52a0a04cb243d7b1d231426fc4d1f90aeb5450dc2f9e27194003a5ef->enter($__internal_294da01f52a0a04cb243d7b1d231426fc4d1f90aeb5450dc2f9e27194003a5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_49b90a931d498aa4a0e8d53e89e7b9027747d4bc68d04189f4438313a731548f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49b90a931d498aa4a0e8d53e89e7b9027747d4bc68d04189f4438313a731548f->enter($__internal_49b90a931d498aa4a0e8d53e89e7b9027747d4bc68d04189f4438313a731548f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_49b90a931d498aa4a0e8d53e89e7b9027747d4bc68d04189f4438313a731548f->leave($__internal_49b90a931d498aa4a0e8d53e89e7b9027747d4bc68d04189f4438313a731548f_prof);

        
        $__internal_294da01f52a0a04cb243d7b1d231426fc4d1f90aeb5450dc2f9e27194003a5ef->leave($__internal_294da01f52a0a04cb243d7b1d231426fc4d1f90aeb5450dc2f9e27194003a5ef_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4a7ae43b1c561adcbbee180a79dc748ab3e8f16e409f763702b0eb0f058f8ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a7ae43b1c561adcbbee180a79dc748ab3e8f16e409f763702b0eb0f058f8ac->enter($__internal_d4a7ae43b1c561adcbbee180a79dc748ab3e8f16e409f763702b0eb0f058f8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_905ba8d760fdb87f293f64e0396a3cdf168ca7d7a1f44700bc58f4867085b67f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_905ba8d760fdb87f293f64e0396a3cdf168ca7d7a1f44700bc58f4867085b67f->enter($__internal_905ba8d760fdb87f293f64e0396a3cdf168ca7d7a1f44700bc58f4867085b67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_905ba8d760fdb87f293f64e0396a3cdf168ca7d7a1f44700bc58f4867085b67f->leave($__internal_905ba8d760fdb87f293f64e0396a3cdf168ca7d7a1f44700bc58f4867085b67f_prof);

        
        $__internal_d4a7ae43b1c561adcbbee180a79dc748ab3e8f16e409f763702b0eb0f058f8ac->leave($__internal_d4a7ae43b1c561adcbbee180a79dc748ab3e8f16e409f763702b0eb0f058f8ac_prof);

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

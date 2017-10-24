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
        $__internal_86da12fa38939667a8a529e4a6287191ea87898d8a5b25c4157230c547a13b29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86da12fa38939667a8a529e4a6287191ea87898d8a5b25c4157230c547a13b29->enter($__internal_86da12fa38939667a8a529e4a6287191ea87898d8a5b25c4157230c547a13b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_16a7efe7d9aacbc428f379d82b3db5cfb1cf58710a524c96a32f0b9e2a967207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a7efe7d9aacbc428f379d82b3db5cfb1cf58710a524c96a32f0b9e2a967207->enter($__internal_16a7efe7d9aacbc428f379d82b3db5cfb1cf58710a524c96a32f0b9e2a967207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86da12fa38939667a8a529e4a6287191ea87898d8a5b25c4157230c547a13b29->leave($__internal_86da12fa38939667a8a529e4a6287191ea87898d8a5b25c4157230c547a13b29_prof);

        
        $__internal_16a7efe7d9aacbc428f379d82b3db5cfb1cf58710a524c96a32f0b9e2a967207->leave($__internal_16a7efe7d9aacbc428f379d82b3db5cfb1cf58710a524c96a32f0b9e2a967207_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_20fef98006824303fef0eb4b0d298196f1fc586744eb93118f7db0873ed1fc83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20fef98006824303fef0eb4b0d298196f1fc586744eb93118f7db0873ed1fc83->enter($__internal_20fef98006824303fef0eb4b0d298196f1fc586744eb93118f7db0873ed1fc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dac1e5aded766bd04a59cd2a942ed1a4b96606365837f5861d509b3d446e2149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac1e5aded766bd04a59cd2a942ed1a4b96606365837f5861d509b3d446e2149->enter($__internal_dac1e5aded766bd04a59cd2a942ed1a4b96606365837f5861d509b3d446e2149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_dac1e5aded766bd04a59cd2a942ed1a4b96606365837f5861d509b3d446e2149->leave($__internal_dac1e5aded766bd04a59cd2a942ed1a4b96606365837f5861d509b3d446e2149_prof);

        
        $__internal_20fef98006824303fef0eb4b0d298196f1fc586744eb93118f7db0873ed1fc83->leave($__internal_20fef98006824303fef0eb4b0d298196f1fc586744eb93118f7db0873ed1fc83_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5544d7d135dd2217ed1aa9b78048181f6ab43772cbe0154d242b3b3b190e4b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5544d7d135dd2217ed1aa9b78048181f6ab43772cbe0154d242b3b3b190e4b2->enter($__internal_c5544d7d135dd2217ed1aa9b78048181f6ab43772cbe0154d242b3b3b190e4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_75f2cbcdfa83b7ec9021937b247058cdd2acedcf902d8527bb99dd73f068c787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75f2cbcdfa83b7ec9021937b247058cdd2acedcf902d8527bb99dd73f068c787->enter($__internal_75f2cbcdfa83b7ec9021937b247058cdd2acedcf902d8527bb99dd73f068c787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_75f2cbcdfa83b7ec9021937b247058cdd2acedcf902d8527bb99dd73f068c787->leave($__internal_75f2cbcdfa83b7ec9021937b247058cdd2acedcf902d8527bb99dd73f068c787_prof);

        
        $__internal_c5544d7d135dd2217ed1aa9b78048181f6ab43772cbe0154d242b3b3b190e4b2->leave($__internal_c5544d7d135dd2217ed1aa9b78048181f6ab43772cbe0154d242b3b3b190e4b2_prof);

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

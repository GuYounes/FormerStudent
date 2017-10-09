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
        $__internal_8544eb184e452159a5ac04a7231844ca3c56fb7660168010d7c2f0ea3ab3cfdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8544eb184e452159a5ac04a7231844ca3c56fb7660168010d7c2f0ea3ab3cfdb->enter($__internal_8544eb184e452159a5ac04a7231844ca3c56fb7660168010d7c2f0ea3ab3cfdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_2c6efa23c02f86a047a2bd9f545bc77988e252e3243000f40415681e769aeb32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c6efa23c02f86a047a2bd9f545bc77988e252e3243000f40415681e769aeb32->enter($__internal_2c6efa23c02f86a047a2bd9f545bc77988e252e3243000f40415681e769aeb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8544eb184e452159a5ac04a7231844ca3c56fb7660168010d7c2f0ea3ab3cfdb->leave($__internal_8544eb184e452159a5ac04a7231844ca3c56fb7660168010d7c2f0ea3ab3cfdb_prof);

        
        $__internal_2c6efa23c02f86a047a2bd9f545bc77988e252e3243000f40415681e769aeb32->leave($__internal_2c6efa23c02f86a047a2bd9f545bc77988e252e3243000f40415681e769aeb32_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ea88b0fc155cba950b98d92fa3b42510e8b7feb4ff9b72491345155832afadaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea88b0fc155cba950b98d92fa3b42510e8b7feb4ff9b72491345155832afadaf->enter($__internal_ea88b0fc155cba950b98d92fa3b42510e8b7feb4ff9b72491345155832afadaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_56555b81ce20ac0965cd23def17c1020a9450524828e7e36a70f1385e0edd34e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56555b81ce20ac0965cd23def17c1020a9450524828e7e36a70f1385e0edd34e->enter($__internal_56555b81ce20ac0965cd23def17c1020a9450524828e7e36a70f1385e0edd34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_56555b81ce20ac0965cd23def17c1020a9450524828e7e36a70f1385e0edd34e->leave($__internal_56555b81ce20ac0965cd23def17c1020a9450524828e7e36a70f1385e0edd34e_prof);

        
        $__internal_ea88b0fc155cba950b98d92fa3b42510e8b7feb4ff9b72491345155832afadaf->leave($__internal_ea88b0fc155cba950b98d92fa3b42510e8b7feb4ff9b72491345155832afadaf_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_337ec3a12a0564ec11aa8d270203b6aa8482bb6ebd2a7ef4a9d3305a46d22488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_337ec3a12a0564ec11aa8d270203b6aa8482bb6ebd2a7ef4a9d3305a46d22488->enter($__internal_337ec3a12a0564ec11aa8d270203b6aa8482bb6ebd2a7ef4a9d3305a46d22488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b367c5de7b483be0bd6ea5bcff9b339f51933633621545191723e636b0877223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b367c5de7b483be0bd6ea5bcff9b339f51933633621545191723e636b0877223->enter($__internal_b367c5de7b483be0bd6ea5bcff9b339f51933633621545191723e636b0877223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b367c5de7b483be0bd6ea5bcff9b339f51933633621545191723e636b0877223->leave($__internal_b367c5de7b483be0bd6ea5bcff9b339f51933633621545191723e636b0877223_prof);

        
        $__internal_337ec3a12a0564ec11aa8d270203b6aa8482bb6ebd2a7ef4a9d3305a46d22488->leave($__internal_337ec3a12a0564ec11aa8d270203b6aa8482bb6ebd2a7ef4a9d3305a46d22488_prof);

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

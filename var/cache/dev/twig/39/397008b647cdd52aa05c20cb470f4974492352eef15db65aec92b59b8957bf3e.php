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
        $__internal_eb877fb4fad774b8367d0dc7e9e91337fff9ac1ddd00d5c7806c616571325102 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb877fb4fad774b8367d0dc7e9e91337fff9ac1ddd00d5c7806c616571325102->enter($__internal_eb877fb4fad774b8367d0dc7e9e91337fff9ac1ddd00d5c7806c616571325102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_2463f648329647971e26f6e6a806b1d5b1438eb79bafb7ea9613ac3d48920679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2463f648329647971e26f6e6a806b1d5b1438eb79bafb7ea9613ac3d48920679->enter($__internal_2463f648329647971e26f6e6a806b1d5b1438eb79bafb7ea9613ac3d48920679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb877fb4fad774b8367d0dc7e9e91337fff9ac1ddd00d5c7806c616571325102->leave($__internal_eb877fb4fad774b8367d0dc7e9e91337fff9ac1ddd00d5c7806c616571325102_prof);

        
        $__internal_2463f648329647971e26f6e6a806b1d5b1438eb79bafb7ea9613ac3d48920679->leave($__internal_2463f648329647971e26f6e6a806b1d5b1438eb79bafb7ea9613ac3d48920679_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_847424e3ba110b9e2bcb021a27997547725862375e336e3a348a1515257d0585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_847424e3ba110b9e2bcb021a27997547725862375e336e3a348a1515257d0585->enter($__internal_847424e3ba110b9e2bcb021a27997547725862375e336e3a348a1515257d0585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_890ad87272592071f1c7d1e8d1323ed987165ccd9e1d8dd3afde10529d290e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_890ad87272592071f1c7d1e8d1323ed987165ccd9e1d8dd3afde10529d290e26->enter($__internal_890ad87272592071f1c7d1e8d1323ed987165ccd9e1d8dd3afde10529d290e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_890ad87272592071f1c7d1e8d1323ed987165ccd9e1d8dd3afde10529d290e26->leave($__internal_890ad87272592071f1c7d1e8d1323ed987165ccd9e1d8dd3afde10529d290e26_prof);

        
        $__internal_847424e3ba110b9e2bcb021a27997547725862375e336e3a348a1515257d0585->leave($__internal_847424e3ba110b9e2bcb021a27997547725862375e336e3a348a1515257d0585_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f78725450dabf20603a21b3ca1af1b9641c72eab5d4604628831f433075a5cf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f78725450dabf20603a21b3ca1af1b9641c72eab5d4604628831f433075a5cf7->enter($__internal_f78725450dabf20603a21b3ca1af1b9641c72eab5d4604628831f433075a5cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_12ed4583f915be8bb4cdfcac2e2be426472c3427c321025c1e94437dcf6e89b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ed4583f915be8bb4cdfcac2e2be426472c3427c321025c1e94437dcf6e89b3->enter($__internal_12ed4583f915be8bb4cdfcac2e2be426472c3427c321025c1e94437dcf6e89b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_12ed4583f915be8bb4cdfcac2e2be426472c3427c321025c1e94437dcf6e89b3->leave($__internal_12ed4583f915be8bb4cdfcac2e2be426472c3427c321025c1e94437dcf6e89b3_prof);

        
        $__internal_f78725450dabf20603a21b3ca1af1b9641c72eab5d4604628831f433075a5cf7->leave($__internal_f78725450dabf20603a21b3ca1af1b9641c72eab5d4604628831f433075a5cf7_prof);

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

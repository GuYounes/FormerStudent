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
        $__internal_c2327c066078a89f8a19ea605852a8b4ebd4d67977b1312f49246c791b06ff58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2327c066078a89f8a19ea605852a8b4ebd4d67977b1312f49246c791b06ff58->enter($__internal_c2327c066078a89f8a19ea605852a8b4ebd4d67977b1312f49246c791b06ff58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_40268bbc8dab814332555afbb2334002695447fb2e1de8110681b55701180079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40268bbc8dab814332555afbb2334002695447fb2e1de8110681b55701180079->enter($__internal_40268bbc8dab814332555afbb2334002695447fb2e1de8110681b55701180079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2327c066078a89f8a19ea605852a8b4ebd4d67977b1312f49246c791b06ff58->leave($__internal_c2327c066078a89f8a19ea605852a8b4ebd4d67977b1312f49246c791b06ff58_prof);

        
        $__internal_40268bbc8dab814332555afbb2334002695447fb2e1de8110681b55701180079->leave($__internal_40268bbc8dab814332555afbb2334002695447fb2e1de8110681b55701180079_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dc2f418d4b1f8cdcd2d99d45c13853593f21c0fd044b33d00ebfba63dd938f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc2f418d4b1f8cdcd2d99d45c13853593f21c0fd044b33d00ebfba63dd938f00->enter($__internal_dc2f418d4b1f8cdcd2d99d45c13853593f21c0fd044b33d00ebfba63dd938f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3e4192c837d73b28f87fd3982e851b839d3cd08dfd4977c1f73619cf4e656255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e4192c837d73b28f87fd3982e851b839d3cd08dfd4977c1f73619cf4e656255->enter($__internal_3e4192c837d73b28f87fd3982e851b839d3cd08dfd4977c1f73619cf4e656255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_3e4192c837d73b28f87fd3982e851b839d3cd08dfd4977c1f73619cf4e656255->leave($__internal_3e4192c837d73b28f87fd3982e851b839d3cd08dfd4977c1f73619cf4e656255_prof);

        
        $__internal_dc2f418d4b1f8cdcd2d99d45c13853593f21c0fd044b33d00ebfba63dd938f00->leave($__internal_dc2f418d4b1f8cdcd2d99d45c13853593f21c0fd044b33d00ebfba63dd938f00_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fdc59aae438df7b6dcac3f0f54a6b470637e64940bddbd436d71e5822fb7522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fdc59aae438df7b6dcac3f0f54a6b470637e64940bddbd436d71e5822fb7522->enter($__internal_1fdc59aae438df7b6dcac3f0f54a6b470637e64940bddbd436d71e5822fb7522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_428be982af12feb96f715991b55ac639502cbc4c6718937f910352ca743fa71b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_428be982af12feb96f715991b55ac639502cbc4c6718937f910352ca743fa71b->enter($__internal_428be982af12feb96f715991b55ac639502cbc4c6718937f910352ca743fa71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_428be982af12feb96f715991b55ac639502cbc4c6718937f910352ca743fa71b->leave($__internal_428be982af12feb96f715991b55ac639502cbc4c6718937f910352ca743fa71b_prof);

        
        $__internal_1fdc59aae438df7b6dcac3f0f54a6b470637e64940bddbd436d71e5822fb7522->leave($__internal_1fdc59aae438df7b6dcac3f0f54a6b470637e64940bddbd436d71e5822fb7522_prof);

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

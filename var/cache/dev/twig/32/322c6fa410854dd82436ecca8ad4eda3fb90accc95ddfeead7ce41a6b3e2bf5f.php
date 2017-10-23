<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_18733bea11aae46763ebf5964208db0b14080ce2643d45af80822d62a8751129 extends Twig_Template
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
        $__internal_eee7a570d635a6b70a7ee9765d3720c7bc360e7ce553f70e0daaf6708aa73f71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eee7a570d635a6b70a7ee9765d3720c7bc360e7ce553f70e0daaf6708aa73f71->enter($__internal_eee7a570d635a6b70a7ee9765d3720c7bc360e7ce553f70e0daaf6708aa73f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_8a904151fa58ac5a456ac1c82aed267539c5ba92681c8df24bde1e38adeee97f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a904151fa58ac5a456ac1c82aed267539c5ba92681c8df24bde1e38adeee97f->enter($__internal_8a904151fa58ac5a456ac1c82aed267539c5ba92681c8df24bde1e38adeee97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eee7a570d635a6b70a7ee9765d3720c7bc360e7ce553f70e0daaf6708aa73f71->leave($__internal_eee7a570d635a6b70a7ee9765d3720c7bc360e7ce553f70e0daaf6708aa73f71_prof);

        
        $__internal_8a904151fa58ac5a456ac1c82aed267539c5ba92681c8df24bde1e38adeee97f->leave($__internal_8a904151fa58ac5a456ac1c82aed267539c5ba92681c8df24bde1e38adeee97f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_987456f22a58e408fb349c6fe91d921c0af287fc9332fd8e13eaabfbe9b4b977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_987456f22a58e408fb349c6fe91d921c0af287fc9332fd8e13eaabfbe9b4b977->enter($__internal_987456f22a58e408fb349c6fe91d921c0af287fc9332fd8e13eaabfbe9b4b977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_05f5fac1fdb6e386b32a77ac1177971bb43e7d1de899027c3b5b4e18462e20c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05f5fac1fdb6e386b32a77ac1177971bb43e7d1de899027c3b5b4e18462e20c7->enter($__internal_05f5fac1fdb6e386b32a77ac1177971bb43e7d1de899027c3b5b4e18462e20c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_05f5fac1fdb6e386b32a77ac1177971bb43e7d1de899027c3b5b4e18462e20c7->leave($__internal_05f5fac1fdb6e386b32a77ac1177971bb43e7d1de899027c3b5b4e18462e20c7_prof);

        
        $__internal_987456f22a58e408fb349c6fe91d921c0af287fc9332fd8e13eaabfbe9b4b977->leave($__internal_987456f22a58e408fb349c6fe91d921c0af287fc9332fd8e13eaabfbe9b4b977_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_859525c64a5b758f7a545a38fe7f551f5c7c0dc4bfcbd71f26663b8f3523eedd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_859525c64a5b758f7a545a38fe7f551f5c7c0dc4bfcbd71f26663b8f3523eedd->enter($__internal_859525c64a5b758f7a545a38fe7f551f5c7c0dc4bfcbd71f26663b8f3523eedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_91b4c4fadb8a021f1da43b31ffbcb1cfa858966d198b19268228a85e3fafc581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b4c4fadb8a021f1da43b31ffbcb1cfa858966d198b19268228a85e3fafc581->enter($__internal_91b4c4fadb8a021f1da43b31ffbcb1cfa858966d198b19268228a85e3fafc581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_91b4c4fadb8a021f1da43b31ffbcb1cfa858966d198b19268228a85e3fafc581->leave($__internal_91b4c4fadb8a021f1da43b31ffbcb1cfa858966d198b19268228a85e3fafc581_prof);

        
        $__internal_859525c64a5b758f7a545a38fe7f551f5c7c0dc4bfcbd71f26663b8f3523eedd->leave($__internal_859525c64a5b758f7a545a38fe7f551f5c7c0dc4bfcbd71f26663b8f3523eedd_prof);

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

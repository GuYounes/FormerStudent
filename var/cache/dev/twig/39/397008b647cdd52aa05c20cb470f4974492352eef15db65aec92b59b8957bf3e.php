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
        $__internal_f91511120630e59cc544fce970c8a2d6beba0ce9df6985197bad6d15efd2ae49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f91511120630e59cc544fce970c8a2d6beba0ce9df6985197bad6d15efd2ae49->enter($__internal_f91511120630e59cc544fce970c8a2d6beba0ce9df6985197bad6d15efd2ae49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_1d10fcd8b2cd240938e2fd636b9462254dd0e86d1f956e7eb1a4371c162319a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d10fcd8b2cd240938e2fd636b9462254dd0e86d1f956e7eb1a4371c162319a3->enter($__internal_1d10fcd8b2cd240938e2fd636b9462254dd0e86d1f956e7eb1a4371c162319a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f91511120630e59cc544fce970c8a2d6beba0ce9df6985197bad6d15efd2ae49->leave($__internal_f91511120630e59cc544fce970c8a2d6beba0ce9df6985197bad6d15efd2ae49_prof);

        
        $__internal_1d10fcd8b2cd240938e2fd636b9462254dd0e86d1f956e7eb1a4371c162319a3->leave($__internal_1d10fcd8b2cd240938e2fd636b9462254dd0e86d1f956e7eb1a4371c162319a3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9bd5eda8be17051ccac0cac44c4728d0f941f2b3cbd8f0ed36175056e56dc48b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bd5eda8be17051ccac0cac44c4728d0f941f2b3cbd8f0ed36175056e56dc48b->enter($__internal_9bd5eda8be17051ccac0cac44c4728d0f941f2b3cbd8f0ed36175056e56dc48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_30be5f1020d8b14e2e648ffedd88fa285da2a09b179760ab93d879b232deb5df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30be5f1020d8b14e2e648ffedd88fa285da2a09b179760ab93d879b232deb5df->enter($__internal_30be5f1020d8b14e2e648ffedd88fa285da2a09b179760ab93d879b232deb5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_30be5f1020d8b14e2e648ffedd88fa285da2a09b179760ab93d879b232deb5df->leave($__internal_30be5f1020d8b14e2e648ffedd88fa285da2a09b179760ab93d879b232deb5df_prof);

        
        $__internal_9bd5eda8be17051ccac0cac44c4728d0f941f2b3cbd8f0ed36175056e56dc48b->leave($__internal_9bd5eda8be17051ccac0cac44c4728d0f941f2b3cbd8f0ed36175056e56dc48b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_61c56b673de3604883534098f6ed55d3705a5bca896fd6380cac73bb03f9ced5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61c56b673de3604883534098f6ed55d3705a5bca896fd6380cac73bb03f9ced5->enter($__internal_61c56b673de3604883534098f6ed55d3705a5bca896fd6380cac73bb03f9ced5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5ec719e9fc5301443ad5a6a9e5b97e601a1cd47508d6b63d4231b0c20215b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5ec719e9fc5301443ad5a6a9e5b97e601a1cd47508d6b63d4231b0c20215b24->enter($__internal_e5ec719e9fc5301443ad5a6a9e5b97e601a1cd47508d6b63d4231b0c20215b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e5ec719e9fc5301443ad5a6a9e5b97e601a1cd47508d6b63d4231b0c20215b24->leave($__internal_e5ec719e9fc5301443ad5a6a9e5b97e601a1cd47508d6b63d4231b0c20215b24_prof);

        
        $__internal_61c56b673de3604883534098f6ed55d3705a5bca896fd6380cac73bb03f9ced5->leave($__internal_61c56b673de3604883534098f6ed55d3705a5bca896fd6380cac73bb03f9ced5_prof);

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

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
        $__internal_2fde95f4f85bcc3643126d8c42195ac8d5c31e852f645951d2f67afe3db6c83c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fde95f4f85bcc3643126d8c42195ac8d5c31e852f645951d2f67afe3db6c83c->enter($__internal_2fde95f4f85bcc3643126d8c42195ac8d5c31e852f645951d2f67afe3db6c83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_8a90d26c5a1063fada8706336136d25c1b8c386cda320b9f5e53524cf5f66f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a90d26c5a1063fada8706336136d25c1b8c386cda320b9f5e53524cf5f66f7a->enter($__internal_8a90d26c5a1063fada8706336136d25c1b8c386cda320b9f5e53524cf5f66f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fde95f4f85bcc3643126d8c42195ac8d5c31e852f645951d2f67afe3db6c83c->leave($__internal_2fde95f4f85bcc3643126d8c42195ac8d5c31e852f645951d2f67afe3db6c83c_prof);

        
        $__internal_8a90d26c5a1063fada8706336136d25c1b8c386cda320b9f5e53524cf5f66f7a->leave($__internal_8a90d26c5a1063fada8706336136d25c1b8c386cda320b9f5e53524cf5f66f7a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_88745ede3472d1370b928a26285331e40d09a04cc204217862455f8778889b0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88745ede3472d1370b928a26285331e40d09a04cc204217862455f8778889b0d->enter($__internal_88745ede3472d1370b928a26285331e40d09a04cc204217862455f8778889b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a848faee4feae55d79bdca8d88488b84d14994abd9d775f011537ae5c9365f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a848faee4feae55d79bdca8d88488b84d14994abd9d775f011537ae5c9365f6f->enter($__internal_a848faee4feae55d79bdca8d88488b84d14994abd9d775f011537ae5c9365f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_a848faee4feae55d79bdca8d88488b84d14994abd9d775f011537ae5c9365f6f->leave($__internal_a848faee4feae55d79bdca8d88488b84d14994abd9d775f011537ae5c9365f6f_prof);

        
        $__internal_88745ede3472d1370b928a26285331e40d09a04cc204217862455f8778889b0d->leave($__internal_88745ede3472d1370b928a26285331e40d09a04cc204217862455f8778889b0d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b17898c47597097549103ab0b0bd39389e38eb555b3c12eb2012454220897ad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b17898c47597097549103ab0b0bd39389e38eb555b3c12eb2012454220897ad9->enter($__internal_b17898c47597097549103ab0b0bd39389e38eb555b3c12eb2012454220897ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d17d372b7ce64de433c16dc5ee32159537ea1505dceadf7562b2ada427e86ac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17d372b7ce64de433c16dc5ee32159537ea1505dceadf7562b2ada427e86ac9->enter($__internal_d17d372b7ce64de433c16dc5ee32159537ea1505dceadf7562b2ada427e86ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d17d372b7ce64de433c16dc5ee32159537ea1505dceadf7562b2ada427e86ac9->leave($__internal_d17d372b7ce64de433c16dc5ee32159537ea1505dceadf7562b2ada427e86ac9_prof);

        
        $__internal_b17898c47597097549103ab0b0bd39389e38eb555b3c12eb2012454220897ad9->leave($__internal_b17898c47597097549103ab0b0bd39389e38eb555b3c12eb2012454220897ad9_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}

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
        $__internal_ae7c6e0ba5369646d2a96bacc15b82d4f9b067104f4920c60762491f7a221e90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae7c6e0ba5369646d2a96bacc15b82d4f9b067104f4920c60762491f7a221e90->enter($__internal_ae7c6e0ba5369646d2a96bacc15b82d4f9b067104f4920c60762491f7a221e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_139693935257a9ebfb2d963eef222724862b8c6cc819da028d01789fab1fbfce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_139693935257a9ebfb2d963eef222724862b8c6cc819da028d01789fab1fbfce->enter($__internal_139693935257a9ebfb2d963eef222724862b8c6cc819da028d01789fab1fbfce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae7c6e0ba5369646d2a96bacc15b82d4f9b067104f4920c60762491f7a221e90->leave($__internal_ae7c6e0ba5369646d2a96bacc15b82d4f9b067104f4920c60762491f7a221e90_prof);

        
        $__internal_139693935257a9ebfb2d963eef222724862b8c6cc819da028d01789fab1fbfce->leave($__internal_139693935257a9ebfb2d963eef222724862b8c6cc819da028d01789fab1fbfce_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aa892abc6085af94f0219343f6151492f1063bd806db36ef4a7666cc8fe9f388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa892abc6085af94f0219343f6151492f1063bd806db36ef4a7666cc8fe9f388->enter($__internal_aa892abc6085af94f0219343f6151492f1063bd806db36ef4a7666cc8fe9f388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1e20b86dc790f4d87b60ca9dbb92bf3a3feffd2ffb91d147afc7bf01f8d6cd6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e20b86dc790f4d87b60ca9dbb92bf3a3feffd2ffb91d147afc7bf01f8d6cd6c->enter($__internal_1e20b86dc790f4d87b60ca9dbb92bf3a3feffd2ffb91d147afc7bf01f8d6cd6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_1e20b86dc790f4d87b60ca9dbb92bf3a3feffd2ffb91d147afc7bf01f8d6cd6c->leave($__internal_1e20b86dc790f4d87b60ca9dbb92bf3a3feffd2ffb91d147afc7bf01f8d6cd6c_prof);

        
        $__internal_aa892abc6085af94f0219343f6151492f1063bd806db36ef4a7666cc8fe9f388->leave($__internal_aa892abc6085af94f0219343f6151492f1063bd806db36ef4a7666cc8fe9f388_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c870e3adfe99685b7494096f91197ac667dbdf302f8af8dda8dc2f551542d07d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c870e3adfe99685b7494096f91197ac667dbdf302f8af8dda8dc2f551542d07d->enter($__internal_c870e3adfe99685b7494096f91197ac667dbdf302f8af8dda8dc2f551542d07d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3c771e2c2cd21bae7fbc68d0472fdeb95e74a7dafd6d01d26e65c759e186bf08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c771e2c2cd21bae7fbc68d0472fdeb95e74a7dafd6d01d26e65c759e186bf08->enter($__internal_3c771e2c2cd21bae7fbc68d0472fdeb95e74a7dafd6d01d26e65c759e186bf08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3c771e2c2cd21bae7fbc68d0472fdeb95e74a7dafd6d01d26e65c759e186bf08->leave($__internal_3c771e2c2cd21bae7fbc68d0472fdeb95e74a7dafd6d01d26e65c759e186bf08_prof);

        
        $__internal_c870e3adfe99685b7494096f91197ac667dbdf302f8af8dda8dc2f551542d07d->leave($__internal_c870e3adfe99685b7494096f91197ac667dbdf302f8af8dda8dc2f551542d07d_prof);

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

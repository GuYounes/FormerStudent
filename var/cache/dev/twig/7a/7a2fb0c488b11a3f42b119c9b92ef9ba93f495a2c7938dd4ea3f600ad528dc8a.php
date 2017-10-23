<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2737e727f433d3009943636f3cfc1bba7f8f4168a01a0b46f09e930704d126bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bde3769d06d3d366459e109330b7502d7fad772e21c27fced5bda2e7802c3a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bde3769d06d3d366459e109330b7502d7fad772e21c27fced5bda2e7802c3a4->enter($__internal_2bde3769d06d3d366459e109330b7502d7fad772e21c27fced5bda2e7802c3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3e00f7da069cfee0fe7e710b5adcdd22b13a796a17177984382407ee11a8eee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e00f7da069cfee0fe7e710b5adcdd22b13a796a17177984382407ee11a8eee5->enter($__internal_3e00f7da069cfee0fe7e710b5adcdd22b13a796a17177984382407ee11a8eee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bde3769d06d3d366459e109330b7502d7fad772e21c27fced5bda2e7802c3a4->leave($__internal_2bde3769d06d3d366459e109330b7502d7fad772e21c27fced5bda2e7802c3a4_prof);

        
        $__internal_3e00f7da069cfee0fe7e710b5adcdd22b13a796a17177984382407ee11a8eee5->leave($__internal_3e00f7da069cfee0fe7e710b5adcdd22b13a796a17177984382407ee11a8eee5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ab95c751d31406cd0017ece9e7476e76a3ceb30d64405f20ad086fecaa1e0cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab95c751d31406cd0017ece9e7476e76a3ceb30d64405f20ad086fecaa1e0cdb->enter($__internal_ab95c751d31406cd0017ece9e7476e76a3ceb30d64405f20ad086fecaa1e0cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c70a9a01abf5d396aed9288e45ba433b0fd92e2cbbfe8e3f0da2d5671a3c749c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c70a9a01abf5d396aed9288e45ba433b0fd92e2cbbfe8e3f0da2d5671a3c749c->enter($__internal_c70a9a01abf5d396aed9288e45ba433b0fd92e2cbbfe8e3f0da2d5671a3c749c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_c70a9a01abf5d396aed9288e45ba433b0fd92e2cbbfe8e3f0da2d5671a3c749c->leave($__internal_c70a9a01abf5d396aed9288e45ba433b0fd92e2cbbfe8e3f0da2d5671a3c749c_prof);

        
        $__internal_ab95c751d31406cd0017ece9e7476e76a3ceb30d64405f20ad086fecaa1e0cdb->leave($__internal_ab95c751d31406cd0017ece9e7476e76a3ceb30d64405f20ad086fecaa1e0cdb_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ddfcf534a68efe3798e880b59702bcb49a2e93921f5b649e17defe388de96d91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddfcf534a68efe3798e880b59702bcb49a2e93921f5b649e17defe388de96d91->enter($__internal_ddfcf534a68efe3798e880b59702bcb49a2e93921f5b649e17defe388de96d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ccd06ccf60f25a9b08f5090ad2b7d7c2afadb0a99d213ff95018aa4a1618fad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd06ccf60f25a9b08f5090ad2b7d7c2afadb0a99d213ff95018aa4a1618fad9->enter($__internal_ccd06ccf60f25a9b08f5090ad2b7d7c2afadb0a99d213ff95018aa4a1618fad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_ccd06ccf60f25a9b08f5090ad2b7d7c2afadb0a99d213ff95018aa4a1618fad9->leave($__internal_ccd06ccf60f25a9b08f5090ad2b7d7c2afadb0a99d213ff95018aa4a1618fad9_prof);

        
        $__internal_ddfcf534a68efe3798e880b59702bcb49a2e93921f5b649e17defe388de96d91->leave($__internal_ddfcf534a68efe3798e880b59702bcb49a2e93921f5b649e17defe388de96d91_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c78e0453551434fd4c74f1e995ab88dffd59c9f93e2d8c5cbc6758e39302b510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c78e0453551434fd4c74f1e995ab88dffd59c9f93e2d8c5cbc6758e39302b510->enter($__internal_c78e0453551434fd4c74f1e995ab88dffd59c9f93e2d8c5cbc6758e39302b510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8bb8a9a48262017989c946dbcaef5263abdc0e22b3a8d344bff2efa956bec47e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb8a9a48262017989c946dbcaef5263abdc0e22b3a8d344bff2efa956bec47e->enter($__internal_8bb8a9a48262017989c946dbcaef5263abdc0e22b3a8d344bff2efa956bec47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8bb8a9a48262017989c946dbcaef5263abdc0e22b3a8d344bff2efa956bec47e->leave($__internal_8bb8a9a48262017989c946dbcaef5263abdc0e22b3a8d344bff2efa956bec47e_prof);

        
        $__internal_c78e0453551434fd4c74f1e995ab88dffd59c9f93e2d8c5cbc6758e39302b510->leave($__internal_c78e0453551434fd4c74f1e995ab88dffd59c9f93e2d8c5cbc6758e39302b510_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}

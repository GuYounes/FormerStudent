<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_83f2bb3342796c80b86979bf76b5fab664d67ea5cf444dd5b509fc55f0a3f9e3 extends Twig_Template
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
        $__internal_24c5abb4b3cb46981f905f7c0ad474087340859f541aa828bf8abfb9ca284900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24c5abb4b3cb46981f905f7c0ad474087340859f541aa828bf8abfb9ca284900->enter($__internal_24c5abb4b3cb46981f905f7c0ad474087340859f541aa828bf8abfb9ca284900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ec14efbcaf0a9ce309e7355e6718cc3c48010eb2152a448f974dc9b5d837248d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec14efbcaf0a9ce309e7355e6718cc3c48010eb2152a448f974dc9b5d837248d->enter($__internal_ec14efbcaf0a9ce309e7355e6718cc3c48010eb2152a448f974dc9b5d837248d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24c5abb4b3cb46981f905f7c0ad474087340859f541aa828bf8abfb9ca284900->leave($__internal_24c5abb4b3cb46981f905f7c0ad474087340859f541aa828bf8abfb9ca284900_prof);

        
        $__internal_ec14efbcaf0a9ce309e7355e6718cc3c48010eb2152a448f974dc9b5d837248d->leave($__internal_ec14efbcaf0a9ce309e7355e6718cc3c48010eb2152a448f974dc9b5d837248d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f2bf4f7ef3a941f1165159e65ff61dffdb2f42a8657b7c1005527c61d8f20ca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2bf4f7ef3a941f1165159e65ff61dffdb2f42a8657b7c1005527c61d8f20ca4->enter($__internal_f2bf4f7ef3a941f1165159e65ff61dffdb2f42a8657b7c1005527c61d8f20ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_47c8cd764441ca19f56838206e2db394273bc39ef8a130db9aa5919339b36389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47c8cd764441ca19f56838206e2db394273bc39ef8a130db9aa5919339b36389->enter($__internal_47c8cd764441ca19f56838206e2db394273bc39ef8a130db9aa5919339b36389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_47c8cd764441ca19f56838206e2db394273bc39ef8a130db9aa5919339b36389->leave($__internal_47c8cd764441ca19f56838206e2db394273bc39ef8a130db9aa5919339b36389_prof);

        
        $__internal_f2bf4f7ef3a941f1165159e65ff61dffdb2f42a8657b7c1005527c61d8f20ca4->leave($__internal_f2bf4f7ef3a941f1165159e65ff61dffdb2f42a8657b7c1005527c61d8f20ca4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7776f749c92cc9711caa16f37f186a7e6dfc630135817f2f46edf6ad2ccbfad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7776f749c92cc9711caa16f37f186a7e6dfc630135817f2f46edf6ad2ccbfad4->enter($__internal_7776f749c92cc9711caa16f37f186a7e6dfc630135817f2f46edf6ad2ccbfad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ed416fad2c37ba4cf077cf02fd2ba27d4d1fa2f058b1d6ac52e9331d57767ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed416fad2c37ba4cf077cf02fd2ba27d4d1fa2f058b1d6ac52e9331d57767ebb->enter($__internal_ed416fad2c37ba4cf077cf02fd2ba27d4d1fa2f058b1d6ac52e9331d57767ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_ed416fad2c37ba4cf077cf02fd2ba27d4d1fa2f058b1d6ac52e9331d57767ebb->leave($__internal_ed416fad2c37ba4cf077cf02fd2ba27d4d1fa2f058b1d6ac52e9331d57767ebb_prof);

        
        $__internal_7776f749c92cc9711caa16f37f186a7e6dfc630135817f2f46edf6ad2ccbfad4->leave($__internal_7776f749c92cc9711caa16f37f186a7e6dfc630135817f2f46edf6ad2ccbfad4_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_1137991c265cd415c502d481a7da00f35abb0ec600b0e9e167283af9ef1e12d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1137991c265cd415c502d481a7da00f35abb0ec600b0e9e167283af9ef1e12d8->enter($__internal_1137991c265cd415c502d481a7da00f35abb0ec600b0e9e167283af9ef1e12d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe0b9a1ad758505cc9c63787426f9164bbd4f48a840b4b3b38f16abf5b0dd5b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe0b9a1ad758505cc9c63787426f9164bbd4f48a840b4b3b38f16abf5b0dd5b8->enter($__internal_fe0b9a1ad758505cc9c63787426f9164bbd4f48a840b4b3b38f16abf5b0dd5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_fe0b9a1ad758505cc9c63787426f9164bbd4f48a840b4b3b38f16abf5b0dd5b8->leave($__internal_fe0b9a1ad758505cc9c63787426f9164bbd4f48a840b4b3b38f16abf5b0dd5b8_prof);

        
        $__internal_1137991c265cd415c502d481a7da00f35abb0ec600b0e9e167283af9ef1e12d8->leave($__internal_1137991c265cd415c502d481a7da00f35abb0ec600b0e9e167283af9ef1e12d8_prof);

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

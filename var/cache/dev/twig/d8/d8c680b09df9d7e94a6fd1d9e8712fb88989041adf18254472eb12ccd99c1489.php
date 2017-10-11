<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d49698504a5bc26c1cb1248242c5bfdedca6fd2f01dcd4386c820d60f04aeda0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_760640b8ea98217b929267725090066952c86a9aab2bd5805198a46f67ca4607 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_760640b8ea98217b929267725090066952c86a9aab2bd5805198a46f67ca4607->enter($__internal_760640b8ea98217b929267725090066952c86a9aab2bd5805198a46f67ca4607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_cd7e41ef291be0adca808ed9d4e9374a55d3ed391a32ca8ce7f5a3d03963f95a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7e41ef291be0adca808ed9d4e9374a55d3ed391a32ca8ce7f5a3d03963f95a->enter($__internal_cd7e41ef291be0adca808ed9d4e9374a55d3ed391a32ca8ce7f5a3d03963f95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_760640b8ea98217b929267725090066952c86a9aab2bd5805198a46f67ca4607->leave($__internal_760640b8ea98217b929267725090066952c86a9aab2bd5805198a46f67ca4607_prof);

        
        $__internal_cd7e41ef291be0adca808ed9d4e9374a55d3ed391a32ca8ce7f5a3d03963f95a->leave($__internal_cd7e41ef291be0adca808ed9d4e9374a55d3ed391a32ca8ce7f5a3d03963f95a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_632d58d67beb716df0d754b12058018ab0c8185c273fe11d23d18e3caa27464d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_632d58d67beb716df0d754b12058018ab0c8185c273fe11d23d18e3caa27464d->enter($__internal_632d58d67beb716df0d754b12058018ab0c8185c273fe11d23d18e3caa27464d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d51114ae5ffe80d99a3de5b8e9e0717c0173289c9806c446237bbcee55367f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d51114ae5ffe80d99a3de5b8e9e0717c0173289c9806c446237bbcee55367f07->enter($__internal_d51114ae5ffe80d99a3de5b8e9e0717c0173289c9806c446237bbcee55367f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d51114ae5ffe80d99a3de5b8e9e0717c0173289c9806c446237bbcee55367f07->leave($__internal_d51114ae5ffe80d99a3de5b8e9e0717c0173289c9806c446237bbcee55367f07_prof);

        
        $__internal_632d58d67beb716df0d754b12058018ab0c8185c273fe11d23d18e3caa27464d->leave($__internal_632d58d67beb716df0d754b12058018ab0c8185c273fe11d23d18e3caa27464d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d31caa993808e5fa5bd02968dc28516e0d88f5fd3cec1414e3d9a1d9dc75c15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d31caa993808e5fa5bd02968dc28516e0d88f5fd3cec1414e3d9a1d9dc75c15->enter($__internal_1d31caa993808e5fa5bd02968dc28516e0d88f5fd3cec1414e3d9a1d9dc75c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ece86b2f9bdd06e3b416f3779586aaf5e19de21107ad69468a640f45cc00fca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ece86b2f9bdd06e3b416f3779586aaf5e19de21107ad69468a640f45cc00fca7->enter($__internal_ece86b2f9bdd06e3b416f3779586aaf5e19de21107ad69468a640f45cc00fca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_ece86b2f9bdd06e3b416f3779586aaf5e19de21107ad69468a640f45cc00fca7->leave($__internal_ece86b2f9bdd06e3b416f3779586aaf5e19de21107ad69468a640f45cc00fca7_prof);

        
        $__internal_1d31caa993808e5fa5bd02968dc28516e0d88f5fd3cec1414e3d9a1d9dc75c15->leave($__internal_1d31caa993808e5fa5bd02968dc28516e0d88f5fd3cec1414e3d9a1d9dc75c15_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e315fb1fce2b1cd608b9749b9f29ce44ef03115c7607206cfc06c1eed3d4ff45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e315fb1fce2b1cd608b9749b9f29ce44ef03115c7607206cfc06c1eed3d4ff45->enter($__internal_e315fb1fce2b1cd608b9749b9f29ce44ef03115c7607206cfc06c1eed3d4ff45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e984c3aaab6b82cbe734b397b5e349387d174f94a69b940a2fe535a9b90e1a8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e984c3aaab6b82cbe734b397b5e349387d174f94a69b940a2fe535a9b90e1a8b->enter($__internal_e984c3aaab6b82cbe734b397b5e349387d174f94a69b940a2fe535a9b90e1a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_e984c3aaab6b82cbe734b397b5e349387d174f94a69b940a2fe535a9b90e1a8b->leave($__internal_e984c3aaab6b82cbe734b397b5e349387d174f94a69b940a2fe535a9b90e1a8b_prof);

        
        $__internal_e315fb1fce2b1cd608b9749b9f29ce44ef03115c7607206cfc06c1eed3d4ff45->leave($__internal_e315fb1fce2b1cd608b9749b9f29ce44ef03115c7607206cfc06c1eed3d4ff45_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

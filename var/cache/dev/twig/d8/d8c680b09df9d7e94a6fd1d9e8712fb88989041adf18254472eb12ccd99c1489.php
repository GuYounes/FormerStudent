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
        $__internal_32fb9421aff0de7f28b808504670cef476ee84291f1b2f1a332a57873559ab09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32fb9421aff0de7f28b808504670cef476ee84291f1b2f1a332a57873559ab09->enter($__internal_32fb9421aff0de7f28b808504670cef476ee84291f1b2f1a332a57873559ab09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_ae7ed16b80558fd3ffb9118b5b074536a4a0fb6019064cfed093cb0b226681ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae7ed16b80558fd3ffb9118b5b074536a4a0fb6019064cfed093cb0b226681ae->enter($__internal_ae7ed16b80558fd3ffb9118b5b074536a4a0fb6019064cfed093cb0b226681ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32fb9421aff0de7f28b808504670cef476ee84291f1b2f1a332a57873559ab09->leave($__internal_32fb9421aff0de7f28b808504670cef476ee84291f1b2f1a332a57873559ab09_prof);

        
        $__internal_ae7ed16b80558fd3ffb9118b5b074536a4a0fb6019064cfed093cb0b226681ae->leave($__internal_ae7ed16b80558fd3ffb9118b5b074536a4a0fb6019064cfed093cb0b226681ae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4becd00a300246394e0af2347d08c7c0f7ae1dbe4f297741e7a4026968575395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4becd00a300246394e0af2347d08c7c0f7ae1dbe4f297741e7a4026968575395->enter($__internal_4becd00a300246394e0af2347d08c7c0f7ae1dbe4f297741e7a4026968575395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_36ef3698b3d63dd0ccafbf0bd51377d9f70fc75284cc18908b32844deae75a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ef3698b3d63dd0ccafbf0bd51377d9f70fc75284cc18908b32844deae75a21->enter($__internal_36ef3698b3d63dd0ccafbf0bd51377d9f70fc75284cc18908b32844deae75a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_36ef3698b3d63dd0ccafbf0bd51377d9f70fc75284cc18908b32844deae75a21->leave($__internal_36ef3698b3d63dd0ccafbf0bd51377d9f70fc75284cc18908b32844deae75a21_prof);

        
        $__internal_4becd00a300246394e0af2347d08c7c0f7ae1dbe4f297741e7a4026968575395->leave($__internal_4becd00a300246394e0af2347d08c7c0f7ae1dbe4f297741e7a4026968575395_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_33952ecc9127fd3833f119ee99005684f68d742ab155480f72449008270ad38e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33952ecc9127fd3833f119ee99005684f68d742ab155480f72449008270ad38e->enter($__internal_33952ecc9127fd3833f119ee99005684f68d742ab155480f72449008270ad38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d15000dbc0e61b1368fa4b560078931b7fe43f4cb7776afeac2680ae8cb8f49b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d15000dbc0e61b1368fa4b560078931b7fe43f4cb7776afeac2680ae8cb8f49b->enter($__internal_d15000dbc0e61b1368fa4b560078931b7fe43f4cb7776afeac2680ae8cb8f49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_d15000dbc0e61b1368fa4b560078931b7fe43f4cb7776afeac2680ae8cb8f49b->leave($__internal_d15000dbc0e61b1368fa4b560078931b7fe43f4cb7776afeac2680ae8cb8f49b_prof);

        
        $__internal_33952ecc9127fd3833f119ee99005684f68d742ab155480f72449008270ad38e->leave($__internal_33952ecc9127fd3833f119ee99005684f68d742ab155480f72449008270ad38e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6003828371f2c9c2e92fb5466a4e221fe5831347f9f0103e638bab1d165c001e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6003828371f2c9c2e92fb5466a4e221fe5831347f9f0103e638bab1d165c001e->enter($__internal_6003828371f2c9c2e92fb5466a4e221fe5831347f9f0103e638bab1d165c001e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d5a994500fda559a22de0e47699a1e049da6569c41f9b0f7233666b70fb58589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a994500fda559a22de0e47699a1e049da6569c41f9b0f7233666b70fb58589->enter($__internal_d5a994500fda559a22de0e47699a1e049da6569c41f9b0f7233666b70fb58589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_d5a994500fda559a22de0e47699a1e049da6569c41f9b0f7233666b70fb58589->leave($__internal_d5a994500fda559a22de0e47699a1e049da6569c41f9b0f7233666b70fb58589_prof);

        
        $__internal_6003828371f2c9c2e92fb5466a4e221fe5831347f9f0103e638bab1d165c001e->leave($__internal_6003828371f2c9c2e92fb5466a4e221fe5831347f9f0103e638bab1d165c001e_prof);

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

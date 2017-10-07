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
        $__internal_07a02ed6549d91c21038c5f661a028c55c257448299e09f6fdaa6b84aa43bbc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07a02ed6549d91c21038c5f661a028c55c257448299e09f6fdaa6b84aa43bbc5->enter($__internal_07a02ed6549d91c21038c5f661a028c55c257448299e09f6fdaa6b84aa43bbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_0619bd6c3a12eb3e30a81e084a9ba5c280554fe156db30b241071c194d587843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0619bd6c3a12eb3e30a81e084a9ba5c280554fe156db30b241071c194d587843->enter($__internal_0619bd6c3a12eb3e30a81e084a9ba5c280554fe156db30b241071c194d587843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07a02ed6549d91c21038c5f661a028c55c257448299e09f6fdaa6b84aa43bbc5->leave($__internal_07a02ed6549d91c21038c5f661a028c55c257448299e09f6fdaa6b84aa43bbc5_prof);

        
        $__internal_0619bd6c3a12eb3e30a81e084a9ba5c280554fe156db30b241071c194d587843->leave($__internal_0619bd6c3a12eb3e30a81e084a9ba5c280554fe156db30b241071c194d587843_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a69753b0c26ca961e59f4ad5aadb0cbb03ce801c1320908da00e99838b30177d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a69753b0c26ca961e59f4ad5aadb0cbb03ce801c1320908da00e99838b30177d->enter($__internal_a69753b0c26ca961e59f4ad5aadb0cbb03ce801c1320908da00e99838b30177d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9bb03782fa3fcc812d40bc61f9b165d658612374e9db62c5c7648eade4c7a52a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bb03782fa3fcc812d40bc61f9b165d658612374e9db62c5c7648eade4c7a52a->enter($__internal_9bb03782fa3fcc812d40bc61f9b165d658612374e9db62c5c7648eade4c7a52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9bb03782fa3fcc812d40bc61f9b165d658612374e9db62c5c7648eade4c7a52a->leave($__internal_9bb03782fa3fcc812d40bc61f9b165d658612374e9db62c5c7648eade4c7a52a_prof);

        
        $__internal_a69753b0c26ca961e59f4ad5aadb0cbb03ce801c1320908da00e99838b30177d->leave($__internal_a69753b0c26ca961e59f4ad5aadb0cbb03ce801c1320908da00e99838b30177d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc5ba5d0ef8fc7c3f08c5a0c4dc13da44e85e95fc009c2dbc4c40a7585a60505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc5ba5d0ef8fc7c3f08c5a0c4dc13da44e85e95fc009c2dbc4c40a7585a60505->enter($__internal_bc5ba5d0ef8fc7c3f08c5a0c4dc13da44e85e95fc009c2dbc4c40a7585a60505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2cb8f7aa90f89dbd2f22ee252cbefe9bb019ab7c35c1dfa339e1831103ace955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb8f7aa90f89dbd2f22ee252cbefe9bb019ab7c35c1dfa339e1831103ace955->enter($__internal_2cb8f7aa90f89dbd2f22ee252cbefe9bb019ab7c35c1dfa339e1831103ace955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_2cb8f7aa90f89dbd2f22ee252cbefe9bb019ab7c35c1dfa339e1831103ace955->leave($__internal_2cb8f7aa90f89dbd2f22ee252cbefe9bb019ab7c35c1dfa339e1831103ace955_prof);

        
        $__internal_bc5ba5d0ef8fc7c3f08c5a0c4dc13da44e85e95fc009c2dbc4c40a7585a60505->leave($__internal_bc5ba5d0ef8fc7c3f08c5a0c4dc13da44e85e95fc009c2dbc4c40a7585a60505_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_50f442c3e867f72fe27b3dfde895b1104f17c35de5a07d35164d0658a109f51e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50f442c3e867f72fe27b3dfde895b1104f17c35de5a07d35164d0658a109f51e->enter($__internal_50f442c3e867f72fe27b3dfde895b1104f17c35de5a07d35164d0658a109f51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_384b9527b6be6712eb02a42b53c6b09fb047a2a24ffe209226a81422b84a0398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_384b9527b6be6712eb02a42b53c6b09fb047a2a24ffe209226a81422b84a0398->enter($__internal_384b9527b6be6712eb02a42b53c6b09fb047a2a24ffe209226a81422b84a0398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_384b9527b6be6712eb02a42b53c6b09fb047a2a24ffe209226a81422b84a0398->leave($__internal_384b9527b6be6712eb02a42b53c6b09fb047a2a24ffe209226a81422b84a0398_prof);

        
        $__internal_50f442c3e867f72fe27b3dfde895b1104f17c35de5a07d35164d0658a109f51e->leave($__internal_50f442c3e867f72fe27b3dfde895b1104f17c35de5a07d35164d0658a109f51e_prof);

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

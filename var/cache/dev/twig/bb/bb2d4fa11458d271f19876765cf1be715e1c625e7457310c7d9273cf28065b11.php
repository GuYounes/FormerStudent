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
        $__internal_33df2a02e6e02d554186f610648b0d08fb8f600797e8fb508ee0833fefbc7c23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33df2a02e6e02d554186f610648b0d08fb8f600797e8fb508ee0833fefbc7c23->enter($__internal_33df2a02e6e02d554186f610648b0d08fb8f600797e8fb508ee0833fefbc7c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_367b2fc88b3b98207ff14a491a9ece4d42880a23fa90630b3150592994eee683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_367b2fc88b3b98207ff14a491a9ece4d42880a23fa90630b3150592994eee683->enter($__internal_367b2fc88b3b98207ff14a491a9ece4d42880a23fa90630b3150592994eee683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33df2a02e6e02d554186f610648b0d08fb8f600797e8fb508ee0833fefbc7c23->leave($__internal_33df2a02e6e02d554186f610648b0d08fb8f600797e8fb508ee0833fefbc7c23_prof);

        
        $__internal_367b2fc88b3b98207ff14a491a9ece4d42880a23fa90630b3150592994eee683->leave($__internal_367b2fc88b3b98207ff14a491a9ece4d42880a23fa90630b3150592994eee683_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d4a181ac03fb3048003c5e41f73fd011ab7cc34cec7ea7b12f9563b8089e8751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a181ac03fb3048003c5e41f73fd011ab7cc34cec7ea7b12f9563b8089e8751->enter($__internal_d4a181ac03fb3048003c5e41f73fd011ab7cc34cec7ea7b12f9563b8089e8751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e4907b7aa88679efc802a7694db5a4f5dc790661e3e0f32812c9e28e63a20352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4907b7aa88679efc802a7694db5a4f5dc790661e3e0f32812c9e28e63a20352->enter($__internal_e4907b7aa88679efc802a7694db5a4f5dc790661e3e0f32812c9e28e63a20352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e4907b7aa88679efc802a7694db5a4f5dc790661e3e0f32812c9e28e63a20352->leave($__internal_e4907b7aa88679efc802a7694db5a4f5dc790661e3e0f32812c9e28e63a20352_prof);

        
        $__internal_d4a181ac03fb3048003c5e41f73fd011ab7cc34cec7ea7b12f9563b8089e8751->leave($__internal_d4a181ac03fb3048003c5e41f73fd011ab7cc34cec7ea7b12f9563b8089e8751_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_912ee480e6edd7c4a2f0e3ad428e055415f07070a9fa3174269b6ce63e211656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_912ee480e6edd7c4a2f0e3ad428e055415f07070a9fa3174269b6ce63e211656->enter($__internal_912ee480e6edd7c4a2f0e3ad428e055415f07070a9fa3174269b6ce63e211656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1313d54ca3b36ab30f4954e80bb57e131d5166de4b201ef5f7d0855f3002a37f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1313d54ca3b36ab30f4954e80bb57e131d5166de4b201ef5f7d0855f3002a37f->enter($__internal_1313d54ca3b36ab30f4954e80bb57e131d5166de4b201ef5f7d0855f3002a37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_1313d54ca3b36ab30f4954e80bb57e131d5166de4b201ef5f7d0855f3002a37f->leave($__internal_1313d54ca3b36ab30f4954e80bb57e131d5166de4b201ef5f7d0855f3002a37f_prof);

        
        $__internal_912ee480e6edd7c4a2f0e3ad428e055415f07070a9fa3174269b6ce63e211656->leave($__internal_912ee480e6edd7c4a2f0e3ad428e055415f07070a9fa3174269b6ce63e211656_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_55ea7de3163de976155a2877e70a66ad8ea92395474b9a97aeac60d7462f91f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55ea7de3163de976155a2877e70a66ad8ea92395474b9a97aeac60d7462f91f3->enter($__internal_55ea7de3163de976155a2877e70a66ad8ea92395474b9a97aeac60d7462f91f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_607ddb9646def082607bdcbb74bb77a2ca21eb6ebffa598f602799317944cd57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_607ddb9646def082607bdcbb74bb77a2ca21eb6ebffa598f602799317944cd57->enter($__internal_607ddb9646def082607bdcbb74bb77a2ca21eb6ebffa598f602799317944cd57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_607ddb9646def082607bdcbb74bb77a2ca21eb6ebffa598f602799317944cd57->leave($__internal_607ddb9646def082607bdcbb74bb77a2ca21eb6ebffa598f602799317944cd57_prof);

        
        $__internal_55ea7de3163de976155a2877e70a66ad8ea92395474b9a97aeac60d7462f91f3->leave($__internal_55ea7de3163de976155a2877e70a66ad8ea92395474b9a97aeac60d7462f91f3_prof);

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

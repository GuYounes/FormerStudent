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
        $__internal_d1442f6a39c95b75f2ab9bdd758a59cbef7b4e8445c88246f951788e90ed16d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1442f6a39c95b75f2ab9bdd758a59cbef7b4e8445c88246f951788e90ed16d5->enter($__internal_d1442f6a39c95b75f2ab9bdd758a59cbef7b4e8445c88246f951788e90ed16d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_90e66246c292fcacdad2a0f913d3a53ef0e1c623ae0f9353d5568154a79102e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e66246c292fcacdad2a0f913d3a53ef0e1c623ae0f9353d5568154a79102e2->enter($__internal_90e66246c292fcacdad2a0f913d3a53ef0e1c623ae0f9353d5568154a79102e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1442f6a39c95b75f2ab9bdd758a59cbef7b4e8445c88246f951788e90ed16d5->leave($__internal_d1442f6a39c95b75f2ab9bdd758a59cbef7b4e8445c88246f951788e90ed16d5_prof);

        
        $__internal_90e66246c292fcacdad2a0f913d3a53ef0e1c623ae0f9353d5568154a79102e2->leave($__internal_90e66246c292fcacdad2a0f913d3a53ef0e1c623ae0f9353d5568154a79102e2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6b744b23ce9ca102e4563f2e4ebb9c459c7a22a2eba9fdcef0303be71468dd36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b744b23ce9ca102e4563f2e4ebb9c459c7a22a2eba9fdcef0303be71468dd36->enter($__internal_6b744b23ce9ca102e4563f2e4ebb9c459c7a22a2eba9fdcef0303be71468dd36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f4cd0cb51a42f7287978618200cf7a491092a05efba87791122f72bdb7fc1769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4cd0cb51a42f7287978618200cf7a491092a05efba87791122f72bdb7fc1769->enter($__internal_f4cd0cb51a42f7287978618200cf7a491092a05efba87791122f72bdb7fc1769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f4cd0cb51a42f7287978618200cf7a491092a05efba87791122f72bdb7fc1769->leave($__internal_f4cd0cb51a42f7287978618200cf7a491092a05efba87791122f72bdb7fc1769_prof);

        
        $__internal_6b744b23ce9ca102e4563f2e4ebb9c459c7a22a2eba9fdcef0303be71468dd36->leave($__internal_6b744b23ce9ca102e4563f2e4ebb9c459c7a22a2eba9fdcef0303be71468dd36_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_88ac4b6f258d327c895453d9a3b6afdc7c048640f808606298d0a519d5e42447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88ac4b6f258d327c895453d9a3b6afdc7c048640f808606298d0a519d5e42447->enter($__internal_88ac4b6f258d327c895453d9a3b6afdc7c048640f808606298d0a519d5e42447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8f69f2c16672bf336cce9a6a29f6b390669bde847d01fbaa4e4424303f1bba7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f69f2c16672bf336cce9a6a29f6b390669bde847d01fbaa4e4424303f1bba7f->enter($__internal_8f69f2c16672bf336cce9a6a29f6b390669bde847d01fbaa4e4424303f1bba7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_8f69f2c16672bf336cce9a6a29f6b390669bde847d01fbaa4e4424303f1bba7f->leave($__internal_8f69f2c16672bf336cce9a6a29f6b390669bde847d01fbaa4e4424303f1bba7f_prof);

        
        $__internal_88ac4b6f258d327c895453d9a3b6afdc7c048640f808606298d0a519d5e42447->leave($__internal_88ac4b6f258d327c895453d9a3b6afdc7c048640f808606298d0a519d5e42447_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b4279ef5b0b48c5c78f8e5dbf3cbfb05ee078a1a22c446177e4fd128e44cef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b4279ef5b0b48c5c78f8e5dbf3cbfb05ee078a1a22c446177e4fd128e44cef5->enter($__internal_1b4279ef5b0b48c5c78f8e5dbf3cbfb05ee078a1a22c446177e4fd128e44cef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_00af63e09fcb82d61bed28a2a8917d23714344d5d97e82eac7f7cb2b7c547142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00af63e09fcb82d61bed28a2a8917d23714344d5d97e82eac7f7cb2b7c547142->enter($__internal_00af63e09fcb82d61bed28a2a8917d23714344d5d97e82eac7f7cb2b7c547142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_00af63e09fcb82d61bed28a2a8917d23714344d5d97e82eac7f7cb2b7c547142->leave($__internal_00af63e09fcb82d61bed28a2a8917d23714344d5d97e82eac7f7cb2b7c547142_prof);

        
        $__internal_1b4279ef5b0b48c5c78f8e5dbf3cbfb05ee078a1a22c446177e4fd128e44cef5->leave($__internal_1b4279ef5b0b48c5c78f8e5dbf3cbfb05ee078a1a22c446177e4fd128e44cef5_prof);

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

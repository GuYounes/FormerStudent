<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9948df6081308ae4d72c8d3c2278a094fa8b203dc602f6c9171dabd086a3401c extends Twig_Template
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
        $__internal_2052c73433dab7a40cfd38d14ef0d7cc6942019b7fd6228a4ac495780927018b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2052c73433dab7a40cfd38d14ef0d7cc6942019b7fd6228a4ac495780927018b->enter($__internal_2052c73433dab7a40cfd38d14ef0d7cc6942019b7fd6228a4ac495780927018b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_263d88b364fdd819c5d854a816c7b0ca1b9dfdbc6dd21e2d2fbfe9bf0ca8d0b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_263d88b364fdd819c5d854a816c7b0ca1b9dfdbc6dd21e2d2fbfe9bf0ca8d0b0->enter($__internal_263d88b364fdd819c5d854a816c7b0ca1b9dfdbc6dd21e2d2fbfe9bf0ca8d0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2052c73433dab7a40cfd38d14ef0d7cc6942019b7fd6228a4ac495780927018b->leave($__internal_2052c73433dab7a40cfd38d14ef0d7cc6942019b7fd6228a4ac495780927018b_prof);

        
        $__internal_263d88b364fdd819c5d854a816c7b0ca1b9dfdbc6dd21e2d2fbfe9bf0ca8d0b0->leave($__internal_263d88b364fdd819c5d854a816c7b0ca1b9dfdbc6dd21e2d2fbfe9bf0ca8d0b0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eab99486a524dfbffb5a9257b234034369ccdc2ff56634ef4522e17db956efc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eab99486a524dfbffb5a9257b234034369ccdc2ff56634ef4522e17db956efc3->enter($__internal_eab99486a524dfbffb5a9257b234034369ccdc2ff56634ef4522e17db956efc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_733e0b544af871a2e9f7e3982a4ed0eb0e34551086f74c14a3b9037764088bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_733e0b544af871a2e9f7e3982a4ed0eb0e34551086f74c14a3b9037764088bc1->enter($__internal_733e0b544af871a2e9f7e3982a4ed0eb0e34551086f74c14a3b9037764088bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_733e0b544af871a2e9f7e3982a4ed0eb0e34551086f74c14a3b9037764088bc1->leave($__internal_733e0b544af871a2e9f7e3982a4ed0eb0e34551086f74c14a3b9037764088bc1_prof);

        
        $__internal_eab99486a524dfbffb5a9257b234034369ccdc2ff56634ef4522e17db956efc3->leave($__internal_eab99486a524dfbffb5a9257b234034369ccdc2ff56634ef4522e17db956efc3_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_57f8db782fbbba34a4723222191c3a2dfaa96661d71c06d1d23ca8d646fafa9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57f8db782fbbba34a4723222191c3a2dfaa96661d71c06d1d23ca8d646fafa9e->enter($__internal_57f8db782fbbba34a4723222191c3a2dfaa96661d71c06d1d23ca8d646fafa9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b1d0aaef6066f487437ddb4c92b516944974f6d99b7b17cadbb6229e2f925034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d0aaef6066f487437ddb4c92b516944974f6d99b7b17cadbb6229e2f925034->enter($__internal_b1d0aaef6066f487437ddb4c92b516944974f6d99b7b17cadbb6229e2f925034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_b1d0aaef6066f487437ddb4c92b516944974f6d99b7b17cadbb6229e2f925034->leave($__internal_b1d0aaef6066f487437ddb4c92b516944974f6d99b7b17cadbb6229e2f925034_prof);

        
        $__internal_57f8db782fbbba34a4723222191c3a2dfaa96661d71c06d1d23ca8d646fafa9e->leave($__internal_57f8db782fbbba34a4723222191c3a2dfaa96661d71c06d1d23ca8d646fafa9e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a6de9d3c5f0a9bc1fceaef0787ab654ccc7587021350cde78334e1347af7ee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a6de9d3c5f0a9bc1fceaef0787ab654ccc7587021350cde78334e1347af7ee6->enter($__internal_2a6de9d3c5f0a9bc1fceaef0787ab654ccc7587021350cde78334e1347af7ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a5dc30670638eb26a7ae9f42047032ea76b821737e26bb606acf09ee45edeba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a5dc30670638eb26a7ae9f42047032ea76b821737e26bb606acf09ee45edeba->enter($__internal_8a5dc30670638eb26a7ae9f42047032ea76b821737e26bb606acf09ee45edeba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_8a5dc30670638eb26a7ae9f42047032ea76b821737e26bb606acf09ee45edeba->leave($__internal_8a5dc30670638eb26a7ae9f42047032ea76b821737e26bb606acf09ee45edeba_prof);

        
        $__internal_2a6de9d3c5f0a9bc1fceaef0787ab654ccc7587021350cde78334e1347af7ee6->leave($__internal_2a6de9d3c5f0a9bc1fceaef0787ab654ccc7587021350cde78334e1347af7ee6_prof);

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

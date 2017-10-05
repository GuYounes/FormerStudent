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
        $__internal_64b8234d62084ca0e2e89245a11865f12830d382690aa0ad55cfd6f7d61158bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64b8234d62084ca0e2e89245a11865f12830d382690aa0ad55cfd6f7d61158bf->enter($__internal_64b8234d62084ca0e2e89245a11865f12830d382690aa0ad55cfd6f7d61158bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6318fa5582acecb261ec85124a746b474a82795b46f4d75e36a12d05e2113961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6318fa5582acecb261ec85124a746b474a82795b46f4d75e36a12d05e2113961->enter($__internal_6318fa5582acecb261ec85124a746b474a82795b46f4d75e36a12d05e2113961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64b8234d62084ca0e2e89245a11865f12830d382690aa0ad55cfd6f7d61158bf->leave($__internal_64b8234d62084ca0e2e89245a11865f12830d382690aa0ad55cfd6f7d61158bf_prof);

        
        $__internal_6318fa5582acecb261ec85124a746b474a82795b46f4d75e36a12d05e2113961->leave($__internal_6318fa5582acecb261ec85124a746b474a82795b46f4d75e36a12d05e2113961_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e5b4ae44023ab965f3974cf0eb76cdff39d15508bdaeedaabcb5868c955c95d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5b4ae44023ab965f3974cf0eb76cdff39d15508bdaeedaabcb5868c955c95d9->enter($__internal_e5b4ae44023ab965f3974cf0eb76cdff39d15508bdaeedaabcb5868c955c95d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6974f3417d0da973ca3d921873d0ab5d73781755cb7f6636d159e3eac28f3f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6974f3417d0da973ca3d921873d0ab5d73781755cb7f6636d159e3eac28f3f97->enter($__internal_6974f3417d0da973ca3d921873d0ab5d73781755cb7f6636d159e3eac28f3f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6974f3417d0da973ca3d921873d0ab5d73781755cb7f6636d159e3eac28f3f97->leave($__internal_6974f3417d0da973ca3d921873d0ab5d73781755cb7f6636d159e3eac28f3f97_prof);

        
        $__internal_e5b4ae44023ab965f3974cf0eb76cdff39d15508bdaeedaabcb5868c955c95d9->leave($__internal_e5b4ae44023ab965f3974cf0eb76cdff39d15508bdaeedaabcb5868c955c95d9_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee3299bcc516d3b4303329be02ca14af24469efa9560f6e33c0ef1068d573ca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee3299bcc516d3b4303329be02ca14af24469efa9560f6e33c0ef1068d573ca0->enter($__internal_ee3299bcc516d3b4303329be02ca14af24469efa9560f6e33c0ef1068d573ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_941c9682e8a5979d2e45fce8a6b5c974a5886687ff10fa6bb32a4c8ccc261ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_941c9682e8a5979d2e45fce8a6b5c974a5886687ff10fa6bb32a4c8ccc261ad7->enter($__internal_941c9682e8a5979d2e45fce8a6b5c974a5886687ff10fa6bb32a4c8ccc261ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_941c9682e8a5979d2e45fce8a6b5c974a5886687ff10fa6bb32a4c8ccc261ad7->leave($__internal_941c9682e8a5979d2e45fce8a6b5c974a5886687ff10fa6bb32a4c8ccc261ad7_prof);

        
        $__internal_ee3299bcc516d3b4303329be02ca14af24469efa9560f6e33c0ef1068d573ca0->leave($__internal_ee3299bcc516d3b4303329be02ca14af24469efa9560f6e33c0ef1068d573ca0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee94b444cf900df1f2b3afb2f594e4dd965a696705a1408125cfa7fc3ce1562f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee94b444cf900df1f2b3afb2f594e4dd965a696705a1408125cfa7fc3ce1562f->enter($__internal_ee94b444cf900df1f2b3afb2f594e4dd965a696705a1408125cfa7fc3ce1562f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1dc6e207975ddcfa3004d48a7109a852aa7d4208751a3440dfac7e87327a0880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc6e207975ddcfa3004d48a7109a852aa7d4208751a3440dfac7e87327a0880->enter($__internal_1dc6e207975ddcfa3004d48a7109a852aa7d4208751a3440dfac7e87327a0880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_1dc6e207975ddcfa3004d48a7109a852aa7d4208751a3440dfac7e87327a0880->leave($__internal_1dc6e207975ddcfa3004d48a7109a852aa7d4208751a3440dfac7e87327a0880_prof);

        
        $__internal_ee94b444cf900df1f2b3afb2f594e4dd965a696705a1408125cfa7fc3ce1562f->leave($__internal_ee94b444cf900df1f2b3afb2f594e4dd965a696705a1408125cfa7fc3ce1562f_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}

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
        $__internal_db89125701974f6e726bd57dcd0d736f57b1b90351f2c702b8082aadd7587605 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db89125701974f6e726bd57dcd0d736f57b1b90351f2c702b8082aadd7587605->enter($__internal_db89125701974f6e726bd57dcd0d736f57b1b90351f2c702b8082aadd7587605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_97f6313ee1105d6fe765344777fd7b36cc00a722042a64c2d19e0dc1274ae3b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f6313ee1105d6fe765344777fd7b36cc00a722042a64c2d19e0dc1274ae3b2->enter($__internal_97f6313ee1105d6fe765344777fd7b36cc00a722042a64c2d19e0dc1274ae3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db89125701974f6e726bd57dcd0d736f57b1b90351f2c702b8082aadd7587605->leave($__internal_db89125701974f6e726bd57dcd0d736f57b1b90351f2c702b8082aadd7587605_prof);

        
        $__internal_97f6313ee1105d6fe765344777fd7b36cc00a722042a64c2d19e0dc1274ae3b2->leave($__internal_97f6313ee1105d6fe765344777fd7b36cc00a722042a64c2d19e0dc1274ae3b2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a27c99dab643975ed402f1eec0417d573296015025f4b85b0718db99ceaac982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a27c99dab643975ed402f1eec0417d573296015025f4b85b0718db99ceaac982->enter($__internal_a27c99dab643975ed402f1eec0417d573296015025f4b85b0718db99ceaac982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_be09dc897490dcc3fdd448bbac3b4ae7ffaf418a438bf965a8fa983f67d65076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be09dc897490dcc3fdd448bbac3b4ae7ffaf418a438bf965a8fa983f67d65076->enter($__internal_be09dc897490dcc3fdd448bbac3b4ae7ffaf418a438bf965a8fa983f67d65076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_be09dc897490dcc3fdd448bbac3b4ae7ffaf418a438bf965a8fa983f67d65076->leave($__internal_be09dc897490dcc3fdd448bbac3b4ae7ffaf418a438bf965a8fa983f67d65076_prof);

        
        $__internal_a27c99dab643975ed402f1eec0417d573296015025f4b85b0718db99ceaac982->leave($__internal_a27c99dab643975ed402f1eec0417d573296015025f4b85b0718db99ceaac982_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ce306c0def5325ae262acc62db73857202b171e271b91b8768ee08787e533c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ce306c0def5325ae262acc62db73857202b171e271b91b8768ee08787e533c1->enter($__internal_2ce306c0def5325ae262acc62db73857202b171e271b91b8768ee08787e533c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c263620bbad3e28817c18de0e0675a7febd5aa323e80b49f797e7a2436c7cfb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c263620bbad3e28817c18de0e0675a7febd5aa323e80b49f797e7a2436c7cfb5->enter($__internal_c263620bbad3e28817c18de0e0675a7febd5aa323e80b49f797e7a2436c7cfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_c263620bbad3e28817c18de0e0675a7febd5aa323e80b49f797e7a2436c7cfb5->leave($__internal_c263620bbad3e28817c18de0e0675a7febd5aa323e80b49f797e7a2436c7cfb5_prof);

        
        $__internal_2ce306c0def5325ae262acc62db73857202b171e271b91b8768ee08787e533c1->leave($__internal_2ce306c0def5325ae262acc62db73857202b171e271b91b8768ee08787e533c1_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_83588f4aa5d99398b2d9602d54e852c87bd550ac5ea2d9c063322f51c3957582 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83588f4aa5d99398b2d9602d54e852c87bd550ac5ea2d9c063322f51c3957582->enter($__internal_83588f4aa5d99398b2d9602d54e852c87bd550ac5ea2d9c063322f51c3957582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5cfa88970753e0a62d824e685c6edb6997cdb0463e8d7e92cb4ad1751fa149ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cfa88970753e0a62d824e685c6edb6997cdb0463e8d7e92cb4ad1751fa149ea->enter($__internal_5cfa88970753e0a62d824e685c6edb6997cdb0463e8d7e92cb4ad1751fa149ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_5cfa88970753e0a62d824e685c6edb6997cdb0463e8d7e92cb4ad1751fa149ea->leave($__internal_5cfa88970753e0a62d824e685c6edb6997cdb0463e8d7e92cb4ad1751fa149ea_prof);

        
        $__internal_83588f4aa5d99398b2d9602d54e852c87bd550ac5ea2d9c063322f51c3957582->leave($__internal_83588f4aa5d99398b2d9602d54e852c87bd550ac5ea2d9c063322f51c3957582_prof);

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

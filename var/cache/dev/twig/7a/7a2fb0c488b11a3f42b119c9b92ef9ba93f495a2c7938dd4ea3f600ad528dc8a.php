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
        $__internal_e0b3aa68c8f2a7d17815d242013c398c852b26a0cf49537449340f40e439c64b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0b3aa68c8f2a7d17815d242013c398c852b26a0cf49537449340f40e439c64b->enter($__internal_e0b3aa68c8f2a7d17815d242013c398c852b26a0cf49537449340f40e439c64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_ba24d203bac92e4e347aea17769b6ae221810748bc2e386789675288192f7b6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba24d203bac92e4e347aea17769b6ae221810748bc2e386789675288192f7b6a->enter($__internal_ba24d203bac92e4e347aea17769b6ae221810748bc2e386789675288192f7b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0b3aa68c8f2a7d17815d242013c398c852b26a0cf49537449340f40e439c64b->leave($__internal_e0b3aa68c8f2a7d17815d242013c398c852b26a0cf49537449340f40e439c64b_prof);

        
        $__internal_ba24d203bac92e4e347aea17769b6ae221810748bc2e386789675288192f7b6a->leave($__internal_ba24d203bac92e4e347aea17769b6ae221810748bc2e386789675288192f7b6a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5519b2038dc51724b4a628af1061e011fba55e19022cd82d589a27acd4dc3d29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5519b2038dc51724b4a628af1061e011fba55e19022cd82d589a27acd4dc3d29->enter($__internal_5519b2038dc51724b4a628af1061e011fba55e19022cd82d589a27acd4dc3d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2dd3a5b30be0a2c17fdd6f77876b30832b3fcfc16c90e3d3be250df44a097ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd3a5b30be0a2c17fdd6f77876b30832b3fcfc16c90e3d3be250df44a097ddf->enter($__internal_2dd3a5b30be0a2c17fdd6f77876b30832b3fcfc16c90e3d3be250df44a097ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2dd3a5b30be0a2c17fdd6f77876b30832b3fcfc16c90e3d3be250df44a097ddf->leave($__internal_2dd3a5b30be0a2c17fdd6f77876b30832b3fcfc16c90e3d3be250df44a097ddf_prof);

        
        $__internal_5519b2038dc51724b4a628af1061e011fba55e19022cd82d589a27acd4dc3d29->leave($__internal_5519b2038dc51724b4a628af1061e011fba55e19022cd82d589a27acd4dc3d29_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd414d2282e8eca89fa581f2a19e0d9582c39f407e4ac1e0134cad6fddfe3764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd414d2282e8eca89fa581f2a19e0d9582c39f407e4ac1e0134cad6fddfe3764->enter($__internal_fd414d2282e8eca89fa581f2a19e0d9582c39f407e4ac1e0134cad6fddfe3764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_517cef7a1f6ad71906bfa50f4e1edba754a2f0f5605ca088c1f2545f1a3306ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_517cef7a1f6ad71906bfa50f4e1edba754a2f0f5605ca088c1f2545f1a3306ae->enter($__internal_517cef7a1f6ad71906bfa50f4e1edba754a2f0f5605ca088c1f2545f1a3306ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_517cef7a1f6ad71906bfa50f4e1edba754a2f0f5605ca088c1f2545f1a3306ae->leave($__internal_517cef7a1f6ad71906bfa50f4e1edba754a2f0f5605ca088c1f2545f1a3306ae_prof);

        
        $__internal_fd414d2282e8eca89fa581f2a19e0d9582c39f407e4ac1e0134cad6fddfe3764->leave($__internal_fd414d2282e8eca89fa581f2a19e0d9582c39f407e4ac1e0134cad6fddfe3764_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_39528d501dae7cab71b6bb2e5f418eca540635f8f39e775ecee28781b4d8845a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39528d501dae7cab71b6bb2e5f418eca540635f8f39e775ecee28781b4d8845a->enter($__internal_39528d501dae7cab71b6bb2e5f418eca540635f8f39e775ecee28781b4d8845a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a905569d5c63a3abd22443a777d754848f130fe996b8a6bc8f357e5013f5785b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a905569d5c63a3abd22443a777d754848f130fe996b8a6bc8f357e5013f5785b->enter($__internal_a905569d5c63a3abd22443a777d754848f130fe996b8a6bc8f357e5013f5785b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a905569d5c63a3abd22443a777d754848f130fe996b8a6bc8f357e5013f5785b->leave($__internal_a905569d5c63a3abd22443a777d754848f130fe996b8a6bc8f357e5013f5785b_prof);

        
        $__internal_39528d501dae7cab71b6bb2e5f418eca540635f8f39e775ecee28781b4d8845a->leave($__internal_39528d501dae7cab71b6bb2e5f418eca540635f8f39e775ecee28781b4d8845a_prof);

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

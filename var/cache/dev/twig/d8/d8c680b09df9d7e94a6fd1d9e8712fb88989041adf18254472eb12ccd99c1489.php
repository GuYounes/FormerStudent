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
        $__internal_7cc7afbe2fc94cd0cbf5d94ab94a66f85e332c64295290178f342ea55b5825a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cc7afbe2fc94cd0cbf5d94ab94a66f85e332c64295290178f342ea55b5825a2->enter($__internal_7cc7afbe2fc94cd0cbf5d94ab94a66f85e332c64295290178f342ea55b5825a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_38845630310579c8e952c860abeaf3e4a487355b400e90f5fbcac5f729f97f7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38845630310579c8e952c860abeaf3e4a487355b400e90f5fbcac5f729f97f7e->enter($__internal_38845630310579c8e952c860abeaf3e4a487355b400e90f5fbcac5f729f97f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cc7afbe2fc94cd0cbf5d94ab94a66f85e332c64295290178f342ea55b5825a2->leave($__internal_7cc7afbe2fc94cd0cbf5d94ab94a66f85e332c64295290178f342ea55b5825a2_prof);

        
        $__internal_38845630310579c8e952c860abeaf3e4a487355b400e90f5fbcac5f729f97f7e->leave($__internal_38845630310579c8e952c860abeaf3e4a487355b400e90f5fbcac5f729f97f7e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_12f417d2734ac0c01c2d43e233b635c881fe9504ec5081337fbdad6f35c12fb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12f417d2734ac0c01c2d43e233b635c881fe9504ec5081337fbdad6f35c12fb0->enter($__internal_12f417d2734ac0c01c2d43e233b635c881fe9504ec5081337fbdad6f35c12fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c960a10a3531adb9b0077b80f8fa7d58591221f799544749dacbd229c173343e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c960a10a3531adb9b0077b80f8fa7d58591221f799544749dacbd229c173343e->enter($__internal_c960a10a3531adb9b0077b80f8fa7d58591221f799544749dacbd229c173343e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c960a10a3531adb9b0077b80f8fa7d58591221f799544749dacbd229c173343e->leave($__internal_c960a10a3531adb9b0077b80f8fa7d58591221f799544749dacbd229c173343e_prof);

        
        $__internal_12f417d2734ac0c01c2d43e233b635c881fe9504ec5081337fbdad6f35c12fb0->leave($__internal_12f417d2734ac0c01c2d43e233b635c881fe9504ec5081337fbdad6f35c12fb0_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ffcefdfe672de2996e5b5cab0b49fd51e9c9bc059cd3892b89a6e471b094323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ffcefdfe672de2996e5b5cab0b49fd51e9c9bc059cd3892b89a6e471b094323->enter($__internal_1ffcefdfe672de2996e5b5cab0b49fd51e9c9bc059cd3892b89a6e471b094323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fa1d9eed492f98ed9666c261b6442c50b70548e5406a1e530bf3f8d9ff6f4f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa1d9eed492f98ed9666c261b6442c50b70548e5406a1e530bf3f8d9ff6f4f78->enter($__internal_fa1d9eed492f98ed9666c261b6442c50b70548e5406a1e530bf3f8d9ff6f4f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_fa1d9eed492f98ed9666c261b6442c50b70548e5406a1e530bf3f8d9ff6f4f78->leave($__internal_fa1d9eed492f98ed9666c261b6442c50b70548e5406a1e530bf3f8d9ff6f4f78_prof);

        
        $__internal_1ffcefdfe672de2996e5b5cab0b49fd51e9c9bc059cd3892b89a6e471b094323->leave($__internal_1ffcefdfe672de2996e5b5cab0b49fd51e9c9bc059cd3892b89a6e471b094323_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b733707f3825483f1ecfe9d2b7f4277a2bb7ad4ec54bf6fbd3287b2e2903df82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b733707f3825483f1ecfe9d2b7f4277a2bb7ad4ec54bf6fbd3287b2e2903df82->enter($__internal_b733707f3825483f1ecfe9d2b7f4277a2bb7ad4ec54bf6fbd3287b2e2903df82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6dc72e54873c2ab04a371736d149c14e368603aed90608a876008364b5694889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc72e54873c2ab04a371736d149c14e368603aed90608a876008364b5694889->enter($__internal_6dc72e54873c2ab04a371736d149c14e368603aed90608a876008364b5694889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_6dc72e54873c2ab04a371736d149c14e368603aed90608a876008364b5694889->leave($__internal_6dc72e54873c2ab04a371736d149c14e368603aed90608a876008364b5694889_prof);

        
        $__internal_b733707f3825483f1ecfe9d2b7f4277a2bb7ad4ec54bf6fbd3287b2e2903df82->leave($__internal_b733707f3825483f1ecfe9d2b7f4277a2bb7ad4ec54bf6fbd3287b2e2903df82_prof);

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

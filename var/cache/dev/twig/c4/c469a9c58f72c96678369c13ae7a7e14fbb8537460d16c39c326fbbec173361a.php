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
        $__internal_a74297187fc4bca3ff3a39ba26ff78ec5713893d709a21592c6f705c9943be68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a74297187fc4bca3ff3a39ba26ff78ec5713893d709a21592c6f705c9943be68->enter($__internal_a74297187fc4bca3ff3a39ba26ff78ec5713893d709a21592c6f705c9943be68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_f6897600f26815a67b19ffd0cb14479b27c555673a1b14663b9b96a9348430c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6897600f26815a67b19ffd0cb14479b27c555673a1b14663b9b96a9348430c4->enter($__internal_f6897600f26815a67b19ffd0cb14479b27c555673a1b14663b9b96a9348430c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a74297187fc4bca3ff3a39ba26ff78ec5713893d709a21592c6f705c9943be68->leave($__internal_a74297187fc4bca3ff3a39ba26ff78ec5713893d709a21592c6f705c9943be68_prof);

        
        $__internal_f6897600f26815a67b19ffd0cb14479b27c555673a1b14663b9b96a9348430c4->leave($__internal_f6897600f26815a67b19ffd0cb14479b27c555673a1b14663b9b96a9348430c4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_24a1d1d910d12c192cb5498f204f32b58189a1fdc599208dc17493d70476e218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a1d1d910d12c192cb5498f204f32b58189a1fdc599208dc17493d70476e218->enter($__internal_24a1d1d910d12c192cb5498f204f32b58189a1fdc599208dc17493d70476e218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5ada07a586de026b34b87d0fd3c040871e3d530ce7a6fddeb2a799738d2f6610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ada07a586de026b34b87d0fd3c040871e3d530ce7a6fddeb2a799738d2f6610->enter($__internal_5ada07a586de026b34b87d0fd3c040871e3d530ce7a6fddeb2a799738d2f6610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5ada07a586de026b34b87d0fd3c040871e3d530ce7a6fddeb2a799738d2f6610->leave($__internal_5ada07a586de026b34b87d0fd3c040871e3d530ce7a6fddeb2a799738d2f6610_prof);

        
        $__internal_24a1d1d910d12c192cb5498f204f32b58189a1fdc599208dc17493d70476e218->leave($__internal_24a1d1d910d12c192cb5498f204f32b58189a1fdc599208dc17493d70476e218_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb23b2c59715ef88876382b873828b598706e3b7ad1e8341071f42e134f435b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb23b2c59715ef88876382b873828b598706e3b7ad1e8341071f42e134f435b6->enter($__internal_eb23b2c59715ef88876382b873828b598706e3b7ad1e8341071f42e134f435b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_32b88af4afc2e0bf21626d53c8a7cb71b5831c46f5613ec76b04281ad6b32934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b88af4afc2e0bf21626d53c8a7cb71b5831c46f5613ec76b04281ad6b32934->enter($__internal_32b88af4afc2e0bf21626d53c8a7cb71b5831c46f5613ec76b04281ad6b32934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_32b88af4afc2e0bf21626d53c8a7cb71b5831c46f5613ec76b04281ad6b32934->leave($__internal_32b88af4afc2e0bf21626d53c8a7cb71b5831c46f5613ec76b04281ad6b32934_prof);

        
        $__internal_eb23b2c59715ef88876382b873828b598706e3b7ad1e8341071f42e134f435b6->leave($__internal_eb23b2c59715ef88876382b873828b598706e3b7ad1e8341071f42e134f435b6_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_884a2a503a39e680de918dc4ab0a458370acf25c572d06c1c5a931f3803dba2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_884a2a503a39e680de918dc4ab0a458370acf25c572d06c1c5a931f3803dba2b->enter($__internal_884a2a503a39e680de918dc4ab0a458370acf25c572d06c1c5a931f3803dba2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0bb007090e86a38a5f1862c0dbaf51b0afa5a17a2d4acc47d6194f7e0128fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0bb007090e86a38a5f1862c0dbaf51b0afa5a17a2d4acc47d6194f7e0128fb7->enter($__internal_c0bb007090e86a38a5f1862c0dbaf51b0afa5a17a2d4acc47d6194f7e0128fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_c0bb007090e86a38a5f1862c0dbaf51b0afa5a17a2d4acc47d6194f7e0128fb7->leave($__internal_c0bb007090e86a38a5f1862c0dbaf51b0afa5a17a2d4acc47d6194f7e0128fb7_prof);

        
        $__internal_884a2a503a39e680de918dc4ab0a458370acf25c572d06c1c5a931f3803dba2b->leave($__internal_884a2a503a39e680de918dc4ab0a458370acf25c572d06c1c5a931f3803dba2b_prof);

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

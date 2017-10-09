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
        $__internal_2c9ffbc44f38c208c1a21f00ec586087541cdc23963dbbe30e0d4fd915b6ea99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c9ffbc44f38c208c1a21f00ec586087541cdc23963dbbe30e0d4fd915b6ea99->enter($__internal_2c9ffbc44f38c208c1a21f00ec586087541cdc23963dbbe30e0d4fd915b6ea99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_cac311cce32a3e062c82003eaaf4c2e4b8e37131df9e711ed09d7f3cb0a08a69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac311cce32a3e062c82003eaaf4c2e4b8e37131df9e711ed09d7f3cb0a08a69->enter($__internal_cac311cce32a3e062c82003eaaf4c2e4b8e37131df9e711ed09d7f3cb0a08a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c9ffbc44f38c208c1a21f00ec586087541cdc23963dbbe30e0d4fd915b6ea99->leave($__internal_2c9ffbc44f38c208c1a21f00ec586087541cdc23963dbbe30e0d4fd915b6ea99_prof);

        
        $__internal_cac311cce32a3e062c82003eaaf4c2e4b8e37131df9e711ed09d7f3cb0a08a69->leave($__internal_cac311cce32a3e062c82003eaaf4c2e4b8e37131df9e711ed09d7f3cb0a08a69_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8b8c4035f1e08b7c1e43a0e32c08157ec41f678c7a5c13099832e4877fffda7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b8c4035f1e08b7c1e43a0e32c08157ec41f678c7a5c13099832e4877fffda7e->enter($__internal_8b8c4035f1e08b7c1e43a0e32c08157ec41f678c7a5c13099832e4877fffda7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eb52eb3362dae9eaecf63c02562cea120b1eae2f7789ff5eb59de909b17a365c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb52eb3362dae9eaecf63c02562cea120b1eae2f7789ff5eb59de909b17a365c->enter($__internal_eb52eb3362dae9eaecf63c02562cea120b1eae2f7789ff5eb59de909b17a365c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_eb52eb3362dae9eaecf63c02562cea120b1eae2f7789ff5eb59de909b17a365c->leave($__internal_eb52eb3362dae9eaecf63c02562cea120b1eae2f7789ff5eb59de909b17a365c_prof);

        
        $__internal_8b8c4035f1e08b7c1e43a0e32c08157ec41f678c7a5c13099832e4877fffda7e->leave($__internal_8b8c4035f1e08b7c1e43a0e32c08157ec41f678c7a5c13099832e4877fffda7e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_df8a77bcd942630993ffaddc1e16e42842c7f6f95c0c40f570974a06d337d9ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df8a77bcd942630993ffaddc1e16e42842c7f6f95c0c40f570974a06d337d9ce->enter($__internal_df8a77bcd942630993ffaddc1e16e42842c7f6f95c0c40f570974a06d337d9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f6be6cc5947fd4eb4c6cf0215063fe6de42dac888cb61f0e83bff3d8ff849710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6be6cc5947fd4eb4c6cf0215063fe6de42dac888cb61f0e83bff3d8ff849710->enter($__internal_f6be6cc5947fd4eb4c6cf0215063fe6de42dac888cb61f0e83bff3d8ff849710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_f6be6cc5947fd4eb4c6cf0215063fe6de42dac888cb61f0e83bff3d8ff849710->leave($__internal_f6be6cc5947fd4eb4c6cf0215063fe6de42dac888cb61f0e83bff3d8ff849710_prof);

        
        $__internal_df8a77bcd942630993ffaddc1e16e42842c7f6f95c0c40f570974a06d337d9ce->leave($__internal_df8a77bcd942630993ffaddc1e16e42842c7f6f95c0c40f570974a06d337d9ce_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb46e0b16d4d43dce39617778c12546b6633beb469474e74b54ec57c3b0da7bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb46e0b16d4d43dce39617778c12546b6633beb469474e74b54ec57c3b0da7bc->enter($__internal_cb46e0b16d4d43dce39617778c12546b6633beb469474e74b54ec57c3b0da7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_980c9056d000243901df0702b0e1aa2d370611c9eea12ea64b7de628e87a5510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_980c9056d000243901df0702b0e1aa2d370611c9eea12ea64b7de628e87a5510->enter($__internal_980c9056d000243901df0702b0e1aa2d370611c9eea12ea64b7de628e87a5510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_980c9056d000243901df0702b0e1aa2d370611c9eea12ea64b7de628e87a5510->leave($__internal_980c9056d000243901df0702b0e1aa2d370611c9eea12ea64b7de628e87a5510_prof);

        
        $__internal_cb46e0b16d4d43dce39617778c12546b6633beb469474e74b54ec57c3b0da7bc->leave($__internal_cb46e0b16d4d43dce39617778c12546b6633beb469474e74b54ec57c3b0da7bc_prof);

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

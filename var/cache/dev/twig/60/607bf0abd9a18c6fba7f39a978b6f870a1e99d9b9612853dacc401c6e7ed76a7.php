<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_b1f2f824db62d3e4f7a26a5e0fea502cf3b758ef5cb82b1cf98967d4720214be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86c658e02702d41c59acb00a49747014ad278c26629262ce2a16da040b4d12c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86c658e02702d41c59acb00a49747014ad278c26629262ce2a16da040b4d12c1->enter($__internal_86c658e02702d41c59acb00a49747014ad278c26629262ce2a16da040b4d12c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_363b4426b8513f6138e88e02aa1806fe9ec345ad28a05c15a7b39c7846b02eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363b4426b8513f6138e88e02aa1806fe9ec345ad28a05c15a7b39c7846b02eb0->enter($__internal_363b4426b8513f6138e88e02aa1806fe9ec345ad28a05c15a7b39c7846b02eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_86c658e02702d41c59acb00a49747014ad278c26629262ce2a16da040b4d12c1->leave($__internal_86c658e02702d41c59acb00a49747014ad278c26629262ce2a16da040b4d12c1_prof);

        
        $__internal_363b4426b8513f6138e88e02aa1806fe9ec345ad28a05c15a7b39c7846b02eb0->leave($__internal_363b4426b8513f6138e88e02aa1806fe9ec345ad28a05c15a7b39c7846b02eb0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}

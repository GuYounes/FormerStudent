<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_96cad52cf356c535aebdb7551762fbd70df42b1e68bdbae143c5ec36b8c19eb5 extends Twig_Template
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
        $__internal_632544a49a6b654d2306fed44d5a699c93422c6e955c808873c63ab1c23a2f3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_632544a49a6b654d2306fed44d5a699c93422c6e955c808873c63ab1c23a2f3a->enter($__internal_632544a49a6b654d2306fed44d5a699c93422c6e955c808873c63ab1c23a2f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_57f71f625206e0b15983bec9d390a31fb0f2cd643e63ded2114361440817c2f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f71f625206e0b15983bec9d390a31fb0f2cd643e63ded2114361440817c2f9->enter($__internal_57f71f625206e0b15983bec9d390a31fb0f2cd643e63ded2114361440817c2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_632544a49a6b654d2306fed44d5a699c93422c6e955c808873c63ab1c23a2f3a->leave($__internal_632544a49a6b654d2306fed44d5a699c93422c6e955c808873c63ab1c23a2f3a_prof);

        
        $__internal_57f71f625206e0b15983bec9d390a31fb0f2cd643e63ded2114361440817c2f9->leave($__internal_57f71f625206e0b15983bec9d390a31fb0f2cd643e63ded2114361440817c2f9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
", "WebProfilerBundle:Collector:exception.css.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}

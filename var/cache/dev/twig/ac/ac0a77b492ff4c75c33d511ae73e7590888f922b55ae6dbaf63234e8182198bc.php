<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_24bb70fe10e5e0faca552d1e2b5eb52d8123f86f255a3cf18057b4460db8e719 extends Twig_Template
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
        $__internal_c215d19ec51785bb8cf6da83a05fac91524587e9b8ddcacb3cb4a735631c4826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c215d19ec51785bb8cf6da83a05fac91524587e9b8ddcacb3cb4a735631c4826->enter($__internal_c215d19ec51785bb8cf6da83a05fac91524587e9b8ddcacb3cb4a735631c4826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_1dccf1277e8539f4a6bd211bcbb0a4e8e2051294341cb3edef1ef3ee21e6f4e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dccf1277e8539f4a6bd211bcbb0a4e8e2051294341cb3edef1ef3ee21e6f4e6->enter($__internal_1dccf1277e8539f4a6bd211bcbb0a4e8e2051294341cb3edef1ef3ee21e6f4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_c215d19ec51785bb8cf6da83a05fac91524587e9b8ddcacb3cb4a735631c4826->leave($__internal_c215d19ec51785bb8cf6da83a05fac91524587e9b8ddcacb3cb4a735631c4826_prof);

        
        $__internal_1dccf1277e8539f4a6bd211bcbb0a4e8e2051294341cb3edef1ef3ee21e6f4e6->leave($__internal_1dccf1277e8539f4a6bd211bcbb0a4e8e2051294341cb3edef1ef3ee21e6f4e6_prof);

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

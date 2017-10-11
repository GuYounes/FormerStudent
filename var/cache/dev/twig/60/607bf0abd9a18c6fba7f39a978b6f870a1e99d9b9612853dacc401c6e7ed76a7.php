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
        $__internal_229dd45f3ef4107266f243eb5c02f5b66940266cdffdfc296b1ace6c629d30fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_229dd45f3ef4107266f243eb5c02f5b66940266cdffdfc296b1ace6c629d30fb->enter($__internal_229dd45f3ef4107266f243eb5c02f5b66940266cdffdfc296b1ace6c629d30fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_c22f3198b94c97cd4d848b844a5c7bd3ce79ac5169e12f7ac556b7f215d23dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c22f3198b94c97cd4d848b844a5c7bd3ce79ac5169e12f7ac556b7f215d23dba->enter($__internal_c22f3198b94c97cd4d848b844a5c7bd3ce79ac5169e12f7ac556b7f215d23dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_229dd45f3ef4107266f243eb5c02f5b66940266cdffdfc296b1ace6c629d30fb->leave($__internal_229dd45f3ef4107266f243eb5c02f5b66940266cdffdfc296b1ace6c629d30fb_prof);

        
        $__internal_c22f3198b94c97cd4d848b844a5c7bd3ce79ac5169e12f7ac556b7f215d23dba->leave($__internal_c22f3198b94c97cd4d848b844a5c7bd3ce79ac5169e12f7ac556b7f215d23dba_prof);

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

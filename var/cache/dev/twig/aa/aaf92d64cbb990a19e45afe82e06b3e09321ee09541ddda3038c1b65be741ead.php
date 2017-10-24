<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_750a5db8e67f1d9a8f0fb4708540c7043eee3ac59989a4e020969d15a2672e36 extends Twig_Template
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
        $__internal_bd4ce3e03887ec3cf51e6100b8f6f9d445069ca6d59601323f48e806e2e583d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd4ce3e03887ec3cf51e6100b8f6f9d445069ca6d59601323f48e806e2e583d6->enter($__internal_bd4ce3e03887ec3cf51e6100b8f6f9d445069ca6d59601323f48e806e2e583d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_e890657a0f2d1a00db82f53fcc1d51e2f629210c33f22fe6fdb671a36adeace8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e890657a0f2d1a00db82f53fcc1d51e2f629210c33f22fe6fdb671a36adeace8->enter($__internal_e890657a0f2d1a00db82f53fcc1d51e2f629210c33f22fe6fdb671a36adeace8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_bd4ce3e03887ec3cf51e6100b8f6f9d445069ca6d59601323f48e806e2e583d6->leave($__internal_bd4ce3e03887ec3cf51e6100b8f6f9d445069ca6d59601323f48e806e2e583d6_prof);

        
        $__internal_e890657a0f2d1a00db82f53fcc1d51e2f629210c33f22fe6fdb671a36adeace8->leave($__internal_e890657a0f2d1a00db82f53fcc1d51e2f629210c33f22fe6fdb671a36adeace8_prof);

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

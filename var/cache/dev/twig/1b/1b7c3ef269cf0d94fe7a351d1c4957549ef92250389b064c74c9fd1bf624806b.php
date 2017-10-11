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
        $__internal_3790c7b178f187c2a8fbfdd2d02f692b25f00668d71ec004a8bc7618431b6b10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3790c7b178f187c2a8fbfdd2d02f692b25f00668d71ec004a8bc7618431b6b10->enter($__internal_3790c7b178f187c2a8fbfdd2d02f692b25f00668d71ec004a8bc7618431b6b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_912e19d23399dd3828181ff9ce9dcfa6299d6f20695454dde1c8bc5d98b883be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912e19d23399dd3828181ff9ce9dcfa6299d6f20695454dde1c8bc5d98b883be->enter($__internal_912e19d23399dd3828181ff9ce9dcfa6299d6f20695454dde1c8bc5d98b883be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_3790c7b178f187c2a8fbfdd2d02f692b25f00668d71ec004a8bc7618431b6b10->leave($__internal_3790c7b178f187c2a8fbfdd2d02f692b25f00668d71ec004a8bc7618431b6b10_prof);

        
        $__internal_912e19d23399dd3828181ff9ce9dcfa6299d6f20695454dde1c8bc5d98b883be->leave($__internal_912e19d23399dd3828181ff9ce9dcfa6299d6f20695454dde1c8bc5d98b883be_prof);

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

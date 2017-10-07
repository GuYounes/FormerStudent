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
        $__internal_0f1c73e5c135e3824512862cccb99b825034fa9dd6c34c5f0316836c36e2cfbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f1c73e5c135e3824512862cccb99b825034fa9dd6c34c5f0316836c36e2cfbd->enter($__internal_0f1c73e5c135e3824512862cccb99b825034fa9dd6c34c5f0316836c36e2cfbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_53463d726369467ff692d1fa6e159e47ff630872f4fb27ffbe43984846d837a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53463d726369467ff692d1fa6e159e47ff630872f4fb27ffbe43984846d837a2->enter($__internal_53463d726369467ff692d1fa6e159e47ff630872f4fb27ffbe43984846d837a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_0f1c73e5c135e3824512862cccb99b825034fa9dd6c34c5f0316836c36e2cfbd->leave($__internal_0f1c73e5c135e3824512862cccb99b825034fa9dd6c34c5f0316836c36e2cfbd_prof);

        
        $__internal_53463d726369467ff692d1fa6e159e47ff630872f4fb27ffbe43984846d837a2->leave($__internal_53463d726369467ff692d1fa6e159e47ff630872f4fb27ffbe43984846d837a2_prof);

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

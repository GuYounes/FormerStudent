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
        $__internal_2b8d0259afccd2ad12926567a0dc5f1540328b2251948de458e0ebac06eb8b52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b8d0259afccd2ad12926567a0dc5f1540328b2251948de458e0ebac06eb8b52->enter($__internal_2b8d0259afccd2ad12926567a0dc5f1540328b2251948de458e0ebac06eb8b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_d26f58cd1a623fb92ac50c36fc42795ea7eb4e41958d7e66847e24e0223cdaad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d26f58cd1a623fb92ac50c36fc42795ea7eb4e41958d7e66847e24e0223cdaad->enter($__internal_d26f58cd1a623fb92ac50c36fc42795ea7eb4e41958d7e66847e24e0223cdaad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_2b8d0259afccd2ad12926567a0dc5f1540328b2251948de458e0ebac06eb8b52->leave($__internal_2b8d0259afccd2ad12926567a0dc5f1540328b2251948de458e0ebac06eb8b52_prof);

        
        $__internal_d26f58cd1a623fb92ac50c36fc42795ea7eb4e41958d7e66847e24e0223cdaad->leave($__internal_d26f58cd1a623fb92ac50c36fc42795ea7eb4e41958d7e66847e24e0223cdaad_prof);

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
", "WebProfilerBundle:Collector:exception.css.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}

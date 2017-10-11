<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_55ce3060c789ec2fc02ccb088e199c4c0a4c717f5fb52054d6292145fdb3c57a extends Twig_Template
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
        $__internal_f2cc2cf4890acc6e15f2d60363a0d3f6e8770de7ac55e0ca0a94741088d87405 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2cc2cf4890acc6e15f2d60363a0d3f6e8770de7ac55e0ca0a94741088d87405->enter($__internal_f2cc2cf4890acc6e15f2d60363a0d3f6e8770de7ac55e0ca0a94741088d87405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_d360f0326186cfde86c4d318ef00fc1b9d22356080e881448c51b19c7aa1c301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d360f0326186cfde86c4d318ef00fc1b9d22356080e881448c51b19c7aa1c301->enter($__internal_d360f0326186cfde86c4d318ef00fc1b9d22356080e881448c51b19c7aa1c301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_f2cc2cf4890acc6e15f2d60363a0d3f6e8770de7ac55e0ca0a94741088d87405->leave($__internal_f2cc2cf4890acc6e15f2d60363a0d3f6e8770de7ac55e0ca0a94741088d87405_prof);

        
        $__internal_d360f0326186cfde86c4d318ef00fc1b9d22356080e881448c51b19c7aa1c301->leave($__internal_d360f0326186cfde86c4d318ef00fc1b9d22356080e881448c51b19c7aa1c301_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}

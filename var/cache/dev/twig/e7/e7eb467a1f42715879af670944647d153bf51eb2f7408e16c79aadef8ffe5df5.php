<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_da7d8a44184c9af4626411fab207dcf04488ae971c360f9cd38e4489907835b3 extends Twig_Template
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
        $__internal_8c811d8e399e76e12bd088eb593cdfbf04685593146433160e2553779a6da2bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c811d8e399e76e12bd088eb593cdfbf04685593146433160e2553779a6da2bb->enter($__internal_8c811d8e399e76e12bd088eb593cdfbf04685593146433160e2553779a6da2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_713c615c0a15be6069d9fd76adfb4d88d4e06d364ddbadffb8d42b40e56b45f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_713c615c0a15be6069d9fd76adfb4d88d4e06d364ddbadffb8d42b40e56b45f5->enter($__internal_713c615c0a15be6069d9fd76adfb4d88d4e06d364ddbadffb8d42b40e56b45f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_8c811d8e399e76e12bd088eb593cdfbf04685593146433160e2553779a6da2bb->leave($__internal_8c811d8e399e76e12bd088eb593cdfbf04685593146433160e2553779a6da2bb_prof);

        
        $__internal_713c615c0a15be6069d9fd76adfb4d88d4e06d364ddbadffb8d42b40e56b45f5->leave($__internal_713c615c0a15be6069d9fd76adfb4d88d4e06d364ddbadffb8d42b40e56b45f5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}

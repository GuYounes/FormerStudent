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
        $__internal_9e5e25eab81decc8d2b2b73be14e1c8de62f29a4b786cef3b0819ef8d3d53c6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e5e25eab81decc8d2b2b73be14e1c8de62f29a4b786cef3b0819ef8d3d53c6f->enter($__internal_9e5e25eab81decc8d2b2b73be14e1c8de62f29a4b786cef3b0819ef8d3d53c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_b079ffb9c31fe1937d248f619c7a830875b29d3e059fd2cc53ab57ed4741eda9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b079ffb9c31fe1937d248f619c7a830875b29d3e059fd2cc53ab57ed4741eda9->enter($__internal_b079ffb9c31fe1937d248f619c7a830875b29d3e059fd2cc53ab57ed4741eda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_9e5e25eab81decc8d2b2b73be14e1c8de62f29a4b786cef3b0819ef8d3d53c6f->leave($__internal_9e5e25eab81decc8d2b2b73be14e1c8de62f29a4b786cef3b0819ef8d3d53c6f_prof);

        
        $__internal_b079ffb9c31fe1937d248f619c7a830875b29d3e059fd2cc53ab57ed4741eda9->leave($__internal_b079ffb9c31fe1937d248f619c7a830875b29d3e059fd2cc53ab57ed4741eda9_prof);

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

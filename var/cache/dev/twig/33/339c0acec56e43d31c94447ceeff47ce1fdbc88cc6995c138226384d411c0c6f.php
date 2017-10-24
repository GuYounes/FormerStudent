<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_698d23bd1dd6a01f869ba81997e6fafc0726ddbff331b8e27d40fa44df4e7913 extends Twig_Template
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
        $__internal_3dfc5b56c2b694c034b7f07f66a40f4817d372b3a2c0e1b14ca8020c94503769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dfc5b56c2b694c034b7f07f66a40f4817d372b3a2c0e1b14ca8020c94503769->enter($__internal_3dfc5b56c2b694c034b7f07f66a40f4817d372b3a2c0e1b14ca8020c94503769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_a4d767778c5c85bcbe91b926fa02044d02f4030308e196b341cfeecd74bf8c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4d767778c5c85bcbe91b926fa02044d02f4030308e196b341cfeecd74bf8c16->enter($__internal_a4d767778c5c85bcbe91b926fa02044d02f4030308e196b341cfeecd74bf8c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_3dfc5b56c2b694c034b7f07f66a40f4817d372b3a2c0e1b14ca8020c94503769->leave($__internal_3dfc5b56c2b694c034b7f07f66a40f4817d372b3a2c0e1b14ca8020c94503769_prof);

        
        $__internal_a4d767778c5c85bcbe91b926fa02044d02f4030308e196b341cfeecd74bf8c16->leave($__internal_a4d767778c5c85bcbe91b926fa02044d02f4030308e196b341cfeecd74bf8c16_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}

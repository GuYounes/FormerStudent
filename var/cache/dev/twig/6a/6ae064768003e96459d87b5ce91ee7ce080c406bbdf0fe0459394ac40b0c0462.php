<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_b55875fceb5a6e6bdb2d3a8b096c2d492db64ac4563cf44abf088c9facad4f26 extends Twig_Template
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
        $__internal_26d9543663d9f877694bffdcea06ab9db94fa8c9b64c5065c4b8aaaacf0e1df0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26d9543663d9f877694bffdcea06ab9db94fa8c9b64c5065c4b8aaaacf0e1df0->enter($__internal_26d9543663d9f877694bffdcea06ab9db94fa8c9b64c5065c4b8aaaacf0e1df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_5401bcff63c9022e4cfd1d1e15fe642adafe8d5499a7e8fd90839fc57d2ae1fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5401bcff63c9022e4cfd1d1e15fe642adafe8d5499a7e8fd90839fc57d2ae1fc->enter($__internal_5401bcff63c9022e4cfd1d1e15fe642adafe8d5499a7e8fd90839fc57d2ae1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_26d9543663d9f877694bffdcea06ab9db94fa8c9b64c5065c4b8aaaacf0e1df0->leave($__internal_26d9543663d9f877694bffdcea06ab9db94fa8c9b64c5065c4b8aaaacf0e1df0_prof);

        
        $__internal_5401bcff63c9022e4cfd1d1e15fe642adafe8d5499a7e8fd90839fc57d2ae1fc->leave($__internal_5401bcff63c9022e4cfd1d1e15fe642adafe8d5499a7e8fd90839fc57d2ae1fc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}

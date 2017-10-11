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
        $__internal_384244f315ca8ef1568c7f0fd944170f373afac06ef9599cd35435b566cdc0a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_384244f315ca8ef1568c7f0fd944170f373afac06ef9599cd35435b566cdc0a0->enter($__internal_384244f315ca8ef1568c7f0fd944170f373afac06ef9599cd35435b566cdc0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_76045cd2435e8cfad324fa5e68e8d5fd0c9288dc5d01036a3f4f039eabc6fe91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76045cd2435e8cfad324fa5e68e8d5fd0c9288dc5d01036a3f4f039eabc6fe91->enter($__internal_76045cd2435e8cfad324fa5e68e8d5fd0c9288dc5d01036a3f4f039eabc6fe91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_384244f315ca8ef1568c7f0fd944170f373afac06ef9599cd35435b566cdc0a0->leave($__internal_384244f315ca8ef1568c7f0fd944170f373afac06ef9599cd35435b566cdc0a0_prof);

        
        $__internal_76045cd2435e8cfad324fa5e68e8d5fd0c9288dc5d01036a3f4f039eabc6fe91->leave($__internal_76045cd2435e8cfad324fa5e68e8d5fd0c9288dc5d01036a3f4f039eabc6fe91_prof);

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

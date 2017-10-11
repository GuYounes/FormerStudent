<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_d55125041504a9cd9772f82fbb9f22843ba4179824a217216b2a286a1ac81701 extends Twig_Template
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
        $__internal_edc96083b86c92c29113dfcc1ccce8cea867efa71e5ac6b74fce6e3074631a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edc96083b86c92c29113dfcc1ccce8cea867efa71e5ac6b74fce6e3074631a72->enter($__internal_edc96083b86c92c29113dfcc1ccce8cea867efa71e5ac6b74fce6e3074631a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_355a2bd8396a58e35a915aae418ace750e91bcf1419bf06c2822574ba6b355ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_355a2bd8396a58e35a915aae418ace750e91bcf1419bf06c2822574ba6b355ba->enter($__internal_355a2bd8396a58e35a915aae418ace750e91bcf1419bf06c2822574ba6b355ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_edc96083b86c92c29113dfcc1ccce8cea867efa71e5ac6b74fce6e3074631a72->leave($__internal_edc96083b86c92c29113dfcc1ccce8cea867efa71e5ac6b74fce6e3074631a72_prof);

        
        $__internal_355a2bd8396a58e35a915aae418ace750e91bcf1419bf06c2822574ba6b355ba->leave($__internal_355a2bd8396a58e35a915aae418ace750e91bcf1419bf06c2822574ba6b355ba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}

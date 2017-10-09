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
        $__internal_4c3b6c6001518813f48ef95f70164d328b0592bf73bd918f8f599b36668fbb16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c3b6c6001518813f48ef95f70164d328b0592bf73bd918f8f599b36668fbb16->enter($__internal_4c3b6c6001518813f48ef95f70164d328b0592bf73bd918f8f599b36668fbb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_c3306ecfd2ac4c6e0ed17fac1eee483ef3ecffee977eac4fa837fd8791d13b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3306ecfd2ac4c6e0ed17fac1eee483ef3ecffee977eac4fa837fd8791d13b8a->enter($__internal_c3306ecfd2ac4c6e0ed17fac1eee483ef3ecffee977eac4fa837fd8791d13b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_4c3b6c6001518813f48ef95f70164d328b0592bf73bd918f8f599b36668fbb16->leave($__internal_4c3b6c6001518813f48ef95f70164d328b0592bf73bd918f8f599b36668fbb16_prof);

        
        $__internal_c3306ecfd2ac4c6e0ed17fac1eee483ef3ecffee977eac4fa837fd8791d13b8a->leave($__internal_c3306ecfd2ac4c6e0ed17fac1eee483ef3ecffee977eac4fa837fd8791d13b8a_prof);

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

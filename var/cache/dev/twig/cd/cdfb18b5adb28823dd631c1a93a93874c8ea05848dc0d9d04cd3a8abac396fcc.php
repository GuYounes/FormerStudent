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
        $__internal_ef5a09bc8700c7aa76d139161645670ec57cee9fba61f2928d2f6f55eaf90401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef5a09bc8700c7aa76d139161645670ec57cee9fba61f2928d2f6f55eaf90401->enter($__internal_ef5a09bc8700c7aa76d139161645670ec57cee9fba61f2928d2f6f55eaf90401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_5e04b104ae0cbcb1280fd95484ad55813d59846b10e630799ddd604fa7bbdff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e04b104ae0cbcb1280fd95484ad55813d59846b10e630799ddd604fa7bbdff8->enter($__internal_5e04b104ae0cbcb1280fd95484ad55813d59846b10e630799ddd604fa7bbdff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_ef5a09bc8700c7aa76d139161645670ec57cee9fba61f2928d2f6f55eaf90401->leave($__internal_ef5a09bc8700c7aa76d139161645670ec57cee9fba61f2928d2f6f55eaf90401_prof);

        
        $__internal_5e04b104ae0cbcb1280fd95484ad55813d59846b10e630799ddd604fa7bbdff8->leave($__internal_5e04b104ae0cbcb1280fd95484ad55813d59846b10e630799ddd604fa7bbdff8_prof);

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

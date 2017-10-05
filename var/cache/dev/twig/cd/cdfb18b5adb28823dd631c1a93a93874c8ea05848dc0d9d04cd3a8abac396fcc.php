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
        $__internal_94cee195fb82f51db4bd88a35b3914beb91e90347079d2bb235e45f158eab9f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94cee195fb82f51db4bd88a35b3914beb91e90347079d2bb235e45f158eab9f9->enter($__internal_94cee195fb82f51db4bd88a35b3914beb91e90347079d2bb235e45f158eab9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_b6733365ff7973844188feda558434f5e2f3f1c466e21e6805ce952d4a44c330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6733365ff7973844188feda558434f5e2f3f1c466e21e6805ce952d4a44c330->enter($__internal_b6733365ff7973844188feda558434f5e2f3f1c466e21e6805ce952d4a44c330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_94cee195fb82f51db4bd88a35b3914beb91e90347079d2bb235e45f158eab9f9->leave($__internal_94cee195fb82f51db4bd88a35b3914beb91e90347079d2bb235e45f158eab9f9_prof);

        
        $__internal_b6733365ff7973844188feda558434f5e2f3f1c466e21e6805ce952d4a44c330->leave($__internal_b6733365ff7973844188feda558434f5e2f3f1c466e21e6805ce952d4a44c330_prof);

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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}

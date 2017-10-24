<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1fcec588c8a619c350e6ff211ecece7d4f65092e8817835b5c1116904a634031 extends Twig_Template
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
        $__internal_a739936f9ee7151254019c1215eaeee0db8575fa417c4a85df56ec0df4e430c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a739936f9ee7151254019c1215eaeee0db8575fa417c4a85df56ec0df4e430c1->enter($__internal_a739936f9ee7151254019c1215eaeee0db8575fa417c4a85df56ec0df4e430c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_80fda7ec19401d047a0471839a425c2ec8dfb4b96a00478b62d28c44317914cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80fda7ec19401d047a0471839a425c2ec8dfb4b96a00478b62d28c44317914cd->enter($__internal_80fda7ec19401d047a0471839a425c2ec8dfb4b96a00478b62d28c44317914cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_a739936f9ee7151254019c1215eaeee0db8575fa417c4a85df56ec0df4e430c1->leave($__internal_a739936f9ee7151254019c1215eaeee0db8575fa417c4a85df56ec0df4e430c1_prof);

        
        $__internal_80fda7ec19401d047a0471839a425c2ec8dfb4b96a00478b62d28c44317914cd->leave($__internal_80fda7ec19401d047a0471839a425c2ec8dfb4b96a00478b62d28c44317914cd_prof);

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

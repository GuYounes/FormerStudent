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
        $__internal_47192618c1a004dc729ff7f189a981e828080c9541862326f87171fbd3e5e8c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47192618c1a004dc729ff7f189a981e828080c9541862326f87171fbd3e5e8c6->enter($__internal_47192618c1a004dc729ff7f189a981e828080c9541862326f87171fbd3e5e8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_3d1611c2c4d180259d5cbb45ee3e60058442ce34c751f4b33d6534e0ad0e2843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d1611c2c4d180259d5cbb45ee3e60058442ce34c751f4b33d6534e0ad0e2843->enter($__internal_3d1611c2c4d180259d5cbb45ee3e60058442ce34c751f4b33d6534e0ad0e2843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_47192618c1a004dc729ff7f189a981e828080c9541862326f87171fbd3e5e8c6->leave($__internal_47192618c1a004dc729ff7f189a981e828080c9541862326f87171fbd3e5e8c6_prof);

        
        $__internal_3d1611c2c4d180259d5cbb45ee3e60058442ce34c751f4b33d6534e0ad0e2843->leave($__internal_3d1611c2c4d180259d5cbb45ee3e60058442ce34c751f4b33d6534e0ad0e2843_prof);

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

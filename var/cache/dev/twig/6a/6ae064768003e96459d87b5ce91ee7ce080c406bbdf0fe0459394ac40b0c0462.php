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
        $__internal_88b881672a700c905b6206adc4666fe4199054847da4924bd7e9ef4b98279acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88b881672a700c905b6206adc4666fe4199054847da4924bd7e9ef4b98279acd->enter($__internal_88b881672a700c905b6206adc4666fe4199054847da4924bd7e9ef4b98279acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_435ff47acc0cfef501ac23156aa913f466829212d5bd3d18db9fcf4d7923a1ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_435ff47acc0cfef501ac23156aa913f466829212d5bd3d18db9fcf4d7923a1ca->enter($__internal_435ff47acc0cfef501ac23156aa913f466829212d5bd3d18db9fcf4d7923a1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_88b881672a700c905b6206adc4666fe4199054847da4924bd7e9ef4b98279acd->leave($__internal_88b881672a700c905b6206adc4666fe4199054847da4924bd7e9ef4b98279acd_prof);

        
        $__internal_435ff47acc0cfef501ac23156aa913f466829212d5bd3d18db9fcf4d7923a1ca->leave($__internal_435ff47acc0cfef501ac23156aa913f466829212d5bd3d18db9fcf4d7923a1ca_prof);

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

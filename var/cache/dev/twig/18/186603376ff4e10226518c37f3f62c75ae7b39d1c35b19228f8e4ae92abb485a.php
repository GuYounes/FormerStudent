<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_bf47357d4116654bbc9e7252de32333cca92f1bb1bdc35abbb3c748a7d515079 extends Twig_Template
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
        $__internal_dc7a5aac63d490e7e457a759c687d32e3e8dd9ca4aa27d670ff480ad609678fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc7a5aac63d490e7e457a759c687d32e3e8dd9ca4aa27d670ff480ad609678fb->enter($__internal_dc7a5aac63d490e7e457a759c687d32e3e8dd9ca4aa27d670ff480ad609678fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_6aecd8ac04637dc6c60550488e5bed0a3be2c0c92cc38585a6616d1207dc1bde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aecd8ac04637dc6c60550488e5bed0a3be2c0c92cc38585a6616d1207dc1bde->enter($__internal_6aecd8ac04637dc6c60550488e5bed0a3be2c0c92cc38585a6616d1207dc1bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_dc7a5aac63d490e7e457a759c687d32e3e8dd9ca4aa27d670ff480ad609678fb->leave($__internal_dc7a5aac63d490e7e457a759c687d32e3e8dd9ca4aa27d670ff480ad609678fb_prof);

        
        $__internal_6aecd8ac04637dc6c60550488e5bed0a3be2c0c92cc38585a6616d1207dc1bde->leave($__internal_6aecd8ac04637dc6c60550488e5bed0a3be2c0c92cc38585a6616d1207dc1bde_prof);

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

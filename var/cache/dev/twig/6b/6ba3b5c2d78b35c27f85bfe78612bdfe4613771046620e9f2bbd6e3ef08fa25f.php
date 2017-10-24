<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_bea2a3657ca846ceb55c544f9d7a254b40ca65a09f0e2e319e26bfdc878735e8 extends Twig_Template
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
        $__internal_1aca5159a7fc49bb02ee86b09197943e17ae8e1a0111be99d80d0cc38ffc4845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aca5159a7fc49bb02ee86b09197943e17ae8e1a0111be99d80d0cc38ffc4845->enter($__internal_1aca5159a7fc49bb02ee86b09197943e17ae8e1a0111be99d80d0cc38ffc4845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_b99e1e21a46c8c2d5dd4cdbcc8262fd187949de2ab5eee9bbcc3b6a4012d6701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99e1e21a46c8c2d5dd4cdbcc8262fd187949de2ab5eee9bbcc3b6a4012d6701->enter($__internal_b99e1e21a46c8c2d5dd4cdbcc8262fd187949de2ab5eee9bbcc3b6a4012d6701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_1aca5159a7fc49bb02ee86b09197943e17ae8e1a0111be99d80d0cc38ffc4845->leave($__internal_1aca5159a7fc49bb02ee86b09197943e17ae8e1a0111be99d80d0cc38ffc4845_prof);

        
        $__internal_b99e1e21a46c8c2d5dd4cdbcc8262fd187949de2ab5eee9bbcc3b6a4012d6701->leave($__internal_b99e1e21a46c8c2d5dd4cdbcc8262fd187949de2ab5eee9bbcc3b6a4012d6701_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}

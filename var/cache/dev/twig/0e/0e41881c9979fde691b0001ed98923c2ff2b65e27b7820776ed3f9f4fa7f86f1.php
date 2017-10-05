<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_5983ff1a1364f1d09ebe9412563f88e743caff42b71f876158200747a88a4276 extends Twig_Template
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
        $__internal_b50bc99105b38b4883e697556e13eaf5128ca626853c614d3fdefc8b9962f3f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b50bc99105b38b4883e697556e13eaf5128ca626853c614d3fdefc8b9962f3f4->enter($__internal_b50bc99105b38b4883e697556e13eaf5128ca626853c614d3fdefc8b9962f3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_5555e153d7996dd148c9bbed1905be1021f6297b92c0aba209d71bb3f2d78815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5555e153d7996dd148c9bbed1905be1021f6297b92c0aba209d71bb3f2d78815->enter($__internal_5555e153d7996dd148c9bbed1905be1021f6297b92c0aba209d71bb3f2d78815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_b50bc99105b38b4883e697556e13eaf5128ca626853c614d3fdefc8b9962f3f4->leave($__internal_b50bc99105b38b4883e697556e13eaf5128ca626853c614d3fdefc8b9962f3f4_prof);

        
        $__internal_5555e153d7996dd148c9bbed1905be1021f6297b92c0aba209d71bb3f2d78815->leave($__internal_5555e153d7996dd148c9bbed1905be1021f6297b92c0aba209d71bb3f2d78815_prof);

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
", "@Twig/Exception/error.xml.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}

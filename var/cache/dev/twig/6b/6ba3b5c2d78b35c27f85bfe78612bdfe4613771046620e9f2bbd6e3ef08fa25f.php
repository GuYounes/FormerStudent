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
        $__internal_4c5e9feab5401be7a39e81b4c011c76adcceb47aea9b5e3f729c47936cf3c517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c5e9feab5401be7a39e81b4c011c76adcceb47aea9b5e3f729c47936cf3c517->enter($__internal_4c5e9feab5401be7a39e81b4c011c76adcceb47aea9b5e3f729c47936cf3c517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_aaa159afcc7c80434b17ba48ba5eb8862a75129e53dd763579da4337d4fcf9de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaa159afcc7c80434b17ba48ba5eb8862a75129e53dd763579da4337d4fcf9de->enter($__internal_aaa159afcc7c80434b17ba48ba5eb8862a75129e53dd763579da4337d4fcf9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_4c5e9feab5401be7a39e81b4c011c76adcceb47aea9b5e3f729c47936cf3c517->leave($__internal_4c5e9feab5401be7a39e81b4c011c76adcceb47aea9b5e3f729c47936cf3c517_prof);

        
        $__internal_aaa159afcc7c80434b17ba48ba5eb8862a75129e53dd763579da4337d4fcf9de->leave($__internal_aaa159afcc7c80434b17ba48ba5eb8862a75129e53dd763579da4337d4fcf9de_prof);

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

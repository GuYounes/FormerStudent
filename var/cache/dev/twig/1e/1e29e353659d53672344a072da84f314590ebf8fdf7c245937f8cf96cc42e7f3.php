<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_62636996a6428a53ead24fae1fcfb3ae00d0b2c5af6defa2a67e3aa08362f99f extends Twig_Template
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
        $__internal_6ef1da833332c1bf654e74abfccf9735d7e45c9a82d6676c9e9677c00f95ea62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ef1da833332c1bf654e74abfccf9735d7e45c9a82d6676c9e9677c00f95ea62->enter($__internal_6ef1da833332c1bf654e74abfccf9735d7e45c9a82d6676c9e9677c00f95ea62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_ab5d3c1bffbb87f514130bda74a23e1dbeff0192250cd103d1564040f0d65046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab5d3c1bffbb87f514130bda74a23e1dbeff0192250cd103d1564040f0d65046->enter($__internal_ab5d3c1bffbb87f514130bda74a23e1dbeff0192250cd103d1564040f0d65046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_6ef1da833332c1bf654e74abfccf9735d7e45c9a82d6676c9e9677c00f95ea62->leave($__internal_6ef1da833332c1bf654e74abfccf9735d7e45c9a82d6676c9e9677c00f95ea62_prof);

        
        $__internal_ab5d3c1bffbb87f514130bda74a23e1dbeff0192250cd103d1564040f0d65046->leave($__internal_ab5d3c1bffbb87f514130bda74a23e1dbeff0192250cd103d1564040f0d65046_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}

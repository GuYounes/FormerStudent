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
        $__internal_ac78685ab06aa15a567f4d11f809329ef6e88223ca27181698cfb9e0dd70874b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac78685ab06aa15a567f4d11f809329ef6e88223ca27181698cfb9e0dd70874b->enter($__internal_ac78685ab06aa15a567f4d11f809329ef6e88223ca27181698cfb9e0dd70874b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_c28205a9a2b11cb590385963241f2cc4edd99e36333337f934c8fd877713521e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28205a9a2b11cb590385963241f2cc4edd99e36333337f934c8fd877713521e->enter($__internal_c28205a9a2b11cb590385963241f2cc4edd99e36333337f934c8fd877713521e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_ac78685ab06aa15a567f4d11f809329ef6e88223ca27181698cfb9e0dd70874b->leave($__internal_ac78685ab06aa15a567f4d11f809329ef6e88223ca27181698cfb9e0dd70874b_prof);

        
        $__internal_c28205a9a2b11cb590385963241f2cc4edd99e36333337f934c8fd877713521e->leave($__internal_c28205a9a2b11cb590385963241f2cc4edd99e36333337f934c8fd877713521e_prof);

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
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}

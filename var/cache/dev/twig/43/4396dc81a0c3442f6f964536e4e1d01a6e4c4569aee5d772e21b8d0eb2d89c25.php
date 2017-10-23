<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_f8d2fb4158f29517ced26a2268ca88e39866a4de846ba90b3274e5f659df5192 extends Twig_Template
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
        $__internal_d72ac6fd26b333e8229df0419df4eaf56b4184b070156bd1e75a601c4ee3823e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d72ac6fd26b333e8229df0419df4eaf56b4184b070156bd1e75a601c4ee3823e->enter($__internal_d72ac6fd26b333e8229df0419df4eaf56b4184b070156bd1e75a601c4ee3823e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_d3cf2e9d5bd31b3a01657bb3047e8d03c7544c510c687543b1b3914629ee8b7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3cf2e9d5bd31b3a01657bb3047e8d03c7544c510c687543b1b3914629ee8b7a->enter($__internal_d3cf2e9d5bd31b3a01657bb3047e8d03c7544c510c687543b1b3914629ee8b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_d72ac6fd26b333e8229df0419df4eaf56b4184b070156bd1e75a601c4ee3823e->leave($__internal_d72ac6fd26b333e8229df0419df4eaf56b4184b070156bd1e75a601c4ee3823e_prof);

        
        $__internal_d3cf2e9d5bd31b3a01657bb3047e8d03c7544c510c687543b1b3914629ee8b7a->leave($__internal_d3cf2e9d5bd31b3a01657bb3047e8d03c7544c510c687543b1b3914629ee8b7a_prof);

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

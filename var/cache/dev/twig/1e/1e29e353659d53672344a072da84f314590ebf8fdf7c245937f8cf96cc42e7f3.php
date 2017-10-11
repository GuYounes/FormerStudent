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
        $__internal_044ede9459a1a75a79aa4e4b1f61e7d13b189f0d1a433d1cd1990063885fe6f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_044ede9459a1a75a79aa4e4b1f61e7d13b189f0d1a433d1cd1990063885fe6f5->enter($__internal_044ede9459a1a75a79aa4e4b1f61e7d13b189f0d1a433d1cd1990063885fe6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_c75b9f45d9edcf099fd147f4000b39dbf93bed84f16d834ecfb54d2bc09eee96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75b9f45d9edcf099fd147f4000b39dbf93bed84f16d834ecfb54d2bc09eee96->enter($__internal_c75b9f45d9edcf099fd147f4000b39dbf93bed84f16d834ecfb54d2bc09eee96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_044ede9459a1a75a79aa4e4b1f61e7d13b189f0d1a433d1cd1990063885fe6f5->leave($__internal_044ede9459a1a75a79aa4e4b1f61e7d13b189f0d1a433d1cd1990063885fe6f5_prof);

        
        $__internal_c75b9f45d9edcf099fd147f4000b39dbf93bed84f16d834ecfb54d2bc09eee96->leave($__internal_c75b9f45d9edcf099fd147f4000b39dbf93bed84f16d834ecfb54d2bc09eee96_prof);

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

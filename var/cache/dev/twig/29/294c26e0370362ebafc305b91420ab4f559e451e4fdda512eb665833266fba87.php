<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_3bb27a0edcf7b0e349ca12d782da6cb16efca587059e3881be23ad85d8de5c57 extends Twig_Template
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
        $__internal_70eb98624a5e55cfaf00b7d8e2dee4f23473cc88db8956034a83ebc5a1ab2018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70eb98624a5e55cfaf00b7d8e2dee4f23473cc88db8956034a83ebc5a1ab2018->enter($__internal_70eb98624a5e55cfaf00b7d8e2dee4f23473cc88db8956034a83ebc5a1ab2018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_d99b0072e59813f4de7fa9bb2501376deba4b5ff6c0e9072bd859e4c6ba8006b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99b0072e59813f4de7fa9bb2501376deba4b5ff6c0e9072bd859e4c6ba8006b->enter($__internal_d99b0072e59813f4de7fa9bb2501376deba4b5ff6c0e9072bd859e4c6ba8006b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_70eb98624a5e55cfaf00b7d8e2dee4f23473cc88db8956034a83ebc5a1ab2018->leave($__internal_70eb98624a5e55cfaf00b7d8e2dee4f23473cc88db8956034a83ebc5a1ab2018_prof);

        
        $__internal_d99b0072e59813f4de7fa9bb2501376deba4b5ff6c0e9072bd859e4c6ba8006b->leave($__internal_d99b0072e59813f4de7fa9bb2501376deba4b5ff6c0e9072bd859e4c6ba8006b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}

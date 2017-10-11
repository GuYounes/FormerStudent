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
        $__internal_dbec8b5d25788243112c5da5ab95b555d1ce1a1e936eb2a9c27398400648f0d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbec8b5d25788243112c5da5ab95b555d1ce1a1e936eb2a9c27398400648f0d2->enter($__internal_dbec8b5d25788243112c5da5ab95b555d1ce1a1e936eb2a9c27398400648f0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_96679ae56deedb3d1b44be02537eed45dce022303e863a9872e2f3ff8202a3e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96679ae56deedb3d1b44be02537eed45dce022303e863a9872e2f3ff8202a3e7->enter($__internal_96679ae56deedb3d1b44be02537eed45dce022303e863a9872e2f3ff8202a3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_dbec8b5d25788243112c5da5ab95b555d1ce1a1e936eb2a9c27398400648f0d2->leave($__internal_dbec8b5d25788243112c5da5ab95b555d1ce1a1e936eb2a9c27398400648f0d2_prof);

        
        $__internal_96679ae56deedb3d1b44be02537eed45dce022303e863a9872e2f3ff8202a3e7->leave($__internal_96679ae56deedb3d1b44be02537eed45dce022303e863a9872e2f3ff8202a3e7_prof);

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
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}

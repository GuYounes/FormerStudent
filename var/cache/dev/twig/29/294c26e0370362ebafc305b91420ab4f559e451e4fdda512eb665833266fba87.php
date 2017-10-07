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
        $__internal_23cf10721584424a5f8c73baf2a8674ff6f93ddc8324d07c96c2484e65e2db18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23cf10721584424a5f8c73baf2a8674ff6f93ddc8324d07c96c2484e65e2db18->enter($__internal_23cf10721584424a5f8c73baf2a8674ff6f93ddc8324d07c96c2484e65e2db18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_4dc41ee2f6ff4eea3b06973b626ce4321eafa75d90362965ad508816dce1e210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc41ee2f6ff4eea3b06973b626ce4321eafa75d90362965ad508816dce1e210->enter($__internal_4dc41ee2f6ff4eea3b06973b626ce4321eafa75d90362965ad508816dce1e210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_23cf10721584424a5f8c73baf2a8674ff6f93ddc8324d07c96c2484e65e2db18->leave($__internal_23cf10721584424a5f8c73baf2a8674ff6f93ddc8324d07c96c2484e65e2db18_prof);

        
        $__internal_4dc41ee2f6ff4eea3b06973b626ce4321eafa75d90362965ad508816dce1e210->leave($__internal_4dc41ee2f6ff4eea3b06973b626ce4321eafa75d90362965ad508816dce1e210_prof);

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

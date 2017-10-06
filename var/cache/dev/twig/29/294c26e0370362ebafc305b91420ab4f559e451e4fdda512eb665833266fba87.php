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
        $__internal_9677346a1bc5a79de411de5a867bb325f8de43ec223a269263ad09aa8ab4d776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9677346a1bc5a79de411de5a867bb325f8de43ec223a269263ad09aa8ab4d776->enter($__internal_9677346a1bc5a79de411de5a867bb325f8de43ec223a269263ad09aa8ab4d776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_45ca8362565d3d89ac09ea3ec89f207b2d0d105766a2d760760049581c6f8c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45ca8362565d3d89ac09ea3ec89f207b2d0d105766a2d760760049581c6f8c69->enter($__internal_45ca8362565d3d89ac09ea3ec89f207b2d0d105766a2d760760049581c6f8c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_9677346a1bc5a79de411de5a867bb325f8de43ec223a269263ad09aa8ab4d776->leave($__internal_9677346a1bc5a79de411de5a867bb325f8de43ec223a269263ad09aa8ab4d776_prof);

        
        $__internal_45ca8362565d3d89ac09ea3ec89f207b2d0d105766a2d760760049581c6f8c69->leave($__internal_45ca8362565d3d89ac09ea3ec89f207b2d0d105766a2d760760049581c6f8c69_prof);

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

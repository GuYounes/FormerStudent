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
        $__internal_36f28641e60bfe382cfa0cb82fc90f56f4cc0e60cb4e83958daa2abfcd28c8d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36f28641e60bfe382cfa0cb82fc90f56f4cc0e60cb4e83958daa2abfcd28c8d1->enter($__internal_36f28641e60bfe382cfa0cb82fc90f56f4cc0e60cb4e83958daa2abfcd28c8d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_11f32f6f715ce17cab10301276467037118313d83921c150a0a611699955402c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11f32f6f715ce17cab10301276467037118313d83921c150a0a611699955402c->enter($__internal_11f32f6f715ce17cab10301276467037118313d83921c150a0a611699955402c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_36f28641e60bfe382cfa0cb82fc90f56f4cc0e60cb4e83958daa2abfcd28c8d1->leave($__internal_36f28641e60bfe382cfa0cb82fc90f56f4cc0e60cb4e83958daa2abfcd28c8d1_prof);

        
        $__internal_11f32f6f715ce17cab10301276467037118313d83921c150a0a611699955402c->leave($__internal_11f32f6f715ce17cab10301276467037118313d83921c150a0a611699955402c_prof);

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

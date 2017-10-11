<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_bf538ecac96ed452d1ab3a87526a8f913e2640d3d792f596907d0212205f56d1 extends Twig_Template
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
        $__internal_1caf77716fd236799445c3926e543d10a18096941b59c63bf258fa79039c8dda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1caf77716fd236799445c3926e543d10a18096941b59c63bf258fa79039c8dda->enter($__internal_1caf77716fd236799445c3926e543d10a18096941b59c63bf258fa79039c8dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_8db9b742163ba694e2dbc5601a54d1e15ab42f927e174806fb22221c6ce64745 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8db9b742163ba694e2dbc5601a54d1e15ab42f927e174806fb22221c6ce64745->enter($__internal_8db9b742163ba694e2dbc5601a54d1e15ab42f927e174806fb22221c6ce64745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_1caf77716fd236799445c3926e543d10a18096941b59c63bf258fa79039c8dda->leave($__internal_1caf77716fd236799445c3926e543d10a18096941b59c63bf258fa79039c8dda_prof);

        
        $__internal_8db9b742163ba694e2dbc5601a54d1e15ab42f927e174806fb22221c6ce64745->leave($__internal_8db9b742163ba694e2dbc5601a54d1e15ab42f927e174806fb22221c6ce64745_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}

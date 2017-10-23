<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_985801af1eee03c790935928d86343ed074162835cf9860909078642dc8c6ea4 extends Twig_Template
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
        $__internal_09e4aa72cea0891fffe9f1bffa9d412fbb055f41c21957ee88812c42185fa279 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09e4aa72cea0891fffe9f1bffa9d412fbb055f41c21957ee88812c42185fa279->enter($__internal_09e4aa72cea0891fffe9f1bffa9d412fbb055f41c21957ee88812c42185fa279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_e097f1d962fc7d8ab0c64f38b7b584d6c1ef4beefa65b555c5d2695f98f1b7cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e097f1d962fc7d8ab0c64f38b7b584d6c1ef4beefa65b555c5d2695f98f1b7cb->enter($__internal_e097f1d962fc7d8ab0c64f38b7b584d6c1ef4beefa65b555c5d2695f98f1b7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_09e4aa72cea0891fffe9f1bffa9d412fbb055f41c21957ee88812c42185fa279->leave($__internal_09e4aa72cea0891fffe9f1bffa9d412fbb055f41c21957ee88812c42185fa279_prof);

        
        $__internal_e097f1d962fc7d8ab0c64f38b7b584d6c1ef4beefa65b555c5d2695f98f1b7cb->leave($__internal_e097f1d962fc7d8ab0c64f38b7b584d6c1ef4beefa65b555c5d2695f98f1b7cb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
", "TwigBundle:Exception:exception.json.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}

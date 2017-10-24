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
        $__internal_c9e282d47065f116bf2b1590539cb2dc046e7249c4f6ccbc581427d157340d8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9e282d47065f116bf2b1590539cb2dc046e7249c4f6ccbc581427d157340d8a->enter($__internal_c9e282d47065f116bf2b1590539cb2dc046e7249c4f6ccbc581427d157340d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_1f9fb8dd1e84f7e0b749d17167f152bd64c9a63fe0d58100f9c5ae8401c62642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9fb8dd1e84f7e0b749d17167f152bd64c9a63fe0d58100f9c5ae8401c62642->enter($__internal_1f9fb8dd1e84f7e0b749d17167f152bd64c9a63fe0d58100f9c5ae8401c62642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_c9e282d47065f116bf2b1590539cb2dc046e7249c4f6ccbc581427d157340d8a->leave($__internal_c9e282d47065f116bf2b1590539cb2dc046e7249c4f6ccbc581427d157340d8a_prof);

        
        $__internal_1f9fb8dd1e84f7e0b749d17167f152bd64c9a63fe0d58100f9c5ae8401c62642->leave($__internal_1f9fb8dd1e84f7e0b749d17167f152bd64c9a63fe0d58100f9c5ae8401c62642_prof);

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

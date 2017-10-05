<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_ed6ca15d234e1579a8472ca7b4a286ea72e410d959a39e73287649abb57a13b6 extends Twig_Template
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
        $__internal_86ade7aef03f200e54f239407a67ce2b6970ca3101ca5607b91f659380dfcd21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86ade7aef03f200e54f239407a67ce2b6970ca3101ca5607b91f659380dfcd21->enter($__internal_86ade7aef03f200e54f239407a67ce2b6970ca3101ca5607b91f659380dfcd21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_d1c893366dd3b8a7e7a5142b5f0c00b2b29148af3df0a9f1f2a08ad455f1655d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1c893366dd3b8a7e7a5142b5f0c00b2b29148af3df0a9f1f2a08ad455f1655d->enter($__internal_d1c893366dd3b8a7e7a5142b5f0c00b2b29148af3df0a9f1f2a08ad455f1655d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_86ade7aef03f200e54f239407a67ce2b6970ca3101ca5607b91f659380dfcd21->leave($__internal_86ade7aef03f200e54f239407a67ce2b6970ca3101ca5607b91f659380dfcd21_prof);

        
        $__internal_d1c893366dd3b8a7e7a5142b5f0c00b2b29148af3df0a9f1f2a08ad455f1655d->leave($__internal_d1c893366dd3b8a7e7a5142b5f0c00b2b29148af3df0a9f1f2a08ad455f1655d_prof);

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
", "TwigBundle:Exception:exception.json.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}

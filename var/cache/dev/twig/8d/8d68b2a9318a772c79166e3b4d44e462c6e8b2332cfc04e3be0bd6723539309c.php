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
        $__internal_76b68b56a22f05ac9e7dc65b752ae7cdfd97383c459b562932ba095fd4dfdea1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76b68b56a22f05ac9e7dc65b752ae7cdfd97383c459b562932ba095fd4dfdea1->enter($__internal_76b68b56a22f05ac9e7dc65b752ae7cdfd97383c459b562932ba095fd4dfdea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_8181e480bc92d3beb56b65977b7a070a21aa1d7b1ece5adbd0284773cf733c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8181e480bc92d3beb56b65977b7a070a21aa1d7b1ece5adbd0284773cf733c4d->enter($__internal_8181e480bc92d3beb56b65977b7a070a21aa1d7b1ece5adbd0284773cf733c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_76b68b56a22f05ac9e7dc65b752ae7cdfd97383c459b562932ba095fd4dfdea1->leave($__internal_76b68b56a22f05ac9e7dc65b752ae7cdfd97383c459b562932ba095fd4dfdea1_prof);

        
        $__internal_8181e480bc92d3beb56b65977b7a070a21aa1d7b1ece5adbd0284773cf733c4d->leave($__internal_8181e480bc92d3beb56b65977b7a070a21aa1d7b1ece5adbd0284773cf733c4d_prof);

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

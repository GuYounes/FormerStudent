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
        $__internal_b3cbfd4b9d3f8240f0c57e8ae3d43822917518b04a46d3f9e3e4aad1507f1aca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3cbfd4b9d3f8240f0c57e8ae3d43822917518b04a46d3f9e3e4aad1507f1aca->enter($__internal_b3cbfd4b9d3f8240f0c57e8ae3d43822917518b04a46d3f9e3e4aad1507f1aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_a4afbdaad6a2fca4649629d443f1384c868f6cf7c6143313a58fc2bdd88486ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4afbdaad6a2fca4649629d443f1384c868f6cf7c6143313a58fc2bdd88486ca->enter($__internal_a4afbdaad6a2fca4649629d443f1384c868f6cf7c6143313a58fc2bdd88486ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_b3cbfd4b9d3f8240f0c57e8ae3d43822917518b04a46d3f9e3e4aad1507f1aca->leave($__internal_b3cbfd4b9d3f8240f0c57e8ae3d43822917518b04a46d3f9e3e4aad1507f1aca_prof);

        
        $__internal_a4afbdaad6a2fca4649629d443f1384c868f6cf7c6143313a58fc2bdd88486ca->leave($__internal_a4afbdaad6a2fca4649629d443f1384c868f6cf7c6143313a58fc2bdd88486ca_prof);

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

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
        $__internal_462465d068ce6c39fc7513339ed768e6bb6c5c47f5dff2b683f566b5e946604a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_462465d068ce6c39fc7513339ed768e6bb6c5c47f5dff2b683f566b5e946604a->enter($__internal_462465d068ce6c39fc7513339ed768e6bb6c5c47f5dff2b683f566b5e946604a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_0b9ede0945d78a65788eed4b23fbb0b9b7082101262e3f1fdbf85f4d2c1e73e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b9ede0945d78a65788eed4b23fbb0b9b7082101262e3f1fdbf85f4d2c1e73e6->enter($__internal_0b9ede0945d78a65788eed4b23fbb0b9b7082101262e3f1fdbf85f4d2c1e73e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_462465d068ce6c39fc7513339ed768e6bb6c5c47f5dff2b683f566b5e946604a->leave($__internal_462465d068ce6c39fc7513339ed768e6bb6c5c47f5dff2b683f566b5e946604a_prof);

        
        $__internal_0b9ede0945d78a65788eed4b23fbb0b9b7082101262e3f1fdbf85f4d2c1e73e6->leave($__internal_0b9ede0945d78a65788eed4b23fbb0b9b7082101262e3f1fdbf85f4d2c1e73e6_prof);

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

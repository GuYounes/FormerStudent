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
        $__internal_2ebc054448056c72768edd959b6437bfeb4087fa27f324e1949c626c062c0d72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ebc054448056c72768edd959b6437bfeb4087fa27f324e1949c626c062c0d72->enter($__internal_2ebc054448056c72768edd959b6437bfeb4087fa27f324e1949c626c062c0d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_a3b3bd4ed6575dc861f22938f5e54620d2ae1ca41cd066b73fe0af2f65e4c4ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3b3bd4ed6575dc861f22938f5e54620d2ae1ca41cd066b73fe0af2f65e4c4ed->enter($__internal_a3b3bd4ed6575dc861f22938f5e54620d2ae1ca41cd066b73fe0af2f65e4c4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_2ebc054448056c72768edd959b6437bfeb4087fa27f324e1949c626c062c0d72->leave($__internal_2ebc054448056c72768edd959b6437bfeb4087fa27f324e1949c626c062c0d72_prof);

        
        $__internal_a3b3bd4ed6575dc861f22938f5e54620d2ae1ca41cd066b73fe0af2f65e4c4ed->leave($__internal_a3b3bd4ed6575dc861f22938f5e54620d2ae1ca41cd066b73fe0af2f65e4c4ed_prof);

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
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
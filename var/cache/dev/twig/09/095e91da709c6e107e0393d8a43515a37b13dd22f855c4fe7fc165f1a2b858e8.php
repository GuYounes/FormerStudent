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
        $__internal_045571749b3f0a96d8f35900e37c31d8c9edb9b69155c047fe2ee5cfc550f701 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_045571749b3f0a96d8f35900e37c31d8c9edb9b69155c047fe2ee5cfc550f701->enter($__internal_045571749b3f0a96d8f35900e37c31d8c9edb9b69155c047fe2ee5cfc550f701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_e5cf2e7874070a61a880e535efc765b54fe8c5f38df8445b820bd48219df85fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5cf2e7874070a61a880e535efc765b54fe8c5f38df8445b820bd48219df85fa->enter($__internal_e5cf2e7874070a61a880e535efc765b54fe8c5f38df8445b820bd48219df85fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_045571749b3f0a96d8f35900e37c31d8c9edb9b69155c047fe2ee5cfc550f701->leave($__internal_045571749b3f0a96d8f35900e37c31d8c9edb9b69155c047fe2ee5cfc550f701_prof);

        
        $__internal_e5cf2e7874070a61a880e535efc765b54fe8c5f38df8445b820bd48219df85fa->leave($__internal_e5cf2e7874070a61a880e535efc765b54fe8c5f38df8445b820bd48219df85fa_prof);

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

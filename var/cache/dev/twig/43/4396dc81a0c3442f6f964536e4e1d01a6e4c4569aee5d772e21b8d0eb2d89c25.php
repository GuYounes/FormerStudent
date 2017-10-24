<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_f8d2fb4158f29517ced26a2268ca88e39866a4de846ba90b3274e5f659df5192 extends Twig_Template
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
        $__internal_a1f55cfd4dc6de3461eb89e5cb2841a344a770a483138b258d6f4ff70ee4eaba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1f55cfd4dc6de3461eb89e5cb2841a344a770a483138b258d6f4ff70ee4eaba->enter($__internal_a1f55cfd4dc6de3461eb89e5cb2841a344a770a483138b258d6f4ff70ee4eaba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_cfd6883f8e33c2edf5aea78ca3e05ace4dbc77bf09c9ec7f2a9e53fe179076c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd6883f8e33c2edf5aea78ca3e05ace4dbc77bf09c9ec7f2a9e53fe179076c8->enter($__internal_cfd6883f8e33c2edf5aea78ca3e05ace4dbc77bf09c9ec7f2a9e53fe179076c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_a1f55cfd4dc6de3461eb89e5cb2841a344a770a483138b258d6f4ff70ee4eaba->leave($__internal_a1f55cfd4dc6de3461eb89e5cb2841a344a770a483138b258d6f4ff70ee4eaba_prof);

        
        $__internal_cfd6883f8e33c2edf5aea78ca3e05ace4dbc77bf09c9ec7f2a9e53fe179076c8->leave($__internal_cfd6883f8e33c2edf5aea78ca3e05ace4dbc77bf09c9ec7f2a9e53fe179076c8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}

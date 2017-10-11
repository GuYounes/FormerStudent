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
        $__internal_75b13fc17037bad4a5b93c0ae4db8bb4735f15731eb25ef5a050412bd426bba3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75b13fc17037bad4a5b93c0ae4db8bb4735f15731eb25ef5a050412bd426bba3->enter($__internal_75b13fc17037bad4a5b93c0ae4db8bb4735f15731eb25ef5a050412bd426bba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_046e9c509c28c9ead013c6ff142d9cca1c726d9af44042bcfcf9bb85b2f1624d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_046e9c509c28c9ead013c6ff142d9cca1c726d9af44042bcfcf9bb85b2f1624d->enter($__internal_046e9c509c28c9ead013c6ff142d9cca1c726d9af44042bcfcf9bb85b2f1624d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_75b13fc17037bad4a5b93c0ae4db8bb4735f15731eb25ef5a050412bd426bba3->leave($__internal_75b13fc17037bad4a5b93c0ae4db8bb4735f15731eb25ef5a050412bd426bba3_prof);

        
        $__internal_046e9c509c28c9ead013c6ff142d9cca1c726d9af44042bcfcf9bb85b2f1624d->leave($__internal_046e9c509c28c9ead013c6ff142d9cca1c726d9af44042bcfcf9bb85b2f1624d_prof);

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

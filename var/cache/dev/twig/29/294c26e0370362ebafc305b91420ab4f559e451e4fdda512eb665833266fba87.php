<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_3bb27a0edcf7b0e349ca12d782da6cb16efca587059e3881be23ad85d8de5c57 extends Twig_Template
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
        $__internal_80b241637677e13db2a1b03dc93a55bf502f80aafac2870548fca7ee8e4957ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80b241637677e13db2a1b03dc93a55bf502f80aafac2870548fca7ee8e4957ef->enter($__internal_80b241637677e13db2a1b03dc93a55bf502f80aafac2870548fca7ee8e4957ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_94c62398c4a8a879bd74dc2685bcabd165f1b5d6d927a457693d30c1e48e0907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94c62398c4a8a879bd74dc2685bcabd165f1b5d6d927a457693d30c1e48e0907->enter($__internal_94c62398c4a8a879bd74dc2685bcabd165f1b5d6d927a457693d30c1e48e0907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_80b241637677e13db2a1b03dc93a55bf502f80aafac2870548fca7ee8e4957ef->leave($__internal_80b241637677e13db2a1b03dc93a55bf502f80aafac2870548fca7ee8e4957ef_prof);

        
        $__internal_94c62398c4a8a879bd74dc2685bcabd165f1b5d6d927a457693d30c1e48e0907->leave($__internal_94c62398c4a8a879bd74dc2685bcabd165f1b5d6d927a457693d30c1e48e0907_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}

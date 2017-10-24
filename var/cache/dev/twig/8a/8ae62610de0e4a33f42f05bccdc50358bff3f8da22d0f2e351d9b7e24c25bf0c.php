<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_ca5e745f612d4bb8a200a51f8b315209174823e4d7ad015794756be2ccaf5114 extends Twig_Template
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
        $__internal_abedd9502cfba16ab98bce4ffb1a87e7736d2a8b31453b592364ec53009b14d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abedd9502cfba16ab98bce4ffb1a87e7736d2a8b31453b592364ec53009b14d5->enter($__internal_abedd9502cfba16ab98bce4ffb1a87e7736d2a8b31453b592364ec53009b14d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_efca70637b32dd4b989d1b8a7fc7be122e6d127647a09cdb6b585dc284e4e539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efca70637b32dd4b989d1b8a7fc7be122e6d127647a09cdb6b585dc284e4e539->enter($__internal_efca70637b32dd4b989d1b8a7fc7be122e6d127647a09cdb6b585dc284e4e539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_abedd9502cfba16ab98bce4ffb1a87e7736d2a8b31453b592364ec53009b14d5->leave($__internal_abedd9502cfba16ab98bce4ffb1a87e7736d2a8b31453b592364ec53009b14d5_prof);

        
        $__internal_efca70637b32dd4b989d1b8a7fc7be122e6d127647a09cdb6b585dc284e4e539->leave($__internal_efca70637b32dd4b989d1b8a7fc7be122e6d127647a09cdb6b585dc284e4e539_prof);

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

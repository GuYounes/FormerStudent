<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_0ff31e265b000e6248a340ee0afd87d890b8b629ecc4d1083b7fecee4bdf8700 extends Twig_Template
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
        $__internal_2f6ebe1640de361db1afa52b92d35ac9c4c6b7b8beae1e9d635a72557888a3ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f6ebe1640de361db1afa52b92d35ac9c4c6b7b8beae1e9d635a72557888a3ad->enter($__internal_2f6ebe1640de361db1afa52b92d35ac9c4c6b7b8beae1e9d635a72557888a3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_dd632965da3cac1292de48b4707adc5d79d841cbe21f7bc9df3431eba0e9b0b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd632965da3cac1292de48b4707adc5d79d841cbe21f7bc9df3431eba0e9b0b3->enter($__internal_dd632965da3cac1292de48b4707adc5d79d841cbe21f7bc9df3431eba0e9b0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_2f6ebe1640de361db1afa52b92d35ac9c4c6b7b8beae1e9d635a72557888a3ad->leave($__internal_2f6ebe1640de361db1afa52b92d35ac9c4c6b7b8beae1e9d635a72557888a3ad_prof);

        
        $__internal_dd632965da3cac1292de48b4707adc5d79d841cbe21f7bc9df3431eba0e9b0b3->leave($__internal_dd632965da3cac1292de48b4707adc5d79d841cbe21f7bc9df3431eba0e9b0b3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}

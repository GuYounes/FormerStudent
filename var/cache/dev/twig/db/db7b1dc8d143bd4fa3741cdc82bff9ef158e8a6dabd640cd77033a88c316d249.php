<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_adb0c34337436df6cbb6241411cd2cd036b25c8cd981a7b1e92ab8296ea81388 extends Twig_Template
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
        $__internal_e9e19bbe154f6a617ddeb1d31b19da16c41e1821ca53621a6b0759ee5684d689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9e19bbe154f6a617ddeb1d31b19da16c41e1821ca53621a6b0759ee5684d689->enter($__internal_e9e19bbe154f6a617ddeb1d31b19da16c41e1821ca53621a6b0759ee5684d689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_15b93dafff991a899483cdbd9ef1499e8c54885a9b849768b1b9bae7fee33a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b93dafff991a899483cdbd9ef1499e8c54885a9b849768b1b9bae7fee33a01->enter($__internal_15b93dafff991a899483cdbd9ef1499e8c54885a9b849768b1b9bae7fee33a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_e9e19bbe154f6a617ddeb1d31b19da16c41e1821ca53621a6b0759ee5684d689->leave($__internal_e9e19bbe154f6a617ddeb1d31b19da16c41e1821ca53621a6b0759ee5684d689_prof);

        
        $__internal_15b93dafff991a899483cdbd9ef1499e8c54885a9b849768b1b9bae7fee33a01->leave($__internal_15b93dafff991a899483cdbd9ef1499e8c54885a9b849768b1b9bae7fee33a01_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}

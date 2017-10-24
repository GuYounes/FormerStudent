<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_828f3c91fc6cf169f5c310ed618a02b60c8f5dd565f76c3a51a6b6cfaff99011 extends Twig_Template
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
        $__internal_21453c6695ce07c211b7421949d9e23191cc9cf4b10d2542e5dcbcf9c874062d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21453c6695ce07c211b7421949d9e23191cc9cf4b10d2542e5dcbcf9c874062d->enter($__internal_21453c6695ce07c211b7421949d9e23191cc9cf4b10d2542e5dcbcf9c874062d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_59af5a9fbfbf4c69be8a2a8c49e855c1ff674b906ec6c2fe3b72f74bd58572a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59af5a9fbfbf4c69be8a2a8c49e855c1ff674b906ec6c2fe3b72f74bd58572a5->enter($__internal_59af5a9fbfbf4c69be8a2a8c49e855c1ff674b906ec6c2fe3b72f74bd58572a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_21453c6695ce07c211b7421949d9e23191cc9cf4b10d2542e5dcbcf9c874062d->leave($__internal_21453c6695ce07c211b7421949d9e23191cc9cf4b10d2542e5dcbcf9c874062d_prof);

        
        $__internal_59af5a9fbfbf4c69be8a2a8c49e855c1ff674b906ec6c2fe3b72f74bd58572a5->leave($__internal_59af5a9fbfbf4c69be8a2a8c49e855c1ff674b906ec6c2fe3b72f74bd58572a5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}

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
        $__internal_1b04ab8171bb55d88a5bc8a4fb261709a29eea75a27a4000fcf25e9c256f8733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b04ab8171bb55d88a5bc8a4fb261709a29eea75a27a4000fcf25e9c256f8733->enter($__internal_1b04ab8171bb55d88a5bc8a4fb261709a29eea75a27a4000fcf25e9c256f8733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_f2232cf889a70a9e42a5fb3216669d9f1a8cc91c242fc3adf79964d2c053695d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2232cf889a70a9e42a5fb3216669d9f1a8cc91c242fc3adf79964d2c053695d->enter($__internal_f2232cf889a70a9e42a5fb3216669d9f1a8cc91c242fc3adf79964d2c053695d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_1b04ab8171bb55d88a5bc8a4fb261709a29eea75a27a4000fcf25e9c256f8733->leave($__internal_1b04ab8171bb55d88a5bc8a4fb261709a29eea75a27a4000fcf25e9c256f8733_prof);

        
        $__internal_f2232cf889a70a9e42a5fb3216669d9f1a8cc91c242fc3adf79964d2c053695d->leave($__internal_f2232cf889a70a9e42a5fb3216669d9f1a8cc91c242fc3adf79964d2c053695d_prof);

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

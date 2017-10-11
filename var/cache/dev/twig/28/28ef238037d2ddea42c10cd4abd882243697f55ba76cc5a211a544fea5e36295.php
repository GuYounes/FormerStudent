<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_552d20937730b5644bf8c22529f726dd4fab3b5ef059cf90213cbdd58f8bae64 extends Twig_Template
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
        $__internal_964096d00ab2195dfc13f23459128b912446887d50ca72a0f4b838cd8f796ab5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_964096d00ab2195dfc13f23459128b912446887d50ca72a0f4b838cd8f796ab5->enter($__internal_964096d00ab2195dfc13f23459128b912446887d50ca72a0f4b838cd8f796ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_b6395252b72a27284ec5f3945eb98f1bebfee9813339a5036b9168e53b5e340d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6395252b72a27284ec5f3945eb98f1bebfee9813339a5036b9168e53b5e340d->enter($__internal_b6395252b72a27284ec5f3945eb98f1bebfee9813339a5036b9168e53b5e340d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_964096d00ab2195dfc13f23459128b912446887d50ca72a0f4b838cd8f796ab5->leave($__internal_964096d00ab2195dfc13f23459128b912446887d50ca72a0f4b838cd8f796ab5_prof);

        
        $__internal_b6395252b72a27284ec5f3945eb98f1bebfee9813339a5036b9168e53b5e340d->leave($__internal_b6395252b72a27284ec5f3945eb98f1bebfee9813339a5036b9168e53b5e340d_prof);

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

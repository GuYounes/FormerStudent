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
        $__internal_265c0ae8db7cc98f8286254b24e7262252acb14460fc6da62220f46bc9ac0ce2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_265c0ae8db7cc98f8286254b24e7262252acb14460fc6da62220f46bc9ac0ce2->enter($__internal_265c0ae8db7cc98f8286254b24e7262252acb14460fc6da62220f46bc9ac0ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_c644bbffc2680aa02079bbd349d6b032ba7580067822c53bfd39fe9709f25c03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c644bbffc2680aa02079bbd349d6b032ba7580067822c53bfd39fe9709f25c03->enter($__internal_c644bbffc2680aa02079bbd349d6b032ba7580067822c53bfd39fe9709f25c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_265c0ae8db7cc98f8286254b24e7262252acb14460fc6da62220f46bc9ac0ce2->leave($__internal_265c0ae8db7cc98f8286254b24e7262252acb14460fc6da62220f46bc9ac0ce2_prof);

        
        $__internal_c644bbffc2680aa02079bbd349d6b032ba7580067822c53bfd39fe9709f25c03->leave($__internal_c644bbffc2680aa02079bbd349d6b032ba7580067822c53bfd39fe9709f25c03_prof);

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
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}

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
        $__internal_d9b9f6388e9b0c28dcc38ab2bcf18a7ec9b503f5344459f934414765371ab5c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9b9f6388e9b0c28dcc38ab2bcf18a7ec9b503f5344459f934414765371ab5c7->enter($__internal_d9b9f6388e9b0c28dcc38ab2bcf18a7ec9b503f5344459f934414765371ab5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_29d6b8b8f7fe47a04bfe593ee6a69292493219d1659cfcc38b132f8346384200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29d6b8b8f7fe47a04bfe593ee6a69292493219d1659cfcc38b132f8346384200->enter($__internal_29d6b8b8f7fe47a04bfe593ee6a69292493219d1659cfcc38b132f8346384200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_d9b9f6388e9b0c28dcc38ab2bcf18a7ec9b503f5344459f934414765371ab5c7->leave($__internal_d9b9f6388e9b0c28dcc38ab2bcf18a7ec9b503f5344459f934414765371ab5c7_prof);

        
        $__internal_29d6b8b8f7fe47a04bfe593ee6a69292493219d1659cfcc38b132f8346384200->leave($__internal_29d6b8b8f7fe47a04bfe593ee6a69292493219d1659cfcc38b132f8346384200_prof);

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

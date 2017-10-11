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
        $__internal_3e9504927a1cc14abe89973d556c355d1c7ac63280d0bc8d9ee5ed5b7eb80b5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e9504927a1cc14abe89973d556c355d1c7ac63280d0bc8d9ee5ed5b7eb80b5a->enter($__internal_3e9504927a1cc14abe89973d556c355d1c7ac63280d0bc8d9ee5ed5b7eb80b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_eb05152b9d1e18eff67a0d027859ebeb4c558ea7acaed6dc5dadf9dcd46defba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb05152b9d1e18eff67a0d027859ebeb4c558ea7acaed6dc5dadf9dcd46defba->enter($__internal_eb05152b9d1e18eff67a0d027859ebeb4c558ea7acaed6dc5dadf9dcd46defba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_3e9504927a1cc14abe89973d556c355d1c7ac63280d0bc8d9ee5ed5b7eb80b5a->leave($__internal_3e9504927a1cc14abe89973d556c355d1c7ac63280d0bc8d9ee5ed5b7eb80b5a_prof);

        
        $__internal_eb05152b9d1e18eff67a0d027859ebeb4c558ea7acaed6dc5dadf9dcd46defba->leave($__internal_eb05152b9d1e18eff67a0d027859ebeb4c558ea7acaed6dc5dadf9dcd46defba_prof);

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

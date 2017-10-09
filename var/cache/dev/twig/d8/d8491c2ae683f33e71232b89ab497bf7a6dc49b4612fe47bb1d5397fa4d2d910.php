<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_483b30f23b5c874e922906102e9c49d39bf8d17ebc9c47194732de1d28df11ca extends Twig_Template
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
        $__internal_c20771157ac790310b209bb3d551b40205edbcbd163f21787964fd294fa8b816 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c20771157ac790310b209bb3d551b40205edbcbd163f21787964fd294fa8b816->enter($__internal_c20771157ac790310b209bb3d551b40205edbcbd163f21787964fd294fa8b816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_eb863a2a695f5149c2f788aa3488d572abdd0f6e4f824f64a3315225e44e780b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb863a2a695f5149c2f788aa3488d572abdd0f6e4f824f64a3315225e44e780b->enter($__internal_eb863a2a695f5149c2f788aa3488d572abdd0f6e4f824f64a3315225e44e780b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_c20771157ac790310b209bb3d551b40205edbcbd163f21787964fd294fa8b816->leave($__internal_c20771157ac790310b209bb3d551b40205edbcbd163f21787964fd294fa8b816_prof);

        
        $__internal_eb863a2a695f5149c2f788aa3488d572abdd0f6e4f824f64a3315225e44e780b->leave($__internal_eb863a2a695f5149c2f788aa3488d572abdd0f6e4f824f64a3315225e44e780b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}

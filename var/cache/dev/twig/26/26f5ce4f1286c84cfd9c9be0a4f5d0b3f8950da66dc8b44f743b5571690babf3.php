<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_e3167912f7055e62afe30df9677915754e8b4da92950620948dd2b7f2c859cf7 extends Twig_Template
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
        $__internal_3bf7793254d2eccb4cd126e16f8890a6e8681f9d28984144f54fd2dff7e73a88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bf7793254d2eccb4cd126e16f8890a6e8681f9d28984144f54fd2dff7e73a88->enter($__internal_3bf7793254d2eccb4cd126e16f8890a6e8681f9d28984144f54fd2dff7e73a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_324624829676846ec6d859f830675af61344a301752f332965cb66517adfc3d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324624829676846ec6d859f830675af61344a301752f332965cb66517adfc3d0->enter($__internal_324624829676846ec6d859f830675af61344a301752f332965cb66517adfc3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_3bf7793254d2eccb4cd126e16f8890a6e8681f9d28984144f54fd2dff7e73a88->leave($__internal_3bf7793254d2eccb4cd126e16f8890a6e8681f9d28984144f54fd2dff7e73a88_prof);

        
        $__internal_324624829676846ec6d859f830675af61344a301752f332965cb66517adfc3d0->leave($__internal_324624829676846ec6d859f830675af61344a301752f332965cb66517adfc3d0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}

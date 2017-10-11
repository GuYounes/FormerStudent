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
        $__internal_41ac22babc84fcac21cb4d997c1a95d62ad712246447c4a94ef20f01b568fdbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41ac22babc84fcac21cb4d997c1a95d62ad712246447c4a94ef20f01b568fdbb->enter($__internal_41ac22babc84fcac21cb4d997c1a95d62ad712246447c4a94ef20f01b568fdbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_788ab4b7d9eae0cfa967a09f57c74ae6296072b995ce009c629c96ac8bf443e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_788ab4b7d9eae0cfa967a09f57c74ae6296072b995ce009c629c96ac8bf443e0->enter($__internal_788ab4b7d9eae0cfa967a09f57c74ae6296072b995ce009c629c96ac8bf443e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_41ac22babc84fcac21cb4d997c1a95d62ad712246447c4a94ef20f01b568fdbb->leave($__internal_41ac22babc84fcac21cb4d997c1a95d62ad712246447c4a94ef20f01b568fdbb_prof);

        
        $__internal_788ab4b7d9eae0cfa967a09f57c74ae6296072b995ce009c629c96ac8bf443e0->leave($__internal_788ab4b7d9eae0cfa967a09f57c74ae6296072b995ce009c629c96ac8bf443e0_prof);

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

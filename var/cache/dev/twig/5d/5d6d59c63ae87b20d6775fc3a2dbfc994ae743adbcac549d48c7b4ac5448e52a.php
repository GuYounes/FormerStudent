<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_55ce3060c789ec2fc02ccb088e199c4c0a4c717f5fb52054d6292145fdb3c57a extends Twig_Template
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
        $__internal_88ef4c0f66a01f6ac49d1abf1151842e744fc8602a1723953d96554144bcf9b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88ef4c0f66a01f6ac49d1abf1151842e744fc8602a1723953d96554144bcf9b4->enter($__internal_88ef4c0f66a01f6ac49d1abf1151842e744fc8602a1723953d96554144bcf9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_472637ab443b0a7e203193fa8b3068dae4485b2538f2b5ae905f5b90824f7b03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_472637ab443b0a7e203193fa8b3068dae4485b2538f2b5ae905f5b90824f7b03->enter($__internal_472637ab443b0a7e203193fa8b3068dae4485b2538f2b5ae905f5b90824f7b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_88ef4c0f66a01f6ac49d1abf1151842e744fc8602a1723953d96554144bcf9b4->leave($__internal_88ef4c0f66a01f6ac49d1abf1151842e744fc8602a1723953d96554144bcf9b4_prof);

        
        $__internal_472637ab443b0a7e203193fa8b3068dae4485b2538f2b5ae905f5b90824f7b03->leave($__internal_472637ab443b0a7e203193fa8b3068dae4485b2538f2b5ae905f5b90824f7b03_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}

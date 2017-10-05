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
        $__internal_a2edc8f5c806a8e91e15ba581b966673683ad69afbfd9a6ea2839d211593e6b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2edc8f5c806a8e91e15ba581b966673683ad69afbfd9a6ea2839d211593e6b7->enter($__internal_a2edc8f5c806a8e91e15ba581b966673683ad69afbfd9a6ea2839d211593e6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_179293b46bc36e80da5995cfc82ba387754d28466faa6dc8eebda04217a6df81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_179293b46bc36e80da5995cfc82ba387754d28466faa6dc8eebda04217a6df81->enter($__internal_179293b46bc36e80da5995cfc82ba387754d28466faa6dc8eebda04217a6df81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_a2edc8f5c806a8e91e15ba581b966673683ad69afbfd9a6ea2839d211593e6b7->leave($__internal_a2edc8f5c806a8e91e15ba581b966673683ad69afbfd9a6ea2839d211593e6b7_prof);

        
        $__internal_179293b46bc36e80da5995cfc82ba387754d28466faa6dc8eebda04217a6df81->leave($__internal_179293b46bc36e80da5995cfc82ba387754d28466faa6dc8eebda04217a6df81_prof);

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
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}

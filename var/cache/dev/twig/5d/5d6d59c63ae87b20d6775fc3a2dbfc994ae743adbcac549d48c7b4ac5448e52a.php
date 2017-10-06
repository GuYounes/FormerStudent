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
        $__internal_85c1a6c9fab424527aaaec4daa1ba0634e65ca45a0727a8bd4049f898fa00093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c1a6c9fab424527aaaec4daa1ba0634e65ca45a0727a8bd4049f898fa00093->enter($__internal_85c1a6c9fab424527aaaec4daa1ba0634e65ca45a0727a8bd4049f898fa00093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_65436161b39012f43b4bfe9e5945564f99be273751566e2a0bfedfc030e18b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65436161b39012f43b4bfe9e5945564f99be273751566e2a0bfedfc030e18b44->enter($__internal_65436161b39012f43b4bfe9e5945564f99be273751566e2a0bfedfc030e18b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_85c1a6c9fab424527aaaec4daa1ba0634e65ca45a0727a8bd4049f898fa00093->leave($__internal_85c1a6c9fab424527aaaec4daa1ba0634e65ca45a0727a8bd4049f898fa00093_prof);

        
        $__internal_65436161b39012f43b4bfe9e5945564f99be273751566e2a0bfedfc030e18b44->leave($__internal_65436161b39012f43b4bfe9e5945564f99be273751566e2a0bfedfc030e18b44_prof);

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

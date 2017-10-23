<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_581d42685b8f8aca9947d7dedcb86a8489e4bfa92fc71ba4190aa50cf5678752 extends Twig_Template
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
        $__internal_7b19fc0c46d1c88d7bb179e7995dd35cf53d1c218f9e178026f7b4075212c7a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b19fc0c46d1c88d7bb179e7995dd35cf53d1c218f9e178026f7b4075212c7a0->enter($__internal_7b19fc0c46d1c88d7bb179e7995dd35cf53d1c218f9e178026f7b4075212c7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_06ae5a4b655fbc8486a05de6342ba237ef8e70ba8d8e20a924450c37d46e4efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ae5a4b655fbc8486a05de6342ba237ef8e70ba8d8e20a924450c37d46e4efa->enter($__internal_06ae5a4b655fbc8486a05de6342ba237ef8e70ba8d8e20a924450c37d46e4efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_7b19fc0c46d1c88d7bb179e7995dd35cf53d1c218f9e178026f7b4075212c7a0->leave($__internal_7b19fc0c46d1c88d7bb179e7995dd35cf53d1c218f9e178026f7b4075212c7a0_prof);

        
        $__internal_06ae5a4b655fbc8486a05de6342ba237ef8e70ba8d8e20a924450c37d46e4efa->leave($__internal_06ae5a4b655fbc8486a05de6342ba237ef8e70ba8d8e20a924450c37d46e4efa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}

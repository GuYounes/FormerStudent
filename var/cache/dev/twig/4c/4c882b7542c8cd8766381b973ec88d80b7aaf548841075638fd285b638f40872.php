<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_cb1451a09bb278389e0433ed31c83d1f96ccf89346bc259f7e43aff22a8fabbb extends Twig_Template
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
        $__internal_099c72bade7a8693734bdbc085b9cc6795a22f5019f09b394f8cad8d10e56317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_099c72bade7a8693734bdbc085b9cc6795a22f5019f09b394f8cad8d10e56317->enter($__internal_099c72bade7a8693734bdbc085b9cc6795a22f5019f09b394f8cad8d10e56317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_bd1324d65418bf88e2db726bf96e13686f85dfa152feac30cddbab4f3add0a19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd1324d65418bf88e2db726bf96e13686f85dfa152feac30cddbab4f3add0a19->enter($__internal_bd1324d65418bf88e2db726bf96e13686f85dfa152feac30cddbab4f3add0a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_099c72bade7a8693734bdbc085b9cc6795a22f5019f09b394f8cad8d10e56317->leave($__internal_099c72bade7a8693734bdbc085b9cc6795a22f5019f09b394f8cad8d10e56317_prof);

        
        $__internal_bd1324d65418bf88e2db726bf96e13686f85dfa152feac30cddbab4f3add0a19->leave($__internal_bd1324d65418bf88e2db726bf96e13686f85dfa152feac30cddbab4f3add0a19_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
", "@Twig/Exception/error.txt.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}

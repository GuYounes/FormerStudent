<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_935e157c55e7f9cad102e1e9e068528062a903d11b5867d06710bd1bc5941a6d extends Twig_Template
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
        $__internal_37dd1da7deab8ee3547c14b6a7e083dfacce29970b90fbdd1636a9cb6bf0b444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37dd1da7deab8ee3547c14b6a7e083dfacce29970b90fbdd1636a9cb6bf0b444->enter($__internal_37dd1da7deab8ee3547c14b6a7e083dfacce29970b90fbdd1636a9cb6bf0b444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_8b13306278d7842236620beae3832383fc04508c3e1783734f382db2fff3ce4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b13306278d7842236620beae3832383fc04508c3e1783734f382db2fff3ce4d->enter($__internal_8b13306278d7842236620beae3832383fc04508c3e1783734f382db2fff3ce4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_37dd1da7deab8ee3547c14b6a7e083dfacce29970b90fbdd1636a9cb6bf0b444->leave($__internal_37dd1da7deab8ee3547c14b6a7e083dfacce29970b90fbdd1636a9cb6bf0b444_prof);

        
        $__internal_8b13306278d7842236620beae3832383fc04508c3e1783734f382db2fff3ce4d->leave($__internal_8b13306278d7842236620beae3832383fc04508c3e1783734f382db2fff3ce4d_prof);

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

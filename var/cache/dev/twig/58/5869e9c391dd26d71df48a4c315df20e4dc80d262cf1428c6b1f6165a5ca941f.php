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
        $__internal_6cc442ea3dbf2f015904256c2a069c3bcec0d4f7d7aa250160921c1105c32769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cc442ea3dbf2f015904256c2a069c3bcec0d4f7d7aa250160921c1105c32769->enter($__internal_6cc442ea3dbf2f015904256c2a069c3bcec0d4f7d7aa250160921c1105c32769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_6a985a27046fa71bb8956fd71fb0d3417911c25f8b3dbadedcc073f805f3e21f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a985a27046fa71bb8956fd71fb0d3417911c25f8b3dbadedcc073f805f3e21f->enter($__internal_6a985a27046fa71bb8956fd71fb0d3417911c25f8b3dbadedcc073f805f3e21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_6cc442ea3dbf2f015904256c2a069c3bcec0d4f7d7aa250160921c1105c32769->leave($__internal_6cc442ea3dbf2f015904256c2a069c3bcec0d4f7d7aa250160921c1105c32769_prof);

        
        $__internal_6a985a27046fa71bb8956fd71fb0d3417911c25f8b3dbadedcc073f805f3e21f->leave($__internal_6a985a27046fa71bb8956fd71fb0d3417911c25f8b3dbadedcc073f805f3e21f_prof);

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

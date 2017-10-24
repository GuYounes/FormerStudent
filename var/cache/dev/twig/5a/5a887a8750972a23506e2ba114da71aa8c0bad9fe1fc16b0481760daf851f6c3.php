<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a7adf5b0cb8e43fcc104948bdd5e3f1eb68ac705282d76c719d6c25f9f52b47d extends Twig_Template
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
        $__internal_f6bcf82b8660ea22915b5391347be37303d7551905eedc3a8d4408f88c499a55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6bcf82b8660ea22915b5391347be37303d7551905eedc3a8d4408f88c499a55->enter($__internal_f6bcf82b8660ea22915b5391347be37303d7551905eedc3a8d4408f88c499a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_cd095bcfaca967b44e67e3c984ccaff1892d5c9e78327ea79f339384dcadbf65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd095bcfaca967b44e67e3c984ccaff1892d5c9e78327ea79f339384dcadbf65->enter($__internal_cd095bcfaca967b44e67e3c984ccaff1892d5c9e78327ea79f339384dcadbf65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_f6bcf82b8660ea22915b5391347be37303d7551905eedc3a8d4408f88c499a55->leave($__internal_f6bcf82b8660ea22915b5391347be37303d7551905eedc3a8d4408f88c499a55_prof);

        
        $__internal_cd095bcfaca967b44e67e3c984ccaff1892d5c9e78327ea79f339384dcadbf65->leave($__internal_cd095bcfaca967b44e67e3c984ccaff1892d5c9e78327ea79f339384dcadbf65_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}

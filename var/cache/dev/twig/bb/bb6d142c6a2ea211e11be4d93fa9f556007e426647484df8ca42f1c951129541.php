<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_39a323f7a6efce9f70a5280054154e7ee846ac31e7ead962ccb794135747a8c9 extends Twig_Template
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
        $__internal_3154772e30699f91137efe9febbd8c1a7c5d9c57f73a7a3d7a609ce3bcc391da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3154772e30699f91137efe9febbd8c1a7c5d9c57f73a7a3d7a609ce3bcc391da->enter($__internal_3154772e30699f91137efe9febbd8c1a7c5d9c57f73a7a3d7a609ce3bcc391da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_f8285405f9b452d69f5262af8ad81087c04e83a4cdee56b7741e380ea0b6e009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8285405f9b452d69f5262af8ad81087c04e83a4cdee56b7741e380ea0b6e009->enter($__internal_f8285405f9b452d69f5262af8ad81087c04e83a4cdee56b7741e380ea0b6e009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_3154772e30699f91137efe9febbd8c1a7c5d9c57f73a7a3d7a609ce3bcc391da->leave($__internal_3154772e30699f91137efe9febbd8c1a7c5d9c57f73a7a3d7a609ce3bcc391da_prof);

        
        $__internal_f8285405f9b452d69f5262af8ad81087c04e83a4cdee56b7741e380ea0b6e009->leave($__internal_f8285405f9b452d69f5262af8ad81087c04e83a4cdee56b7741e380ea0b6e009_prof);

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

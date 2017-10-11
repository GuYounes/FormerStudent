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
        $__internal_61b08c2026984832de60650c1922b88128328e7d9cd51d8ac54aed7b2bfc2352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61b08c2026984832de60650c1922b88128328e7d9cd51d8ac54aed7b2bfc2352->enter($__internal_61b08c2026984832de60650c1922b88128328e7d9cd51d8ac54aed7b2bfc2352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_a2a616a49c4fa20f91c62a3309ab1185effab72aa9f083dbbf4cc66548115dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a616a49c4fa20f91c62a3309ab1185effab72aa9f083dbbf4cc66548115dc8->enter($__internal_a2a616a49c4fa20f91c62a3309ab1185effab72aa9f083dbbf4cc66548115dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_61b08c2026984832de60650c1922b88128328e7d9cd51d8ac54aed7b2bfc2352->leave($__internal_61b08c2026984832de60650c1922b88128328e7d9cd51d8ac54aed7b2bfc2352_prof);

        
        $__internal_a2a616a49c4fa20f91c62a3309ab1185effab72aa9f083dbbf4cc66548115dc8->leave($__internal_a2a616a49c4fa20f91c62a3309ab1185effab72aa9f083dbbf4cc66548115dc8_prof);

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

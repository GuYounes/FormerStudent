<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_81970fb0ffc50379efcfbb6b179de72aa6a960e69b471f55158873c4f7ac5dfb extends Twig_Template
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
        $__internal_90d210658df4ec857a353ff510fda77ef3faf9b430adab05a3520ae33ec3ef55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90d210658df4ec857a353ff510fda77ef3faf9b430adab05a3520ae33ec3ef55->enter($__internal_90d210658df4ec857a353ff510fda77ef3faf9b430adab05a3520ae33ec3ef55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_771c79192cf576f05e2d6f3fcd37917443d688b6b7eea3c747d9951ae138786a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_771c79192cf576f05e2d6f3fcd37917443d688b6b7eea3c747d9951ae138786a->enter($__internal_771c79192cf576f05e2d6f3fcd37917443d688b6b7eea3c747d9951ae138786a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_90d210658df4ec857a353ff510fda77ef3faf9b430adab05a3520ae33ec3ef55->leave($__internal_90d210658df4ec857a353ff510fda77ef3faf9b430adab05a3520ae33ec3ef55_prof);

        
        $__internal_771c79192cf576f05e2d6f3fcd37917443d688b6b7eea3c747d9951ae138786a->leave($__internal_771c79192cf576f05e2d6f3fcd37917443d688b6b7eea3c747d9951ae138786a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}

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
        $__internal_a1a5e3f9f36a207c0ba5a7025c1148207d8adf61ae25fcc1a57f21192a3c0e91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1a5e3f9f36a207c0ba5a7025c1148207d8adf61ae25fcc1a57f21192a3c0e91->enter($__internal_a1a5e3f9f36a207c0ba5a7025c1148207d8adf61ae25fcc1a57f21192a3c0e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_0265e95a2e20af7cead31e1eafa40bb26d2b9529a604cc94aaa50e023472278e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0265e95a2e20af7cead31e1eafa40bb26d2b9529a604cc94aaa50e023472278e->enter($__internal_0265e95a2e20af7cead31e1eafa40bb26d2b9529a604cc94aaa50e023472278e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_a1a5e3f9f36a207c0ba5a7025c1148207d8adf61ae25fcc1a57f21192a3c0e91->leave($__internal_a1a5e3f9f36a207c0ba5a7025c1148207d8adf61ae25fcc1a57f21192a3c0e91_prof);

        
        $__internal_0265e95a2e20af7cead31e1eafa40bb26d2b9529a604cc94aaa50e023472278e->leave($__internal_0265e95a2e20af7cead31e1eafa40bb26d2b9529a604cc94aaa50e023472278e_prof);

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

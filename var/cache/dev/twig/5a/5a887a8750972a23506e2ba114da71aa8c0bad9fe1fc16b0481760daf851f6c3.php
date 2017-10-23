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
        $__internal_812d2705c75e6cc02a8869b5034d4a2de1d522bb381e09eb214daccad1b781e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_812d2705c75e6cc02a8869b5034d4a2de1d522bb381e09eb214daccad1b781e0->enter($__internal_812d2705c75e6cc02a8869b5034d4a2de1d522bb381e09eb214daccad1b781e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_775308d39a28b28d8e375790613da3018686e4e1ad5ba6950b1b78c3e293da93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_775308d39a28b28d8e375790613da3018686e4e1ad5ba6950b1b78c3e293da93->enter($__internal_775308d39a28b28d8e375790613da3018686e4e1ad5ba6950b1b78c3e293da93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_812d2705c75e6cc02a8869b5034d4a2de1d522bb381e09eb214daccad1b781e0->leave($__internal_812d2705c75e6cc02a8869b5034d4a2de1d522bb381e09eb214daccad1b781e0_prof);

        
        $__internal_775308d39a28b28d8e375790613da3018686e4e1ad5ba6950b1b78c3e293da93->leave($__internal_775308d39a28b28d8e375790613da3018686e4e1ad5ba6950b1b78c3e293da93_prof);

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

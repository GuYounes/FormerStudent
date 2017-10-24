<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_776578dd0bcd8e2bca048b60e3a1de464964bd4c9ec938b2e71f173f6f670765 extends Twig_Template
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
        $__internal_ce98e7bfe518f87d3f619910c009976fe15ae326809a73dd0be690cf3f251738 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce98e7bfe518f87d3f619910c009976fe15ae326809a73dd0be690cf3f251738->enter($__internal_ce98e7bfe518f87d3f619910c009976fe15ae326809a73dd0be690cf3f251738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_6c08b6feddb1563cc5997daedcffed7bdd1d9fd65d76e9e3695def3f59dc8482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c08b6feddb1563cc5997daedcffed7bdd1d9fd65d76e9e3695def3f59dc8482->enter($__internal_6c08b6feddb1563cc5997daedcffed7bdd1d9fd65d76e9e3695def3f59dc8482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_ce98e7bfe518f87d3f619910c009976fe15ae326809a73dd0be690cf3f251738->leave($__internal_ce98e7bfe518f87d3f619910c009976fe15ae326809a73dd0be690cf3f251738_prof);

        
        $__internal_6c08b6feddb1563cc5997daedcffed7bdd1d9fd65d76e9e3695def3f59dc8482->leave($__internal_6c08b6feddb1563cc5997daedcffed7bdd1d9fd65d76e9e3695def3f59dc8482_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}

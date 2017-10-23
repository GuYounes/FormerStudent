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
        $__internal_319a59e193fa732159d07766c522cabfcbf8491a3be76c46b34b44344553728d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_319a59e193fa732159d07766c522cabfcbf8491a3be76c46b34b44344553728d->enter($__internal_319a59e193fa732159d07766c522cabfcbf8491a3be76c46b34b44344553728d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_5ccbc00979aa865d6c947a7771cfb1a715a3f545ca5a021312f486c839351c7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ccbc00979aa865d6c947a7771cfb1a715a3f545ca5a021312f486c839351c7e->enter($__internal_5ccbc00979aa865d6c947a7771cfb1a715a3f545ca5a021312f486c839351c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_319a59e193fa732159d07766c522cabfcbf8491a3be76c46b34b44344553728d->leave($__internal_319a59e193fa732159d07766c522cabfcbf8491a3be76c46b34b44344553728d_prof);

        
        $__internal_5ccbc00979aa865d6c947a7771cfb1a715a3f545ca5a021312f486c839351c7e->leave($__internal_5ccbc00979aa865d6c947a7771cfb1a715a3f545ca5a021312f486c839351c7e_prof);

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

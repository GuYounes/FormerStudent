<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_13efe0c3c28f888259847f8b248d49e3287de2dc4db04dde9ef8faf062b38904 extends Twig_Template
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
        $__internal_a2391d3b1ac1a2ef0a1860768f384f08f73fdcc52915494ee1bda79d04441854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2391d3b1ac1a2ef0a1860768f384f08f73fdcc52915494ee1bda79d04441854->enter($__internal_a2391d3b1ac1a2ef0a1860768f384f08f73fdcc52915494ee1bda79d04441854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_218a89844fac430d225654e511e0572e72b937af9889ea7471003dcacf9dc78b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_218a89844fac430d225654e511e0572e72b937af9889ea7471003dcacf9dc78b->enter($__internal_218a89844fac430d225654e511e0572e72b937af9889ea7471003dcacf9dc78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_a2391d3b1ac1a2ef0a1860768f384f08f73fdcc52915494ee1bda79d04441854->leave($__internal_a2391d3b1ac1a2ef0a1860768f384f08f73fdcc52915494ee1bda79d04441854_prof);

        
        $__internal_218a89844fac430d225654e511e0572e72b937af9889ea7471003dcacf9dc78b->leave($__internal_218a89844fac430d225654e511e0572e72b937af9889ea7471003dcacf9dc78b_prof);

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

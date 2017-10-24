<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_b7eb6d01e5303ef71bc7455407cd256bcb7ea4bce001a173d10c29a7dd86bc5e extends Twig_Template
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
        $__internal_ff9dc9d0be9c6559ec4bb9777737e04409dd74a569f51fc97accff400ced0385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff9dc9d0be9c6559ec4bb9777737e04409dd74a569f51fc97accff400ced0385->enter($__internal_ff9dc9d0be9c6559ec4bb9777737e04409dd74a569f51fc97accff400ced0385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_88dd348eb706e04e4a2f242a1adb19b557298aa4493a641fe5360a1b3c255ef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88dd348eb706e04e4a2f242a1adb19b557298aa4493a641fe5360a1b3c255ef2->enter($__internal_88dd348eb706e04e4a2f242a1adb19b557298aa4493a641fe5360a1b3c255ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_ff9dc9d0be9c6559ec4bb9777737e04409dd74a569f51fc97accff400ced0385->leave($__internal_ff9dc9d0be9c6559ec4bb9777737e04409dd74a569f51fc97accff400ced0385_prof);

        
        $__internal_88dd348eb706e04e4a2f242a1adb19b557298aa4493a641fe5360a1b3c255ef2->leave($__internal_88dd348eb706e04e4a2f242a1adb19b557298aa4493a641fe5360a1b3c255ef2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}

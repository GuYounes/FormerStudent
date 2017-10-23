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
        $__internal_947908ffdbac19723e2082c59c30288a7cae7f5f0f0ebdb791a790891526f352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_947908ffdbac19723e2082c59c30288a7cae7f5f0f0ebdb791a790891526f352->enter($__internal_947908ffdbac19723e2082c59c30288a7cae7f5f0f0ebdb791a790891526f352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_8e4d87ee1ecd04483e90441d796d1eeea2c85659c5751d2f10ec6610d4970f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e4d87ee1ecd04483e90441d796d1eeea2c85659c5751d2f10ec6610d4970f4c->enter($__internal_8e4d87ee1ecd04483e90441d796d1eeea2c85659c5751d2f10ec6610d4970f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_947908ffdbac19723e2082c59c30288a7cae7f5f0f0ebdb791a790891526f352->leave($__internal_947908ffdbac19723e2082c59c30288a7cae7f5f0f0ebdb791a790891526f352_prof);

        
        $__internal_8e4d87ee1ecd04483e90441d796d1eeea2c85659c5751d2f10ec6610d4970f4c->leave($__internal_8e4d87ee1ecd04483e90441d796d1eeea2c85659c5751d2f10ec6610d4970f4c_prof);

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

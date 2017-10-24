<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_7a49909cb9fe7302222f3f9a26ba51002012215a5ccb3db536dd82d2867ecd87 extends Twig_Template
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
        $__internal_491d67eb47e7d482d4e00e75c80cab94caeae02eeaff03e1303ca3ff4b71b59f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_491d67eb47e7d482d4e00e75c80cab94caeae02eeaff03e1303ca3ff4b71b59f->enter($__internal_491d67eb47e7d482d4e00e75c80cab94caeae02eeaff03e1303ca3ff4b71b59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_14f68b259bc67a0307f13998ffe94cadc056da12d5da4a259d435c661bd8f55c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f68b259bc67a0307f13998ffe94cadc056da12d5da4a259d435c661bd8f55c->enter($__internal_14f68b259bc67a0307f13998ffe94cadc056da12d5da4a259d435c661bd8f55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_491d67eb47e7d482d4e00e75c80cab94caeae02eeaff03e1303ca3ff4b71b59f->leave($__internal_491d67eb47e7d482d4e00e75c80cab94caeae02eeaff03e1303ca3ff4b71b59f_prof);

        
        $__internal_14f68b259bc67a0307f13998ffe94cadc056da12d5da4a259d435c661bd8f55c->leave($__internal_14f68b259bc67a0307f13998ffe94cadc056da12d5da4a259d435c661bd8f55c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}

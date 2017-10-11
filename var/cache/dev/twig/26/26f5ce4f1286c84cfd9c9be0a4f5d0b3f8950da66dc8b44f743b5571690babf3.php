<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_e3167912f7055e62afe30df9677915754e8b4da92950620948dd2b7f2c859cf7 extends Twig_Template
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
        $__internal_e32293613d0a312ce4d50b81928121685f0f8cc54b471659a3572306457e6d6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e32293613d0a312ce4d50b81928121685f0f8cc54b471659a3572306457e6d6e->enter($__internal_e32293613d0a312ce4d50b81928121685f0f8cc54b471659a3572306457e6d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_bc913605cebbb835a34bfa156de06ff0c492c53cb30323f9f1744efeddaa6a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc913605cebbb835a34bfa156de06ff0c492c53cb30323f9f1744efeddaa6a14->enter($__internal_bc913605cebbb835a34bfa156de06ff0c492c53cb30323f9f1744efeddaa6a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_e32293613d0a312ce4d50b81928121685f0f8cc54b471659a3572306457e6d6e->leave($__internal_e32293613d0a312ce4d50b81928121685f0f8cc54b471659a3572306457e6d6e_prof);

        
        $__internal_bc913605cebbb835a34bfa156de06ff0c492c53cb30323f9f1744efeddaa6a14->leave($__internal_bc913605cebbb835a34bfa156de06ff0c492c53cb30323f9f1744efeddaa6a14_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}

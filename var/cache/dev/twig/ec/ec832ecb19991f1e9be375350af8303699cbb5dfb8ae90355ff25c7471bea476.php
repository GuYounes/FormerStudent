<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_1d3461428f95e25d6250357818aacc32d53fbc5d44592bf39bce523876e3f2eb extends Twig_Template
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
        $__internal_f4a6aa8c42bd5226efcba42339382611a3af82b287c01db86892a50fd43465f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4a6aa8c42bd5226efcba42339382611a3af82b287c01db86892a50fd43465f1->enter($__internal_f4a6aa8c42bd5226efcba42339382611a3af82b287c01db86892a50fd43465f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_5accd18600a466dad39bdc7ee143aaa1865967fa91257a760a30bbc559aaab63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5accd18600a466dad39bdc7ee143aaa1865967fa91257a760a30bbc559aaab63->enter($__internal_5accd18600a466dad39bdc7ee143aaa1865967fa91257a760a30bbc559aaab63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_f4a6aa8c42bd5226efcba42339382611a3af82b287c01db86892a50fd43465f1->leave($__internal_f4a6aa8c42bd5226efcba42339382611a3af82b287c01db86892a50fd43465f1_prof);

        
        $__internal_5accd18600a466dad39bdc7ee143aaa1865967fa91257a760a30bbc559aaab63->leave($__internal_5accd18600a466dad39bdc7ee143aaa1865967fa91257a760a30bbc559aaab63_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}

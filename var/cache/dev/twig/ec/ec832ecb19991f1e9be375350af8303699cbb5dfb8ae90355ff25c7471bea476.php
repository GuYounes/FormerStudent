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
        $__internal_92acffd7bd73155e8998389b4ffc9c9f5a39875151f72f18224b1e8442106fcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92acffd7bd73155e8998389b4ffc9c9f5a39875151f72f18224b1e8442106fcb->enter($__internal_92acffd7bd73155e8998389b4ffc9c9f5a39875151f72f18224b1e8442106fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_2f1c746ee18f8afc6bf6b2ef75d2399cc9f2fc2e3fc29b2631d36a253ebdabed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f1c746ee18f8afc6bf6b2ef75d2399cc9f2fc2e3fc29b2631d36a253ebdabed->enter($__internal_2f1c746ee18f8afc6bf6b2ef75d2399cc9f2fc2e3fc29b2631d36a253ebdabed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_92acffd7bd73155e8998389b4ffc9c9f5a39875151f72f18224b1e8442106fcb->leave($__internal_92acffd7bd73155e8998389b4ffc9c9f5a39875151f72f18224b1e8442106fcb_prof);

        
        $__internal_2f1c746ee18f8afc6bf6b2ef75d2399cc9f2fc2e3fc29b2631d36a253ebdabed->leave($__internal_2f1c746ee18f8afc6bf6b2ef75d2399cc9f2fc2e3fc29b2631d36a253ebdabed_prof);

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
", "@Twig/Exception/error.txt.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}

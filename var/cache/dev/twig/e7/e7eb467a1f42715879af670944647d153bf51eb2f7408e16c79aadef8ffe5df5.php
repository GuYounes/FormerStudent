<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_da7d8a44184c9af4626411fab207dcf04488ae971c360f9cd38e4489907835b3 extends Twig_Template
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
        $__internal_e1016c401195fcd75606cac42a3ed3530bc88e0771e6c61468ad18f0a46953b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1016c401195fcd75606cac42a3ed3530bc88e0771e6c61468ad18f0a46953b3->enter($__internal_e1016c401195fcd75606cac42a3ed3530bc88e0771e6c61468ad18f0a46953b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_6c449de24c5c1019652e770e97b86716260a8f911b136b06a5ce1886442321b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c449de24c5c1019652e770e97b86716260a8f911b136b06a5ce1886442321b7->enter($__internal_6c449de24c5c1019652e770e97b86716260a8f911b136b06a5ce1886442321b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_e1016c401195fcd75606cac42a3ed3530bc88e0771e6c61468ad18f0a46953b3->leave($__internal_e1016c401195fcd75606cac42a3ed3530bc88e0771e6c61468ad18f0a46953b3_prof);

        
        $__internal_6c449de24c5c1019652e770e97b86716260a8f911b136b06a5ce1886442321b7->leave($__internal_6c449de24c5c1019652e770e97b86716260a8f911b136b06a5ce1886442321b7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}

<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_f46b4c39d68d16aa166ee4276074a698a3cf2f248d0511de813d7164e2e89b42 extends Twig_Template
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
        $__internal_f67ae52e6da8080c02fd03d9f48214b852687381c387625fb133ffe5a06bfde8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f67ae52e6da8080c02fd03d9f48214b852687381c387625fb133ffe5a06bfde8->enter($__internal_f67ae52e6da8080c02fd03d9f48214b852687381c387625fb133ffe5a06bfde8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_991dbb538bcc8f857ea32664e4a23d4727910e9e4317788320b39c1f5fd60bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_991dbb538bcc8f857ea32664e4a23d4727910e9e4317788320b39c1f5fd60bc7->enter($__internal_991dbb538bcc8f857ea32664e4a23d4727910e9e4317788320b39c1f5fd60bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_f67ae52e6da8080c02fd03d9f48214b852687381c387625fb133ffe5a06bfde8->leave($__internal_f67ae52e6da8080c02fd03d9f48214b852687381c387625fb133ffe5a06bfde8_prof);

        
        $__internal_991dbb538bcc8f857ea32664e4a23d4727910e9e4317788320b39c1f5fd60bc7->leave($__internal_991dbb538bcc8f857ea32664e4a23d4727910e9e4317788320b39c1f5fd60bc7_prof);

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
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}

<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_698d23bd1dd6a01f869ba81997e6fafc0726ddbff331b8e27d40fa44df4e7913 extends Twig_Template
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
        $__internal_c0b351d938847c22192927bc97c0f42a3aafa560e8b186ecd4458aa274e2fbae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0b351d938847c22192927bc97c0f42a3aafa560e8b186ecd4458aa274e2fbae->enter($__internal_c0b351d938847c22192927bc97c0f42a3aafa560e8b186ecd4458aa274e2fbae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_03ccb6457d7fdf497417b11d566470a92f107f452990bc1b6ac4c56a0d6896ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03ccb6457d7fdf497417b11d566470a92f107f452990bc1b6ac4c56a0d6896ad->enter($__internal_03ccb6457d7fdf497417b11d566470a92f107f452990bc1b6ac4c56a0d6896ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_c0b351d938847c22192927bc97c0f42a3aafa560e8b186ecd4458aa274e2fbae->leave($__internal_c0b351d938847c22192927bc97c0f42a3aafa560e8b186ecd4458aa274e2fbae_prof);

        
        $__internal_03ccb6457d7fdf497417b11d566470a92f107f452990bc1b6ac4c56a0d6896ad->leave($__internal_03ccb6457d7fdf497417b11d566470a92f107f452990bc1b6ac4c56a0d6896ad_prof);

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

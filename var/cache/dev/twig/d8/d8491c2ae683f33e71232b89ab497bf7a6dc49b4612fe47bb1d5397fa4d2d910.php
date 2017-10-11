<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_483b30f23b5c874e922906102e9c49d39bf8d17ebc9c47194732de1d28df11ca extends Twig_Template
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
        $__internal_ca3b88a963b2e90752bbe03ce4ccfed75d1dbde4be95393112c9827f688123db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca3b88a963b2e90752bbe03ce4ccfed75d1dbde4be95393112c9827f688123db->enter($__internal_ca3b88a963b2e90752bbe03ce4ccfed75d1dbde4be95393112c9827f688123db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_79dd11a64cae61b23258472a29ef11f6438e6cef137f6ca5ea2b16101ceafddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79dd11a64cae61b23258472a29ef11f6438e6cef137f6ca5ea2b16101ceafddf->enter($__internal_79dd11a64cae61b23258472a29ef11f6438e6cef137f6ca5ea2b16101ceafddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_ca3b88a963b2e90752bbe03ce4ccfed75d1dbde4be95393112c9827f688123db->leave($__internal_ca3b88a963b2e90752bbe03ce4ccfed75d1dbde4be95393112c9827f688123db_prof);

        
        $__internal_79dd11a64cae61b23258472a29ef11f6438e6cef137f6ca5ea2b16101ceafddf->leave($__internal_79dd11a64cae61b23258472a29ef11f6438e6cef137f6ca5ea2b16101ceafddf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}

<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_bd65b39c99b56e1de337f9a51137690df4c3462b79e954cb301a18d64e20b71a extends Twig_Template
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
        $__internal_1eb1d8c5fa9b72a7b6c33a3c3afce499172c322a5fadba04ccea6df8539043d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eb1d8c5fa9b72a7b6c33a3c3afce499172c322a5fadba04ccea6df8539043d3->enter($__internal_1eb1d8c5fa9b72a7b6c33a3c3afce499172c322a5fadba04ccea6df8539043d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_a009adf4533a170665e68e68fa579754203aae4ab9e87e2f37a15a3bab4fbab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a009adf4533a170665e68e68fa579754203aae4ab9e87e2f37a15a3bab4fbab5->enter($__internal_a009adf4533a170665e68e68fa579754203aae4ab9e87e2f37a15a3bab4fbab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1eb1d8c5fa9b72a7b6c33a3c3afce499172c322a5fadba04ccea6df8539043d3->leave($__internal_1eb1d8c5fa9b72a7b6c33a3c3afce499172c322a5fadba04ccea6df8539043d3_prof);

        
        $__internal_a009adf4533a170665e68e68fa579754203aae4ab9e87e2f37a15a3bab4fbab5->leave($__internal_a009adf4533a170665e68e68fa579754203aae4ab9e87e2f37a15a3bab4fbab5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}

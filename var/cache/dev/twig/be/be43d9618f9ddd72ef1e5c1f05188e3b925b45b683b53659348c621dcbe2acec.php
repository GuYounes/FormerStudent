<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_6b15d76b08ce72f1f1dc40859aff002658fec59f09ad5759be68f83bbfdc6c38 extends Twig_Template
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
        $__internal_900565f951113655cb27030545498597fef1c7dbb18e6a82dc778924b4e1d8d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_900565f951113655cb27030545498597fef1c7dbb18e6a82dc778924b4e1d8d3->enter($__internal_900565f951113655cb27030545498597fef1c7dbb18e6a82dc778924b4e1d8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_b11a44702e3e688703b2315d22158daac1d1785bad5b7688dd393f8efe60c3e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b11a44702e3e688703b2315d22158daac1d1785bad5b7688dd393f8efe60c3e2->enter($__internal_b11a44702e3e688703b2315d22158daac1d1785bad5b7688dd393f8efe60c3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_900565f951113655cb27030545498597fef1c7dbb18e6a82dc778924b4e1d8d3->leave($__internal_900565f951113655cb27030545498597fef1c7dbb18e6a82dc778924b4e1d8d3_prof);

        
        $__internal_b11a44702e3e688703b2315d22158daac1d1785bad5b7688dd393f8efe60c3e2->leave($__internal_b11a44702e3e688703b2315d22158daac1d1785bad5b7688dd393f8efe60c3e2_prof);

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

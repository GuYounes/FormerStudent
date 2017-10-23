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
        $__internal_4ec96571bcc07b43ea672b735e8b3b1ca8fd0a8aecdad1908539388c049b52f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ec96571bcc07b43ea672b735e8b3b1ca8fd0a8aecdad1908539388c049b52f1->enter($__internal_4ec96571bcc07b43ea672b735e8b3b1ca8fd0a8aecdad1908539388c049b52f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_c084920b9dadf47c3abf3188a9c7d4f1c91436446b4197bcf3f7110ffb03a231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c084920b9dadf47c3abf3188a9c7d4f1c91436446b4197bcf3f7110ffb03a231->enter($__internal_c084920b9dadf47c3abf3188a9c7d4f1c91436446b4197bcf3f7110ffb03a231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_4ec96571bcc07b43ea672b735e8b3b1ca8fd0a8aecdad1908539388c049b52f1->leave($__internal_4ec96571bcc07b43ea672b735e8b3b1ca8fd0a8aecdad1908539388c049b52f1_prof);

        
        $__internal_c084920b9dadf47c3abf3188a9c7d4f1c91436446b4197bcf3f7110ffb03a231->leave($__internal_c084920b9dadf47c3abf3188a9c7d4f1c91436446b4197bcf3f7110ffb03a231_prof);

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

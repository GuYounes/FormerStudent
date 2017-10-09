<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f23d9801af9e2c0ceca399882f364700afbdee4e4ef7b60c3f94578bc22707e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_444ff58e00edcb78e752ce98af276e87bdb64955707afadf1fed2c8eb7a8ed6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_444ff58e00edcb78e752ce98af276e87bdb64955707afadf1fed2c8eb7a8ed6a->enter($__internal_444ff58e00edcb78e752ce98af276e87bdb64955707afadf1fed2c8eb7a8ed6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_e2896e10f0a27cd94b455ef82ec386847fdafa870891d9e5207c7b2856565056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2896e10f0a27cd94b455ef82ec386847fdafa870891d9e5207c7b2856565056->enter($__internal_e2896e10f0a27cd94b455ef82ec386847fdafa870891d9e5207c7b2856565056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_444ff58e00edcb78e752ce98af276e87bdb64955707afadf1fed2c8eb7a8ed6a->leave($__internal_444ff58e00edcb78e752ce98af276e87bdb64955707afadf1fed2c8eb7a8ed6a_prof);

        
        $__internal_e2896e10f0a27cd94b455ef82ec386847fdafa870891d9e5207c7b2856565056->leave($__internal_e2896e10f0a27cd94b455ef82ec386847fdafa870891d9e5207c7b2856565056_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fe30c02dd16ad4b92cfba8e082aa1d8b4aa010e69d3ea18f21bd7481f89b9b28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe30c02dd16ad4b92cfba8e082aa1d8b4aa010e69d3ea18f21bd7481f89b9b28->enter($__internal_fe30c02dd16ad4b92cfba8e082aa1d8b4aa010e69d3ea18f21bd7481f89b9b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8dcafe5d03da61362ad67293caffed0573558dc85287db2ec478ed02c056dda5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dcafe5d03da61362ad67293caffed0573558dc85287db2ec478ed02c056dda5->enter($__internal_8dcafe5d03da61362ad67293caffed0573558dc85287db2ec478ed02c056dda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8dcafe5d03da61362ad67293caffed0573558dc85287db2ec478ed02c056dda5->leave($__internal_8dcafe5d03da61362ad67293caffed0573558dc85287db2ec478ed02c056dda5_prof);

        
        $__internal_fe30c02dd16ad4b92cfba8e082aa1d8b4aa010e69d3ea18f21bd7481f89b9b28->leave($__internal_fe30c02dd16ad4b92cfba8e082aa1d8b4aa010e69d3ea18f21bd7481f89b9b28_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

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
        $__internal_5cc523c800a019cea8079353742f537b0ef5b5e6fa334cea111d416108cd39e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cc523c800a019cea8079353742f537b0ef5b5e6fa334cea111d416108cd39e8->enter($__internal_5cc523c800a019cea8079353742f537b0ef5b5e6fa334cea111d416108cd39e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_1e2f4667071d6b7d4fae64e6009c4d5d94919b23e5b982b0dcd0b7039216f827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e2f4667071d6b7d4fae64e6009c4d5d94919b23e5b982b0dcd0b7039216f827->enter($__internal_1e2f4667071d6b7d4fae64e6009c4d5d94919b23e5b982b0dcd0b7039216f827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5cc523c800a019cea8079353742f537b0ef5b5e6fa334cea111d416108cd39e8->leave($__internal_5cc523c800a019cea8079353742f537b0ef5b5e6fa334cea111d416108cd39e8_prof);

        
        $__internal_1e2f4667071d6b7d4fae64e6009c4d5d94919b23e5b982b0dcd0b7039216f827->leave($__internal_1e2f4667071d6b7d4fae64e6009c4d5d94919b23e5b982b0dcd0b7039216f827_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5e80597f8a2528702f596f093f639515b0eebb5a1ecea230581e37ccf9ceb6c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e80597f8a2528702f596f093f639515b0eebb5a1ecea230581e37ccf9ceb6c3->enter($__internal_5e80597f8a2528702f596f093f639515b0eebb5a1ecea230581e37ccf9ceb6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_349c6e253e85c1fb826b5878df8173fa636fd5669927b7cba724c59998ff605a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_349c6e253e85c1fb826b5878df8173fa636fd5669927b7cba724c59998ff605a->enter($__internal_349c6e253e85c1fb826b5878df8173fa636fd5669927b7cba724c59998ff605a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_349c6e253e85c1fb826b5878df8173fa636fd5669927b7cba724c59998ff605a->leave($__internal_349c6e253e85c1fb826b5878df8173fa636fd5669927b7cba724c59998ff605a_prof);

        
        $__internal_5e80597f8a2528702f596f093f639515b0eebb5a1ecea230581e37ccf9ceb6c3->leave($__internal_5e80597f8a2528702f596f093f639515b0eebb5a1ecea230581e37ccf9ceb6c3_prof);

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

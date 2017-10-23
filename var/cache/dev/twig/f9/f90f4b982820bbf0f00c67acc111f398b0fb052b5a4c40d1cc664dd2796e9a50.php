<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_19150055e368101db784087256d659b9bd5daffd8220e42efef6490617e27af8 extends Twig_Template
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
        $__internal_6667ef897a785cf8d0318a27420efa7064776c421b3038aeac2a59e6bc5c09fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6667ef897a785cf8d0318a27420efa7064776c421b3038aeac2a59e6bc5c09fb->enter($__internal_6667ef897a785cf8d0318a27420efa7064776c421b3038aeac2a59e6bc5c09fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_6119c8db93408039c627765be3d75ef04ccd61dfd3d5eb942ebb1f301e11978f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6119c8db93408039c627765be3d75ef04ccd61dfd3d5eb942ebb1f301e11978f->enter($__internal_6119c8db93408039c627765be3d75ef04ccd61dfd3d5eb942ebb1f301e11978f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_6667ef897a785cf8d0318a27420efa7064776c421b3038aeac2a59e6bc5c09fb->leave($__internal_6667ef897a785cf8d0318a27420efa7064776c421b3038aeac2a59e6bc5c09fb_prof);

        
        $__internal_6119c8db93408039c627765be3d75ef04ccd61dfd3d5eb942ebb1f301e11978f->leave($__internal_6119c8db93408039c627765be3d75ef04ccd61dfd3d5eb942ebb1f301e11978f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}

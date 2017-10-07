<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_eb6d58285da4d59246f8ebe8dad128525e69ebe03aed0fd86837ae3f6e3d5f8c extends Twig_Template
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
        $__internal_64db355c3e13804e40f89833b521fa7b8b6601921433c9c4a8c662998fa8a416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64db355c3e13804e40f89833b521fa7b8b6601921433c9c4a8c662998fa8a416->enter($__internal_64db355c3e13804e40f89833b521fa7b8b6601921433c9c4a8c662998fa8a416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_162444b0fbd6b76ff7e5032a74160829956ca2efde12d1048babda9d7bc5b031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_162444b0fbd6b76ff7e5032a74160829956ca2efde12d1048babda9d7bc5b031->enter($__internal_162444b0fbd6b76ff7e5032a74160829956ca2efde12d1048babda9d7bc5b031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_64db355c3e13804e40f89833b521fa7b8b6601921433c9c4a8c662998fa8a416->leave($__internal_64db355c3e13804e40f89833b521fa7b8b6601921433c9c4a8c662998fa8a416_prof);

        
        $__internal_162444b0fbd6b76ff7e5032a74160829956ca2efde12d1048babda9d7bc5b031->leave($__internal_162444b0fbd6b76ff7e5032a74160829956ca2efde12d1048babda9d7bc5b031_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}

<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_88a011c7b6bbd0aca1310b09827edc74d3ea96381d7a3999f7908ae6ce4ceb6b extends Twig_Template
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
        $__internal_f4f274b2fe983b2d9705c3d9e8ea06f1c0c51e5fd696bdd851a407f3afc6ccb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4f274b2fe983b2d9705c3d9e8ea06f1c0c51e5fd696bdd851a407f3afc6ccb8->enter($__internal_f4f274b2fe983b2d9705c3d9e8ea06f1c0c51e5fd696bdd851a407f3afc6ccb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_168e8e200984bd3fa675e44bb1986e05b90f6013a9bed94367875100bf4bc0e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_168e8e200984bd3fa675e44bb1986e05b90f6013a9bed94367875100bf4bc0e5->enter($__internal_168e8e200984bd3fa675e44bb1986e05b90f6013a9bed94367875100bf4bc0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f4f274b2fe983b2d9705c3d9e8ea06f1c0c51e5fd696bdd851a407f3afc6ccb8->leave($__internal_f4f274b2fe983b2d9705c3d9e8ea06f1c0c51e5fd696bdd851a407f3afc6ccb8_prof);

        
        $__internal_168e8e200984bd3fa675e44bb1986e05b90f6013a9bed94367875100bf4bc0e5->leave($__internal_168e8e200984bd3fa675e44bb1986e05b90f6013a9bed94367875100bf4bc0e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}

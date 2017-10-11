<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_69057473c7762de5549427ca4bedc90004abab6fc15a501e0724fe277004e847 extends Twig_Template
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
        $__internal_43fb8e076dcf3b028eb383742ec4a860b2cabb3458912475c2f1854cbedc7695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43fb8e076dcf3b028eb383742ec4a860b2cabb3458912475c2f1854cbedc7695->enter($__internal_43fb8e076dcf3b028eb383742ec4a860b2cabb3458912475c2f1854cbedc7695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_f0e7b3bf5c7f06debca8f9c4a49b71365f738a9d6e499789b7347ee7ba0207da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e7b3bf5c7f06debca8f9c4a49b71365f738a9d6e499789b7347ee7ba0207da->enter($__internal_f0e7b3bf5c7f06debca8f9c4a49b71365f738a9d6e499789b7347ee7ba0207da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_43fb8e076dcf3b028eb383742ec4a860b2cabb3458912475c2f1854cbedc7695->leave($__internal_43fb8e076dcf3b028eb383742ec4a860b2cabb3458912475c2f1854cbedc7695_prof);

        
        $__internal_f0e7b3bf5c7f06debca8f9c4a49b71365f738a9d6e499789b7347ee7ba0207da->leave($__internal_f0e7b3bf5c7f06debca8f9c4a49b71365f738a9d6e499789b7347ee7ba0207da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}

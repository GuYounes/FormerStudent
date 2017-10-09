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
        $__internal_e416d32572a7a4587f6bc7896a0869774727566cb1a2c75051a1b6de23e08f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e416d32572a7a4587f6bc7896a0869774727566cb1a2c75051a1b6de23e08f8e->enter($__internal_e416d32572a7a4587f6bc7896a0869774727566cb1a2c75051a1b6de23e08f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_8ff91f4972f76846a8446fd3083b0bb5eefcca2c6c5555284b1df67b9b01b899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff91f4972f76846a8446fd3083b0bb5eefcca2c6c5555284b1df67b9b01b899->enter($__internal_8ff91f4972f76846a8446fd3083b0bb5eefcca2c6c5555284b1df67b9b01b899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e416d32572a7a4587f6bc7896a0869774727566cb1a2c75051a1b6de23e08f8e->leave($__internal_e416d32572a7a4587f6bc7896a0869774727566cb1a2c75051a1b6de23e08f8e_prof);

        
        $__internal_8ff91f4972f76846a8446fd3083b0bb5eefcca2c6c5555284b1df67b9b01b899->leave($__internal_8ff91f4972f76846a8446fd3083b0bb5eefcca2c6c5555284b1df67b9b01b899_prof);

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

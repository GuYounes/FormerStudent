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
        $__internal_5beb07fdf2aaa5acf1c55f4252234afdd8fbea068a20656b3dc6dbccfb0549f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5beb07fdf2aaa5acf1c55f4252234afdd8fbea068a20656b3dc6dbccfb0549f4->enter($__internal_5beb07fdf2aaa5acf1c55f4252234afdd8fbea068a20656b3dc6dbccfb0549f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_6d27c49afb1003a8782c0feeac2bab8c48a252852c03d973dcd443f39f21a64a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d27c49afb1003a8782c0feeac2bab8c48a252852c03d973dcd443f39f21a64a->enter($__internal_6d27c49afb1003a8782c0feeac2bab8c48a252852c03d973dcd443f39f21a64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_5beb07fdf2aaa5acf1c55f4252234afdd8fbea068a20656b3dc6dbccfb0549f4->leave($__internal_5beb07fdf2aaa5acf1c55f4252234afdd8fbea068a20656b3dc6dbccfb0549f4_prof);

        
        $__internal_6d27c49afb1003a8782c0feeac2bab8c48a252852c03d973dcd443f39f21a64a->leave($__internal_6d27c49afb1003a8782c0feeac2bab8c48a252852c03d973dcd443f39f21a64a_prof);

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
", "@Framework/Form/form_widget_compound.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}

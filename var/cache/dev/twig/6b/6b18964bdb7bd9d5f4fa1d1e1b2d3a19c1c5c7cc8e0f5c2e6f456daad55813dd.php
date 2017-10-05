<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_ca9bfa35aaf688cdc3aba86ebcf650c45bc93a04db2bb63f4fafe5ebc783bc03 extends Twig_Template
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
        $__internal_09e8e77f793741c446ab18256e67ef4d93c07472ce1603a7184e619a9c88d891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09e8e77f793741c446ab18256e67ef4d93c07472ce1603a7184e619a9c88d891->enter($__internal_09e8e77f793741c446ab18256e67ef4d93c07472ce1603a7184e619a9c88d891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_b1c165e7f93cac6b647eaf93da1de5beef34ea7db38cf4d6b917fd89005c01fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c165e7f93cac6b647eaf93da1de5beef34ea7db38cf4d6b917fd89005c01fd->enter($__internal_b1c165e7f93cac6b647eaf93da1de5beef34ea7db38cf4d6b917fd89005c01fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_09e8e77f793741c446ab18256e67ef4d93c07472ce1603a7184e619a9c88d891->leave($__internal_09e8e77f793741c446ab18256e67ef4d93c07472ce1603a7184e619a9c88d891_prof);

        
        $__internal_b1c165e7f93cac6b647eaf93da1de5beef34ea7db38cf4d6b917fd89005c01fd->leave($__internal_b1c165e7f93cac6b647eaf93da1de5beef34ea7db38cf4d6b917fd89005c01fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}

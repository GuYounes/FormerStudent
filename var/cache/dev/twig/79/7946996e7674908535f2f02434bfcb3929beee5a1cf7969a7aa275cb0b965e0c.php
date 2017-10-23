<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_dfbc94633b728a4dd29776c48c83445f9d6dc2a85d4f8a75bd96329c08c75e07 extends Twig_Template
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
        $__internal_344cef849679bfb1e014a2fb64ed0ae220ea56373aa9884a329454de7a5d53d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_344cef849679bfb1e014a2fb64ed0ae220ea56373aa9884a329454de7a5d53d2->enter($__internal_344cef849679bfb1e014a2fb64ed0ae220ea56373aa9884a329454de7a5d53d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_b1a5ef28fa0923d18d927d477fcc19f3c5bd6d0c9daccb0deea4911cf3689dc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1a5ef28fa0923d18d927d477fcc19f3c5bd6d0c9daccb0deea4911cf3689dc5->enter($__internal_b1a5ef28fa0923d18d927d477fcc19f3c5bd6d0c9daccb0deea4911cf3689dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_344cef849679bfb1e014a2fb64ed0ae220ea56373aa9884a329454de7a5d53d2->leave($__internal_344cef849679bfb1e014a2fb64ed0ae220ea56373aa9884a329454de7a5d53d2_prof);

        
        $__internal_b1a5ef28fa0923d18d927d477fcc19f3c5bd6d0c9daccb0deea4911cf3689dc5->leave($__internal_b1a5ef28fa0923d18d927d477fcc19f3c5bd6d0c9daccb0deea4911cf3689dc5_prof);

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

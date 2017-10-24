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
        $__internal_b5fce9faf36d0a3a4aa2385b34c48ac4223fa384221099103837577d68eaa698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5fce9faf36d0a3a4aa2385b34c48ac4223fa384221099103837577d68eaa698->enter($__internal_b5fce9faf36d0a3a4aa2385b34c48ac4223fa384221099103837577d68eaa698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_98ef41cf3f732676620abfbf3804ca831af5139c8f3e96aa4e0a4e8d30755215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ef41cf3f732676620abfbf3804ca831af5139c8f3e96aa4e0a4e8d30755215->enter($__internal_98ef41cf3f732676620abfbf3804ca831af5139c8f3e96aa4e0a4e8d30755215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b5fce9faf36d0a3a4aa2385b34c48ac4223fa384221099103837577d68eaa698->leave($__internal_b5fce9faf36d0a3a4aa2385b34c48ac4223fa384221099103837577d68eaa698_prof);

        
        $__internal_98ef41cf3f732676620abfbf3804ca831af5139c8f3e96aa4e0a4e8d30755215->leave($__internal_98ef41cf3f732676620abfbf3804ca831af5139c8f3e96aa4e0a4e8d30755215_prof);

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

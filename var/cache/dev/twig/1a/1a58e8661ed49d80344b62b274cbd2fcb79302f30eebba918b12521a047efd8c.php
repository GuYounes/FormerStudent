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
        $__internal_0b182f15aa1989a85bd888a926a701057ed8147c54a3027c08fc40bed127d8ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b182f15aa1989a85bd888a926a701057ed8147c54a3027c08fc40bed127d8ae->enter($__internal_0b182f15aa1989a85bd888a926a701057ed8147c54a3027c08fc40bed127d8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_6efdd296585a6086997e78e4ab7973834d8f40a99060926fb125421f51a51067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6efdd296585a6086997e78e4ab7973834d8f40a99060926fb125421f51a51067->enter($__internal_6efdd296585a6086997e78e4ab7973834d8f40a99060926fb125421f51a51067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_0b182f15aa1989a85bd888a926a701057ed8147c54a3027c08fc40bed127d8ae->leave($__internal_0b182f15aa1989a85bd888a926a701057ed8147c54a3027c08fc40bed127d8ae_prof);

        
        $__internal_6efdd296585a6086997e78e4ab7973834d8f40a99060926fb125421f51a51067->leave($__internal_6efdd296585a6086997e78e4ab7973834d8f40a99060926fb125421f51a51067_prof);

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

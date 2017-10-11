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
        $__internal_325384a50e41ea54ac4938c78650e56279f8e9f04a4312ed20f1b29459a5efc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_325384a50e41ea54ac4938c78650e56279f8e9f04a4312ed20f1b29459a5efc8->enter($__internal_325384a50e41ea54ac4938c78650e56279f8e9f04a4312ed20f1b29459a5efc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_61f01db52f8db21255a592a0b4d504b27c72c4fef7b80a23b81de69fa05a0ed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f01db52f8db21255a592a0b4d504b27c72c4fef7b80a23b81de69fa05a0ed1->enter($__internal_61f01db52f8db21255a592a0b4d504b27c72c4fef7b80a23b81de69fa05a0ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_325384a50e41ea54ac4938c78650e56279f8e9f04a4312ed20f1b29459a5efc8->leave($__internal_325384a50e41ea54ac4938c78650e56279f8e9f04a4312ed20f1b29459a5efc8_prof);

        
        $__internal_61f01db52f8db21255a592a0b4d504b27c72c4fef7b80a23b81de69fa05a0ed1->leave($__internal_61f01db52f8db21255a592a0b4d504b27c72c4fef7b80a23b81de69fa05a0ed1_prof);

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
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}

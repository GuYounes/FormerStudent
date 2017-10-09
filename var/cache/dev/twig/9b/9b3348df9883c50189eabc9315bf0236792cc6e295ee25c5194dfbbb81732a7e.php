<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_08b4110577e1a3ccdc0304d269ee16f75f4329a9e3ab8ae0936a262adb80b0e4 extends Twig_Template
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
        $__internal_2a708f1378efbecbb4bacf99d252e27c77bbb4a48de15b173fcd2edc045d7957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a708f1378efbecbb4bacf99d252e27c77bbb4a48de15b173fcd2edc045d7957->enter($__internal_2a708f1378efbecbb4bacf99d252e27c77bbb4a48de15b173fcd2edc045d7957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_91d28d36e993dbd849f1f7d041a7ca0d4c3a8facafe367794c3e3e2cd4193e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d28d36e993dbd849f1f7d041a7ca0d4c3a8facafe367794c3e3e2cd4193e1b->enter($__internal_91d28d36e993dbd849f1f7d041a7ca0d4c3a8facafe367794c3e3e2cd4193e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2a708f1378efbecbb4bacf99d252e27c77bbb4a48de15b173fcd2edc045d7957->leave($__internal_2a708f1378efbecbb4bacf99d252e27c77bbb4a48de15b173fcd2edc045d7957_prof);

        
        $__internal_91d28d36e993dbd849f1f7d041a7ca0d4c3a8facafe367794c3e3e2cd4193e1b->leave($__internal_91d28d36e993dbd849f1f7d041a7ca0d4c3a8facafe367794c3e3e2cd4193e1b_prof);

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

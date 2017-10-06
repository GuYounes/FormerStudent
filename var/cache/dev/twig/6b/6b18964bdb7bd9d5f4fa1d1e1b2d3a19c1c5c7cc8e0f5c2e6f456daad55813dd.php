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
        $__internal_ab00685b92bf5f342d6d7370e084bc06e747a5b237cc5905e90c6db601ea4f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab00685b92bf5f342d6d7370e084bc06e747a5b237cc5905e90c6db601ea4f22->enter($__internal_ab00685b92bf5f342d6d7370e084bc06e747a5b237cc5905e90c6db601ea4f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_b752623843332c4031a1f3576179c1158f4b2b5c6112e5081f9bd2dd92e073d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b752623843332c4031a1f3576179c1158f4b2b5c6112e5081f9bd2dd92e073d5->enter($__internal_b752623843332c4031a1f3576179c1158f4b2b5c6112e5081f9bd2dd92e073d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ab00685b92bf5f342d6d7370e084bc06e747a5b237cc5905e90c6db601ea4f22->leave($__internal_ab00685b92bf5f342d6d7370e084bc06e747a5b237cc5905e90c6db601ea4f22_prof);

        
        $__internal_b752623843332c4031a1f3576179c1158f4b2b5c6112e5081f9bd2dd92e073d5->leave($__internal_b752623843332c4031a1f3576179c1158f4b2b5c6112e5081f9bd2dd92e073d5_prof);

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

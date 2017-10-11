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
        $__internal_60f21144790d5f386ab581387f17c2cccfe2d51886d6b5f08c5fc9ac98eb240d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60f21144790d5f386ab581387f17c2cccfe2d51886d6b5f08c5fc9ac98eb240d->enter($__internal_60f21144790d5f386ab581387f17c2cccfe2d51886d6b5f08c5fc9ac98eb240d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_e0839be0c887684c0bfa8789400663386be44e7166415d87a9cfcfd1bc075d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0839be0c887684c0bfa8789400663386be44e7166415d87a9cfcfd1bc075d87->enter($__internal_e0839be0c887684c0bfa8789400663386be44e7166415d87a9cfcfd1bc075d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_60f21144790d5f386ab581387f17c2cccfe2d51886d6b5f08c5fc9ac98eb240d->leave($__internal_60f21144790d5f386ab581387f17c2cccfe2d51886d6b5f08c5fc9ac98eb240d_prof);

        
        $__internal_e0839be0c887684c0bfa8789400663386be44e7166415d87a9cfcfd1bc075d87->leave($__internal_e0839be0c887684c0bfa8789400663386be44e7166415d87a9cfcfd1bc075d87_prof);

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

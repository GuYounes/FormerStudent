<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e8efa1811b5c8706a3cacead0850b87755acd239ae7be6464a100711ec9a55c9 extends Twig_Template
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
        $__internal_4afe773a7c8331f01742ddcddc670e2ac09754da4a54a285aeeee0f6758048bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4afe773a7c8331f01742ddcddc670e2ac09754da4a54a285aeeee0f6758048bf->enter($__internal_4afe773a7c8331f01742ddcddc670e2ac09754da4a54a285aeeee0f6758048bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_8aca77254e84d2f8ad328b9c8239df84465cbb2a0605ef3f238934382275617d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aca77254e84d2f8ad328b9c8239df84465cbb2a0605ef3f238934382275617d->enter($__internal_8aca77254e84d2f8ad328b9c8239df84465cbb2a0605ef3f238934382275617d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4afe773a7c8331f01742ddcddc670e2ac09754da4a54a285aeeee0f6758048bf->leave($__internal_4afe773a7c8331f01742ddcddc670e2ac09754da4a54a285aeeee0f6758048bf_prof);

        
        $__internal_8aca77254e84d2f8ad328b9c8239df84465cbb2a0605ef3f238934382275617d->leave($__internal_8aca77254e84d2f8ad328b9c8239df84465cbb2a0605ef3f238934382275617d_prof);

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

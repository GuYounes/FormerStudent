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
        $__internal_364143da897d7921c80ff2be86cdee180d2be79380d26efd7401e5e0a25dba7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_364143da897d7921c80ff2be86cdee180d2be79380d26efd7401e5e0a25dba7e->enter($__internal_364143da897d7921c80ff2be86cdee180d2be79380d26efd7401e5e0a25dba7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_30b06a0553ef87e270be3540be08d35d9b9cb208579a706df039f918ead6ccc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b06a0553ef87e270be3540be08d35d9b9cb208579a706df039f918ead6ccc2->enter($__internal_30b06a0553ef87e270be3540be08d35d9b9cb208579a706df039f918ead6ccc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_364143da897d7921c80ff2be86cdee180d2be79380d26efd7401e5e0a25dba7e->leave($__internal_364143da897d7921c80ff2be86cdee180d2be79380d26efd7401e5e0a25dba7e_prof);

        
        $__internal_30b06a0553ef87e270be3540be08d35d9b9cb208579a706df039f918ead6ccc2->leave($__internal_30b06a0553ef87e270be3540be08d35d9b9cb208579a706df039f918ead6ccc2_prof);

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

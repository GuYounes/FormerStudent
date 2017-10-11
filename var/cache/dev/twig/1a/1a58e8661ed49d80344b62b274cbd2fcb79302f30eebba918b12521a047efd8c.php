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
        $__internal_aad87deca87c7c522bbda1acba4eb1fd31416f7f9d58fc40f75c63f39d57e5e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aad87deca87c7c522bbda1acba4eb1fd31416f7f9d58fc40f75c63f39d57e5e1->enter($__internal_aad87deca87c7c522bbda1acba4eb1fd31416f7f9d58fc40f75c63f39d57e5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_ef14fb1ee4496a405fd2a389d53b11c571a64d6811906216ff3aac34489f6ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef14fb1ee4496a405fd2a389d53b11c571a64d6811906216ff3aac34489f6ed2->enter($__internal_ef14fb1ee4496a405fd2a389d53b11c571a64d6811906216ff3aac34489f6ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_aad87deca87c7c522bbda1acba4eb1fd31416f7f9d58fc40f75c63f39d57e5e1->leave($__internal_aad87deca87c7c522bbda1acba4eb1fd31416f7f9d58fc40f75c63f39d57e5e1_prof);

        
        $__internal_ef14fb1ee4496a405fd2a389d53b11c571a64d6811906216ff3aac34489f6ed2->leave($__internal_ef14fb1ee4496a405fd2a389d53b11c571a64d6811906216ff3aac34489f6ed2_prof);

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

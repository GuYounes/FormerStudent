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
        $__internal_31a47a90fb41a1ce3632ec84ff366164a7889eb56fbe75259977fc19b71b31f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31a47a90fb41a1ce3632ec84ff366164a7889eb56fbe75259977fc19b71b31f5->enter($__internal_31a47a90fb41a1ce3632ec84ff366164a7889eb56fbe75259977fc19b71b31f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_9d4ee287a1b57b4e613ce9fa358a5d0254fb49c9d73c1af6ff881c0b1c2419af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4ee287a1b57b4e613ce9fa358a5d0254fb49c9d73c1af6ff881c0b1c2419af->enter($__internal_9d4ee287a1b57b4e613ce9fa358a5d0254fb49c9d73c1af6ff881c0b1c2419af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_31a47a90fb41a1ce3632ec84ff366164a7889eb56fbe75259977fc19b71b31f5->leave($__internal_31a47a90fb41a1ce3632ec84ff366164a7889eb56fbe75259977fc19b71b31f5_prof);

        
        $__internal_9d4ee287a1b57b4e613ce9fa358a5d0254fb49c9d73c1af6ff881c0b1c2419af->leave($__internal_9d4ee287a1b57b4e613ce9fa358a5d0254fb49c9d73c1af6ff881c0b1c2419af_prof);

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

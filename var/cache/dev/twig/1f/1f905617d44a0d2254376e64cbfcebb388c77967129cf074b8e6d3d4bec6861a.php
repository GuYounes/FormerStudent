<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_a386b551e864242522815e531d03a5a2a29ae0a6135118647efeba606ec51b4e extends Twig_Template
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
        $__internal_9abbe681bf0b5b00977eee84a196443d44143d5bcecdd3f6549997f01e573555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9abbe681bf0b5b00977eee84a196443d44143d5bcecdd3f6549997f01e573555->enter($__internal_9abbe681bf0b5b00977eee84a196443d44143d5bcecdd3f6549997f01e573555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_c99fdcaa0aba503d57ff5ab99fa5e97a22587a39b35c7b1cfad29d2c79bf4c31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c99fdcaa0aba503d57ff5ab99fa5e97a22587a39b35c7b1cfad29d2c79bf4c31->enter($__internal_c99fdcaa0aba503d57ff5ab99fa5e97a22587a39b35c7b1cfad29d2c79bf4c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9abbe681bf0b5b00977eee84a196443d44143d5bcecdd3f6549997f01e573555->leave($__internal_9abbe681bf0b5b00977eee84a196443d44143d5bcecdd3f6549997f01e573555_prof);

        
        $__internal_c99fdcaa0aba503d57ff5ab99fa5e97a22587a39b35c7b1cfad29d2c79bf4c31->leave($__internal_c99fdcaa0aba503d57ff5ab99fa5e97a22587a39b35c7b1cfad29d2c79bf4c31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}

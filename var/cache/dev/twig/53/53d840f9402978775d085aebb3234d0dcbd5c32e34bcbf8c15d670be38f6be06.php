<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_53147ab19d6b17487840439dbefe0f05810de2cd68faab6e7ab50952815ad311 extends Twig_Template
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
        $__internal_574bf97b32ce4b7bceb574515a7b861958dd3b181526d1d4f8ee90f4e7d94d29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_574bf97b32ce4b7bceb574515a7b861958dd3b181526d1d4f8ee90f4e7d94d29->enter($__internal_574bf97b32ce4b7bceb574515a7b861958dd3b181526d1d4f8ee90f4e7d94d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_a9bf12fd8ee3f2e5fb3faba42d160fc09e293ee24f6c20122d79bb4f40ce1325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9bf12fd8ee3f2e5fb3faba42d160fc09e293ee24f6c20122d79bb4f40ce1325->enter($__internal_a9bf12fd8ee3f2e5fb3faba42d160fc09e293ee24f6c20122d79bb4f40ce1325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_574bf97b32ce4b7bceb574515a7b861958dd3b181526d1d4f8ee90f4e7d94d29->leave($__internal_574bf97b32ce4b7bceb574515a7b861958dd3b181526d1d4f8ee90f4e7d94d29_prof);

        
        $__internal_a9bf12fd8ee3f2e5fb3faba42d160fc09e293ee24f6c20122d79bb4f40ce1325->leave($__internal_a9bf12fd8ee3f2e5fb3faba42d160fc09e293ee24f6c20122d79bb4f40ce1325_prof);

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

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
        $__internal_068936d2c5286f3e1f35c1e16122a0f66a11f5264b85a7e871fcf5b7e8335953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_068936d2c5286f3e1f35c1e16122a0f66a11f5264b85a7e871fcf5b7e8335953->enter($__internal_068936d2c5286f3e1f35c1e16122a0f66a11f5264b85a7e871fcf5b7e8335953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_1088df7e9edd6cfb06778a87f17111356b76dd59ed2e9c94b68cfbbce70556f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1088df7e9edd6cfb06778a87f17111356b76dd59ed2e9c94b68cfbbce70556f5->enter($__internal_1088df7e9edd6cfb06778a87f17111356b76dd59ed2e9c94b68cfbbce70556f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_068936d2c5286f3e1f35c1e16122a0f66a11f5264b85a7e871fcf5b7e8335953->leave($__internal_068936d2c5286f3e1f35c1e16122a0f66a11f5264b85a7e871fcf5b7e8335953_prof);

        
        $__internal_1088df7e9edd6cfb06778a87f17111356b76dd59ed2e9c94b68cfbbce70556f5->leave($__internal_1088df7e9edd6cfb06778a87f17111356b76dd59ed2e9c94b68cfbbce70556f5_prof);

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

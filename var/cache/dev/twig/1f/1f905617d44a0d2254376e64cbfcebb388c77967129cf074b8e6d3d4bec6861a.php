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
        $__internal_da35caf6c51ce02b5e24687541d16e98774799973a7abd061af95e7c7360df74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da35caf6c51ce02b5e24687541d16e98774799973a7abd061af95e7c7360df74->enter($__internal_da35caf6c51ce02b5e24687541d16e98774799973a7abd061af95e7c7360df74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_ab94cd584d62cd68dc82687a5e58f957d9779d04a2717a1253300bdd14c9bc89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab94cd584d62cd68dc82687a5e58f957d9779d04a2717a1253300bdd14c9bc89->enter($__internal_ab94cd584d62cd68dc82687a5e58f957d9779d04a2717a1253300bdd14c9bc89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_da35caf6c51ce02b5e24687541d16e98774799973a7abd061af95e7c7360df74->leave($__internal_da35caf6c51ce02b5e24687541d16e98774799973a7abd061af95e7c7360df74_prof);

        
        $__internal_ab94cd584d62cd68dc82687a5e58f957d9779d04a2717a1253300bdd14c9bc89->leave($__internal_ab94cd584d62cd68dc82687a5e58f957d9779d04a2717a1253300bdd14c9bc89_prof);

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
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}

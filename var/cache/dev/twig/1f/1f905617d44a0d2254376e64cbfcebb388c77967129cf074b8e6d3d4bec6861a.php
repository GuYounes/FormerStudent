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
        $__internal_5a2a416ce5a164617f2d258e7f538888f52632b2e52465d3ebe2500704faee29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a2a416ce5a164617f2d258e7f538888f52632b2e52465d3ebe2500704faee29->enter($__internal_5a2a416ce5a164617f2d258e7f538888f52632b2e52465d3ebe2500704faee29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_0aa85a58b1cb4361eb17556324d351b449bf0b3315ae73d3578f4fc606eb0029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aa85a58b1cb4361eb17556324d351b449bf0b3315ae73d3578f4fc606eb0029->enter($__internal_0aa85a58b1cb4361eb17556324d351b449bf0b3315ae73d3578f4fc606eb0029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_5a2a416ce5a164617f2d258e7f538888f52632b2e52465d3ebe2500704faee29->leave($__internal_5a2a416ce5a164617f2d258e7f538888f52632b2e52465d3ebe2500704faee29_prof);

        
        $__internal_0aa85a58b1cb4361eb17556324d351b449bf0b3315ae73d3578f4fc606eb0029->leave($__internal_0aa85a58b1cb4361eb17556324d351b449bf0b3315ae73d3578f4fc606eb0029_prof);

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

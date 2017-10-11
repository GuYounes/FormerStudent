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
        $__internal_44f0be5f9751250bdab65ae90cd39f9023708176e9dbeac4fc55b742df4833b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44f0be5f9751250bdab65ae90cd39f9023708176e9dbeac4fc55b742df4833b2->enter($__internal_44f0be5f9751250bdab65ae90cd39f9023708176e9dbeac4fc55b742df4833b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_23fae6ce90ddbc3fddce6a4d2b182e1fdecb13ca8b145524870de7577cbe9931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23fae6ce90ddbc3fddce6a4d2b182e1fdecb13ca8b145524870de7577cbe9931->enter($__internal_23fae6ce90ddbc3fddce6a4d2b182e1fdecb13ca8b145524870de7577cbe9931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_44f0be5f9751250bdab65ae90cd39f9023708176e9dbeac4fc55b742df4833b2->leave($__internal_44f0be5f9751250bdab65ae90cd39f9023708176e9dbeac4fc55b742df4833b2_prof);

        
        $__internal_23fae6ce90ddbc3fddce6a4d2b182e1fdecb13ca8b145524870de7577cbe9931->leave($__internal_23fae6ce90ddbc3fddce6a4d2b182e1fdecb13ca8b145524870de7577cbe9931_prof);

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

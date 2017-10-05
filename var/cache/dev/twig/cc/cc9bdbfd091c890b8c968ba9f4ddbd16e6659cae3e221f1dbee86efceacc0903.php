<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_5543a68232411567850f47b37500dea4ee3cdba041a27e9df973efe12a5c0098 extends Twig_Template
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
        $__internal_cd92781fcefd07a737a901c624252a003429ccae6416d388a311cf6225ded57e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd92781fcefd07a737a901c624252a003429ccae6416d388a311cf6225ded57e->enter($__internal_cd92781fcefd07a737a901c624252a003429ccae6416d388a311cf6225ded57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_b3b846c987cfbe3ec33246e1e84bdf3943f152be131a679952e7c6164f162fb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3b846c987cfbe3ec33246e1e84bdf3943f152be131a679952e7c6164f162fb2->enter($__internal_b3b846c987cfbe3ec33246e1e84bdf3943f152be131a679952e7c6164f162fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_cd92781fcefd07a737a901c624252a003429ccae6416d388a311cf6225ded57e->leave($__internal_cd92781fcefd07a737a901c624252a003429ccae6416d388a311cf6225ded57e_prof);

        
        $__internal_b3b846c987cfbe3ec33246e1e84bdf3943f152be131a679952e7c6164f162fb2->leave($__internal_b3b846c987cfbe3ec33246e1e84bdf3943f152be131a679952e7c6164f162fb2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}

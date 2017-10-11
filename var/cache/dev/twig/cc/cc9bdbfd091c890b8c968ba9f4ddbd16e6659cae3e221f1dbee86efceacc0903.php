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
        $__internal_73e7e9a498ff1321d83b7b0ad730b20799c1aec6e475fb1e0aa621f517cf849b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73e7e9a498ff1321d83b7b0ad730b20799c1aec6e475fb1e0aa621f517cf849b->enter($__internal_73e7e9a498ff1321d83b7b0ad730b20799c1aec6e475fb1e0aa621f517cf849b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_16c9755b68c66b97af6fc0bf39736d8e3ca5e23d4fdd7aad25b85c1c8faae930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16c9755b68c66b97af6fc0bf39736d8e3ca5e23d4fdd7aad25b85c1c8faae930->enter($__internal_16c9755b68c66b97af6fc0bf39736d8e3ca5e23d4fdd7aad25b85c1c8faae930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_73e7e9a498ff1321d83b7b0ad730b20799c1aec6e475fb1e0aa621f517cf849b->leave($__internal_73e7e9a498ff1321d83b7b0ad730b20799c1aec6e475fb1e0aa621f517cf849b_prof);

        
        $__internal_16c9755b68c66b97af6fc0bf39736d8e3ca5e23d4fdd7aad25b85c1c8faae930->leave($__internal_16c9755b68c66b97af6fc0bf39736d8e3ca5e23d4fdd7aad25b85c1c8faae930_prof);

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
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}

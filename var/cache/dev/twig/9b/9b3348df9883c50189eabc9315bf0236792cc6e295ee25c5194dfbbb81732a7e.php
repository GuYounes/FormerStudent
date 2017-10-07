<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_08b4110577e1a3ccdc0304d269ee16f75f4329a9e3ab8ae0936a262adb80b0e4 extends Twig_Template
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
        $__internal_d88a6eed93ff7c343996867887748d7cf9eeb77a16fbef0674c9e7f886264879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d88a6eed93ff7c343996867887748d7cf9eeb77a16fbef0674c9e7f886264879->enter($__internal_d88a6eed93ff7c343996867887748d7cf9eeb77a16fbef0674c9e7f886264879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_ae388f0afebcf0a3b81396077735ab0ecd5ae0ff5ea60501dc227d6c517048eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae388f0afebcf0a3b81396077735ab0ecd5ae0ff5ea60501dc227d6c517048eb->enter($__internal_ae388f0afebcf0a3b81396077735ab0ecd5ae0ff5ea60501dc227d6c517048eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d88a6eed93ff7c343996867887748d7cf9eeb77a16fbef0674c9e7f886264879->leave($__internal_d88a6eed93ff7c343996867887748d7cf9eeb77a16fbef0674c9e7f886264879_prof);

        
        $__internal_ae388f0afebcf0a3b81396077735ab0ecd5ae0ff5ea60501dc227d6c517048eb->leave($__internal_ae388f0afebcf0a3b81396077735ab0ecd5ae0ff5ea60501dc227d6c517048eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}

<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_cd29c3589ce0f30baa322cd4dee3aff86177694cf4d9fad6ad3959069cc8e97d extends Twig_Template
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
        $__internal_aa5a1d6cbe62cff8ee3f554429a9d2fd976ec948a3278b2e03dd5c551841b2d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa5a1d6cbe62cff8ee3f554429a9d2fd976ec948a3278b2e03dd5c551841b2d1->enter($__internal_aa5a1d6cbe62cff8ee3f554429a9d2fd976ec948a3278b2e03dd5c551841b2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_d768efe403f1fa495708395a03ca79e85dca6664412d75561f8a47e9de70eded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d768efe403f1fa495708395a03ca79e85dca6664412d75561f8a47e9de70eded->enter($__internal_d768efe403f1fa495708395a03ca79e85dca6664412d75561f8a47e9de70eded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_aa5a1d6cbe62cff8ee3f554429a9d2fd976ec948a3278b2e03dd5c551841b2d1->leave($__internal_aa5a1d6cbe62cff8ee3f554429a9d2fd976ec948a3278b2e03dd5c551841b2d1_prof);

        
        $__internal_d768efe403f1fa495708395a03ca79e85dca6664412d75561f8a47e9de70eded->leave($__internal_d768efe403f1fa495708395a03ca79e85dca6664412d75561f8a47e9de70eded_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}

<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_3829bd54afd1b1490a636cfece7b04381e9d37e40876f38e9bf0456c5231e6f7 extends Twig_Template
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
        $__internal_cc3ad17664c5c63ae5eb2932a6e2e666035aaaf15f596961628170e904b9fa88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc3ad17664c5c63ae5eb2932a6e2e666035aaaf15f596961628170e904b9fa88->enter($__internal_cc3ad17664c5c63ae5eb2932a6e2e666035aaaf15f596961628170e904b9fa88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_c1fff158f67ba51e4d61e26a7f10f6c6fd8524c21f47084fe5d3aedd2dca8519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1fff158f67ba51e4d61e26a7f10f6c6fd8524c21f47084fe5d3aedd2dca8519->enter($__internal_c1fff158f67ba51e4d61e26a7f10f6c6fd8524c21f47084fe5d3aedd2dca8519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_cc3ad17664c5c63ae5eb2932a6e2e666035aaaf15f596961628170e904b9fa88->leave($__internal_cc3ad17664c5c63ae5eb2932a6e2e666035aaaf15f596961628170e904b9fa88_prof);

        
        $__internal_c1fff158f67ba51e4d61e26a7f10f6c6fd8524c21f47084fe5d3aedd2dca8519->leave($__internal_c1fff158f67ba51e4d61e26a7f10f6c6fd8524c21f47084fe5d3aedd2dca8519_prof);

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
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}

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
        $__internal_e2c02cf82611e8b7cc2491bd00340cd02aab20980438737b59803cda22abf122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2c02cf82611e8b7cc2491bd00340cd02aab20980438737b59803cda22abf122->enter($__internal_e2c02cf82611e8b7cc2491bd00340cd02aab20980438737b59803cda22abf122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_b4ed6d85455222f6c5eec06f751df45a52a7fa0e552eb33476b2d1f37ded2c3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ed6d85455222f6c5eec06f751df45a52a7fa0e552eb33476b2d1f37ded2c3b->enter($__internal_b4ed6d85455222f6c5eec06f751df45a52a7fa0e552eb33476b2d1f37ded2c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e2c02cf82611e8b7cc2491bd00340cd02aab20980438737b59803cda22abf122->leave($__internal_e2c02cf82611e8b7cc2491bd00340cd02aab20980438737b59803cda22abf122_prof);

        
        $__internal_b4ed6d85455222f6c5eec06f751df45a52a7fa0e552eb33476b2d1f37ded2c3b->leave($__internal_b4ed6d85455222f6c5eec06f751df45a52a7fa0e552eb33476b2d1f37ded2c3b_prof);

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

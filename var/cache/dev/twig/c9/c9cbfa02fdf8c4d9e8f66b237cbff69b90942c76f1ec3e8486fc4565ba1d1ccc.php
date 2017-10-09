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
        $__internal_bb4d1d01ba887d1b13a851aa3e782ccf015c8ae3fae46967e90d8de1075af18c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb4d1d01ba887d1b13a851aa3e782ccf015c8ae3fae46967e90d8de1075af18c->enter($__internal_bb4d1d01ba887d1b13a851aa3e782ccf015c8ae3fae46967e90d8de1075af18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_5cdc318c4264552948e623705c568f9253452ba2ba3e4f059c34ee00e198e7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cdc318c4264552948e623705c568f9253452ba2ba3e4f059c34ee00e198e7eb->enter($__internal_5cdc318c4264552948e623705c568f9253452ba2ba3e4f059c34ee00e198e7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_bb4d1d01ba887d1b13a851aa3e782ccf015c8ae3fae46967e90d8de1075af18c->leave($__internal_bb4d1d01ba887d1b13a851aa3e782ccf015c8ae3fae46967e90d8de1075af18c_prof);

        
        $__internal_5cdc318c4264552948e623705c568f9253452ba2ba3e4f059c34ee00e198e7eb->leave($__internal_5cdc318c4264552948e623705c568f9253452ba2ba3e4f059c34ee00e198e7eb_prof);

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

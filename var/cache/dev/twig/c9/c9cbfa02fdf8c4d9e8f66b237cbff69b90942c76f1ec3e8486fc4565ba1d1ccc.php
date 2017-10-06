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
        $__internal_069bafdf254cb576c20552d79d22e26ec2e54364ec7e05585c5f19e092cbf4d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_069bafdf254cb576c20552d79d22e26ec2e54364ec7e05585c5f19e092cbf4d0->enter($__internal_069bafdf254cb576c20552d79d22e26ec2e54364ec7e05585c5f19e092cbf4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_1f5c26a3ed948a6ba8a886fe4c4e6084b1e38ace27e5b4c1eba2dfcadb52f08f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f5c26a3ed948a6ba8a886fe4c4e6084b1e38ace27e5b4c1eba2dfcadb52f08f->enter($__internal_1f5c26a3ed948a6ba8a886fe4c4e6084b1e38ace27e5b4c1eba2dfcadb52f08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_069bafdf254cb576c20552d79d22e26ec2e54364ec7e05585c5f19e092cbf4d0->leave($__internal_069bafdf254cb576c20552d79d22e26ec2e54364ec7e05585c5f19e092cbf4d0_prof);

        
        $__internal_1f5c26a3ed948a6ba8a886fe4c4e6084b1e38ace27e5b4c1eba2dfcadb52f08f->leave($__internal_1f5c26a3ed948a6ba8a886fe4c4e6084b1e38ace27e5b4c1eba2dfcadb52f08f_prof);

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

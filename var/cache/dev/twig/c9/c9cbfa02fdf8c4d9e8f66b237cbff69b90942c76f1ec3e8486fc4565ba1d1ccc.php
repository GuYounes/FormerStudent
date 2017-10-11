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
        $__internal_646f0939701009aebd94a1cb8f57fa052d9f02dc6099cd863a470fa6118b5957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_646f0939701009aebd94a1cb8f57fa052d9f02dc6099cd863a470fa6118b5957->enter($__internal_646f0939701009aebd94a1cb8f57fa052d9f02dc6099cd863a470fa6118b5957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_c853bfed10975d929ca97ad599ca803ffc0a351e03f08063667be8e6900b76f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c853bfed10975d929ca97ad599ca803ffc0a351e03f08063667be8e6900b76f1->enter($__internal_c853bfed10975d929ca97ad599ca803ffc0a351e03f08063667be8e6900b76f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_646f0939701009aebd94a1cb8f57fa052d9f02dc6099cd863a470fa6118b5957->leave($__internal_646f0939701009aebd94a1cb8f57fa052d9f02dc6099cd863a470fa6118b5957_prof);

        
        $__internal_c853bfed10975d929ca97ad599ca803ffc0a351e03f08063667be8e6900b76f1->leave($__internal_c853bfed10975d929ca97ad599ca803ffc0a351e03f08063667be8e6900b76f1_prof);

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

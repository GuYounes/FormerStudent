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
        $__internal_82060145fbe4e56dc530eef92dce0c4c31211ea2f4514bfdf8a8e1568b7b3b92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82060145fbe4e56dc530eef92dce0c4c31211ea2f4514bfdf8a8e1568b7b3b92->enter($__internal_82060145fbe4e56dc530eef92dce0c4c31211ea2f4514bfdf8a8e1568b7b3b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_c8a789cb361d491ae07d422ec03975726784a9383adbb639a2bf2875ecf4ac1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a789cb361d491ae07d422ec03975726784a9383adbb639a2bf2875ecf4ac1f->enter($__internal_c8a789cb361d491ae07d422ec03975726784a9383adbb639a2bf2875ecf4ac1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_82060145fbe4e56dc530eef92dce0c4c31211ea2f4514bfdf8a8e1568b7b3b92->leave($__internal_82060145fbe4e56dc530eef92dce0c4c31211ea2f4514bfdf8a8e1568b7b3b92_prof);

        
        $__internal_c8a789cb361d491ae07d422ec03975726784a9383adbb639a2bf2875ecf4ac1f->leave($__internal_c8a789cb361d491ae07d422ec03975726784a9383adbb639a2bf2875ecf4ac1f_prof);

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

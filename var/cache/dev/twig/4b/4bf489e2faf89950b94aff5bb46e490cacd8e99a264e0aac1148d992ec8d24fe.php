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
        $__internal_861543bea14cbdf65b6bf6b1992387f6fa72f56c63a182b2830ec57b371e9133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_861543bea14cbdf65b6bf6b1992387f6fa72f56c63a182b2830ec57b371e9133->enter($__internal_861543bea14cbdf65b6bf6b1992387f6fa72f56c63a182b2830ec57b371e9133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_37065745896dcf582058abb60985f4b5941d078a875f2d489d671699941e7232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37065745896dcf582058abb60985f4b5941d078a875f2d489d671699941e7232->enter($__internal_37065745896dcf582058abb60985f4b5941d078a875f2d489d671699941e7232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_861543bea14cbdf65b6bf6b1992387f6fa72f56c63a182b2830ec57b371e9133->leave($__internal_861543bea14cbdf65b6bf6b1992387f6fa72f56c63a182b2830ec57b371e9133_prof);

        
        $__internal_37065745896dcf582058abb60985f4b5941d078a875f2d489d671699941e7232->leave($__internal_37065745896dcf582058abb60985f4b5941d078a875f2d489d671699941e7232_prof);

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

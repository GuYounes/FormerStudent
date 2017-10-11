<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_f96ec3b282c28522fc691c5435ca7700f41bb1de3dc3287e22ecbac36b5ebca2 extends Twig_Template
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
        $__internal_ef45be6a0c50d2b0ef83f701d6f3aefc8f557811a43ad59c042d629533af9603 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef45be6a0c50d2b0ef83f701d6f3aefc8f557811a43ad59c042d629533af9603->enter($__internal_ef45be6a0c50d2b0ef83f701d6f3aefc8f557811a43ad59c042d629533af9603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_319e6b2204997b7a31a011d4f4cf633154726c9f4e8f015a09100edd90499e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319e6b2204997b7a31a011d4f4cf633154726c9f4e8f015a09100edd90499e7c->enter($__internal_319e6b2204997b7a31a011d4f4cf633154726c9f4e8f015a09100edd90499e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ef45be6a0c50d2b0ef83f701d6f3aefc8f557811a43ad59c042d629533af9603->leave($__internal_ef45be6a0c50d2b0ef83f701d6f3aefc8f557811a43ad59c042d629533af9603_prof);

        
        $__internal_319e6b2204997b7a31a011d4f4cf633154726c9f4e8f015a09100edd90499e7c->leave($__internal_319e6b2204997b7a31a011d4f4cf633154726c9f4e8f015a09100edd90499e7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}

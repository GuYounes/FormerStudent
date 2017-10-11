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
        $__internal_53762e16b7a3dd8b2ffb9f97bbccb50c19f327bf8894bf5c7f907e7e9b67a7f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53762e16b7a3dd8b2ffb9f97bbccb50c19f327bf8894bf5c7f907e7e9b67a7f9->enter($__internal_53762e16b7a3dd8b2ffb9f97bbccb50c19f327bf8894bf5c7f907e7e9b67a7f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_ee42047d6ed0944545872a2f2917eb1ee3caad0dd3a9d96c25bf063b026007b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee42047d6ed0944545872a2f2917eb1ee3caad0dd3a9d96c25bf063b026007b6->enter($__internal_ee42047d6ed0944545872a2f2917eb1ee3caad0dd3a9d96c25bf063b026007b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_53762e16b7a3dd8b2ffb9f97bbccb50c19f327bf8894bf5c7f907e7e9b67a7f9->leave($__internal_53762e16b7a3dd8b2ffb9f97bbccb50c19f327bf8894bf5c7f907e7e9b67a7f9_prof);

        
        $__internal_ee42047d6ed0944545872a2f2917eb1ee3caad0dd3a9d96c25bf063b026007b6->leave($__internal_ee42047d6ed0944545872a2f2917eb1ee3caad0dd3a9d96c25bf063b026007b6_prof);

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

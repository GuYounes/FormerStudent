<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_5b8c162cfe817985e1610394988f11629dd60a9f0f6068d85a025a6aa0d6ed8c extends Twig_Template
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
        $__internal_340c2dea8387f2148f6d9372365cf2c9f25d934d4e9f13aab6c78cdc73e1b34c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_340c2dea8387f2148f6d9372365cf2c9f25d934d4e9f13aab6c78cdc73e1b34c->enter($__internal_340c2dea8387f2148f6d9372365cf2c9f25d934d4e9f13aab6c78cdc73e1b34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_5602c194c2ef7ea1574dde27d0556ff422d87c70ba1dcbbd35777bb37e710f41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5602c194c2ef7ea1574dde27d0556ff422d87c70ba1dcbbd35777bb37e710f41->enter($__internal_5602c194c2ef7ea1574dde27d0556ff422d87c70ba1dcbbd35777bb37e710f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_340c2dea8387f2148f6d9372365cf2c9f25d934d4e9f13aab6c78cdc73e1b34c->leave($__internal_340c2dea8387f2148f6d9372365cf2c9f25d934d4e9f13aab6c78cdc73e1b34c_prof);

        
        $__internal_5602c194c2ef7ea1574dde27d0556ff422d87c70ba1dcbbd35777bb37e710f41->leave($__internal_5602c194c2ef7ea1574dde27d0556ff422d87c70ba1dcbbd35777bb37e710f41_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}

<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_04450ec79a85f2fdd9f1b8c74b400cc245c62dd9d737164e6ed0580e036865d3 extends Twig_Template
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
        $__internal_0fe990e3ab2122c9c34a34681c9ae57fc8f74d83e151825f24c6b52ebd959c3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fe990e3ab2122c9c34a34681c9ae57fc8f74d83e151825f24c6b52ebd959c3a->enter($__internal_0fe990e3ab2122c9c34a34681c9ae57fc8f74d83e151825f24c6b52ebd959c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_02bbad41a0b1f2d48fa8c71eb533fd47e6c30c5e608514b7db9027b9063f2371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02bbad41a0b1f2d48fa8c71eb533fd47e6c30c5e608514b7db9027b9063f2371->enter($__internal_02bbad41a0b1f2d48fa8c71eb533fd47e6c30c5e608514b7db9027b9063f2371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_0fe990e3ab2122c9c34a34681c9ae57fc8f74d83e151825f24c6b52ebd959c3a->leave($__internal_0fe990e3ab2122c9c34a34681c9ae57fc8f74d83e151825f24c6b52ebd959c3a_prof);

        
        $__internal_02bbad41a0b1f2d48fa8c71eb533fd47e6c30c5e608514b7db9027b9063f2371->leave($__internal_02bbad41a0b1f2d48fa8c71eb533fd47e6c30c5e608514b7db9027b9063f2371_prof);

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

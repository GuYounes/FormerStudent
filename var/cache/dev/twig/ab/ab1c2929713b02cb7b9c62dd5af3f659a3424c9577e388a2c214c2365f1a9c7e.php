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
        $__internal_976f602699075894f4e85e59395da0954da653cc021ff34f59cc8d8c56953d6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_976f602699075894f4e85e59395da0954da653cc021ff34f59cc8d8c56953d6d->enter($__internal_976f602699075894f4e85e59395da0954da653cc021ff34f59cc8d8c56953d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_d63357e30c543493f69f3451af22bfed20f210ae6e6d23c012730beaf8cb41bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d63357e30c543493f69f3451af22bfed20f210ae6e6d23c012730beaf8cb41bb->enter($__internal_d63357e30c543493f69f3451af22bfed20f210ae6e6d23c012730beaf8cb41bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_976f602699075894f4e85e59395da0954da653cc021ff34f59cc8d8c56953d6d->leave($__internal_976f602699075894f4e85e59395da0954da653cc021ff34f59cc8d8c56953d6d_prof);

        
        $__internal_d63357e30c543493f69f3451af22bfed20f210ae6e6d23c012730beaf8cb41bb->leave($__internal_d63357e30c543493f69f3451af22bfed20f210ae6e6d23c012730beaf8cb41bb_prof);

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
", "@Framework/Form/button_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}

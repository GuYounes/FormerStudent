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
        $__internal_091ad06bf6f0432888c1e73d0db407779b2cde2745e463bc586a31447d46bdae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_091ad06bf6f0432888c1e73d0db407779b2cde2745e463bc586a31447d46bdae->enter($__internal_091ad06bf6f0432888c1e73d0db407779b2cde2745e463bc586a31447d46bdae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_f43ad5adfed916bc9352a0c7f810d8bb5bc58665237fc625f84dff0eb8385e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f43ad5adfed916bc9352a0c7f810d8bb5bc58665237fc625f84dff0eb8385e71->enter($__internal_f43ad5adfed916bc9352a0c7f810d8bb5bc58665237fc625f84dff0eb8385e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_091ad06bf6f0432888c1e73d0db407779b2cde2745e463bc586a31447d46bdae->leave($__internal_091ad06bf6f0432888c1e73d0db407779b2cde2745e463bc586a31447d46bdae_prof);

        
        $__internal_f43ad5adfed916bc9352a0c7f810d8bb5bc58665237fc625f84dff0eb8385e71->leave($__internal_f43ad5adfed916bc9352a0c7f810d8bb5bc58665237fc625f84dff0eb8385e71_prof);

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

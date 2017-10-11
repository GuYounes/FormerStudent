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
        $__internal_d829cdbfb4f25407b0b99b87c4d04fe5a51a2b2fad667a461de2d1defcca36e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d829cdbfb4f25407b0b99b87c4d04fe5a51a2b2fad667a461de2d1defcca36e2->enter($__internal_d829cdbfb4f25407b0b99b87c4d04fe5a51a2b2fad667a461de2d1defcca36e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_9d09bfb955b98748135d65bd51ef266304a5d849f78ee5e741e6ce90ce394e93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d09bfb955b98748135d65bd51ef266304a5d849f78ee5e741e6ce90ce394e93->enter($__internal_9d09bfb955b98748135d65bd51ef266304a5d849f78ee5e741e6ce90ce394e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_d829cdbfb4f25407b0b99b87c4d04fe5a51a2b2fad667a461de2d1defcca36e2->leave($__internal_d829cdbfb4f25407b0b99b87c4d04fe5a51a2b2fad667a461de2d1defcca36e2_prof);

        
        $__internal_9d09bfb955b98748135d65bd51ef266304a5d849f78ee5e741e6ce90ce394e93->leave($__internal_9d09bfb955b98748135d65bd51ef266304a5d849f78ee5e741e6ce90ce394e93_prof);

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

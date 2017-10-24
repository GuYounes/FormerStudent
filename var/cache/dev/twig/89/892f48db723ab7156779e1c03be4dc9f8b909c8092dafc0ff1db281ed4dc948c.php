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
        $__internal_236df8c910f399784565b61ecf83f99900ea8eeab2768e6ca9c203f2ba791a0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_236df8c910f399784565b61ecf83f99900ea8eeab2768e6ca9c203f2ba791a0a->enter($__internal_236df8c910f399784565b61ecf83f99900ea8eeab2768e6ca9c203f2ba791a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_275b221ce2362e6282cb5dece67808ea60395736ab4b8e9d0b3e57a2097ecbea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_275b221ce2362e6282cb5dece67808ea60395736ab4b8e9d0b3e57a2097ecbea->enter($__internal_275b221ce2362e6282cb5dece67808ea60395736ab4b8e9d0b3e57a2097ecbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_236df8c910f399784565b61ecf83f99900ea8eeab2768e6ca9c203f2ba791a0a->leave($__internal_236df8c910f399784565b61ecf83f99900ea8eeab2768e6ca9c203f2ba791a0a_prof);

        
        $__internal_275b221ce2362e6282cb5dece67808ea60395736ab4b8e9d0b3e57a2097ecbea->leave($__internal_275b221ce2362e6282cb5dece67808ea60395736ab4b8e9d0b3e57a2097ecbea_prof);

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

<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_8dd07cc0e6fd47d9dc06566859b4b76e744c2bac9ff8db1417b6ede4e66f0cf2 extends Twig_Template
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
        $__internal_aeeef6c68f345765f3ada40cdd54bbfb566bbc0703897dea36697f31bc6b2276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeeef6c68f345765f3ada40cdd54bbfb566bbc0703897dea36697f31bc6b2276->enter($__internal_aeeef6c68f345765f3ada40cdd54bbfb566bbc0703897dea36697f31bc6b2276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_cf4f8f1715e7eaa7f08e30ab839382706381fc837744a3d37164427f20f1bdc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4f8f1715e7eaa7f08e30ab839382706381fc837744a3d37164427f20f1bdc3->enter($__internal_cf4f8f1715e7eaa7f08e30ab839382706381fc837744a3d37164427f20f1bdc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_aeeef6c68f345765f3ada40cdd54bbfb566bbc0703897dea36697f31bc6b2276->leave($__internal_aeeef6c68f345765f3ada40cdd54bbfb566bbc0703897dea36697f31bc6b2276_prof);

        
        $__internal_cf4f8f1715e7eaa7f08e30ab839382706381fc837744a3d37164427f20f1bdc3->leave($__internal_cf4f8f1715e7eaa7f08e30ab839382706381fc837744a3d37164427f20f1bdc3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_label.html.php");
    }
}

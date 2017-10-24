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
        $__internal_47636b426bcb116f36e31efcba68a6bd9203f1dfd376d1f9899f65ff05eefe80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47636b426bcb116f36e31efcba68a6bd9203f1dfd376d1f9899f65ff05eefe80->enter($__internal_47636b426bcb116f36e31efcba68a6bd9203f1dfd376d1f9899f65ff05eefe80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_debd8030aebe3776ee4718b16d6efcd498257cabbc51c8978ef725050c6078c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_debd8030aebe3776ee4718b16d6efcd498257cabbc51c8978ef725050c6078c1->enter($__internal_debd8030aebe3776ee4718b16d6efcd498257cabbc51c8978ef725050c6078c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

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
        
        $__internal_47636b426bcb116f36e31efcba68a6bd9203f1dfd376d1f9899f65ff05eefe80->leave($__internal_47636b426bcb116f36e31efcba68a6bd9203f1dfd376d1f9899f65ff05eefe80_prof);

        
        $__internal_debd8030aebe3776ee4718b16d6efcd498257cabbc51c8978ef725050c6078c1->leave($__internal_debd8030aebe3776ee4718b16d6efcd498257cabbc51c8978ef725050c6078c1_prof);

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

<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_f4c2170eee432c363868d1c9ce4e893e68508f84e5fe076c70e72ebf366df7ce extends Twig_Template
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
        $__internal_fcdae10e2c429c75c590ed4111c1cbc1a196b909f2088b06bb8e63ae9955dc63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcdae10e2c429c75c590ed4111c1cbc1a196b909f2088b06bb8e63ae9955dc63->enter($__internal_fcdae10e2c429c75c590ed4111c1cbc1a196b909f2088b06bb8e63ae9955dc63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_1dd3f3ce895eedea45dae0c1f11b8e9d7a7aedafb425b180149f9266c1044063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd3f3ce895eedea45dae0c1f11b8e9d7a7aedafb425b180149f9266c1044063->enter($__internal_1dd3f3ce895eedea45dae0c1f11b8e9d7a7aedafb425b180149f9266c1044063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

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
        
        $__internal_fcdae10e2c429c75c590ed4111c1cbc1a196b909f2088b06bb8e63ae9955dc63->leave($__internal_fcdae10e2c429c75c590ed4111c1cbc1a196b909f2088b06bb8e63ae9955dc63_prof);

        
        $__internal_1dd3f3ce895eedea45dae0c1f11b8e9d7a7aedafb425b180149f9266c1044063->leave($__internal_1dd3f3ce895eedea45dae0c1f11b8e9d7a7aedafb425b180149f9266c1044063_prof);

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

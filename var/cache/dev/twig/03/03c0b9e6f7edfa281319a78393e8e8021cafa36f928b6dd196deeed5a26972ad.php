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
        $__internal_748f839d119fc79d6e1b2a699e67c2442a2a0cb43a545e8d8b77c1d2f5ac24b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_748f839d119fc79d6e1b2a699e67c2442a2a0cb43a545e8d8b77c1d2f5ac24b7->enter($__internal_748f839d119fc79d6e1b2a699e67c2442a2a0cb43a545e8d8b77c1d2f5ac24b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_8bdc32482927de3efeff6e93ffc44abeb09f8f0f23eb760388c632e50a46f01e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bdc32482927de3efeff6e93ffc44abeb09f8f0f23eb760388c632e50a46f01e->enter($__internal_8bdc32482927de3efeff6e93ffc44abeb09f8f0f23eb760388c632e50a46f01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

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
        
        $__internal_748f839d119fc79d6e1b2a699e67c2442a2a0cb43a545e8d8b77c1d2f5ac24b7->leave($__internal_748f839d119fc79d6e1b2a699e67c2442a2a0cb43a545e8d8b77c1d2f5ac24b7_prof);

        
        $__internal_8bdc32482927de3efeff6e93ffc44abeb09f8f0f23eb760388c632e50a46f01e->leave($__internal_8bdc32482927de3efeff6e93ffc44abeb09f8f0f23eb760388c632e50a46f01e_prof);

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

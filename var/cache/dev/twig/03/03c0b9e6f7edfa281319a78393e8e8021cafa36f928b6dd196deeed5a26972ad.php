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
        $__internal_41811e8b4d6abeb038378b4b836b6491d8c2f613ef52925b13fd0840f637b34c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41811e8b4d6abeb038378b4b836b6491d8c2f613ef52925b13fd0840f637b34c->enter($__internal_41811e8b4d6abeb038378b4b836b6491d8c2f613ef52925b13fd0840f637b34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_f1eaa88cf47876ef7bd1b7f0e1e04ab0e715a12a5466d6352d6a7d6ac89aacab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1eaa88cf47876ef7bd1b7f0e1e04ab0e715a12a5466d6352d6a7d6ac89aacab->enter($__internal_f1eaa88cf47876ef7bd1b7f0e1e04ab0e715a12a5466d6352d6a7d6ac89aacab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

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
        
        $__internal_41811e8b4d6abeb038378b4b836b6491d8c2f613ef52925b13fd0840f637b34c->leave($__internal_41811e8b4d6abeb038378b4b836b6491d8c2f613ef52925b13fd0840f637b34c_prof);

        
        $__internal_f1eaa88cf47876ef7bd1b7f0e1e04ab0e715a12a5466d6352d6a7d6ac89aacab->leave($__internal_f1eaa88cf47876ef7bd1b7f0e1e04ab0e715a12a5466d6352d6a7d6ac89aacab_prof);

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

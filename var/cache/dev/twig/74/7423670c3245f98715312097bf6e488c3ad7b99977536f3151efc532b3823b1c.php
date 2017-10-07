<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_0f9975d1249f5bce826af558fdb7672a284934333db3f6f51597ab3b3a360b4c extends Twig_Template
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
        $__internal_d5025f79893d362fc31dfd2a535fa8f48ee438d488b63318cdb36fa1033e2367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5025f79893d362fc31dfd2a535fa8f48ee438d488b63318cdb36fa1033e2367->enter($__internal_d5025f79893d362fc31dfd2a535fa8f48ee438d488b63318cdb36fa1033e2367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_f91d0a5e9055cb6b4cb59aaadf161baf5415e10a95dfe6c2e62047e7eaf62063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f91d0a5e9055cb6b4cb59aaadf161baf5415e10a95dfe6c2e62047e7eaf62063->enter($__internal_f91d0a5e9055cb6b4cb59aaadf161baf5415e10a95dfe6c2e62047e7eaf62063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_d5025f79893d362fc31dfd2a535fa8f48ee438d488b63318cdb36fa1033e2367->leave($__internal_d5025f79893d362fc31dfd2a535fa8f48ee438d488b63318cdb36fa1033e2367_prof);

        
        $__internal_f91d0a5e9055cb6b4cb59aaadf161baf5415e10a95dfe6c2e62047e7eaf62063->leave($__internal_f91d0a5e9055cb6b4cb59aaadf161baf5415e10a95dfe6c2e62047e7eaf62063_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}

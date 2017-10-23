<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_b39b1e860d827532f6f44b421b8271d6071e6cc22760ea6016e747faede2fe76 extends Twig_Template
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
        $__internal_d60a8a93c3edc4db33bc3e3e5ee0b8b453a2cefdf2dc295121f88d048f6db22c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d60a8a93c3edc4db33bc3e3e5ee0b8b453a2cefdf2dc295121f88d048f6db22c->enter($__internal_d60a8a93c3edc4db33bc3e3e5ee0b8b453a2cefdf2dc295121f88d048f6db22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_574928b821b54f52fcd55b445f4b9c062209b020b8713d95935a3405a2676523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_574928b821b54f52fcd55b445f4b9c062209b020b8713d95935a3405a2676523->enter($__internal_574928b821b54f52fcd55b445f4b9c062209b020b8713d95935a3405a2676523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_d60a8a93c3edc4db33bc3e3e5ee0b8b453a2cefdf2dc295121f88d048f6db22c->leave($__internal_d60a8a93c3edc4db33bc3e3e5ee0b8b453a2cefdf2dc295121f88d048f6db22c_prof);

        
        $__internal_574928b821b54f52fcd55b445f4b9c062209b020b8713d95935a3405a2676523->leave($__internal_574928b821b54f52fcd55b445f4b9c062209b020b8713d95935a3405a2676523_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}

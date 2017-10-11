<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_42e54534424052713454088ed54e827d554f85d076766ad3e7a67ae762ce4db2 extends Twig_Template
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
        $__internal_4a4b0b86530083c30bee39a695b8e7cfd3f4c847884eab3c282f67ac196b2d73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a4b0b86530083c30bee39a695b8e7cfd3f4c847884eab3c282f67ac196b2d73->enter($__internal_4a4b0b86530083c30bee39a695b8e7cfd3f4c847884eab3c282f67ac196b2d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_c96c5e18ef6a404b670aef16c13b1b3ec20efc48445cf02b36d66ef0acbd6cdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96c5e18ef6a404b670aef16c13b1b3ec20efc48445cf02b36d66ef0acbd6cdd->enter($__internal_c96c5e18ef6a404b670aef16c13b1b3ec20efc48445cf02b36d66ef0acbd6cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_4a4b0b86530083c30bee39a695b8e7cfd3f4c847884eab3c282f67ac196b2d73->leave($__internal_4a4b0b86530083c30bee39a695b8e7cfd3f4c847884eab3c282f67ac196b2d73_prof);

        
        $__internal_c96c5e18ef6a404b670aef16c13b1b3ec20efc48445cf02b36d66ef0acbd6cdd->leave($__internal_c96c5e18ef6a404b670aef16c13b1b3ec20efc48445cf02b36d66ef0acbd6cdd_prof);

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

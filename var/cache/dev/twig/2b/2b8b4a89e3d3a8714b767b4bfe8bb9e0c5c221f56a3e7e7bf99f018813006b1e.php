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
        $__internal_ee54dcba5fe10fa85d1d523f883aedf2a4fc1724f01d775f47df8c5ff3181f79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee54dcba5fe10fa85d1d523f883aedf2a4fc1724f01d775f47df8c5ff3181f79->enter($__internal_ee54dcba5fe10fa85d1d523f883aedf2a4fc1724f01d775f47df8c5ff3181f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_bacf25ee0a8135f711ea067b3b7d2493d4bdd01470c7d5e0a9dc0d361dffd23a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bacf25ee0a8135f711ea067b3b7d2493d4bdd01470c7d5e0a9dc0d361dffd23a->enter($__internal_bacf25ee0a8135f711ea067b3b7d2493d4bdd01470c7d5e0a9dc0d361dffd23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_ee54dcba5fe10fa85d1d523f883aedf2a4fc1724f01d775f47df8c5ff3181f79->leave($__internal_ee54dcba5fe10fa85d1d523f883aedf2a4fc1724f01d775f47df8c5ff3181f79_prof);

        
        $__internal_bacf25ee0a8135f711ea067b3b7d2493d4bdd01470c7d5e0a9dc0d361dffd23a->leave($__internal_bacf25ee0a8135f711ea067b3b7d2493d4bdd01470c7d5e0a9dc0d361dffd23a_prof);

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

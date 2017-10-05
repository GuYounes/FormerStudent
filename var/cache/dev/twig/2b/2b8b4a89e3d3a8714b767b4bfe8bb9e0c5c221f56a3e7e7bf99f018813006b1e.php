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
        $__internal_c7b5e35fc180e713ae9a9f0fec75bd2aa9f5f8e22dd62d7465344c46ca992ea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7b5e35fc180e713ae9a9f0fec75bd2aa9f5f8e22dd62d7465344c46ca992ea7->enter($__internal_c7b5e35fc180e713ae9a9f0fec75bd2aa9f5f8e22dd62d7465344c46ca992ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_17d5e292e7de8baf8485e6668933408a469525524d8105cb8e9fe56c4872e3a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d5e292e7de8baf8485e6668933408a469525524d8105cb8e9fe56c4872e3a4->enter($__internal_17d5e292e7de8baf8485e6668933408a469525524d8105cb8e9fe56c4872e3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_c7b5e35fc180e713ae9a9f0fec75bd2aa9f5f8e22dd62d7465344c46ca992ea7->leave($__internal_c7b5e35fc180e713ae9a9f0fec75bd2aa9f5f8e22dd62d7465344c46ca992ea7_prof);

        
        $__internal_17d5e292e7de8baf8485e6668933408a469525524d8105cb8e9fe56c4872e3a4->leave($__internal_17d5e292e7de8baf8485e6668933408a469525524d8105cb8e9fe56c4872e3a4_prof);

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
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}

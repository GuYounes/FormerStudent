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
        $__internal_8e64f23b1e3a939e72ee7666a6f43d44e56883e9a9621fd671ab979eb96f8d45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e64f23b1e3a939e72ee7666a6f43d44e56883e9a9621fd671ab979eb96f8d45->enter($__internal_8e64f23b1e3a939e72ee7666a6f43d44e56883e9a9621fd671ab979eb96f8d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_d1a9861c3100fa9cdb0b3dfd00d6dc1d322a0ada01fae2c0574e50c8ed104321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a9861c3100fa9cdb0b3dfd00d6dc1d322a0ada01fae2c0574e50c8ed104321->enter($__internal_d1a9861c3100fa9cdb0b3dfd00d6dc1d322a0ada01fae2c0574e50c8ed104321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_8e64f23b1e3a939e72ee7666a6f43d44e56883e9a9621fd671ab979eb96f8d45->leave($__internal_8e64f23b1e3a939e72ee7666a6f43d44e56883e9a9621fd671ab979eb96f8d45_prof);

        
        $__internal_d1a9861c3100fa9cdb0b3dfd00d6dc1d322a0ada01fae2c0574e50c8ed104321->leave($__internal_d1a9861c3100fa9cdb0b3dfd00d6dc1d322a0ada01fae2c0574e50c8ed104321_prof);

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

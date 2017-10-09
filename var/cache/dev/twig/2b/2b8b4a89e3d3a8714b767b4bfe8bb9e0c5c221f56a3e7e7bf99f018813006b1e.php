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
        $__internal_52b11986c98aaae0ae2dcfb46f5c5ab6e74c632e4c0b0fa378360ac80140c4a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52b11986c98aaae0ae2dcfb46f5c5ab6e74c632e4c0b0fa378360ac80140c4a4->enter($__internal_52b11986c98aaae0ae2dcfb46f5c5ab6e74c632e4c0b0fa378360ac80140c4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_530f277cabdbe539a630c4334decf939219017957ed50c5b5d2adc6541856a61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_530f277cabdbe539a630c4334decf939219017957ed50c5b5d2adc6541856a61->enter($__internal_530f277cabdbe539a630c4334decf939219017957ed50c5b5d2adc6541856a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_52b11986c98aaae0ae2dcfb46f5c5ab6e74c632e4c0b0fa378360ac80140c4a4->leave($__internal_52b11986c98aaae0ae2dcfb46f5c5ab6e74c632e4c0b0fa378360ac80140c4a4_prof);

        
        $__internal_530f277cabdbe539a630c4334decf939219017957ed50c5b5d2adc6541856a61->leave($__internal_530f277cabdbe539a630c4334decf939219017957ed50c5b5d2adc6541856a61_prof);

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

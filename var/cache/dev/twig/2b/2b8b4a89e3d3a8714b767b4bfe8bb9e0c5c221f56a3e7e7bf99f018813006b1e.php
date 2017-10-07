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
        $__internal_5237e5418d49d5ea87afb6876497d0a14dfbfdc0fdf734309f2b8c8c5461518a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5237e5418d49d5ea87afb6876497d0a14dfbfdc0fdf734309f2b8c8c5461518a->enter($__internal_5237e5418d49d5ea87afb6876497d0a14dfbfdc0fdf734309f2b8c8c5461518a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_c8975a1d294ac56e2676b1e365c8e98fc27cee4bf83fe2729c08f4c8a87e0334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8975a1d294ac56e2676b1e365c8e98fc27cee4bf83fe2729c08f4c8a87e0334->enter($__internal_c8975a1d294ac56e2676b1e365c8e98fc27cee4bf83fe2729c08f4c8a87e0334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_5237e5418d49d5ea87afb6876497d0a14dfbfdc0fdf734309f2b8c8c5461518a->leave($__internal_5237e5418d49d5ea87afb6876497d0a14dfbfdc0fdf734309f2b8c8c5461518a_prof);

        
        $__internal_c8975a1d294ac56e2676b1e365c8e98fc27cee4bf83fe2729c08f4c8a87e0334->leave($__internal_c8975a1d294ac56e2676b1e365c8e98fc27cee4bf83fe2729c08f4c8a87e0334_prof);

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

<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_97bf44d0e0f494077f53ed4cc461449c59c0fa198502e78f6e3bd832335c9f8c extends Twig_Template
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
        $__internal_8e5688f7cc1a9b4a6c9ffff0077f7b2ab605124e61ba3f634ed96b6137493cf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e5688f7cc1a9b4a6c9ffff0077f7b2ab605124e61ba3f634ed96b6137493cf8->enter($__internal_8e5688f7cc1a9b4a6c9ffff0077f7b2ab605124e61ba3f634ed96b6137493cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_96a2d1b568f87a4b248f9eba96ba8424d18d172540bad3f1559118ae6636899d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a2d1b568f87a4b248f9eba96ba8424d18d172540bad3f1559118ae6636899d->enter($__internal_96a2d1b568f87a4b248f9eba96ba8424d18d172540bad3f1559118ae6636899d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8e5688f7cc1a9b4a6c9ffff0077f7b2ab605124e61ba3f634ed96b6137493cf8->leave($__internal_8e5688f7cc1a9b4a6c9ffff0077f7b2ab605124e61ba3f634ed96b6137493cf8_prof);

        
        $__internal_96a2d1b568f87a4b248f9eba96ba8424d18d172540bad3f1559118ae6636899d->leave($__internal_96a2d1b568f87a4b248f9eba96ba8424d18d172540bad3f1559118ae6636899d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}

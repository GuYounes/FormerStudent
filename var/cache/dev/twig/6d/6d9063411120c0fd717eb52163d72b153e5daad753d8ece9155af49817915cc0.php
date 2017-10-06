<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_b8a702eabfa300676327f6581df93bbcd9b15774257e9632430d237a7905eab1 extends Twig_Template
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
        $__internal_93f8e533b175a3a8ae5e15f2e7c9cfc86c622d37d5b5a5364f2c944b843c7d94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93f8e533b175a3a8ae5e15f2e7c9cfc86c622d37d5b5a5364f2c944b843c7d94->enter($__internal_93f8e533b175a3a8ae5e15f2e7c9cfc86c622d37d5b5a5364f2c944b843c7d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_0cfd11784f95f95dd98a333a12927126784804158a5088f32c357e16688535c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cfd11784f95f95dd98a333a12927126784804158a5088f32c357e16688535c8->enter($__internal_0cfd11784f95f95dd98a333a12927126784804158a5088f32c357e16688535c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_93f8e533b175a3a8ae5e15f2e7c9cfc86c622d37d5b5a5364f2c944b843c7d94->leave($__internal_93f8e533b175a3a8ae5e15f2e7c9cfc86c622d37d5b5a5364f2c944b843c7d94_prof);

        
        $__internal_0cfd11784f95f95dd98a333a12927126784804158a5088f32c357e16688535c8->leave($__internal_0cfd11784f95f95dd98a333a12927126784804158a5088f32c357e16688535c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}

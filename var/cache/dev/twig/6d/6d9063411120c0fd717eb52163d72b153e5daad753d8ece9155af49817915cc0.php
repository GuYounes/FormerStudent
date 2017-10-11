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
        $__internal_ed81ad84326edddf80b5a65b27ddc54b9a0143cd3a6ec75e5bfa8152965dbfd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed81ad84326edddf80b5a65b27ddc54b9a0143cd3a6ec75e5bfa8152965dbfd3->enter($__internal_ed81ad84326edddf80b5a65b27ddc54b9a0143cd3a6ec75e5bfa8152965dbfd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_5e0b6e95d1c9341a65502eddecbbb44351bc3f658207563cc9e05d98edaaeb93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e0b6e95d1c9341a65502eddecbbb44351bc3f658207563cc9e05d98edaaeb93->enter($__internal_5e0b6e95d1c9341a65502eddecbbb44351bc3f658207563cc9e05d98edaaeb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ed81ad84326edddf80b5a65b27ddc54b9a0143cd3a6ec75e5bfa8152965dbfd3->leave($__internal_ed81ad84326edddf80b5a65b27ddc54b9a0143cd3a6ec75e5bfa8152965dbfd3_prof);

        
        $__internal_5e0b6e95d1c9341a65502eddecbbb44351bc3f658207563cc9e05d98edaaeb93->leave($__internal_5e0b6e95d1c9341a65502eddecbbb44351bc3f658207563cc9e05d98edaaeb93_prof);

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

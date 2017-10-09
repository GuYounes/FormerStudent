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
        $__internal_d9f0bb11c8cc0b82dd84fcb9df3a43d7481e59fcb33af7d3cc79f82da57f40ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9f0bb11c8cc0b82dd84fcb9df3a43d7481e59fcb33af7d3cc79f82da57f40ad->enter($__internal_d9f0bb11c8cc0b82dd84fcb9df3a43d7481e59fcb33af7d3cc79f82da57f40ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_a2143384ac5103ef31fe102507c7b6701d771c0b58b5a5464f1b55fdee06cfe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2143384ac5103ef31fe102507c7b6701d771c0b58b5a5464f1b55fdee06cfe6->enter($__internal_a2143384ac5103ef31fe102507c7b6701d771c0b58b5a5464f1b55fdee06cfe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d9f0bb11c8cc0b82dd84fcb9df3a43d7481e59fcb33af7d3cc79f82da57f40ad->leave($__internal_d9f0bb11c8cc0b82dd84fcb9df3a43d7481e59fcb33af7d3cc79f82da57f40ad_prof);

        
        $__internal_a2143384ac5103ef31fe102507c7b6701d771c0b58b5a5464f1b55fdee06cfe6->leave($__internal_a2143384ac5103ef31fe102507c7b6701d771c0b58b5a5464f1b55fdee06cfe6_prof);

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

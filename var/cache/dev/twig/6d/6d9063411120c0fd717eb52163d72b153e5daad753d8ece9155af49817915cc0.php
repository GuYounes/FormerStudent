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
        $__internal_a405c5c58510627a51549a33e4d18b6c93e68da66090a28568848a344730c788 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a405c5c58510627a51549a33e4d18b6c93e68da66090a28568848a344730c788->enter($__internal_a405c5c58510627a51549a33e4d18b6c93e68da66090a28568848a344730c788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_3a37db568e86c4c17bf0d89b9259a65123efc105d5b398db570882c3f14d911c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a37db568e86c4c17bf0d89b9259a65123efc105d5b398db570882c3f14d911c->enter($__internal_3a37db568e86c4c17bf0d89b9259a65123efc105d5b398db570882c3f14d911c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a405c5c58510627a51549a33e4d18b6c93e68da66090a28568848a344730c788->leave($__internal_a405c5c58510627a51549a33e4d18b6c93e68da66090a28568848a344730c788_prof);

        
        $__internal_3a37db568e86c4c17bf0d89b9259a65123efc105d5b398db570882c3f14d911c->leave($__internal_3a37db568e86c4c17bf0d89b9259a65123efc105d5b398db570882c3f14d911c_prof);

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

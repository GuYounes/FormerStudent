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
        $__internal_afd211367fb50b87989d9a9006caf470a5b83e52c30431786f836ca9f8c4a6eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afd211367fb50b87989d9a9006caf470a5b83e52c30431786f836ca9f8c4a6eb->enter($__internal_afd211367fb50b87989d9a9006caf470a5b83e52c30431786f836ca9f8c4a6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_2e5982869f194f6763a5bab1764d369e898d0235d5fc288000d84da976ffa2bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5982869f194f6763a5bab1764d369e898d0235d5fc288000d84da976ffa2bf->enter($__internal_2e5982869f194f6763a5bab1764d369e898d0235d5fc288000d84da976ffa2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_afd211367fb50b87989d9a9006caf470a5b83e52c30431786f836ca9f8c4a6eb->leave($__internal_afd211367fb50b87989d9a9006caf470a5b83e52c30431786f836ca9f8c4a6eb_prof);

        
        $__internal_2e5982869f194f6763a5bab1764d369e898d0235d5fc288000d84da976ffa2bf->leave($__internal_2e5982869f194f6763a5bab1764d369e898d0235d5fc288000d84da976ffa2bf_prof);

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
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}

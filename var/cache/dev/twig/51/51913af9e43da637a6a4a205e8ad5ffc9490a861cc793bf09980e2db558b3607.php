<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_48200086bb9d2dbfeb3992631c31486be2dca7d29df5b5175c58b273acae3f41 extends Twig_Template
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
        $__internal_6f27227805a7110a0c58e22a104b98b3a4381a43a48df3778decb18ea9f97614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f27227805a7110a0c58e22a104b98b3a4381a43a48df3778decb18ea9f97614->enter($__internal_6f27227805a7110a0c58e22a104b98b3a4381a43a48df3778decb18ea9f97614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_8780e56ab1c7a07f295501c890f691b1a8e5fc13afeef0462b3c55e7a9c105d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8780e56ab1c7a07f295501c890f691b1a8e5fc13afeef0462b3c55e7a9c105d0->enter($__internal_8780e56ab1c7a07f295501c890f691b1a8e5fc13afeef0462b3c55e7a9c105d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_6f27227805a7110a0c58e22a104b98b3a4381a43a48df3778decb18ea9f97614->leave($__internal_6f27227805a7110a0c58e22a104b98b3a4381a43a48df3778decb18ea9f97614_prof);

        
        $__internal_8780e56ab1c7a07f295501c890f691b1a8e5fc13afeef0462b3c55e7a9c105d0->leave($__internal_8780e56ab1c7a07f295501c890f691b1a8e5fc13afeef0462b3c55e7a9c105d0_prof);

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

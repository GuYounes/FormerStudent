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
        $__internal_a37bafe138a58031ac8c04d321f675b27cad89779c3ceb70418d8118df97ef96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a37bafe138a58031ac8c04d321f675b27cad89779c3ceb70418d8118df97ef96->enter($__internal_a37bafe138a58031ac8c04d321f675b27cad89779c3ceb70418d8118df97ef96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_53ee28c82eeb1ae2facf84c6eea82be06d0cc888536be6ab4a197fc45a7b69bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ee28c82eeb1ae2facf84c6eea82be06d0cc888536be6ab4a197fc45a7b69bc->enter($__internal_53ee28c82eeb1ae2facf84c6eea82be06d0cc888536be6ab4a197fc45a7b69bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a37bafe138a58031ac8c04d321f675b27cad89779c3ceb70418d8118df97ef96->leave($__internal_a37bafe138a58031ac8c04d321f675b27cad89779c3ceb70418d8118df97ef96_prof);

        
        $__internal_53ee28c82eeb1ae2facf84c6eea82be06d0cc888536be6ab4a197fc45a7b69bc->leave($__internal_53ee28c82eeb1ae2facf84c6eea82be06d0cc888536be6ab4a197fc45a7b69bc_prof);

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

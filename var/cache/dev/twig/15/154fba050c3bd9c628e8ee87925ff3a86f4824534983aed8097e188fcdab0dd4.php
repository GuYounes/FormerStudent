<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_5d8ab000be9e32356bb9ac8a683647637c7898a52f3c69a8db38025ad6ca37f3 extends Twig_Template
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
        $__internal_e3b0c286082b962ff9a6ee68e31f2cf4dac3dd0aa6b647d05d9c3b810ab7ff92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3b0c286082b962ff9a6ee68e31f2cf4dac3dd0aa6b647d05d9c3b810ab7ff92->enter($__internal_e3b0c286082b962ff9a6ee68e31f2cf4dac3dd0aa6b647d05d9c3b810ab7ff92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_97baa5b87941f8f82f24afbf7b97bb2d926b6677609be3d634a60894d6feabaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97baa5b87941f8f82f24afbf7b97bb2d926b6677609be3d634a60894d6feabaf->enter($__internal_97baa5b87941f8f82f24afbf7b97bb2d926b6677609be3d634a60894d6feabaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e3b0c286082b962ff9a6ee68e31f2cf4dac3dd0aa6b647d05d9c3b810ab7ff92->leave($__internal_e3b0c286082b962ff9a6ee68e31f2cf4dac3dd0aa6b647d05d9c3b810ab7ff92_prof);

        
        $__internal_97baa5b87941f8f82f24afbf7b97bb2d926b6677609be3d634a60894d6feabaf->leave($__internal_97baa5b87941f8f82f24afbf7b97bb2d926b6677609be3d634a60894d6feabaf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}

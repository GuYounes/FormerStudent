<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_6dc49a7563e1be1f74e58a884c863cbe3e8c4eb92d0e4ef5e8c8bd6edc40d4b4 extends Twig_Template
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
        $__internal_c6640c3ae3852e7c52393f344e9bc1d9bc91e93b39fd5ad4001ff601d5a4a24f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6640c3ae3852e7c52393f344e9bc1d9bc91e93b39fd5ad4001ff601d5a4a24f->enter($__internal_c6640c3ae3852e7c52393f344e9bc1d9bc91e93b39fd5ad4001ff601d5a4a24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_a8e64ea1428293c46e56a44cc276445f832d060590740f2fd51b08637ad2c692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8e64ea1428293c46e56a44cc276445f832d060590740f2fd51b08637ad2c692->enter($__internal_a8e64ea1428293c46e56a44cc276445f832d060590740f2fd51b08637ad2c692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c6640c3ae3852e7c52393f344e9bc1d9bc91e93b39fd5ad4001ff601d5a4a24f->leave($__internal_c6640c3ae3852e7c52393f344e9bc1d9bc91e93b39fd5ad4001ff601d5a4a24f_prof);

        
        $__internal_a8e64ea1428293c46e56a44cc276445f832d060590740f2fd51b08637ad2c692->leave($__internal_a8e64ea1428293c46e56a44cc276445f832d060590740f2fd51b08637ad2c692_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}

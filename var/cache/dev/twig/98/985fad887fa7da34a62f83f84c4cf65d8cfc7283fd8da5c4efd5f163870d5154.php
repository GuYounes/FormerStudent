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
        $__internal_d0fa6fc1e4def1195a4447794cbf2708673d44ea5fe524e27721a2ca5a3d4280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0fa6fc1e4def1195a4447794cbf2708673d44ea5fe524e27721a2ca5a3d4280->enter($__internal_d0fa6fc1e4def1195a4447794cbf2708673d44ea5fe524e27721a2ca5a3d4280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_158d623525e51273b410cc336b55ded40d64a38f9001fcbf32861eb7f3af8f69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158d623525e51273b410cc336b55ded40d64a38f9001fcbf32861eb7f3af8f69->enter($__internal_158d623525e51273b410cc336b55ded40d64a38f9001fcbf32861eb7f3af8f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_d0fa6fc1e4def1195a4447794cbf2708673d44ea5fe524e27721a2ca5a3d4280->leave($__internal_d0fa6fc1e4def1195a4447794cbf2708673d44ea5fe524e27721a2ca5a3d4280_prof);

        
        $__internal_158d623525e51273b410cc336b55ded40d64a38f9001fcbf32861eb7f3af8f69->leave($__internal_158d623525e51273b410cc336b55ded40d64a38f9001fcbf32861eb7f3af8f69_prof);

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

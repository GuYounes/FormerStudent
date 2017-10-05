<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_a602edcf4772b2d863167b7404ef766984de45237f63a75d6fa7009eec99224a extends Twig_Template
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
        $__internal_c3ee1789b79fdcd935e04b70e2189c585004c7bfcb044cfd9b9050f8bf4c741a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3ee1789b79fdcd935e04b70e2189c585004c7bfcb044cfd9b9050f8bf4c741a->enter($__internal_c3ee1789b79fdcd935e04b70e2189c585004c7bfcb044cfd9b9050f8bf4c741a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_b3607b9087dd18e9c4432c4a0bf8149d9a5d88665b18bc3adc4e19cfcae90f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3607b9087dd18e9c4432c4a0bf8149d9a5d88665b18bc3adc4e19cfcae90f79->enter($__internal_b3607b9087dd18e9c4432c4a0bf8149d9a5d88665b18bc3adc4e19cfcae90f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c3ee1789b79fdcd935e04b70e2189c585004c7bfcb044cfd9b9050f8bf4c741a->leave($__internal_c3ee1789b79fdcd935e04b70e2189c585004c7bfcb044cfd9b9050f8bf4c741a_prof);

        
        $__internal_b3607b9087dd18e9c4432c4a0bf8149d9a5d88665b18bc3adc4e19cfcae90f79->leave($__internal_b3607b9087dd18e9c4432c4a0bf8149d9a5d88665b18bc3adc4e19cfcae90f79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}

<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7f69657e3d276c16edee093717c05dcc3221cb80df4accd26030275aa702df7b extends Twig_Template
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
        $__internal_f7b7f5f80a77a58fd790111a17cb25735323b815444339928fd7e90f3815b3be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7b7f5f80a77a58fd790111a17cb25735323b815444339928fd7e90f3815b3be->enter($__internal_f7b7f5f80a77a58fd790111a17cb25735323b815444339928fd7e90f3815b3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_9bbd8fa20a8f0fc20d41b15a27b9415cb108ed4eecbe3d6b01079899934bbd2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bbd8fa20a8f0fc20d41b15a27b9415cb108ed4eecbe3d6b01079899934bbd2d->enter($__internal_9bbd8fa20a8f0fc20d41b15a27b9415cb108ed4eecbe3d6b01079899934bbd2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_f7b7f5f80a77a58fd790111a17cb25735323b815444339928fd7e90f3815b3be->leave($__internal_f7b7f5f80a77a58fd790111a17cb25735323b815444339928fd7e90f3815b3be_prof);

        
        $__internal_9bbd8fa20a8f0fc20d41b15a27b9415cb108ed4eecbe3d6b01079899934bbd2d->leave($__internal_9bbd8fa20a8f0fc20d41b15a27b9415cb108ed4eecbe3d6b01079899934bbd2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}

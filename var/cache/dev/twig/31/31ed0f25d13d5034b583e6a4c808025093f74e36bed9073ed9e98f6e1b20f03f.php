<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_88a011c7b6bbd0aca1310b09827edc74d3ea96381d7a3999f7908ae6ce4ceb6b extends Twig_Template
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
        $__internal_b300134f59b0700a124a1cd899760c6d77cd6ec3b999927c26cff07e6cb16db9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b300134f59b0700a124a1cd899760c6d77cd6ec3b999927c26cff07e6cb16db9->enter($__internal_b300134f59b0700a124a1cd899760c6d77cd6ec3b999927c26cff07e6cb16db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_c02f1c4c700e823c44b53d803caf0b3b9e480f31278868159b76045397128361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c02f1c4c700e823c44b53d803caf0b3b9e480f31278868159b76045397128361->enter($__internal_c02f1c4c700e823c44b53d803caf0b3b9e480f31278868159b76045397128361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b300134f59b0700a124a1cd899760c6d77cd6ec3b999927c26cff07e6cb16db9->leave($__internal_b300134f59b0700a124a1cd899760c6d77cd6ec3b999927c26cff07e6cb16db9_prof);

        
        $__internal_c02f1c4c700e823c44b53d803caf0b3b9e480f31278868159b76045397128361->leave($__internal_c02f1c4c700e823c44b53d803caf0b3b9e480f31278868159b76045397128361_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}

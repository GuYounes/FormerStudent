<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_ca9bfa35aaf688cdc3aba86ebcf650c45bc93a04db2bb63f4fafe5ebc783bc03 extends Twig_Template
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
        $__internal_0e8e1eb47e8ee26002d682933614794d02b9ff9d0535b4188da42e960aefa493 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e8e1eb47e8ee26002d682933614794d02b9ff9d0535b4188da42e960aefa493->enter($__internal_0e8e1eb47e8ee26002d682933614794d02b9ff9d0535b4188da42e960aefa493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_0d3841ff6c4cc406771559f9cc8d5090a730d870110bfca487781ee60878adab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d3841ff6c4cc406771559f9cc8d5090a730d870110bfca487781ee60878adab->enter($__internal_0d3841ff6c4cc406771559f9cc8d5090a730d870110bfca487781ee60878adab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0e8e1eb47e8ee26002d682933614794d02b9ff9d0535b4188da42e960aefa493->leave($__internal_0e8e1eb47e8ee26002d682933614794d02b9ff9d0535b4188da42e960aefa493_prof);

        
        $__internal_0d3841ff6c4cc406771559f9cc8d5090a730d870110bfca487781ee60878adab->leave($__internal_0d3841ff6c4cc406771559f9cc8d5090a730d870110bfca487781ee60878adab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}

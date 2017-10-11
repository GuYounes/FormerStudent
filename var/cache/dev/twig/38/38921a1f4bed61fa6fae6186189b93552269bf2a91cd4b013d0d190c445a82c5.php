<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_eb6d58285da4d59246f8ebe8dad128525e69ebe03aed0fd86837ae3f6e3d5f8c extends Twig_Template
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
        $__internal_8b5638cc4c13829fd6061d289da30286110a76a2f8aed78be5d4afa31bee3636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b5638cc4c13829fd6061d289da30286110a76a2f8aed78be5d4afa31bee3636->enter($__internal_8b5638cc4c13829fd6061d289da30286110a76a2f8aed78be5d4afa31bee3636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_297708361a5d7e99be2250e0f1947851cbf3f166ec5e90dc49066175d330004e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_297708361a5d7e99be2250e0f1947851cbf3f166ec5e90dc49066175d330004e->enter($__internal_297708361a5d7e99be2250e0f1947851cbf3f166ec5e90dc49066175d330004e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_8b5638cc4c13829fd6061d289da30286110a76a2f8aed78be5d4afa31bee3636->leave($__internal_8b5638cc4c13829fd6061d289da30286110a76a2f8aed78be5d4afa31bee3636_prof);

        
        $__internal_297708361a5d7e99be2250e0f1947851cbf3f166ec5e90dc49066175d330004e->leave($__internal_297708361a5d7e99be2250e0f1947851cbf3f166ec5e90dc49066175d330004e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}

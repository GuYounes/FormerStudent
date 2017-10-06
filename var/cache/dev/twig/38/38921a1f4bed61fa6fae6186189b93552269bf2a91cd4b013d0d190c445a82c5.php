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
        $__internal_431987262bd052ec8d2f7db49b628e85c3bcb33d1059ea762d99fe21fd16d0c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_431987262bd052ec8d2f7db49b628e85c3bcb33d1059ea762d99fe21fd16d0c7->enter($__internal_431987262bd052ec8d2f7db49b628e85c3bcb33d1059ea762d99fe21fd16d0c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_a28dceb78206aa082721a999ca2023bae786247601c04cdf91129bd8a8edcb3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a28dceb78206aa082721a999ca2023bae786247601c04cdf91129bd8a8edcb3c->enter($__internal_a28dceb78206aa082721a999ca2023bae786247601c04cdf91129bd8a8edcb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_431987262bd052ec8d2f7db49b628e85c3bcb33d1059ea762d99fe21fd16d0c7->leave($__internal_431987262bd052ec8d2f7db49b628e85c3bcb33d1059ea762d99fe21fd16d0c7_prof);

        
        $__internal_a28dceb78206aa082721a999ca2023bae786247601c04cdf91129bd8a8edcb3c->leave($__internal_a28dceb78206aa082721a999ca2023bae786247601c04cdf91129bd8a8edcb3c_prof);

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

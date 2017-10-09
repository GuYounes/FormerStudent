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
        $__internal_fd95b47baa7e70489b5f5f8a2218a870822280e9df0d9f0f6df2c5843646b754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd95b47baa7e70489b5f5f8a2218a870822280e9df0d9f0f6df2c5843646b754->enter($__internal_fd95b47baa7e70489b5f5f8a2218a870822280e9df0d9f0f6df2c5843646b754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_ee7c37ff85eeb3953ee3abb21d13b9de2c844d835c4a64e713838538e8aa4ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee7c37ff85eeb3953ee3abb21d13b9de2c844d835c4a64e713838538e8aa4ed2->enter($__internal_ee7c37ff85eeb3953ee3abb21d13b9de2c844d835c4a64e713838538e8aa4ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_fd95b47baa7e70489b5f5f8a2218a870822280e9df0d9f0f6df2c5843646b754->leave($__internal_fd95b47baa7e70489b5f5f8a2218a870822280e9df0d9f0f6df2c5843646b754_prof);

        
        $__internal_ee7c37ff85eeb3953ee3abb21d13b9de2c844d835c4a64e713838538e8aa4ed2->leave($__internal_ee7c37ff85eeb3953ee3abb21d13b9de2c844d835c4a64e713838538e8aa4ed2_prof);

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

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
        $__internal_fe1e7c60f5f8263f8b692c4a500a7df1461eac891872fe8a9956e30e08b9180f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe1e7c60f5f8263f8b692c4a500a7df1461eac891872fe8a9956e30e08b9180f->enter($__internal_fe1e7c60f5f8263f8b692c4a500a7df1461eac891872fe8a9956e30e08b9180f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_52dc2801d6c7cf41f88c7a2646b16a46034456041f28f45c5948a68718ce60be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52dc2801d6c7cf41f88c7a2646b16a46034456041f28f45c5948a68718ce60be->enter($__internal_52dc2801d6c7cf41f88c7a2646b16a46034456041f28f45c5948a68718ce60be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_fe1e7c60f5f8263f8b692c4a500a7df1461eac891872fe8a9956e30e08b9180f->leave($__internal_fe1e7c60f5f8263f8b692c4a500a7df1461eac891872fe8a9956e30e08b9180f_prof);

        
        $__internal_52dc2801d6c7cf41f88c7a2646b16a46034456041f28f45c5948a68718ce60be->leave($__internal_52dc2801d6c7cf41f88c7a2646b16a46034456041f28f45c5948a68718ce60be_prof);

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
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}

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
        $__internal_a6b5c7da55baa0e341090eb2bf53530b33687bf633975c539b9ec5c8a4974819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b5c7da55baa0e341090eb2bf53530b33687bf633975c539b9ec5c8a4974819->enter($__internal_a6b5c7da55baa0e341090eb2bf53530b33687bf633975c539b9ec5c8a4974819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_5e41a990ed243a01525aa0b0de13dedb6a04f4a5d2d3ff8c14a56dc025d00e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e41a990ed243a01525aa0b0de13dedb6a04f4a5d2d3ff8c14a56dc025d00e2a->enter($__internal_5e41a990ed243a01525aa0b0de13dedb6a04f4a5d2d3ff8c14a56dc025d00e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a6b5c7da55baa0e341090eb2bf53530b33687bf633975c539b9ec5c8a4974819->leave($__internal_a6b5c7da55baa0e341090eb2bf53530b33687bf633975c539b9ec5c8a4974819_prof);

        
        $__internal_5e41a990ed243a01525aa0b0de13dedb6a04f4a5d2d3ff8c14a56dc025d00e2a->leave($__internal_5e41a990ed243a01525aa0b0de13dedb6a04f4a5d2d3ff8c14a56dc025d00e2a_prof);

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

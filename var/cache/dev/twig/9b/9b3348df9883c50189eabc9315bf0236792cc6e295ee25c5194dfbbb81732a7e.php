<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_08b4110577e1a3ccdc0304d269ee16f75f4329a9e3ab8ae0936a262adb80b0e4 extends Twig_Template
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
        $__internal_f0294e78ac1c50de6e7a507e694f89ecf407b863548075a52c91ef0b169ca6fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0294e78ac1c50de6e7a507e694f89ecf407b863548075a52c91ef0b169ca6fe->enter($__internal_f0294e78ac1c50de6e7a507e694f89ecf407b863548075a52c91ef0b169ca6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_943ef92e38148813f61fb542dcc3b86bc7aacf05c8cb2caf0d6f9819412afa84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_943ef92e38148813f61fb542dcc3b86bc7aacf05c8cb2caf0d6f9819412afa84->enter($__internal_943ef92e38148813f61fb542dcc3b86bc7aacf05c8cb2caf0d6f9819412afa84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f0294e78ac1c50de6e7a507e694f89ecf407b863548075a52c91ef0b169ca6fe->leave($__internal_f0294e78ac1c50de6e7a507e694f89ecf407b863548075a52c91ef0b169ca6fe_prof);

        
        $__internal_943ef92e38148813f61fb542dcc3b86bc7aacf05c8cb2caf0d6f9819412afa84->leave($__internal_943ef92e38148813f61fb542dcc3b86bc7aacf05c8cb2caf0d6f9819412afa84_prof);

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

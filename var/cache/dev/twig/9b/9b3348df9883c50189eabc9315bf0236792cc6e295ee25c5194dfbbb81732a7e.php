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
        $__internal_96e2fc5e429f2003a8175ad6e641edf520fcb25e785ce9683157c486f64f22a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96e2fc5e429f2003a8175ad6e641edf520fcb25e785ce9683157c486f64f22a7->enter($__internal_96e2fc5e429f2003a8175ad6e641edf520fcb25e785ce9683157c486f64f22a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_b49888855386bc2313461c7637bdd79351d812005230a3ce9b6692ffd14f33b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b49888855386bc2313461c7637bdd79351d812005230a3ce9b6692ffd14f33b9->enter($__internal_b49888855386bc2313461c7637bdd79351d812005230a3ce9b6692ffd14f33b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_96e2fc5e429f2003a8175ad6e641edf520fcb25e785ce9683157c486f64f22a7->leave($__internal_96e2fc5e429f2003a8175ad6e641edf520fcb25e785ce9683157c486f64f22a7_prof);

        
        $__internal_b49888855386bc2313461c7637bdd79351d812005230a3ce9b6692ffd14f33b9->leave($__internal_b49888855386bc2313461c7637bdd79351d812005230a3ce9b6692ffd14f33b9_prof);

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

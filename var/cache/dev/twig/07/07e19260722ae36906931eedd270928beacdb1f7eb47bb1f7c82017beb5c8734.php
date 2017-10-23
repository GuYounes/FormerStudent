<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a1160a1e338c87c4a8682b57e8d5e94825ce64ab881ad8f27e03a6832370eda2 extends Twig_Template
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
        $__internal_5e42436fd565531adf02adb56f7f44df130626984391778a1eef48abf79447a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e42436fd565531adf02adb56f7f44df130626984391778a1eef48abf79447a0->enter($__internal_5e42436fd565531adf02adb56f7f44df130626984391778a1eef48abf79447a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_df471e51c42de561ba308c9d0246b96ea424240496c98bdc1a6fe078597cc948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df471e51c42de561ba308c9d0246b96ea424240496c98bdc1a6fe078597cc948->enter($__internal_df471e51c42de561ba308c9d0246b96ea424240496c98bdc1a6fe078597cc948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5e42436fd565531adf02adb56f7f44df130626984391778a1eef48abf79447a0->leave($__internal_5e42436fd565531adf02adb56f7f44df130626984391778a1eef48abf79447a0_prof);

        
        $__internal_df471e51c42de561ba308c9d0246b96ea424240496c98bdc1a6fe078597cc948->leave($__internal_df471e51c42de561ba308c9d0246b96ea424240496c98bdc1a6fe078597cc948_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}

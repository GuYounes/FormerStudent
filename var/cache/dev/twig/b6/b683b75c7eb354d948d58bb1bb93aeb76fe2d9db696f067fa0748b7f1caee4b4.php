<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_b4016a23054f8433a224754a4a29b439a757ab137c4ec1fb4e908e7bb2a38f8b extends Twig_Template
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
        $__internal_0626fd030e05eceffac2c9893423207a0a949a592b05a2fc7bf377945ac6881e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0626fd030e05eceffac2c9893423207a0a949a592b05a2fc7bf377945ac6881e->enter($__internal_0626fd030e05eceffac2c9893423207a0a949a592b05a2fc7bf377945ac6881e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_bd593418cb036e403fa063545a97c5f529ee88c8a4d34582b5ce6656c653ed97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd593418cb036e403fa063545a97c5f529ee88c8a4d34582b5ce6656c653ed97->enter($__internal_bd593418cb036e403fa063545a97c5f529ee88c8a4d34582b5ce6656c653ed97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0626fd030e05eceffac2c9893423207a0a949a592b05a2fc7bf377945ac6881e->leave($__internal_0626fd030e05eceffac2c9893423207a0a949a592b05a2fc7bf377945ac6881e_prof);

        
        $__internal_bd593418cb036e403fa063545a97c5f529ee88c8a4d34582b5ce6656c653ed97->leave($__internal_bd593418cb036e403fa063545a97c5f529ee88c8a4d34582b5ce6656c653ed97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}

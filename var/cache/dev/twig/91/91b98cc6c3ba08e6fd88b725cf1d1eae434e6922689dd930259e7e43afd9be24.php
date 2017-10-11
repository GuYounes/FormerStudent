<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_b8859827bcea42ddb3b7c6a041082f75d112ee1ae690a512dcfa4d94559e8bfa extends Twig_Template
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
        $__internal_637bca23a92a77163729e0cdf5b0a1bd47bb3f1a35824937a5c69afd629e90f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_637bca23a92a77163729e0cdf5b0a1bd47bb3f1a35824937a5c69afd629e90f3->enter($__internal_637bca23a92a77163729e0cdf5b0a1bd47bb3f1a35824937a5c69afd629e90f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_f0a977fda0fa8747ceb1b73bf38f372259ca1d556fd5f29f23bc613010f64bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a977fda0fa8747ceb1b73bf38f372259ca1d556fd5f29f23bc613010f64bda->enter($__internal_f0a977fda0fa8747ceb1b73bf38f372259ca1d556fd5f29f23bc613010f64bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_637bca23a92a77163729e0cdf5b0a1bd47bb3f1a35824937a5c69afd629e90f3->leave($__internal_637bca23a92a77163729e0cdf5b0a1bd47bb3f1a35824937a5c69afd629e90f3_prof);

        
        $__internal_f0a977fda0fa8747ceb1b73bf38f372259ca1d556fd5f29f23bc613010f64bda->leave($__internal_f0a977fda0fa8747ceb1b73bf38f372259ca1d556fd5f29f23bc613010f64bda_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}

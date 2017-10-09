<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_a602edcf4772b2d863167b7404ef766984de45237f63a75d6fa7009eec99224a extends Twig_Template
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
        $__internal_ad3bd0284e2c230605467c6f5f325c4dbcfd26e8acc01f49e6f803c29c93cbd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad3bd0284e2c230605467c6f5f325c4dbcfd26e8acc01f49e6f803c29c93cbd9->enter($__internal_ad3bd0284e2c230605467c6f5f325c4dbcfd26e8acc01f49e6f803c29c93cbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e1b2847accccd4bf348413e47d58d740bd31ff1befca5b05349b91d6f10f4fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1b2847accccd4bf348413e47d58d740bd31ff1befca5b05349b91d6f10f4fe1->enter($__internal_e1b2847accccd4bf348413e47d58d740bd31ff1befca5b05349b91d6f10f4fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_ad3bd0284e2c230605467c6f5f325c4dbcfd26e8acc01f49e6f803c29c93cbd9->leave($__internal_ad3bd0284e2c230605467c6f5f325c4dbcfd26e8acc01f49e6f803c29c93cbd9_prof);

        
        $__internal_e1b2847accccd4bf348413e47d58d740bd31ff1befca5b05349b91d6f10f4fe1->leave($__internal_e1b2847accccd4bf348413e47d58d740bd31ff1befca5b05349b91d6f10f4fe1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}

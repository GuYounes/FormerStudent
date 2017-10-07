<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_c8c0d9c81834a2dbb243f2f8d86b791c44d720164efc6992a8a750c8425e2233 extends Twig_Template
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
        $__internal_edcb3071302ff4f373575b2d04acc273beec956b24b33d66863efc1b5fa18b03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edcb3071302ff4f373575b2d04acc273beec956b24b33d66863efc1b5fa18b03->enter($__internal_edcb3071302ff4f373575b2d04acc273beec956b24b33d66863efc1b5fa18b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_fb91cfd811d9fb3405eb1e356c132f180dc8c02987b2bc19419d52e95069bf19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb91cfd811d9fb3405eb1e356c132f180dc8c02987b2bc19419d52e95069bf19->enter($__internal_fb91cfd811d9fb3405eb1e356c132f180dc8c02987b2bc19419d52e95069bf19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_edcb3071302ff4f373575b2d04acc273beec956b24b33d66863efc1b5fa18b03->leave($__internal_edcb3071302ff4f373575b2d04acc273beec956b24b33d66863efc1b5fa18b03_prof);

        
        $__internal_fb91cfd811d9fb3405eb1e356c132f180dc8c02987b2bc19419d52e95069bf19->leave($__internal_fb91cfd811d9fb3405eb1e356c132f180dc8c02987b2bc19419d52e95069bf19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}

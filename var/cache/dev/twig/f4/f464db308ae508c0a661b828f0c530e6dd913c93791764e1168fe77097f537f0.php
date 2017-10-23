<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c5f4626b26e8cfbff55299222a4c2cd5573b32eef991a29eebae16b566fc08aa extends Twig_Template
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
        $__internal_3bae4525ec2aa47cfc53a728099ea0943f43104bbdcfe1cfc8973b777ea60daf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bae4525ec2aa47cfc53a728099ea0943f43104bbdcfe1cfc8973b777ea60daf->enter($__internal_3bae4525ec2aa47cfc53a728099ea0943f43104bbdcfe1cfc8973b777ea60daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_9984ce92711a142ecfc02fc0052648b97dca531ffed6e698275fd8008d98e1d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9984ce92711a142ecfc02fc0052648b97dca531ffed6e698275fd8008d98e1d0->enter($__internal_9984ce92711a142ecfc02fc0052648b97dca531ffed6e698275fd8008d98e1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_3bae4525ec2aa47cfc53a728099ea0943f43104bbdcfe1cfc8973b777ea60daf->leave($__internal_3bae4525ec2aa47cfc53a728099ea0943f43104bbdcfe1cfc8973b777ea60daf_prof);

        
        $__internal_9984ce92711a142ecfc02fc0052648b97dca531ffed6e698275fd8008d98e1d0->leave($__internal_9984ce92711a142ecfc02fc0052648b97dca531ffed6e698275fd8008d98e1d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}

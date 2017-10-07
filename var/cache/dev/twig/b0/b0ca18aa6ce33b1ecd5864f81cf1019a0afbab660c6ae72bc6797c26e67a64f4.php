<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7f69657e3d276c16edee093717c05dcc3221cb80df4accd26030275aa702df7b extends Twig_Template
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
        $__internal_c8ac2de1a714e174a32abab3abf45e4c75f71d421ce190b2b2ddbffe3d798d54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8ac2de1a714e174a32abab3abf45e4c75f71d421ce190b2b2ddbffe3d798d54->enter($__internal_c8ac2de1a714e174a32abab3abf45e4c75f71d421ce190b2b2ddbffe3d798d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_212bf7e27af97d0852c965749ca32443de37738b78b432b782ce2e66a1cc2ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_212bf7e27af97d0852c965749ca32443de37738b78b432b782ce2e66a1cc2ed7->enter($__internal_212bf7e27af97d0852c965749ca32443de37738b78b432b782ce2e66a1cc2ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_c8ac2de1a714e174a32abab3abf45e4c75f71d421ce190b2b2ddbffe3d798d54->leave($__internal_c8ac2de1a714e174a32abab3abf45e4c75f71d421ce190b2b2ddbffe3d798d54_prof);

        
        $__internal_212bf7e27af97d0852c965749ca32443de37738b78b432b782ce2e66a1cc2ed7->leave($__internal_212bf7e27af97d0852c965749ca32443de37738b78b432b782ce2e66a1cc2ed7_prof);

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

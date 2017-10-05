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
        $__internal_f41a921670c89baec931a3208f5d62d9ac744fd13d3c8b994a3c13578f334a3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f41a921670c89baec931a3208f5d62d9ac744fd13d3c8b994a3c13578f334a3c->enter($__internal_f41a921670c89baec931a3208f5d62d9ac744fd13d3c8b994a3c13578f334a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_2079ce38ec31d823107916acd308c194fb3160e899f6fbabae6d3c51079e88f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2079ce38ec31d823107916acd308c194fb3160e899f6fbabae6d3c51079e88f5->enter($__internal_2079ce38ec31d823107916acd308c194fb3160e899f6fbabae6d3c51079e88f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_f41a921670c89baec931a3208f5d62d9ac744fd13d3c8b994a3c13578f334a3c->leave($__internal_f41a921670c89baec931a3208f5d62d9ac744fd13d3c8b994a3c13578f334a3c_prof);

        
        $__internal_2079ce38ec31d823107916acd308c194fb3160e899f6fbabae6d3c51079e88f5->leave($__internal_2079ce38ec31d823107916acd308c194fb3160e899f6fbabae6d3c51079e88f5_prof);

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
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}

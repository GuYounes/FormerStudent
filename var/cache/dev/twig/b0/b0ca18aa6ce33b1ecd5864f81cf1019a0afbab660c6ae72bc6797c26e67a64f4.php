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
        $__internal_15f422c71e4f1c16c072185b5a507c2e852d4a8c7e63277cb9869021ad216901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15f422c71e4f1c16c072185b5a507c2e852d4a8c7e63277cb9869021ad216901->enter($__internal_15f422c71e4f1c16c072185b5a507c2e852d4a8c7e63277cb9869021ad216901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_a94ecc54f24e42b848f7991bdc482ccd401f322e6411a2cfe6e7704ea1c2f435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a94ecc54f24e42b848f7991bdc482ccd401f322e6411a2cfe6e7704ea1c2f435->enter($__internal_a94ecc54f24e42b848f7991bdc482ccd401f322e6411a2cfe6e7704ea1c2f435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_15f422c71e4f1c16c072185b5a507c2e852d4a8c7e63277cb9869021ad216901->leave($__internal_15f422c71e4f1c16c072185b5a507c2e852d4a8c7e63277cb9869021ad216901_prof);

        
        $__internal_a94ecc54f24e42b848f7991bdc482ccd401f322e6411a2cfe6e7704ea1c2f435->leave($__internal_a94ecc54f24e42b848f7991bdc482ccd401f322e6411a2cfe6e7704ea1c2f435_prof);

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
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}

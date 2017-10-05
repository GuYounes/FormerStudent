<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_bb9da003bda3d5b6804a9c8989117e0400c8e417b51f3bf5151cd96ed04a85b4 extends Twig_Template
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
        $__internal_dc47544c419829e2dc80af3625bdc69e48ca7b9da445c114805f7e78c9522a61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc47544c419829e2dc80af3625bdc69e48ca7b9da445c114805f7e78c9522a61->enter($__internal_dc47544c419829e2dc80af3625bdc69e48ca7b9da445c114805f7e78c9522a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_9d3d07a023bac51cb77d66fcbc71b2d3f118450f210994de5ffa5ddcba5b8e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d3d07a023bac51cb77d66fcbc71b2d3f118450f210994de5ffa5ddcba5b8e3e->enter($__internal_9d3d07a023bac51cb77d66fcbc71b2d3f118450f210994de5ffa5ddcba5b8e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_dc47544c419829e2dc80af3625bdc69e48ca7b9da445c114805f7e78c9522a61->leave($__internal_dc47544c419829e2dc80af3625bdc69e48ca7b9da445c114805f7e78c9522a61_prof);

        
        $__internal_9d3d07a023bac51cb77d66fcbc71b2d3f118450f210994de5ffa5ddcba5b8e3e->leave($__internal_9d3d07a023bac51cb77d66fcbc71b2d3f118450f210994de5ffa5ddcba5b8e3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}

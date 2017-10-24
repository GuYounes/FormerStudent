<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_6beb8c000059685df8c6ced71b104a616af864d4fd6cf564529d9dc15d0e49ae extends Twig_Template
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
        $__internal_5a4a6856369e58bd6eea1fcccef90b093f1e8a19ab158695835c0f090975ebc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a4a6856369e58bd6eea1fcccef90b093f1e8a19ab158695835c0f090975ebc0->enter($__internal_5a4a6856369e58bd6eea1fcccef90b093f1e8a19ab158695835c0f090975ebc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_09f715956e39537318130e3759ead6a411f5d2886020d624895610edeabd9ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f715956e39537318130e3759ead6a411f5d2886020d624895610edeabd9ed0->enter($__internal_09f715956e39537318130e3759ead6a411f5d2886020d624895610edeabd9ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5a4a6856369e58bd6eea1fcccef90b093f1e8a19ab158695835c0f090975ebc0->leave($__internal_5a4a6856369e58bd6eea1fcccef90b093f1e8a19ab158695835c0f090975ebc0_prof);

        
        $__internal_09f715956e39537318130e3759ead6a411f5d2886020d624895610edeabd9ed0->leave($__internal_09f715956e39537318130e3759ead6a411f5d2886020d624895610edeabd9ed0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}

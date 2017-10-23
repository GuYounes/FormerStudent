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
        $__internal_b29feb9164021164ef41a67454b7cde450379b8cca47fea5893d803b6c55d6ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b29feb9164021164ef41a67454b7cde450379b8cca47fea5893d803b6c55d6ba->enter($__internal_b29feb9164021164ef41a67454b7cde450379b8cca47fea5893d803b6c55d6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_f9a2d4b0480d84a09ee684e934e70f826af52067cd841629ad8223c53084d63b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a2d4b0480d84a09ee684e934e70f826af52067cd841629ad8223c53084d63b->enter($__internal_f9a2d4b0480d84a09ee684e934e70f826af52067cd841629ad8223c53084d63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b29feb9164021164ef41a67454b7cde450379b8cca47fea5893d803b6c55d6ba->leave($__internal_b29feb9164021164ef41a67454b7cde450379b8cca47fea5893d803b6c55d6ba_prof);

        
        $__internal_f9a2d4b0480d84a09ee684e934e70f826af52067cd841629ad8223c53084d63b->leave($__internal_f9a2d4b0480d84a09ee684e934e70f826af52067cd841629ad8223c53084d63b_prof);

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

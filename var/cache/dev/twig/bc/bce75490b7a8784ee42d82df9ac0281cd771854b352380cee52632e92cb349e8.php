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
        $__internal_6e23265158157118e13eeccc28e027a6f0dfc9da4a8184012ee45b6ab4a03d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e23265158157118e13eeccc28e027a6f0dfc9da4a8184012ee45b6ab4a03d09->enter($__internal_6e23265158157118e13eeccc28e027a6f0dfc9da4a8184012ee45b6ab4a03d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_6afa339f7a205237e39b4e1a4cbcb70afc122567941be2ef586cf5bc09cf2f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6afa339f7a205237e39b4e1a4cbcb70afc122567941be2ef586cf5bc09cf2f7f->enter($__internal_6afa339f7a205237e39b4e1a4cbcb70afc122567941be2ef586cf5bc09cf2f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_6e23265158157118e13eeccc28e027a6f0dfc9da4a8184012ee45b6ab4a03d09->leave($__internal_6e23265158157118e13eeccc28e027a6f0dfc9da4a8184012ee45b6ab4a03d09_prof);

        
        $__internal_6afa339f7a205237e39b4e1a4cbcb70afc122567941be2ef586cf5bc09cf2f7f->leave($__internal_6afa339f7a205237e39b4e1a4cbcb70afc122567941be2ef586cf5bc09cf2f7f_prof);

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

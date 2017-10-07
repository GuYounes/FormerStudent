<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6e93616e79d5a608873615b785757ddc070851b27f91d9cf1056fb6cbbf8b866 extends Twig_Template
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
        $__internal_9fb5eed73e0bd6ddf46adc905d3f91a8eef136f8a09f450e5d4c70b8085cc7fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb5eed73e0bd6ddf46adc905d3f91a8eef136f8a09f450e5d4c70b8085cc7fa->enter($__internal_9fb5eed73e0bd6ddf46adc905d3f91a8eef136f8a09f450e5d4c70b8085cc7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_87063a30da81aff48566db8b222bf642ff922faade1f42eff0d0731b0f1e0bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87063a30da81aff48566db8b222bf642ff922faade1f42eff0d0731b0f1e0bfb->enter($__internal_87063a30da81aff48566db8b222bf642ff922faade1f42eff0d0731b0f1e0bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_9fb5eed73e0bd6ddf46adc905d3f91a8eef136f8a09f450e5d4c70b8085cc7fa->leave($__internal_9fb5eed73e0bd6ddf46adc905d3f91a8eef136f8a09f450e5d4c70b8085cc7fa_prof);

        
        $__internal_87063a30da81aff48566db8b222bf642ff922faade1f42eff0d0731b0f1e0bfb->leave($__internal_87063a30da81aff48566db8b222bf642ff922faade1f42eff0d0731b0f1e0bfb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}

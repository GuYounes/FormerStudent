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
        $__internal_ae81b1476d3fca1d86af607be8a571232d74cc1ae5ab0cf36b1fc7b6c8c27ca1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae81b1476d3fca1d86af607be8a571232d74cc1ae5ab0cf36b1fc7b6c8c27ca1->enter($__internal_ae81b1476d3fca1d86af607be8a571232d74cc1ae5ab0cf36b1fc7b6c8c27ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_efd47d0ffe876d1b6bebfd92d37dd2c383ae89eb82d22a7961b405bdb3e51a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd47d0ffe876d1b6bebfd92d37dd2c383ae89eb82d22a7961b405bdb3e51a63->enter($__internal_efd47d0ffe876d1b6bebfd92d37dd2c383ae89eb82d22a7961b405bdb3e51a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_ae81b1476d3fca1d86af607be8a571232d74cc1ae5ab0cf36b1fc7b6c8c27ca1->leave($__internal_ae81b1476d3fca1d86af607be8a571232d74cc1ae5ab0cf36b1fc7b6c8c27ca1_prof);

        
        $__internal_efd47d0ffe876d1b6bebfd92d37dd2c383ae89eb82d22a7961b405bdb3e51a63->leave($__internal_efd47d0ffe876d1b6bebfd92d37dd2c383ae89eb82d22a7961b405bdb3e51a63_prof);

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

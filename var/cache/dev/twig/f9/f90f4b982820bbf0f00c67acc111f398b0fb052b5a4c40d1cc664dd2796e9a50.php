<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_19150055e368101db784087256d659b9bd5daffd8220e42efef6490617e27af8 extends Twig_Template
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
        $__internal_af688fba36a5c55362f252c70e92cd6f35ebb26bea4a6fd5a3e927b3f93cb359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af688fba36a5c55362f252c70e92cd6f35ebb26bea4a6fd5a3e927b3f93cb359->enter($__internal_af688fba36a5c55362f252c70e92cd6f35ebb26bea4a6fd5a3e927b3f93cb359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_e84d91ede0c4e6930d7a8402eed06997d6fa884add86255ce24d38af952eed4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84d91ede0c4e6930d7a8402eed06997d6fa884add86255ce24d38af952eed4f->enter($__internal_e84d91ede0c4e6930d7a8402eed06997d6fa884add86255ce24d38af952eed4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_af688fba36a5c55362f252c70e92cd6f35ebb26bea4a6fd5a3e927b3f93cb359->leave($__internal_af688fba36a5c55362f252c70e92cd6f35ebb26bea4a6fd5a3e927b3f93cb359_prof);

        
        $__internal_e84d91ede0c4e6930d7a8402eed06997d6fa884add86255ce24d38af952eed4f->leave($__internal_e84d91ede0c4e6930d7a8402eed06997d6fa884add86255ce24d38af952eed4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}

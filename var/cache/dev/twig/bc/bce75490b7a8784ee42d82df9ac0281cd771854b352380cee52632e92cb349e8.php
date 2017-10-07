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
        $__internal_e7355b88d4f1e9f69a2c2bd67c21907fa1aecb2f46f4499a2fd982e6b3547679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7355b88d4f1e9f69a2c2bd67c21907fa1aecb2f46f4499a2fd982e6b3547679->enter($__internal_e7355b88d4f1e9f69a2c2bd67c21907fa1aecb2f46f4499a2fd982e6b3547679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_18c7f4e61f9f2ddab98bf6aa63ca527d61ceee2076213495cbe5cbae4940b7b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c7f4e61f9f2ddab98bf6aa63ca527d61ceee2076213495cbe5cbae4940b7b8->enter($__internal_18c7f4e61f9f2ddab98bf6aa63ca527d61ceee2076213495cbe5cbae4940b7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_e7355b88d4f1e9f69a2c2bd67c21907fa1aecb2f46f4499a2fd982e6b3547679->leave($__internal_e7355b88d4f1e9f69a2c2bd67c21907fa1aecb2f46f4499a2fd982e6b3547679_prof);

        
        $__internal_18c7f4e61f9f2ddab98bf6aa63ca527d61ceee2076213495cbe5cbae4940b7b8->leave($__internal_18c7f4e61f9f2ddab98bf6aa63ca527d61ceee2076213495cbe5cbae4940b7b8_prof);

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

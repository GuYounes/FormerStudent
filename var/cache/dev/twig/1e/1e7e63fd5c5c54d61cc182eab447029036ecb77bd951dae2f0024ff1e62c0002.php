<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_c8c0d9c81834a2dbb243f2f8d86b791c44d720164efc6992a8a750c8425e2233 extends Twig_Template
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
        $__internal_6c0a7647024a2a799e5fe5bf4dee4c91b7f31135644f51414abb808f7e2b80ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c0a7647024a2a799e5fe5bf4dee4c91b7f31135644f51414abb808f7e2b80ca->enter($__internal_6c0a7647024a2a799e5fe5bf4dee4c91b7f31135644f51414abb808f7e2b80ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_7ca15b37becb0596ef46de4722f4bc3ee42ce3e91d12ba6278d8fac0ab514789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca15b37becb0596ef46de4722f4bc3ee42ce3e91d12ba6278d8fac0ab514789->enter($__internal_7ca15b37becb0596ef46de4722f4bc3ee42ce3e91d12ba6278d8fac0ab514789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_6c0a7647024a2a799e5fe5bf4dee4c91b7f31135644f51414abb808f7e2b80ca->leave($__internal_6c0a7647024a2a799e5fe5bf4dee4c91b7f31135644f51414abb808f7e2b80ca_prof);

        
        $__internal_7ca15b37becb0596ef46de4722f4bc3ee42ce3e91d12ba6278d8fac0ab514789->leave($__internal_7ca15b37becb0596ef46de4722f4bc3ee42ce3e91d12ba6278d8fac0ab514789_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}

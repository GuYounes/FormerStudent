<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_b8859827bcea42ddb3b7c6a041082f75d112ee1ae690a512dcfa4d94559e8bfa extends Twig_Template
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
        $__internal_a3ca4d82dfbd52b891b628684cd321df9c68cf2b3591cf8ea92e9f119f52de15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3ca4d82dfbd52b891b628684cd321df9c68cf2b3591cf8ea92e9f119f52de15->enter($__internal_a3ca4d82dfbd52b891b628684cd321df9c68cf2b3591cf8ea92e9f119f52de15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_f17da7501dc579093a896f4049cf86342c446809f6acbb157b5631934c6746e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17da7501dc579093a896f4049cf86342c446809f6acbb157b5631934c6746e2->enter($__internal_f17da7501dc579093a896f4049cf86342c446809f6acbb157b5631934c6746e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_a3ca4d82dfbd52b891b628684cd321df9c68cf2b3591cf8ea92e9f119f52de15->leave($__internal_a3ca4d82dfbd52b891b628684cd321df9c68cf2b3591cf8ea92e9f119f52de15_prof);

        
        $__internal_f17da7501dc579093a896f4049cf86342c446809f6acbb157b5631934c6746e2->leave($__internal_f17da7501dc579093a896f4049cf86342c446809f6acbb157b5631934c6746e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}

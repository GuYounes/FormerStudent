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
        $__internal_79c8927125a463a3af023defd602ca927ac3871ded27bd2ecddbfa8478d8b57b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79c8927125a463a3af023defd602ca927ac3871ded27bd2ecddbfa8478d8b57b->enter($__internal_79c8927125a463a3af023defd602ca927ac3871ded27bd2ecddbfa8478d8b57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_0dbe3762281fce875e0b2a7fdee30b33907848b7c8c45251a84ef6493f6fec1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dbe3762281fce875e0b2a7fdee30b33907848b7c8c45251a84ef6493f6fec1f->enter($__internal_0dbe3762281fce875e0b2a7fdee30b33907848b7c8c45251a84ef6493f6fec1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_79c8927125a463a3af023defd602ca927ac3871ded27bd2ecddbfa8478d8b57b->leave($__internal_79c8927125a463a3af023defd602ca927ac3871ded27bd2ecddbfa8478d8b57b_prof);

        
        $__internal_0dbe3762281fce875e0b2a7fdee30b33907848b7c8c45251a84ef6493f6fec1f->leave($__internal_0dbe3762281fce875e0b2a7fdee30b33907848b7c8c45251a84ef6493f6fec1f_prof);

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

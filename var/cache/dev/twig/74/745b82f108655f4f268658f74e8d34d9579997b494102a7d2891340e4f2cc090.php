<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_10a2f5e47e15e8bfb0075dc1ef5e2bc06efaaaea5353ae7d79b0883f65209ae4 extends Twig_Template
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
        $__internal_8f3d6d1fa687bc693f38adbd967a8ae214c4b09a8eb3c86c3c4b4f568ad52f50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f3d6d1fa687bc693f38adbd967a8ae214c4b09a8eb3c86c3c4b4f568ad52f50->enter($__internal_8f3d6d1fa687bc693f38adbd967a8ae214c4b09a8eb3c86c3c4b4f568ad52f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_0b6999c9ee354fb752dd3301ffa8edfcbaa4606a7e294854a8eb445a1a782397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b6999c9ee354fb752dd3301ffa8edfcbaa4606a7e294854a8eb445a1a782397->enter($__internal_0b6999c9ee354fb752dd3301ffa8edfcbaa4606a7e294854a8eb445a1a782397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_8f3d6d1fa687bc693f38adbd967a8ae214c4b09a8eb3c86c3c4b4f568ad52f50->leave($__internal_8f3d6d1fa687bc693f38adbd967a8ae214c4b09a8eb3c86c3c4b4f568ad52f50_prof);

        
        $__internal_0b6999c9ee354fb752dd3301ffa8edfcbaa4606a7e294854a8eb445a1a782397->leave($__internal_0b6999c9ee354fb752dd3301ffa8edfcbaa4606a7e294854a8eb445a1a782397_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}

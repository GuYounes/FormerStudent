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
        $__internal_a56ce85a5945fa22ae82b40b45fda5bf0d60608152bef625c07cbba5ab3ecb6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a56ce85a5945fa22ae82b40b45fda5bf0d60608152bef625c07cbba5ab3ecb6b->enter($__internal_a56ce85a5945fa22ae82b40b45fda5bf0d60608152bef625c07cbba5ab3ecb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_768eb215ea47d0f361f54e07e0324dd980bf7b94391171f3b9fc46b0dd0eb52c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_768eb215ea47d0f361f54e07e0324dd980bf7b94391171f3b9fc46b0dd0eb52c->enter($__internal_768eb215ea47d0f361f54e07e0324dd980bf7b94391171f3b9fc46b0dd0eb52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a56ce85a5945fa22ae82b40b45fda5bf0d60608152bef625c07cbba5ab3ecb6b->leave($__internal_a56ce85a5945fa22ae82b40b45fda5bf0d60608152bef625c07cbba5ab3ecb6b_prof);

        
        $__internal_768eb215ea47d0f361f54e07e0324dd980bf7b94391171f3b9fc46b0dd0eb52c->leave($__internal_768eb215ea47d0f361f54e07e0324dd980bf7b94391171f3b9fc46b0dd0eb52c_prof);

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

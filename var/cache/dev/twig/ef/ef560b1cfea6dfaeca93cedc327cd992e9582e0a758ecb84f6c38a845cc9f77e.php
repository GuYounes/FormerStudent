<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_6a3a88d85577847864127ccb2f29be4ee4110cccee498e2fe4dee8b3df36a33c extends Twig_Template
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
        $__internal_438fe1814f3a0342990e7ea6bf1954e32b7276554ca602aa09d0fb3c9dc0d845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_438fe1814f3a0342990e7ea6bf1954e32b7276554ca602aa09d0fb3c9dc0d845->enter($__internal_438fe1814f3a0342990e7ea6bf1954e32b7276554ca602aa09d0fb3c9dc0d845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_51a241477c3a74e584e018967476aae081465fc33f7da744f4611d9001749714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a241477c3a74e584e018967476aae081465fc33f7da744f4611d9001749714->enter($__internal_51a241477c3a74e584e018967476aae081465fc33f7da744f4611d9001749714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_438fe1814f3a0342990e7ea6bf1954e32b7276554ca602aa09d0fb3c9dc0d845->leave($__internal_438fe1814f3a0342990e7ea6bf1954e32b7276554ca602aa09d0fb3c9dc0d845_prof);

        
        $__internal_51a241477c3a74e584e018967476aae081465fc33f7da744f4611d9001749714->leave($__internal_51a241477c3a74e584e018967476aae081465fc33f7da744f4611d9001749714_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}

<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_08b4110577e1a3ccdc0304d269ee16f75f4329a9e3ab8ae0936a262adb80b0e4 extends Twig_Template
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
        $__internal_a670aa1404e1725dbb647fe462b297821917ef2f1bcbdf31cdd6f644723d2f33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a670aa1404e1725dbb647fe462b297821917ef2f1bcbdf31cdd6f644723d2f33->enter($__internal_a670aa1404e1725dbb647fe462b297821917ef2f1bcbdf31cdd6f644723d2f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_8394ec5d87efed73b1a5351fc3fcf14f896628c2eafe4387499f9f294f97f0e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8394ec5d87efed73b1a5351fc3fcf14f896628c2eafe4387499f9f294f97f0e1->enter($__internal_8394ec5d87efed73b1a5351fc3fcf14f896628c2eafe4387499f9f294f97f0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a670aa1404e1725dbb647fe462b297821917ef2f1bcbdf31cdd6f644723d2f33->leave($__internal_a670aa1404e1725dbb647fe462b297821917ef2f1bcbdf31cdd6f644723d2f33_prof);

        
        $__internal_8394ec5d87efed73b1a5351fc3fcf14f896628c2eafe4387499f9f294f97f0e1->leave($__internal_8394ec5d87efed73b1a5351fc3fcf14f896628c2eafe4387499f9f294f97f0e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}

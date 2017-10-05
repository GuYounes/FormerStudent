<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_e9b5ba64d3d05098cae69222295e7e7dde91855500c94688163007ba6d002f67 extends Twig_Template
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
        $__internal_10f637d36cd2693d0bd676ab3e3aba3e4e4a9cab1678d84bb4c9822fa4b853d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10f637d36cd2693d0bd676ab3e3aba3e4e4a9cab1678d84bb4c9822fa4b853d0->enter($__internal_10f637d36cd2693d0bd676ab3e3aba3e4e4a9cab1678d84bb4c9822fa4b853d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_5ddeaa9b73e718e95504b0487ec4fbd6715701fae9a01adb2985388023e824b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ddeaa9b73e718e95504b0487ec4fbd6715701fae9a01adb2985388023e824b7->enter($__internal_5ddeaa9b73e718e95504b0487ec4fbd6715701fae9a01adb2985388023e824b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_10f637d36cd2693d0bd676ab3e3aba3e4e4a9cab1678d84bb4c9822fa4b853d0->leave($__internal_10f637d36cd2693d0bd676ab3e3aba3e4e4a9cab1678d84bb4c9822fa4b853d0_prof);

        
        $__internal_5ddeaa9b73e718e95504b0487ec4fbd6715701fae9a01adb2985388023e824b7->leave($__internal_5ddeaa9b73e718e95504b0487ec4fbd6715701fae9a01adb2985388023e824b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}

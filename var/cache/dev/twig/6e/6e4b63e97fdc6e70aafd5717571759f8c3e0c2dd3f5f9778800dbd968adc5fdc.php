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
        $__internal_4e20281a94998a72b4003145f4e712540f21f07e27fcdb2efd61b96d67c45fef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e20281a94998a72b4003145f4e712540f21f07e27fcdb2efd61b96d67c45fef->enter($__internal_4e20281a94998a72b4003145f4e712540f21f07e27fcdb2efd61b96d67c45fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_1e7385390a4fbff848c925517b864d6b106acf98feffe30c250ad8f5ddaaf6d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e7385390a4fbff848c925517b864d6b106acf98feffe30c250ad8f5ddaaf6d2->enter($__internal_1e7385390a4fbff848c925517b864d6b106acf98feffe30c250ad8f5ddaaf6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_4e20281a94998a72b4003145f4e712540f21f07e27fcdb2efd61b96d67c45fef->leave($__internal_4e20281a94998a72b4003145f4e712540f21f07e27fcdb2efd61b96d67c45fef_prof);

        
        $__internal_1e7385390a4fbff848c925517b864d6b106acf98feffe30c250ad8f5ddaaf6d2->leave($__internal_1e7385390a4fbff848c925517b864d6b106acf98feffe30c250ad8f5ddaaf6d2_prof);

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
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}

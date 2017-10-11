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
        $__internal_4d0fd0d675607c917f5ffe3e46656986bd31f3fa71611c32044a0d8c3289bdc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d0fd0d675607c917f5ffe3e46656986bd31f3fa71611c32044a0d8c3289bdc0->enter($__internal_4d0fd0d675607c917f5ffe3e46656986bd31f3fa71611c32044a0d8c3289bdc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_078f56e65374af23cfbd68b5ee2cdace1b30b2d4d6dea46df81e6e6bfcec2a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_078f56e65374af23cfbd68b5ee2cdace1b30b2d4d6dea46df81e6e6bfcec2a7d->enter($__internal_078f56e65374af23cfbd68b5ee2cdace1b30b2d4d6dea46df81e6e6bfcec2a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_4d0fd0d675607c917f5ffe3e46656986bd31f3fa71611c32044a0d8c3289bdc0->leave($__internal_4d0fd0d675607c917f5ffe3e46656986bd31f3fa71611c32044a0d8c3289bdc0_prof);

        
        $__internal_078f56e65374af23cfbd68b5ee2cdace1b30b2d4d6dea46df81e6e6bfcec2a7d->leave($__internal_078f56e65374af23cfbd68b5ee2cdace1b30b2d4d6dea46df81e6e6bfcec2a7d_prof);

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

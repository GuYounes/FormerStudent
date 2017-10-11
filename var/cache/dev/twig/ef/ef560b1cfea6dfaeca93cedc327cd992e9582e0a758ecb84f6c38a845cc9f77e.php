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
        $__internal_1960706c92d9326856f74ba55c23f33192cff5546f07b34fb399fa95f29cb481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1960706c92d9326856f74ba55c23f33192cff5546f07b34fb399fa95f29cb481->enter($__internal_1960706c92d9326856f74ba55c23f33192cff5546f07b34fb399fa95f29cb481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_2c16b035638d01b1fb19c513f4b6c2fb8a26ca7fce68761dfe7f6725d868d01d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c16b035638d01b1fb19c513f4b6c2fb8a26ca7fce68761dfe7f6725d868d01d->enter($__internal_2c16b035638d01b1fb19c513f4b6c2fb8a26ca7fce68761dfe7f6725d868d01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1960706c92d9326856f74ba55c23f33192cff5546f07b34fb399fa95f29cb481->leave($__internal_1960706c92d9326856f74ba55c23f33192cff5546f07b34fb399fa95f29cb481_prof);

        
        $__internal_2c16b035638d01b1fb19c513f4b6c2fb8a26ca7fce68761dfe7f6725d868d01d->leave($__internal_2c16b035638d01b1fb19c513f4b6c2fb8a26ca7fce68761dfe7f6725d868d01d_prof);

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

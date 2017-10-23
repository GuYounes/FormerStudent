<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_055cfff42c35e27118c8ba69ce5af3c953d3472d4762c3df5ffbbde0fdb39c11 extends Twig_Template
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
        $__internal_3020e44cdf8dbc32673c3419b10a8c241ff329fc5dd0e190088dc8b51077ec3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3020e44cdf8dbc32673c3419b10a8c241ff329fc5dd0e190088dc8b51077ec3d->enter($__internal_3020e44cdf8dbc32673c3419b10a8c241ff329fc5dd0e190088dc8b51077ec3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_ad7828c6c1591874a32fd2cc6f9adab94f191d39bbb952badc9724177a39af6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad7828c6c1591874a32fd2cc6f9adab94f191d39bbb952badc9724177a39af6a->enter($__internal_ad7828c6c1591874a32fd2cc6f9adab94f191d39bbb952badc9724177a39af6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3020e44cdf8dbc32673c3419b10a8c241ff329fc5dd0e190088dc8b51077ec3d->leave($__internal_3020e44cdf8dbc32673c3419b10a8c241ff329fc5dd0e190088dc8b51077ec3d_prof);

        
        $__internal_ad7828c6c1591874a32fd2cc6f9adab94f191d39bbb952badc9724177a39af6a->leave($__internal_ad7828c6c1591874a32fd2cc6f9adab94f191d39bbb952badc9724177a39af6a_prof);

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

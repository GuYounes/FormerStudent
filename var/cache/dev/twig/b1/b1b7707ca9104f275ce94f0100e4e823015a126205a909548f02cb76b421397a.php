<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_cd1c20a9a14b88da2c8b3e7a17571f011bb512b56612ffa760b3bfce685e4831 extends Twig_Template
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
        $__internal_25e44925706590662a7122245ea318010520964f83d3fe095cb584b03ba28efc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25e44925706590662a7122245ea318010520964f83d3fe095cb584b03ba28efc->enter($__internal_25e44925706590662a7122245ea318010520964f83d3fe095cb584b03ba28efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_c7b384c966bace07d948a10413075e08b457abf33d657687f4184a2d7e401dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b384c966bace07d948a10413075e08b457abf33d657687f4184a2d7e401dfa->enter($__internal_c7b384c966bace07d948a10413075e08b457abf33d657687f4184a2d7e401dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_25e44925706590662a7122245ea318010520964f83d3fe095cb584b03ba28efc->leave($__internal_25e44925706590662a7122245ea318010520964f83d3fe095cb584b03ba28efc_prof);

        
        $__internal_c7b384c966bace07d948a10413075e08b457abf33d657687f4184a2d7e401dfa->leave($__internal_c7b384c966bace07d948a10413075e08b457abf33d657687f4184a2d7e401dfa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}

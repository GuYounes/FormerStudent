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
        $__internal_5b2dcba9fb38051b1cab84ec1ab5de48107bc6c0fba2314c3feb837ea32ef111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b2dcba9fb38051b1cab84ec1ab5de48107bc6c0fba2314c3feb837ea32ef111->enter($__internal_5b2dcba9fb38051b1cab84ec1ab5de48107bc6c0fba2314c3feb837ea32ef111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_1603c713a675826b1eebe10f8d5cbf907a7a0fe7c72561294ca9f0f8b18b0b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1603c713a675826b1eebe10f8d5cbf907a7a0fe7c72561294ca9f0f8b18b0b6e->enter($__internal_1603c713a675826b1eebe10f8d5cbf907a7a0fe7c72561294ca9f0f8b18b0b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_5b2dcba9fb38051b1cab84ec1ab5de48107bc6c0fba2314c3feb837ea32ef111->leave($__internal_5b2dcba9fb38051b1cab84ec1ab5de48107bc6c0fba2314c3feb837ea32ef111_prof);

        
        $__internal_1603c713a675826b1eebe10f8d5cbf907a7a0fe7c72561294ca9f0f8b18b0b6e->leave($__internal_1603c713a675826b1eebe10f8d5cbf907a7a0fe7c72561294ca9f0f8b18b0b6e_prof);

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

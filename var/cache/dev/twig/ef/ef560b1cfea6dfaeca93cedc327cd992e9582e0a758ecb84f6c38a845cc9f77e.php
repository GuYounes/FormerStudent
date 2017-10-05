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
        $__internal_11e719457025b19984fe08363b753b9a03e6a3355ad6552059f8d255f6f042b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11e719457025b19984fe08363b753b9a03e6a3355ad6552059f8d255f6f042b4->enter($__internal_11e719457025b19984fe08363b753b9a03e6a3355ad6552059f8d255f6f042b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_a6d579183c5fce51288a69fbab07efd5422a1fbc7d0fcb5525ac2de754ce6f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6d579183c5fce51288a69fbab07efd5422a1fbc7d0fcb5525ac2de754ce6f44->enter($__internal_a6d579183c5fce51288a69fbab07efd5422a1fbc7d0fcb5525ac2de754ce6f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_11e719457025b19984fe08363b753b9a03e6a3355ad6552059f8d255f6f042b4->leave($__internal_11e719457025b19984fe08363b753b9a03e6a3355ad6552059f8d255f6f042b4_prof);

        
        $__internal_a6d579183c5fce51288a69fbab07efd5422a1fbc7d0fcb5525ac2de754ce6f44->leave($__internal_a6d579183c5fce51288a69fbab07efd5422a1fbc7d0fcb5525ac2de754ce6f44_prof);

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
", "@Framework/Form/button_attributes.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}

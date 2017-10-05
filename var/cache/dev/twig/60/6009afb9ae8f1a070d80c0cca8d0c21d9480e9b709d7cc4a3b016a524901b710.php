<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_7b245c50534a25f79801e45f4fc447a1d2f9109123b2828353b18c5878cf2592 extends Twig_Template
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
        $__internal_abd9792adc308f6b4c249c35a728e083a52db003db0920ceefeca27825b090a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abd9792adc308f6b4c249c35a728e083a52db003db0920ceefeca27825b090a7->enter($__internal_abd9792adc308f6b4c249c35a728e083a52db003db0920ceefeca27825b090a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_5bdb5a3455cdf45ae9afed3c5ae1589ff71a256021decdd363f3abeb0e6ee222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bdb5a3455cdf45ae9afed3c5ae1589ff71a256021decdd363f3abeb0e6ee222->enter($__internal_5bdb5a3455cdf45ae9afed3c5ae1589ff71a256021decdd363f3abeb0e6ee222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_abd9792adc308f6b4c249c35a728e083a52db003db0920ceefeca27825b090a7->leave($__internal_abd9792adc308f6b4c249c35a728e083a52db003db0920ceefeca27825b090a7_prof);

        
        $__internal_5bdb5a3455cdf45ae9afed3c5ae1589ff71a256021decdd363f3abeb0e6ee222->leave($__internal_5bdb5a3455cdf45ae9afed3c5ae1589ff71a256021decdd363f3abeb0e6ee222_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}

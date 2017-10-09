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
        $__internal_e359ccd39913557a6359d1623ae03937e18139cb78884142a6c8828659ec7b40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e359ccd39913557a6359d1623ae03937e18139cb78884142a6c8828659ec7b40->enter($__internal_e359ccd39913557a6359d1623ae03937e18139cb78884142a6c8828659ec7b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_be6ca93f313962d6b0444ac50e6847eaa5957d80e8711ad3cdfd29425d6e88b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be6ca93f313962d6b0444ac50e6847eaa5957d80e8711ad3cdfd29425d6e88b9->enter($__internal_be6ca93f313962d6b0444ac50e6847eaa5957d80e8711ad3cdfd29425d6e88b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e359ccd39913557a6359d1623ae03937e18139cb78884142a6c8828659ec7b40->leave($__internal_e359ccd39913557a6359d1623ae03937e18139cb78884142a6c8828659ec7b40_prof);

        
        $__internal_be6ca93f313962d6b0444ac50e6847eaa5957d80e8711ad3cdfd29425d6e88b9->leave($__internal_be6ca93f313962d6b0444ac50e6847eaa5957d80e8711ad3cdfd29425d6e88b9_prof);

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

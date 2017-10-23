<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_c556abb36ea2da27dd5e40ea3f98a1e64a3a9115996d1e2ed94285be57e0517b extends Twig_Template
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
        $__internal_0073a6d03f16f135501cad54caffd126a4b04343761436bd4ba35215586cf380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0073a6d03f16f135501cad54caffd126a4b04343761436bd4ba35215586cf380->enter($__internal_0073a6d03f16f135501cad54caffd126a4b04343761436bd4ba35215586cf380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_ccd5b62a4a9670e43781372efb35aadc99755de6343c2e0a26b1b4bf2c1790ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd5b62a4a9670e43781372efb35aadc99755de6343c2e0a26b1b4bf2c1790ed->enter($__internal_ccd5b62a4a9670e43781372efb35aadc99755de6343c2e0a26b1b4bf2c1790ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_0073a6d03f16f135501cad54caffd126a4b04343761436bd4ba35215586cf380->leave($__internal_0073a6d03f16f135501cad54caffd126a4b04343761436bd4ba35215586cf380_prof);

        
        $__internal_ccd5b62a4a9670e43781372efb35aadc99755de6343c2e0a26b1b4bf2c1790ed->leave($__internal_ccd5b62a4a9670e43781372efb35aadc99755de6343c2e0a26b1b4bf2c1790ed_prof);

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
", "@Framework/Form/widget_attributes.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}

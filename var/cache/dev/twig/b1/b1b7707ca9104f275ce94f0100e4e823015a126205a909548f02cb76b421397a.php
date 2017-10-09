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
        $__internal_e298ebaca05a56099762ba216737af2a72897fe0fc3b9b05241c1b8af8735f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e298ebaca05a56099762ba216737af2a72897fe0fc3b9b05241c1b8af8735f15->enter($__internal_e298ebaca05a56099762ba216737af2a72897fe0fc3b9b05241c1b8af8735f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_64a6034cbdbac72268b9f48df45c823de61e76d92386072e764c2ffd8d64ea17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64a6034cbdbac72268b9f48df45c823de61e76d92386072e764c2ffd8d64ea17->enter($__internal_64a6034cbdbac72268b9f48df45c823de61e76d92386072e764c2ffd8d64ea17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e298ebaca05a56099762ba216737af2a72897fe0fc3b9b05241c1b8af8735f15->leave($__internal_e298ebaca05a56099762ba216737af2a72897fe0fc3b9b05241c1b8af8735f15_prof);

        
        $__internal_64a6034cbdbac72268b9f48df45c823de61e76d92386072e764c2ffd8d64ea17->leave($__internal_64a6034cbdbac72268b9f48df45c823de61e76d92386072e764c2ffd8d64ea17_prof);

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

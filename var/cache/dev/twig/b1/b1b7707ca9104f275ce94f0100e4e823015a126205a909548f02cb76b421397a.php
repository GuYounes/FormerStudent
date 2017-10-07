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
        $__internal_9ac6212feec40208911ce49d1129dc66e8d7c9f24b219c8c5354592fbff28a43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ac6212feec40208911ce49d1129dc66e8d7c9f24b219c8c5354592fbff28a43->enter($__internal_9ac6212feec40208911ce49d1129dc66e8d7c9f24b219c8c5354592fbff28a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_f5b713a11f2da0105c1db2b6027101f893d1292af6ad14a3cc145ed8b5c74973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5b713a11f2da0105c1db2b6027101f893d1292af6ad14a3cc145ed8b5c74973->enter($__internal_f5b713a11f2da0105c1db2b6027101f893d1292af6ad14a3cc145ed8b5c74973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_9ac6212feec40208911ce49d1129dc66e8d7c9f24b219c8c5354592fbff28a43->leave($__internal_9ac6212feec40208911ce49d1129dc66e8d7c9f24b219c8c5354592fbff28a43_prof);

        
        $__internal_f5b713a11f2da0105c1db2b6027101f893d1292af6ad14a3cc145ed8b5c74973->leave($__internal_f5b713a11f2da0105c1db2b6027101f893d1292af6ad14a3cc145ed8b5c74973_prof);

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

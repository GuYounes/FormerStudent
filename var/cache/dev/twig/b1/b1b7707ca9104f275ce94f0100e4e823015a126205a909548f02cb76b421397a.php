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
        $__internal_66e7b2865e2601c6d58861c3458d216de8cc9e85e053781b257b49367a9f38f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66e7b2865e2601c6d58861c3458d216de8cc9e85e053781b257b49367a9f38f9->enter($__internal_66e7b2865e2601c6d58861c3458d216de8cc9e85e053781b257b49367a9f38f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_1fd9cd35bd7217e8e6eb03b2e53fcda443c5fb9f46f8039a6fe46ee68b72bc4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd9cd35bd7217e8e6eb03b2e53fcda443c5fb9f46f8039a6fe46ee68b72bc4f->enter($__internal_1fd9cd35bd7217e8e6eb03b2e53fcda443c5fb9f46f8039a6fe46ee68b72bc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_66e7b2865e2601c6d58861c3458d216de8cc9e85e053781b257b49367a9f38f9->leave($__internal_66e7b2865e2601c6d58861c3458d216de8cc9e85e053781b257b49367a9f38f9_prof);

        
        $__internal_1fd9cd35bd7217e8e6eb03b2e53fcda443c5fb9f46f8039a6fe46ee68b72bc4f->leave($__internal_1fd9cd35bd7217e8e6eb03b2e53fcda443c5fb9f46f8039a6fe46ee68b72bc4f_prof);

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

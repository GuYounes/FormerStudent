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
        $__internal_420d477d8401098ee251311368b3f653367ab88fa975e2ceb6b5f40dee16b922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_420d477d8401098ee251311368b3f653367ab88fa975e2ceb6b5f40dee16b922->enter($__internal_420d477d8401098ee251311368b3f653367ab88fa975e2ceb6b5f40dee16b922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_6406198917a346f3e3c42e7305da9ad7b6b454b353cf148b77bb8d4a08f736b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6406198917a346f3e3c42e7305da9ad7b6b454b353cf148b77bb8d4a08f736b3->enter($__internal_6406198917a346f3e3c42e7305da9ad7b6b454b353cf148b77bb8d4a08f736b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_420d477d8401098ee251311368b3f653367ab88fa975e2ceb6b5f40dee16b922->leave($__internal_420d477d8401098ee251311368b3f653367ab88fa975e2ceb6b5f40dee16b922_prof);

        
        $__internal_6406198917a346f3e3c42e7305da9ad7b6b454b353cf148b77bb8d4a08f736b3->leave($__internal_6406198917a346f3e3c42e7305da9ad7b6b454b353cf148b77bb8d4a08f736b3_prof);

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

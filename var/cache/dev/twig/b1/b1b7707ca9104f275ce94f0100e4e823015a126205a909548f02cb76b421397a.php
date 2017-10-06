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
        $__internal_1e03671f29e8d53ee7b202d4f2a06cea71b954d193e43a5164ba453015691db3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e03671f29e8d53ee7b202d4f2a06cea71b954d193e43a5164ba453015691db3->enter($__internal_1e03671f29e8d53ee7b202d4f2a06cea71b954d193e43a5164ba453015691db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_9c7cb74c7e07d7ae48247c4ef20aa2746aa2926d40424e2c3620b42ed4aaf6b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c7cb74c7e07d7ae48247c4ef20aa2746aa2926d40424e2c3620b42ed4aaf6b8->enter($__internal_9c7cb74c7e07d7ae48247c4ef20aa2746aa2926d40424e2c3620b42ed4aaf6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1e03671f29e8d53ee7b202d4f2a06cea71b954d193e43a5164ba453015691db3->leave($__internal_1e03671f29e8d53ee7b202d4f2a06cea71b954d193e43a5164ba453015691db3_prof);

        
        $__internal_9c7cb74c7e07d7ae48247c4ef20aa2746aa2926d40424e2c3620b42ed4aaf6b8->leave($__internal_9c7cb74c7e07d7ae48247c4ef20aa2746aa2926d40424e2c3620b42ed4aaf6b8_prof);

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

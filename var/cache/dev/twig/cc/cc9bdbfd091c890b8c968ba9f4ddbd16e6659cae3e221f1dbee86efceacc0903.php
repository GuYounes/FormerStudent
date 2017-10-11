<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_5543a68232411567850f47b37500dea4ee3cdba041a27e9df973efe12a5c0098 extends Twig_Template
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
        $__internal_755126f7abc6f76d35d1ad0ebe8d23e96f9cc4ec8b05aebd43b1adfbf7416dd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_755126f7abc6f76d35d1ad0ebe8d23e96f9cc4ec8b05aebd43b1adfbf7416dd5->enter($__internal_755126f7abc6f76d35d1ad0ebe8d23e96f9cc4ec8b05aebd43b1adfbf7416dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_21134c2a55b2bbc3ad7aecdf1194c956f9a14763a253146bf3b7e9175d35e040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21134c2a55b2bbc3ad7aecdf1194c956f9a14763a253146bf3b7e9175d35e040->enter($__internal_21134c2a55b2bbc3ad7aecdf1194c956f9a14763a253146bf3b7e9175d35e040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_755126f7abc6f76d35d1ad0ebe8d23e96f9cc4ec8b05aebd43b1adfbf7416dd5->leave($__internal_755126f7abc6f76d35d1ad0ebe8d23e96f9cc4ec8b05aebd43b1adfbf7416dd5_prof);

        
        $__internal_21134c2a55b2bbc3ad7aecdf1194c956f9a14763a253146bf3b7e9175d35e040->leave($__internal_21134c2a55b2bbc3ad7aecdf1194c956f9a14763a253146bf3b7e9175d35e040_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}

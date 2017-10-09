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
        $__internal_42218d6e61f7977eff996bf20372240ba5be46762b83f0b68bcd189b0b465f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42218d6e61f7977eff996bf20372240ba5be46762b83f0b68bcd189b0b465f8e->enter($__internal_42218d6e61f7977eff996bf20372240ba5be46762b83f0b68bcd189b0b465f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_f187c3ee86b06d6a8e11165845189943ab6d9f99ab39b9a0834dbabc5b1a458a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f187c3ee86b06d6a8e11165845189943ab6d9f99ab39b9a0834dbabc5b1a458a->enter($__internal_f187c3ee86b06d6a8e11165845189943ab6d9f99ab39b9a0834dbabc5b1a458a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_42218d6e61f7977eff996bf20372240ba5be46762b83f0b68bcd189b0b465f8e->leave($__internal_42218d6e61f7977eff996bf20372240ba5be46762b83f0b68bcd189b0b465f8e_prof);

        
        $__internal_f187c3ee86b06d6a8e11165845189943ab6d9f99ab39b9a0834dbabc5b1a458a->leave($__internal_f187c3ee86b06d6a8e11165845189943ab6d9f99ab39b9a0834dbabc5b1a458a_prof);

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

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
        $__internal_97ceb5e09ef07cc2f4cd7a51f20b6b201135ef323d0bdc55fb8b89734b53f5ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97ceb5e09ef07cc2f4cd7a51f20b6b201135ef323d0bdc55fb8b89734b53f5ea->enter($__internal_97ceb5e09ef07cc2f4cd7a51f20b6b201135ef323d0bdc55fb8b89734b53f5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_4a0d2deab53b9ba8a26a1b56d5fa1bdbbc3c2a889cb481bf7029039365b5ae6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a0d2deab53b9ba8a26a1b56d5fa1bdbbc3c2a889cb481bf7029039365b5ae6f->enter($__internal_4a0d2deab53b9ba8a26a1b56d5fa1bdbbc3c2a889cb481bf7029039365b5ae6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_97ceb5e09ef07cc2f4cd7a51f20b6b201135ef323d0bdc55fb8b89734b53f5ea->leave($__internal_97ceb5e09ef07cc2f4cd7a51f20b6b201135ef323d0bdc55fb8b89734b53f5ea_prof);

        
        $__internal_4a0d2deab53b9ba8a26a1b56d5fa1bdbbc3c2a889cb481bf7029039365b5ae6f->leave($__internal_4a0d2deab53b9ba8a26a1b56d5fa1bdbbc3c2a889cb481bf7029039365b5ae6f_prof);

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

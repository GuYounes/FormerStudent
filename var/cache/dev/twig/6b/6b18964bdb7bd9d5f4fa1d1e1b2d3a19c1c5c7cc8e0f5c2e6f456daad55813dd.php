<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_ca9bfa35aaf688cdc3aba86ebcf650c45bc93a04db2bb63f4fafe5ebc783bc03 extends Twig_Template
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
        $__internal_5593130470052e5fae3ebc97e683ca9a3ae9dce8bc14a4bc651a5b376e27fbc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5593130470052e5fae3ebc97e683ca9a3ae9dce8bc14a4bc651a5b376e27fbc9->enter($__internal_5593130470052e5fae3ebc97e683ca9a3ae9dce8bc14a4bc651a5b376e27fbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_9327bcb6555f0ea9c9c3ba191ac3dd9eb1401518d6a330d3b1edee296d40446c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9327bcb6555f0ea9c9c3ba191ac3dd9eb1401518d6a330d3b1edee296d40446c->enter($__internal_9327bcb6555f0ea9c9c3ba191ac3dd9eb1401518d6a330d3b1edee296d40446c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5593130470052e5fae3ebc97e683ca9a3ae9dce8bc14a4bc651a5b376e27fbc9->leave($__internal_5593130470052e5fae3ebc97e683ca9a3ae9dce8bc14a4bc651a5b376e27fbc9_prof);

        
        $__internal_9327bcb6555f0ea9c9c3ba191ac3dd9eb1401518d6a330d3b1edee296d40446c->leave($__internal_9327bcb6555f0ea9c9c3ba191ac3dd9eb1401518d6a330d3b1edee296d40446c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}

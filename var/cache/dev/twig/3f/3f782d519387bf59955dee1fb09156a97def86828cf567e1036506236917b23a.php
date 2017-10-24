<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e8efa1811b5c8706a3cacead0850b87755acd239ae7be6464a100711ec9a55c9 extends Twig_Template
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
        $__internal_95b773023e91564564b4948a6c77ed1828ba9da947f461c8625661b125d7ceba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95b773023e91564564b4948a6c77ed1828ba9da947f461c8625661b125d7ceba->enter($__internal_95b773023e91564564b4948a6c77ed1828ba9da947f461c8625661b125d7ceba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_4d981e5aa07da1520a44186c6038947cf844465bb99c4737e7ac9ee7e2238025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d981e5aa07da1520a44186c6038947cf844465bb99c4737e7ac9ee7e2238025->enter($__internal_4d981e5aa07da1520a44186c6038947cf844465bb99c4737e7ac9ee7e2238025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_95b773023e91564564b4948a6c77ed1828ba9da947f461c8625661b125d7ceba->leave($__internal_95b773023e91564564b4948a6c77ed1828ba9da947f461c8625661b125d7ceba_prof);

        
        $__internal_4d981e5aa07da1520a44186c6038947cf844465bb99c4737e7ac9ee7e2238025->leave($__internal_4d981e5aa07da1520a44186c6038947cf844465bb99c4737e7ac9ee7e2238025_prof);

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

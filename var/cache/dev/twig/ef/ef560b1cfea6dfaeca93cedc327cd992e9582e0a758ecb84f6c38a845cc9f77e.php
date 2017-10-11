<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_6a3a88d85577847864127ccb2f29be4ee4110cccee498e2fe4dee8b3df36a33c extends Twig_Template
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
        $__internal_68847a4a88fea98efda74fb1ec2c2804301348da01083d6aae41eb714a0fc819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68847a4a88fea98efda74fb1ec2c2804301348da01083d6aae41eb714a0fc819->enter($__internal_68847a4a88fea98efda74fb1ec2c2804301348da01083d6aae41eb714a0fc819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_368f6e8d898f67586a8ff72054d6149bcee5dbddbd8b84117c4476162d6034e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_368f6e8d898f67586a8ff72054d6149bcee5dbddbd8b84117c4476162d6034e5->enter($__internal_368f6e8d898f67586a8ff72054d6149bcee5dbddbd8b84117c4476162d6034e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_68847a4a88fea98efda74fb1ec2c2804301348da01083d6aae41eb714a0fc819->leave($__internal_68847a4a88fea98efda74fb1ec2c2804301348da01083d6aae41eb714a0fc819_prof);

        
        $__internal_368f6e8d898f67586a8ff72054d6149bcee5dbddbd8b84117c4476162d6034e5->leave($__internal_368f6e8d898f67586a8ff72054d6149bcee5dbddbd8b84117c4476162d6034e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}

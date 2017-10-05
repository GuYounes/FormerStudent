<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_97bf44d0e0f494077f53ed4cc461449c59c0fa198502e78f6e3bd832335c9f8c extends Twig_Template
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
        $__internal_bd07fa7018ffe03dfbf8aafc13f02ef7eaf334c6456d5a1a5d81a2c1d887f4cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd07fa7018ffe03dfbf8aafc13f02ef7eaf334c6456d5a1a5d81a2c1d887f4cd->enter($__internal_bd07fa7018ffe03dfbf8aafc13f02ef7eaf334c6456d5a1a5d81a2c1d887f4cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_54ecc97f8e55a481272ad507472a7dd58b528e079674d666ba199c947f3b0151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54ecc97f8e55a481272ad507472a7dd58b528e079674d666ba199c947f3b0151->enter($__internal_54ecc97f8e55a481272ad507472a7dd58b528e079674d666ba199c947f3b0151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_bd07fa7018ffe03dfbf8aafc13f02ef7eaf334c6456d5a1a5d81a2c1d887f4cd->leave($__internal_bd07fa7018ffe03dfbf8aafc13f02ef7eaf334c6456d5a1a5d81a2c1d887f4cd_prof);

        
        $__internal_54ecc97f8e55a481272ad507472a7dd58b528e079674d666ba199c947f3b0151->leave($__internal_54ecc97f8e55a481272ad507472a7dd58b528e079674d666ba199c947f3b0151_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}

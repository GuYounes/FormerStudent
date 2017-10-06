<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_c9c039960fe28086f37d55a2d1ba25a6cd3f2c23d21fd438cb883d2d4322fed2 extends Twig_Template
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
        $__internal_2f1f465b708fe6400270d045de18f16182ebd6f1dfcabfb38174ed1f0393b7b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f1f465b708fe6400270d045de18f16182ebd6f1dfcabfb38174ed1f0393b7b5->enter($__internal_2f1f465b708fe6400270d045de18f16182ebd6f1dfcabfb38174ed1f0393b7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_71a33ad8eb27343bba2e5f1cd18fe9fa506aac1b43cd0a7c0327c7b3d58aa15f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a33ad8eb27343bba2e5f1cd18fe9fa506aac1b43cd0a7c0327c7b3d58aa15f->enter($__internal_71a33ad8eb27343bba2e5f1cd18fe9fa506aac1b43cd0a7c0327c7b3d58aa15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_2f1f465b708fe6400270d045de18f16182ebd6f1dfcabfb38174ed1f0393b7b5->leave($__internal_2f1f465b708fe6400270d045de18f16182ebd6f1dfcabfb38174ed1f0393b7b5_prof);

        
        $__internal_71a33ad8eb27343bba2e5f1cd18fe9fa506aac1b43cd0a7c0327c7b3d58aa15f->leave($__internal_71a33ad8eb27343bba2e5f1cd18fe9fa506aac1b43cd0a7c0327c7b3d58aa15f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}

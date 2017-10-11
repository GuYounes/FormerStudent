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
        $__internal_a04783ffe3052a70e796a678d383fbbff8bd7cb7f29d568b48fbca7dd64290e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a04783ffe3052a70e796a678d383fbbff8bd7cb7f29d568b48fbca7dd64290e1->enter($__internal_a04783ffe3052a70e796a678d383fbbff8bd7cb7f29d568b48fbca7dd64290e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_33e4256c62dc26cc107399c24d73db417fa2d228a5f914cdfd6d7c11bbfa0db9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e4256c62dc26cc107399c24d73db417fa2d228a5f914cdfd6d7c11bbfa0db9->enter($__internal_33e4256c62dc26cc107399c24d73db417fa2d228a5f914cdfd6d7c11bbfa0db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a04783ffe3052a70e796a678d383fbbff8bd7cb7f29d568b48fbca7dd64290e1->leave($__internal_a04783ffe3052a70e796a678d383fbbff8bd7cb7f29d568b48fbca7dd64290e1_prof);

        
        $__internal_33e4256c62dc26cc107399c24d73db417fa2d228a5f914cdfd6d7c11bbfa0db9->leave($__internal_33e4256c62dc26cc107399c24d73db417fa2d228a5f914cdfd6d7c11bbfa0db9_prof);

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

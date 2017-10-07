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
        $__internal_4f19e7d9cd176e093bc8404dc97f280274f3c77cbfeb6804be56d51b8e972b8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f19e7d9cd176e093bc8404dc97f280274f3c77cbfeb6804be56d51b8e972b8a->enter($__internal_4f19e7d9cd176e093bc8404dc97f280274f3c77cbfeb6804be56d51b8e972b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_026560c67d2450c3d43a3e32ddb6eac0cc6171f6611fd513ee5215b8699a1a51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_026560c67d2450c3d43a3e32ddb6eac0cc6171f6611fd513ee5215b8699a1a51->enter($__internal_026560c67d2450c3d43a3e32ddb6eac0cc6171f6611fd513ee5215b8699a1a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_4f19e7d9cd176e093bc8404dc97f280274f3c77cbfeb6804be56d51b8e972b8a->leave($__internal_4f19e7d9cd176e093bc8404dc97f280274f3c77cbfeb6804be56d51b8e972b8a_prof);

        
        $__internal_026560c67d2450c3d43a3e32ddb6eac0cc6171f6611fd513ee5215b8699a1a51->leave($__internal_026560c67d2450c3d43a3e32ddb6eac0cc6171f6611fd513ee5215b8699a1a51_prof);

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

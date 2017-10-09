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
        $__internal_46b71014ffa73cd3e2dc92f2aeee0e8144784138062bef3a4a3c519fa1b662f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46b71014ffa73cd3e2dc92f2aeee0e8144784138062bef3a4a3c519fa1b662f9->enter($__internal_46b71014ffa73cd3e2dc92f2aeee0e8144784138062bef3a4a3c519fa1b662f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_15e94430e7865508887390ab312b9e1372ad087271d95c150a215dce0b887213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e94430e7865508887390ab312b9e1372ad087271d95c150a215dce0b887213->enter($__internal_15e94430e7865508887390ab312b9e1372ad087271d95c150a215dce0b887213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_46b71014ffa73cd3e2dc92f2aeee0e8144784138062bef3a4a3c519fa1b662f9->leave($__internal_46b71014ffa73cd3e2dc92f2aeee0e8144784138062bef3a4a3c519fa1b662f9_prof);

        
        $__internal_15e94430e7865508887390ab312b9e1372ad087271d95c150a215dce0b887213->leave($__internal_15e94430e7865508887390ab312b9e1372ad087271d95c150a215dce0b887213_prof);

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

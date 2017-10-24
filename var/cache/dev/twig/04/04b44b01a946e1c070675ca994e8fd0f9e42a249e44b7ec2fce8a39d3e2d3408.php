<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_a6b2db55e42ccf5bc44ae4d68ff778f17acc21a799acea7183b5fdf9f0e5cc24 extends Twig_Template
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
        $__internal_8b27c6db4f5feeafeb2dacd6583b46607378dc00d2e53ec8b5c377969c042d1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b27c6db4f5feeafeb2dacd6583b46607378dc00d2e53ec8b5c377969c042d1a->enter($__internal_8b27c6db4f5feeafeb2dacd6583b46607378dc00d2e53ec8b5c377969c042d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_7c518d884000ef0ddabe8011755add9c117b9006d166983bc9e92f09dea37b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c518d884000ef0ddabe8011755add9c117b9006d166983bc9e92f09dea37b1a->enter($__internal_7c518d884000ef0ddabe8011755add9c117b9006d166983bc9e92f09dea37b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8b27c6db4f5feeafeb2dacd6583b46607378dc00d2e53ec8b5c377969c042d1a->leave($__internal_8b27c6db4f5feeafeb2dacd6583b46607378dc00d2e53ec8b5c377969c042d1a_prof);

        
        $__internal_7c518d884000ef0ddabe8011755add9c117b9006d166983bc9e92f09dea37b1a->leave($__internal_7c518d884000ef0ddabe8011755add9c117b9006d166983bc9e92f09dea37b1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}

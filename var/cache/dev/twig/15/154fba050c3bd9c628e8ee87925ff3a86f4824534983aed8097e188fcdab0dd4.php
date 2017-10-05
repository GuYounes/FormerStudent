<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_5d8ab000be9e32356bb9ac8a683647637c7898a52f3c69a8db38025ad6ca37f3 extends Twig_Template
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
        $__internal_0ed7e2dd4e32f22bc15883f9f963c3aae319889a6fd6fb78fb53e46e0838260c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ed7e2dd4e32f22bc15883f9f963c3aae319889a6fd6fb78fb53e46e0838260c->enter($__internal_0ed7e2dd4e32f22bc15883f9f963c3aae319889a6fd6fb78fb53e46e0838260c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_e867834c70b6988772919ca8f3b98d63227cce874b5bb32caff03d6329374b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e867834c70b6988772919ca8f3b98d63227cce874b5bb32caff03d6329374b7c->enter($__internal_e867834c70b6988772919ca8f3b98d63227cce874b5bb32caff03d6329374b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_0ed7e2dd4e32f22bc15883f9f963c3aae319889a6fd6fb78fb53e46e0838260c->leave($__internal_0ed7e2dd4e32f22bc15883f9f963c3aae319889a6fd6fb78fb53e46e0838260c_prof);

        
        $__internal_e867834c70b6988772919ca8f3b98d63227cce874b5bb32caff03d6329374b7c->leave($__internal_e867834c70b6988772919ca8f3b98d63227cce874b5bb32caff03d6329374b7c_prof);

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
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}

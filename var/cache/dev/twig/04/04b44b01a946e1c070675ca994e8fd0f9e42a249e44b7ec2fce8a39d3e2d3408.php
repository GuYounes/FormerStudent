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
        $__internal_c037f17cc31e6eccc9a97a5cc14228173f17874051dbcc26f31814c4054c05b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c037f17cc31e6eccc9a97a5cc14228173f17874051dbcc26f31814c4054c05b1->enter($__internal_c037f17cc31e6eccc9a97a5cc14228173f17874051dbcc26f31814c4054c05b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_048a557ee5a2dea23507bb3cdb81b82ffbcae4cd0783d86d82e27b45d9db55c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_048a557ee5a2dea23507bb3cdb81b82ffbcae4cd0783d86d82e27b45d9db55c8->enter($__internal_048a557ee5a2dea23507bb3cdb81b82ffbcae4cd0783d86d82e27b45d9db55c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c037f17cc31e6eccc9a97a5cc14228173f17874051dbcc26f31814c4054c05b1->leave($__internal_c037f17cc31e6eccc9a97a5cc14228173f17874051dbcc26f31814c4054c05b1_prof);

        
        $__internal_048a557ee5a2dea23507bb3cdb81b82ffbcae4cd0783d86d82e27b45d9db55c8->leave($__internal_048a557ee5a2dea23507bb3cdb81b82ffbcae4cd0783d86d82e27b45d9db55c8_prof);

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

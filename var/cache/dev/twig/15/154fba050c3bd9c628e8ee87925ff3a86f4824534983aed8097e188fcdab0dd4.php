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
        $__internal_e3648ab2d36dd86ff9e17a126cdbab70029cd355cdefa639a4cc5912b8acc885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3648ab2d36dd86ff9e17a126cdbab70029cd355cdefa639a4cc5912b8acc885->enter($__internal_e3648ab2d36dd86ff9e17a126cdbab70029cd355cdefa639a4cc5912b8acc885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_fa7111141cbb0f6be41fede753d7bce66fa0ad6dbd34b379d6e0770d36d1789d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7111141cbb0f6be41fede753d7bce66fa0ad6dbd34b379d6e0770d36d1789d->enter($__internal_fa7111141cbb0f6be41fede753d7bce66fa0ad6dbd34b379d6e0770d36d1789d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e3648ab2d36dd86ff9e17a126cdbab70029cd355cdefa639a4cc5912b8acc885->leave($__internal_e3648ab2d36dd86ff9e17a126cdbab70029cd355cdefa639a4cc5912b8acc885_prof);

        
        $__internal_fa7111141cbb0f6be41fede753d7bce66fa0ad6dbd34b379d6e0770d36d1789d->leave($__internal_fa7111141cbb0f6be41fede753d7bce66fa0ad6dbd34b379d6e0770d36d1789d_prof);

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

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
        $__internal_1b01d4427bc4c6e35205dc7e3c46c9c0c07ab397f38038c47408d257fb2b1f3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b01d4427bc4c6e35205dc7e3c46c9c0c07ab397f38038c47408d257fb2b1f3d->enter($__internal_1b01d4427bc4c6e35205dc7e3c46c9c0c07ab397f38038c47408d257fb2b1f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_09ccfa9a4ecacd1bb59110f03ef6642f64cee6aa7e5077fef3933c66fecfef9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ccfa9a4ecacd1bb59110f03ef6642f64cee6aa7e5077fef3933c66fecfef9c->enter($__internal_09ccfa9a4ecacd1bb59110f03ef6642f64cee6aa7e5077fef3933c66fecfef9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_1b01d4427bc4c6e35205dc7e3c46c9c0c07ab397f38038c47408d257fb2b1f3d->leave($__internal_1b01d4427bc4c6e35205dc7e3c46c9c0c07ab397f38038c47408d257fb2b1f3d_prof);

        
        $__internal_09ccfa9a4ecacd1bb59110f03ef6642f64cee6aa7e5077fef3933c66fecfef9c->leave($__internal_09ccfa9a4ecacd1bb59110f03ef6642f64cee6aa7e5077fef3933c66fecfef9c_prof);

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

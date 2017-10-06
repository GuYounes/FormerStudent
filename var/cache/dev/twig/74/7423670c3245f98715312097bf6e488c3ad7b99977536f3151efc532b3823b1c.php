<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_0f9975d1249f5bce826af558fdb7672a284934333db3f6f51597ab3b3a360b4c extends Twig_Template
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
        $__internal_09181795e3991686392f6a04f770a4d6dd36401cba10e6b9d2965efd8dac9438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09181795e3991686392f6a04f770a4d6dd36401cba10e6b9d2965efd8dac9438->enter($__internal_09181795e3991686392f6a04f770a4d6dd36401cba10e6b9d2965efd8dac9438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_5ec3a168d3d1a6b31145c9ba01f234f22e085249dcda2c71e37b5924cb89d0fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec3a168d3d1a6b31145c9ba01f234f22e085249dcda2c71e37b5924cb89d0fa->enter($__internal_5ec3a168d3d1a6b31145c9ba01f234f22e085249dcda2c71e37b5924cb89d0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_09181795e3991686392f6a04f770a4d6dd36401cba10e6b9d2965efd8dac9438->leave($__internal_09181795e3991686392f6a04f770a4d6dd36401cba10e6b9d2965efd8dac9438_prof);

        
        $__internal_5ec3a168d3d1a6b31145c9ba01f234f22e085249dcda2c71e37b5924cb89d0fa->leave($__internal_5ec3a168d3d1a6b31145c9ba01f234f22e085249dcda2c71e37b5924cb89d0fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}

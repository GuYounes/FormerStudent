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
        $__internal_6d498bf1007979f11dc81ce4a60a78283a4b64c218079cca71095b19b5584f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d498bf1007979f11dc81ce4a60a78283a4b64c218079cca71095b19b5584f22->enter($__internal_6d498bf1007979f11dc81ce4a60a78283a4b64c218079cca71095b19b5584f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_e6b1eeeffc43fb7c762d1a21e8212cde095c12abe28a87694090e5bfabfaf181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b1eeeffc43fb7c762d1a21e8212cde095c12abe28a87694090e5bfabfaf181->enter($__internal_e6b1eeeffc43fb7c762d1a21e8212cde095c12abe28a87694090e5bfabfaf181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_6d498bf1007979f11dc81ce4a60a78283a4b64c218079cca71095b19b5584f22->leave($__internal_6d498bf1007979f11dc81ce4a60a78283a4b64c218079cca71095b19b5584f22_prof);

        
        $__internal_e6b1eeeffc43fb7c762d1a21e8212cde095c12abe28a87694090e5bfabfaf181->leave($__internal_e6b1eeeffc43fb7c762d1a21e8212cde095c12abe28a87694090e5bfabfaf181_prof);

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
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}

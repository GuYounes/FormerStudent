<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_5e6950b488c1aea52177d8592cc391c3dcdbc2ed5b0b94b1346ecb98ce4b569e extends Twig_Template
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
        $__internal_9f9282a8aaa8a1c7c453d231acb1fc7c7187d1fb358b0787dcda12a815a817a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f9282a8aaa8a1c7c453d231acb1fc7c7187d1fb358b0787dcda12a815a817a8->enter($__internal_9f9282a8aaa8a1c7c453d231acb1fc7c7187d1fb358b0787dcda12a815a817a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_2a80023fafd6e5c4f1ee162fdc6454f476200e37669029cb704905132427b6df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a80023fafd6e5c4f1ee162fdc6454f476200e37669029cb704905132427b6df->enter($__internal_2a80023fafd6e5c4f1ee162fdc6454f476200e37669029cb704905132427b6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_9f9282a8aaa8a1c7c453d231acb1fc7c7187d1fb358b0787dcda12a815a817a8->leave($__internal_9f9282a8aaa8a1c7c453d231acb1fc7c7187d1fb358b0787dcda12a815a817a8_prof);

        
        $__internal_2a80023fafd6e5c4f1ee162fdc6454f476200e37669029cb704905132427b6df->leave($__internal_2a80023fafd6e5c4f1ee162fdc6454f476200e37669029cb704905132427b6df_prof);

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

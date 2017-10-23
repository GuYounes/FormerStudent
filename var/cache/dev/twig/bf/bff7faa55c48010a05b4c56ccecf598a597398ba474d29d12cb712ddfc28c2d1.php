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
        $__internal_d00edd1bb5abd2aade1a93933bf63b2052a58e1d81aca2c367236cb166de49ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d00edd1bb5abd2aade1a93933bf63b2052a58e1d81aca2c367236cb166de49ca->enter($__internal_d00edd1bb5abd2aade1a93933bf63b2052a58e1d81aca2c367236cb166de49ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_d3c3caead66a75ee32797205c08f289cd1773dc2a41cb1f7cfed14d433cafe87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c3caead66a75ee32797205c08f289cd1773dc2a41cb1f7cfed14d433cafe87->enter($__internal_d3c3caead66a75ee32797205c08f289cd1773dc2a41cb1f7cfed14d433cafe87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_d00edd1bb5abd2aade1a93933bf63b2052a58e1d81aca2c367236cb166de49ca->leave($__internal_d00edd1bb5abd2aade1a93933bf63b2052a58e1d81aca2c367236cb166de49ca_prof);

        
        $__internal_d3c3caead66a75ee32797205c08f289cd1773dc2a41cb1f7cfed14d433cafe87->leave($__internal_d3c3caead66a75ee32797205c08f289cd1773dc2a41cb1f7cfed14d433cafe87_prof);

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

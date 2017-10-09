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
        $__internal_a88dda9ec7a1d8c7129690a1cf7263027ba7a649b790a6ad645732bac98ad34c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a88dda9ec7a1d8c7129690a1cf7263027ba7a649b790a6ad645732bac98ad34c->enter($__internal_a88dda9ec7a1d8c7129690a1cf7263027ba7a649b790a6ad645732bac98ad34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_56168230782823472b4a7648545ed817f5de89c00d76e6f909d29cfb5c086e1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56168230782823472b4a7648545ed817f5de89c00d76e6f909d29cfb5c086e1a->enter($__internal_56168230782823472b4a7648545ed817f5de89c00d76e6f909d29cfb5c086e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_a88dda9ec7a1d8c7129690a1cf7263027ba7a649b790a6ad645732bac98ad34c->leave($__internal_a88dda9ec7a1d8c7129690a1cf7263027ba7a649b790a6ad645732bac98ad34c_prof);

        
        $__internal_56168230782823472b4a7648545ed817f5de89c00d76e6f909d29cfb5c086e1a->leave($__internal_56168230782823472b4a7648545ed817f5de89c00d76e6f909d29cfb5c086e1a_prof);

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

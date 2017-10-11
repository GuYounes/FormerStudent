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
        $__internal_2ed2e31d1f76e7ebb9b04bdfc28e4564e1ae19a189e0d82dafcc1fd56441b0f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ed2e31d1f76e7ebb9b04bdfc28e4564e1ae19a189e0d82dafcc1fd56441b0f5->enter($__internal_2ed2e31d1f76e7ebb9b04bdfc28e4564e1ae19a189e0d82dafcc1fd56441b0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_9e8f903c57f88274aef283156646df1d8f3360c5f18284fb8db46f9bfe1e3184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e8f903c57f88274aef283156646df1d8f3360c5f18284fb8db46f9bfe1e3184->enter($__internal_9e8f903c57f88274aef283156646df1d8f3360c5f18284fb8db46f9bfe1e3184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

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
        
        $__internal_2ed2e31d1f76e7ebb9b04bdfc28e4564e1ae19a189e0d82dafcc1fd56441b0f5->leave($__internal_2ed2e31d1f76e7ebb9b04bdfc28e4564e1ae19a189e0d82dafcc1fd56441b0f5_prof);

        
        $__internal_9e8f903c57f88274aef283156646df1d8f3360c5f18284fb8db46f9bfe1e3184->leave($__internal_9e8f903c57f88274aef283156646df1d8f3360c5f18284fb8db46f9bfe1e3184_prof);

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

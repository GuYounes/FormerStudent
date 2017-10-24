<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_b39b1e860d827532f6f44b421b8271d6071e6cc22760ea6016e747faede2fe76 extends Twig_Template
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
        $__internal_ec4064d512d09878f04f89c0e103c569215accbd8a39d1059cdf2233ea50c704 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec4064d512d09878f04f89c0e103c569215accbd8a39d1059cdf2233ea50c704->enter($__internal_ec4064d512d09878f04f89c0e103c569215accbd8a39d1059cdf2233ea50c704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_4c8aaa845ba98853af899d34059f6644f41a552e5fd2fd1e6d7d473048ac141f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c8aaa845ba98853af899d34059f6644f41a552e5fd2fd1e6d7d473048ac141f->enter($__internal_4c8aaa845ba98853af899d34059f6644f41a552e5fd2fd1e6d7d473048ac141f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_ec4064d512d09878f04f89c0e103c569215accbd8a39d1059cdf2233ea50c704->leave($__internal_ec4064d512d09878f04f89c0e103c569215accbd8a39d1059cdf2233ea50c704_prof);

        
        $__internal_4c8aaa845ba98853af899d34059f6644f41a552e5fd2fd1e6d7d473048ac141f->leave($__internal_4c8aaa845ba98853af899d34059f6644f41a552e5fd2fd1e6d7d473048ac141f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}

<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_7461c443930954ee5a5aa4d2e1eae8fbde97c95b5b21f5091716d735d0deee49 extends Twig_Template
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
        $__internal_ebeeb0ac86dcbc62ffd4cf44ef39f617d30ee761872b6a6c933451481be395de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebeeb0ac86dcbc62ffd4cf44ef39f617d30ee761872b6a6c933451481be395de->enter($__internal_ebeeb0ac86dcbc62ffd4cf44ef39f617d30ee761872b6a6c933451481be395de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_2684f4d5d58681a05ea40e9ad4e0b5a2bfc72a2f634b9f8fe353f8efab36c2f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2684f4d5d58681a05ea40e9ad4e0b5a2bfc72a2f634b9f8fe353f8efab36c2f1->enter($__internal_2684f4d5d58681a05ea40e9ad4e0b5a2bfc72a2f634b9f8fe353f8efab36c2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_ebeeb0ac86dcbc62ffd4cf44ef39f617d30ee761872b6a6c933451481be395de->leave($__internal_ebeeb0ac86dcbc62ffd4cf44ef39f617d30ee761872b6a6c933451481be395de_prof);

        
        $__internal_2684f4d5d58681a05ea40e9ad4e0b5a2bfc72a2f634b9f8fe353f8efab36c2f1->leave($__internal_2684f4d5d58681a05ea40e9ad4e0b5a2bfc72a2f634b9f8fe353f8efab36c2f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_start.html.php");
    }
}

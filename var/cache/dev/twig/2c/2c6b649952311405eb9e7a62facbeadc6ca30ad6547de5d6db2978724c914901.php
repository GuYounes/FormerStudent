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
        $__internal_37d74bd768728c85681563aafc285b18c566c0125a59df9e27de29e8188a7a4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37d74bd768728c85681563aafc285b18c566c0125a59df9e27de29e8188a7a4b->enter($__internal_37d74bd768728c85681563aafc285b18c566c0125a59df9e27de29e8188a7a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_954e37a4f1c09b96a0410b863bcf1ce1e646826ec3628e464b544ebc064da98a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_954e37a4f1c09b96a0410b863bcf1ce1e646826ec3628e464b544ebc064da98a->enter($__internal_954e37a4f1c09b96a0410b863bcf1ce1e646826ec3628e464b544ebc064da98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_37d74bd768728c85681563aafc285b18c566c0125a59df9e27de29e8188a7a4b->leave($__internal_37d74bd768728c85681563aafc285b18c566c0125a59df9e27de29e8188a7a4b_prof);

        
        $__internal_954e37a4f1c09b96a0410b863bcf1ce1e646826ec3628e464b544ebc064da98a->leave($__internal_954e37a4f1c09b96a0410b863bcf1ce1e646826ec3628e464b544ebc064da98a_prof);

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

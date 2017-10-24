<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_778d38856450951a35eceaec1340cdf5ecc82b0afc9cb60334e478de595eb3b2 extends Twig_Template
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
        $__internal_0549dfecc3c5588de40ec5fd4c7a422d860eb205a74cdbc96895598bc69d8056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0549dfecc3c5588de40ec5fd4c7a422d860eb205a74cdbc96895598bc69d8056->enter($__internal_0549dfecc3c5588de40ec5fd4c7a422d860eb205a74cdbc96895598bc69d8056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_db03598e03c9d47b0aa3b2086ec5d03e8a1d1272a8085bafce1db50d2f88eff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db03598e03c9d47b0aa3b2086ec5d03e8a1d1272a8085bafce1db50d2f88eff8->enter($__internal_db03598e03c9d47b0aa3b2086ec5d03e8a1d1272a8085bafce1db50d2f88eff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_0549dfecc3c5588de40ec5fd4c7a422d860eb205a74cdbc96895598bc69d8056->leave($__internal_0549dfecc3c5588de40ec5fd4c7a422d860eb205a74cdbc96895598bc69d8056_prof);

        
        $__internal_db03598e03c9d47b0aa3b2086ec5d03e8a1d1272a8085bafce1db50d2f88eff8->leave($__internal_db03598e03c9d47b0aa3b2086ec5d03e8a1d1272a8085bafce1db50d2f88eff8_prof);

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

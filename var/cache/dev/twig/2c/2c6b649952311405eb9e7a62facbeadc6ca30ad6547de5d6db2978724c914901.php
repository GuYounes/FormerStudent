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
        $__internal_07c3ca98df2097bf7dbbe12273c5c6d5c4007d57fac7f47880eb50a00927560c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07c3ca98df2097bf7dbbe12273c5c6d5c4007d57fac7f47880eb50a00927560c->enter($__internal_07c3ca98df2097bf7dbbe12273c5c6d5c4007d57fac7f47880eb50a00927560c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_b19fb5bfe129106f10a9103e1c8ba2f7e3e633acdf1bfc054c7905e7056524ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b19fb5bfe129106f10a9103e1c8ba2f7e3e633acdf1bfc054c7905e7056524ed->enter($__internal_b19fb5bfe129106f10a9103e1c8ba2f7e3e633acdf1bfc054c7905e7056524ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_07c3ca98df2097bf7dbbe12273c5c6d5c4007d57fac7f47880eb50a00927560c->leave($__internal_07c3ca98df2097bf7dbbe12273c5c6d5c4007d57fac7f47880eb50a00927560c_prof);

        
        $__internal_b19fb5bfe129106f10a9103e1c8ba2f7e3e633acdf1bfc054c7905e7056524ed->leave($__internal_b19fb5bfe129106f10a9103e1c8ba2f7e3e633acdf1bfc054c7905e7056524ed_prof);

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
", "@Framework/Form/form_start.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_start.html.php");
    }
}

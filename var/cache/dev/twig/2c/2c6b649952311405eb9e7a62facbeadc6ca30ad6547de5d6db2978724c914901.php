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
        $__internal_92bf278cca7df1fb637369140cadee821b57b860b290cda1e7d9b306b3d457fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92bf278cca7df1fb637369140cadee821b57b860b290cda1e7d9b306b3d457fb->enter($__internal_92bf278cca7df1fb637369140cadee821b57b860b290cda1e7d9b306b3d457fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_9cacdb24285e5374a797619a8c7b4fba0edd42af46f01816a57c0df7274d8e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cacdb24285e5374a797619a8c7b4fba0edd42af46f01816a57c0df7274d8e8d->enter($__internal_9cacdb24285e5374a797619a8c7b4fba0edd42af46f01816a57c0df7274d8e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_92bf278cca7df1fb637369140cadee821b57b860b290cda1e7d9b306b3d457fb->leave($__internal_92bf278cca7df1fb637369140cadee821b57b860b290cda1e7d9b306b3d457fb_prof);

        
        $__internal_9cacdb24285e5374a797619a8c7b4fba0edd42af46f01816a57c0df7274d8e8d->leave($__internal_9cacdb24285e5374a797619a8c7b4fba0edd42af46f01816a57c0df7274d8e8d_prof);

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

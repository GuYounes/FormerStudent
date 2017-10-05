<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_e3fbf5084fbef8cc27802c9e366340fc7ad7d1385c954ef3ea502a77cdbfda3b extends Twig_Template
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
        $__internal_c42c78c0af794afc1f2e98af2b2731c49aa26ade703e6c25defdf0db0a831827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c42c78c0af794afc1f2e98af2b2731c49aa26ade703e6c25defdf0db0a831827->enter($__internal_c42c78c0af794afc1f2e98af2b2731c49aa26ade703e6c25defdf0db0a831827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_9ae39cc6d9e7c7f89e53288ee226e889f09512e8f16c07880c590c4a5a1290fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae39cc6d9e7c7f89e53288ee226e889f09512e8f16c07880c590c4a5a1290fc->enter($__internal_9ae39cc6d9e7c7f89e53288ee226e889f09512e8f16c07880c590c4a5a1290fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c42c78c0af794afc1f2e98af2b2731c49aa26ade703e6c25defdf0db0a831827->leave($__internal_c42c78c0af794afc1f2e98af2b2731c49aa26ade703e6c25defdf0db0a831827_prof);

        
        $__internal_9ae39cc6d9e7c7f89e53288ee226e889f09512e8f16c07880c590c4a5a1290fc->leave($__internal_9ae39cc6d9e7c7f89e53288ee226e889f09512e8f16c07880c590c4a5a1290fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}

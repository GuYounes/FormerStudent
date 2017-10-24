<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_3f2c825b59b8a7a7cee424b67cf4a5a46755c8ef8c16f0147c063fa91fa41ad0 extends Twig_Template
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
        $__internal_000a3460560064e0845997764bfa3f6289ee1d0eb638deec61107b67569c3898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_000a3460560064e0845997764bfa3f6289ee1d0eb638deec61107b67569c3898->enter($__internal_000a3460560064e0845997764bfa3f6289ee1d0eb638deec61107b67569c3898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_599651cc36a65f0f3073b2189969dd10a1ce2526e00c5075a37ead11c4c60d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_599651cc36a65f0f3073b2189969dd10a1ce2526e00c5075a37ead11c4c60d65->enter($__internal_599651cc36a65f0f3073b2189969dd10a1ce2526e00c5075a37ead11c4c60d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_000a3460560064e0845997764bfa3f6289ee1d0eb638deec61107b67569c3898->leave($__internal_000a3460560064e0845997764bfa3f6289ee1d0eb638deec61107b67569c3898_prof);

        
        $__internal_599651cc36a65f0f3073b2189969dd10a1ce2526e00c5075a37ead11c4c60d65->leave($__internal_599651cc36a65f0f3073b2189969dd10a1ce2526e00c5075a37ead11c4c60d65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}

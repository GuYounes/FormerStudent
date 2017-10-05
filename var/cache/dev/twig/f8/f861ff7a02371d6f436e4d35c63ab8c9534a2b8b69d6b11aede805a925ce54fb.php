<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_c9c039960fe28086f37d55a2d1ba25a6cd3f2c23d21fd438cb883d2d4322fed2 extends Twig_Template
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
        $__internal_deea89fac4eb0ec73fe85f656c3051fe5e79e9650e4ac6bfdb985aef0d3a3995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deea89fac4eb0ec73fe85f656c3051fe5e79e9650e4ac6bfdb985aef0d3a3995->enter($__internal_deea89fac4eb0ec73fe85f656c3051fe5e79e9650e4ac6bfdb985aef0d3a3995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_f32414094d74d9de2fd4efb68d90b40612990bcc66541e094e96de98c27965f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32414094d74d9de2fd4efb68d90b40612990bcc66541e094e96de98c27965f8->enter($__internal_f32414094d74d9de2fd4efb68d90b40612990bcc66541e094e96de98c27965f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_deea89fac4eb0ec73fe85f656c3051fe5e79e9650e4ac6bfdb985aef0d3a3995->leave($__internal_deea89fac4eb0ec73fe85f656c3051fe5e79e9650e4ac6bfdb985aef0d3a3995_prof);

        
        $__internal_f32414094d74d9de2fd4efb68d90b40612990bcc66541e094e96de98c27965f8->leave($__internal_f32414094d74d9de2fd4efb68d90b40612990bcc66541e094e96de98c27965f8_prof);

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
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}

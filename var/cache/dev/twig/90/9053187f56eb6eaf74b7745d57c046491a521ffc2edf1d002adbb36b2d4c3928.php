<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_528a6999f1f011d1c834d19514fee0cf1dbd53e9d5b39c3abdea529370d5e1e3 extends Twig_Template
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
        $__internal_68561022aaf2832cb89f6963e38c9752015c4222fe789f08c3ca09634f05842f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68561022aaf2832cb89f6963e38c9752015c4222fe789f08c3ca09634f05842f->enter($__internal_68561022aaf2832cb89f6963e38c9752015c4222fe789f08c3ca09634f05842f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_9fd62022bbe43026254347eef68043fea12dcab8a4751443b0499d3385184977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd62022bbe43026254347eef68043fea12dcab8a4751443b0499d3385184977->enter($__internal_9fd62022bbe43026254347eef68043fea12dcab8a4751443b0499d3385184977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_68561022aaf2832cb89f6963e38c9752015c4222fe789f08c3ca09634f05842f->leave($__internal_68561022aaf2832cb89f6963e38c9752015c4222fe789f08c3ca09634f05842f_prof);

        
        $__internal_9fd62022bbe43026254347eef68043fea12dcab8a4751443b0499d3385184977->leave($__internal_9fd62022bbe43026254347eef68043fea12dcab8a4751443b0499d3385184977_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}

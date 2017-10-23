<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_ef52aa7cf611b9b53f2bbfa6e1f3f52973f96cfeac77980a40b4de128f0b0c4b extends Twig_Template
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
        $__internal_d10c5029fa6017ff145cb2fbb21ff391956259a4d85b168b0febfea5b30c3baf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d10c5029fa6017ff145cb2fbb21ff391956259a4d85b168b0febfea5b30c3baf->enter($__internal_d10c5029fa6017ff145cb2fbb21ff391956259a4d85b168b0febfea5b30c3baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_28824d4899b4282c1c0786f0fb8ab54c8ec8e874239314917d4fba4a6a10b51d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28824d4899b4282c1c0786f0fb8ab54c8ec8e874239314917d4fba4a6a10b51d->enter($__internal_28824d4899b4282c1c0786f0fb8ab54c8ec8e874239314917d4fba4a6a10b51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_d10c5029fa6017ff145cb2fbb21ff391956259a4d85b168b0febfea5b30c3baf->leave($__internal_d10c5029fa6017ff145cb2fbb21ff391956259a4d85b168b0febfea5b30c3baf_prof);

        
        $__internal_28824d4899b4282c1c0786f0fb8ab54c8ec8e874239314917d4fba4a6a10b51d->leave($__internal_28824d4899b4282c1c0786f0fb8ab54c8ec8e874239314917d4fba4a6a10b51d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}

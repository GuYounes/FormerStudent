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
        $__internal_3b0222227f135aef9b4df59af5e003a2d2ac1afe4e505a6f0a1ab1fffb024c65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b0222227f135aef9b4df59af5e003a2d2ac1afe4e505a6f0a1ab1fffb024c65->enter($__internal_3b0222227f135aef9b4df59af5e003a2d2ac1afe4e505a6f0a1ab1fffb024c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_5669e7f28735993186be1b59f4ef26b8fe4e80f9747f881b544ce2f1e4c7637a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5669e7f28735993186be1b59f4ef26b8fe4e80f9747f881b544ce2f1e4c7637a->enter($__internal_5669e7f28735993186be1b59f4ef26b8fe4e80f9747f881b544ce2f1e4c7637a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_3b0222227f135aef9b4df59af5e003a2d2ac1afe4e505a6f0a1ab1fffb024c65->leave($__internal_3b0222227f135aef9b4df59af5e003a2d2ac1afe4e505a6f0a1ab1fffb024c65_prof);

        
        $__internal_5669e7f28735993186be1b59f4ef26b8fe4e80f9747f881b544ce2f1e4c7637a->leave($__internal_5669e7f28735993186be1b59f4ef26b8fe4e80f9747f881b544ce2f1e4c7637a_prof);

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
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}

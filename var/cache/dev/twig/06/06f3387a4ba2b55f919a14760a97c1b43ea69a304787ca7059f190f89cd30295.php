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
        $__internal_998b4765d795efd3151fed881d6bffea3335c0a9cb675e0eb32b37f5fff7a685 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_998b4765d795efd3151fed881d6bffea3335c0a9cb675e0eb32b37f5fff7a685->enter($__internal_998b4765d795efd3151fed881d6bffea3335c0a9cb675e0eb32b37f5fff7a685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_f8d1ca24ab020d594bf45623f12ba4edb95e253b544bb7648b6ac195521c89fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d1ca24ab020d594bf45623f12ba4edb95e253b544bb7648b6ac195521c89fe->enter($__internal_f8d1ca24ab020d594bf45623f12ba4edb95e253b544bb7648b6ac195521c89fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_998b4765d795efd3151fed881d6bffea3335c0a9cb675e0eb32b37f5fff7a685->leave($__internal_998b4765d795efd3151fed881d6bffea3335c0a9cb675e0eb32b37f5fff7a685_prof);

        
        $__internal_f8d1ca24ab020d594bf45623f12ba4edb95e253b544bb7648b6ac195521c89fe->leave($__internal_f8d1ca24ab020d594bf45623f12ba4edb95e253b544bb7648b6ac195521c89fe_prof);

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

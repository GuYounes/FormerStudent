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
        $__internal_89b2358442520026ef2696b3c931ab51453b5e758b3b1b37bc898d88e7a30081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89b2358442520026ef2696b3c931ab51453b5e758b3b1b37bc898d88e7a30081->enter($__internal_89b2358442520026ef2696b3c931ab51453b5e758b3b1b37bc898d88e7a30081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_f5ad250272d2110acf8a71791ef9b0fdb8109727db9369392c76c0a54497e219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ad250272d2110acf8a71791ef9b0fdb8109727db9369392c76c0a54497e219->enter($__internal_f5ad250272d2110acf8a71791ef9b0fdb8109727db9369392c76c0a54497e219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_89b2358442520026ef2696b3c931ab51453b5e758b3b1b37bc898d88e7a30081->leave($__internal_89b2358442520026ef2696b3c931ab51453b5e758b3b1b37bc898d88e7a30081_prof);

        
        $__internal_f5ad250272d2110acf8a71791ef9b0fdb8109727db9369392c76c0a54497e219->leave($__internal_f5ad250272d2110acf8a71791ef9b0fdb8109727db9369392c76c0a54497e219_prof);

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

<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b953a9446d4d6aa59d0ad956d4946551351e4c1c46b13240aca99d04daed6964 extends Twig_Template
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
        $__internal_3ebf00a6f98dedbaa6d9e29dc34936dac86e71ec898037e7a390b86a29d3bdc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ebf00a6f98dedbaa6d9e29dc34936dac86e71ec898037e7a390b86a29d3bdc3->enter($__internal_3ebf00a6f98dedbaa6d9e29dc34936dac86e71ec898037e7a390b86a29d3bdc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_67c7360fe86f01b008f8daa69e5c2429301a82b9e2d4904a8781b5aab5e9da6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c7360fe86f01b008f8daa69e5c2429301a82b9e2d4904a8781b5aab5e9da6e->enter($__internal_67c7360fe86f01b008f8daa69e5c2429301a82b9e2d4904a8781b5aab5e9da6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3ebf00a6f98dedbaa6d9e29dc34936dac86e71ec898037e7a390b86a29d3bdc3->leave($__internal_3ebf00a6f98dedbaa6d9e29dc34936dac86e71ec898037e7a390b86a29d3bdc3_prof);

        
        $__internal_67c7360fe86f01b008f8daa69e5c2429301a82b9e2d4904a8781b5aab5e9da6e->leave($__internal_67c7360fe86f01b008f8daa69e5c2429301a82b9e2d4904a8781b5aab5e9da6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}

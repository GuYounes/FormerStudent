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
        $__internal_1b9e26a97517e312b2b86fdf5eafd639f4551a92cf869f469d7ae2d4bbcd37db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b9e26a97517e312b2b86fdf5eafd639f4551a92cf869f469d7ae2d4bbcd37db->enter($__internal_1b9e26a97517e312b2b86fdf5eafd639f4551a92cf869f469d7ae2d4bbcd37db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_663f246c2654b3c52dc689951613901e34df1d639c9ca8ee98295ea1a66945dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663f246c2654b3c52dc689951613901e34df1d639c9ca8ee98295ea1a66945dc->enter($__internal_663f246c2654b3c52dc689951613901e34df1d639c9ca8ee98295ea1a66945dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1b9e26a97517e312b2b86fdf5eafd639f4551a92cf869f469d7ae2d4bbcd37db->leave($__internal_1b9e26a97517e312b2b86fdf5eafd639f4551a92cf869f469d7ae2d4bbcd37db_prof);

        
        $__internal_663f246c2654b3c52dc689951613901e34df1d639c9ca8ee98295ea1a66945dc->leave($__internal_663f246c2654b3c52dc689951613901e34df1d639c9ca8ee98295ea1a66945dc_prof);

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
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}

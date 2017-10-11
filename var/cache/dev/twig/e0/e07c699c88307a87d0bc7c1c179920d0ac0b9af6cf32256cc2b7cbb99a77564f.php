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
        $__internal_9f1a9cbfef9706874e9a04ae52b8dbc3bd146ddea9c86c1be9cb86152538a55f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f1a9cbfef9706874e9a04ae52b8dbc3bd146ddea9c86c1be9cb86152538a55f->enter($__internal_9f1a9cbfef9706874e9a04ae52b8dbc3bd146ddea9c86c1be9cb86152538a55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_4d37a17e2fd7008205beaf5381e13589f9ede5f9f7e28d68284693c96a93f5a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d37a17e2fd7008205beaf5381e13589f9ede5f9f7e28d68284693c96a93f5a7->enter($__internal_4d37a17e2fd7008205beaf5381e13589f9ede5f9f7e28d68284693c96a93f5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9f1a9cbfef9706874e9a04ae52b8dbc3bd146ddea9c86c1be9cb86152538a55f->leave($__internal_9f1a9cbfef9706874e9a04ae52b8dbc3bd146ddea9c86c1be9cb86152538a55f_prof);

        
        $__internal_4d37a17e2fd7008205beaf5381e13589f9ede5f9f7e28d68284693c96a93f5a7->leave($__internal_4d37a17e2fd7008205beaf5381e13589f9ede5f9f7e28d68284693c96a93f5a7_prof);

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

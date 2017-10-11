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
        $__internal_548cbb71eae5551aef8aeaf1a5c18d8d86fe679097223c6a157bbf445761ad18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_548cbb71eae5551aef8aeaf1a5c18d8d86fe679097223c6a157bbf445761ad18->enter($__internal_548cbb71eae5551aef8aeaf1a5c18d8d86fe679097223c6a157bbf445761ad18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_205840a729f0bddc9dc1d50a666fc10801e41d34678022e26ef7c8c4a74c9623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205840a729f0bddc9dc1d50a666fc10801e41d34678022e26ef7c8c4a74c9623->enter($__internal_205840a729f0bddc9dc1d50a666fc10801e41d34678022e26ef7c8c4a74c9623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_548cbb71eae5551aef8aeaf1a5c18d8d86fe679097223c6a157bbf445761ad18->leave($__internal_548cbb71eae5551aef8aeaf1a5c18d8d86fe679097223c6a157bbf445761ad18_prof);

        
        $__internal_205840a729f0bddc9dc1d50a666fc10801e41d34678022e26ef7c8c4a74c9623->leave($__internal_205840a729f0bddc9dc1d50a666fc10801e41d34678022e26ef7c8c4a74c9623_prof);

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

<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_cf2920a3d083a5552fb41be4bba8c61d83bd9b69c4c9d5d4fd97eda27f63085f extends Twig_Template
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
        $__internal_f7be5319ceb3890afa786b5ad7d6358fd429487bf7edb812cd8b321cdaa87f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7be5319ceb3890afa786b5ad7d6358fd429487bf7edb812cd8b321cdaa87f8e->enter($__internal_f7be5319ceb3890afa786b5ad7d6358fd429487bf7edb812cd8b321cdaa87f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_59d488d34040049d656aaafba2364a96b54a5bd216b2123a50dba273c592d604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59d488d34040049d656aaafba2364a96b54a5bd216b2123a50dba273c592d604->enter($__internal_59d488d34040049d656aaafba2364a96b54a5bd216b2123a50dba273c592d604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f7be5319ceb3890afa786b5ad7d6358fd429487bf7edb812cd8b321cdaa87f8e->leave($__internal_f7be5319ceb3890afa786b5ad7d6358fd429487bf7edb812cd8b321cdaa87f8e_prof);

        
        $__internal_59d488d34040049d656aaafba2364a96b54a5bd216b2123a50dba273c592d604->leave($__internal_59d488d34040049d656aaafba2364a96b54a5bd216b2123a50dba273c592d604_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}

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
        $__internal_3967690253251a8da66f478a8452d24a9383d7b01bdce9b4458924b4c6b801ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3967690253251a8da66f478a8452d24a9383d7b01bdce9b4458924b4c6b801ff->enter($__internal_3967690253251a8da66f478a8452d24a9383d7b01bdce9b4458924b4c6b801ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_bc6ac7409e3eed79d3c75daeccd9e76cd0631a229e19ea9ba8231e3b5900d1a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc6ac7409e3eed79d3c75daeccd9e76cd0631a229e19ea9ba8231e3b5900d1a4->enter($__internal_bc6ac7409e3eed79d3c75daeccd9e76cd0631a229e19ea9ba8231e3b5900d1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3967690253251a8da66f478a8452d24a9383d7b01bdce9b4458924b4c6b801ff->leave($__internal_3967690253251a8da66f478a8452d24a9383d7b01bdce9b4458924b4c6b801ff_prof);

        
        $__internal_bc6ac7409e3eed79d3c75daeccd9e76cd0631a229e19ea9ba8231e3b5900d1a4->leave($__internal_bc6ac7409e3eed79d3c75daeccd9e76cd0631a229e19ea9ba8231e3b5900d1a4_prof);

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
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}

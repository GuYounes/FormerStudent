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
        $__internal_4308c00bc252aca440c1b7ab6c586a37e4a332b8a7529b0998cb775e0d0122cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4308c00bc252aca440c1b7ab6c586a37e4a332b8a7529b0998cb775e0d0122cf->enter($__internal_4308c00bc252aca440c1b7ab6c586a37e4a332b8a7529b0998cb775e0d0122cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_d438b7665324cfb8ae1b16a6129c9668b772fa613ec677dba5974d23a510f0e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d438b7665324cfb8ae1b16a6129c9668b772fa613ec677dba5974d23a510f0e3->enter($__internal_d438b7665324cfb8ae1b16a6129c9668b772fa613ec677dba5974d23a510f0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4308c00bc252aca440c1b7ab6c586a37e4a332b8a7529b0998cb775e0d0122cf->leave($__internal_4308c00bc252aca440c1b7ab6c586a37e4a332b8a7529b0998cb775e0d0122cf_prof);

        
        $__internal_d438b7665324cfb8ae1b16a6129c9668b772fa613ec677dba5974d23a510f0e3->leave($__internal_d438b7665324cfb8ae1b16a6129c9668b772fa613ec677dba5974d23a510f0e3_prof);

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

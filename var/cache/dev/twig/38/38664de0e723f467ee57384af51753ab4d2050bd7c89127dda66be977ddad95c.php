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
        $__internal_890c9decd2c7a78054645240ec6116c1b94c9f3f483699e88888c14750fdecc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_890c9decd2c7a78054645240ec6116c1b94c9f3f483699e88888c14750fdecc2->enter($__internal_890c9decd2c7a78054645240ec6116c1b94c9f3f483699e88888c14750fdecc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_308b3466949f3cdfc0fa6c65ff2683f7c70671412d57fd48b5ff323b61584ba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_308b3466949f3cdfc0fa6c65ff2683f7c70671412d57fd48b5ff323b61584ba7->enter($__internal_308b3466949f3cdfc0fa6c65ff2683f7c70671412d57fd48b5ff323b61584ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_890c9decd2c7a78054645240ec6116c1b94c9f3f483699e88888c14750fdecc2->leave($__internal_890c9decd2c7a78054645240ec6116c1b94c9f3f483699e88888c14750fdecc2_prof);

        
        $__internal_308b3466949f3cdfc0fa6c65ff2683f7c70671412d57fd48b5ff323b61584ba7->leave($__internal_308b3466949f3cdfc0fa6c65ff2683f7c70671412d57fd48b5ff323b61584ba7_prof);

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

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
        $__internal_e46c9b1478bc2f159d3f4b509e62b5f4f592483328e625efe972bf8c6a064594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e46c9b1478bc2f159d3f4b509e62b5f4f592483328e625efe972bf8c6a064594->enter($__internal_e46c9b1478bc2f159d3f4b509e62b5f4f592483328e625efe972bf8c6a064594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_6253deb3ae2012f744ad054b51ec8a2eaf03935817eda686d90f83358a9d1d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6253deb3ae2012f744ad054b51ec8a2eaf03935817eda686d90f83358a9d1d7a->enter($__internal_6253deb3ae2012f744ad054b51ec8a2eaf03935817eda686d90f83358a9d1d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e46c9b1478bc2f159d3f4b509e62b5f4f592483328e625efe972bf8c6a064594->leave($__internal_e46c9b1478bc2f159d3f4b509e62b5f4f592483328e625efe972bf8c6a064594_prof);

        
        $__internal_6253deb3ae2012f744ad054b51ec8a2eaf03935817eda686d90f83358a9d1d7a->leave($__internal_6253deb3ae2012f744ad054b51ec8a2eaf03935817eda686d90f83358a9d1d7a_prof);

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

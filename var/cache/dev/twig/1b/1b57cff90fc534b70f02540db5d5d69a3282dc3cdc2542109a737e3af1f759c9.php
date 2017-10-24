<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_ca16f3a203049037ec4fba98901dd4f6c1c70f661782346d2d66e8d11e96120f extends Twig_Template
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
        $__internal_f0d91b7994c4103e1fca2994c1c0b564e195ec011889953703cd4de99bd88ef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0d91b7994c4103e1fca2994c1c0b564e195ec011889953703cd4de99bd88ef8->enter($__internal_f0d91b7994c4103e1fca2994c1c0b564e195ec011889953703cd4de99bd88ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_0a9d7fff8d50961ad362d93aa0dbe866b9472df779834b89a755913a8e66e641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a9d7fff8d50961ad362d93aa0dbe866b9472df779834b89a755913a8e66e641->enter($__internal_0a9d7fff8d50961ad362d93aa0dbe866b9472df779834b89a755913a8e66e641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f0d91b7994c4103e1fca2994c1c0b564e195ec011889953703cd4de99bd88ef8->leave($__internal_f0d91b7994c4103e1fca2994c1c0b564e195ec011889953703cd4de99bd88ef8_prof);

        
        $__internal_0a9d7fff8d50961ad362d93aa0dbe866b9472df779834b89a755913a8e66e641->leave($__internal_0a9d7fff8d50961ad362d93aa0dbe866b9472df779834b89a755913a8e66e641_prof);

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

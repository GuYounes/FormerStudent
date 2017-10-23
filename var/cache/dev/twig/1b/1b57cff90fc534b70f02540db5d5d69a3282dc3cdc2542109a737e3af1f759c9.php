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
        $__internal_f9073ae6e38a29ff8115185e2fd95dc63228d23ecbeaab3076682a8fa6c80925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9073ae6e38a29ff8115185e2fd95dc63228d23ecbeaab3076682a8fa6c80925->enter($__internal_f9073ae6e38a29ff8115185e2fd95dc63228d23ecbeaab3076682a8fa6c80925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_125a845b7334eacd9c78402062599a73dc641c9e07e390bc71e03528ad5d96ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_125a845b7334eacd9c78402062599a73dc641c9e07e390bc71e03528ad5d96ed->enter($__internal_125a845b7334eacd9c78402062599a73dc641c9e07e390bc71e03528ad5d96ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f9073ae6e38a29ff8115185e2fd95dc63228d23ecbeaab3076682a8fa6c80925->leave($__internal_f9073ae6e38a29ff8115185e2fd95dc63228d23ecbeaab3076682a8fa6c80925_prof);

        
        $__internal_125a845b7334eacd9c78402062599a73dc641c9e07e390bc71e03528ad5d96ed->leave($__internal_125a845b7334eacd9c78402062599a73dc641c9e07e390bc71e03528ad5d96ed_prof);

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

<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_97bf44d0e0f494077f53ed4cc461449c59c0fa198502e78f6e3bd832335c9f8c extends Twig_Template
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
        $__internal_1f1d4cb726ab032a38f6f07d53461556af62d7b2ebbda83e3453732af4ac5814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f1d4cb726ab032a38f6f07d53461556af62d7b2ebbda83e3453732af4ac5814->enter($__internal_1f1d4cb726ab032a38f6f07d53461556af62d7b2ebbda83e3453732af4ac5814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_fa7f1e08e853f0fb059ada69ff8c5d85d975610c50efcc4adf6a65779b6106b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7f1e08e853f0fb059ada69ff8c5d85d975610c50efcc4adf6a65779b6106b0->enter($__internal_fa7f1e08e853f0fb059ada69ff8c5d85d975610c50efcc4adf6a65779b6106b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1f1d4cb726ab032a38f6f07d53461556af62d7b2ebbda83e3453732af4ac5814->leave($__internal_1f1d4cb726ab032a38f6f07d53461556af62d7b2ebbda83e3453732af4ac5814_prof);

        
        $__internal_fa7f1e08e853f0fb059ada69ff8c5d85d975610c50efcc4adf6a65779b6106b0->leave($__internal_fa7f1e08e853f0fb059ada69ff8c5d85d975610c50efcc4adf6a65779b6106b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}

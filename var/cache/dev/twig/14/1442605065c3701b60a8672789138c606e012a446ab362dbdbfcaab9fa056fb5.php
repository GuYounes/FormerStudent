<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_4f705559dc3b9e1c4540aa9d0f7beac4df2808bbddef63aaf89a2fabaeef5f78 extends Twig_Template
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
        $__internal_3fdac7645ab01e07efb22728eb526674b345b8afb790087abb49fb2b4e49ca7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fdac7645ab01e07efb22728eb526674b345b8afb790087abb49fb2b4e49ca7f->enter($__internal_3fdac7645ab01e07efb22728eb526674b345b8afb790087abb49fb2b4e49ca7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_d480094bc3572c23d1d4068ad9b8571ca7c151c4548987e7bb3e82c5f5d1ce92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d480094bc3572c23d1d4068ad9b8571ca7c151c4548987e7bb3e82c5f5d1ce92->enter($__internal_d480094bc3572c23d1d4068ad9b8571ca7c151c4548987e7bb3e82c5f5d1ce92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_3fdac7645ab01e07efb22728eb526674b345b8afb790087abb49fb2b4e49ca7f->leave($__internal_3fdac7645ab01e07efb22728eb526674b345b8afb790087abb49fb2b4e49ca7f_prof);

        
        $__internal_d480094bc3572c23d1d4068ad9b8571ca7c151c4548987e7bb3e82c5f5d1ce92->leave($__internal_d480094bc3572c23d1d4068ad9b8571ca7c151c4548987e7bb3e82c5f5d1ce92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}

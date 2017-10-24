<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_dcd3c14106058ba0153351ba615b444fda93493373d9846ea5c55d3486f1d67f extends Twig_Template
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
        $__internal_e6220f2e2674b6012d5782c2848d39c7ee21e7e48efbfbd9d25a2520b92d25e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6220f2e2674b6012d5782c2848d39c7ee21e7e48efbfbd9d25a2520b92d25e8->enter($__internal_e6220f2e2674b6012d5782c2848d39c7ee21e7e48efbfbd9d25a2520b92d25e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_daa1f617a213d631cf21449b0a0705e50d07c541e6196ac7a20343bdaed19e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa1f617a213d631cf21449b0a0705e50d07c541e6196ac7a20343bdaed19e77->enter($__internal_daa1f617a213d631cf21449b0a0705e50d07c541e6196ac7a20343bdaed19e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_e6220f2e2674b6012d5782c2848d39c7ee21e7e48efbfbd9d25a2520b92d25e8->leave($__internal_e6220f2e2674b6012d5782c2848d39c7ee21e7e48efbfbd9d25a2520b92d25e8_prof);

        
        $__internal_daa1f617a213d631cf21449b0a0705e50d07c541e6196ac7a20343bdaed19e77->leave($__internal_daa1f617a213d631cf21449b0a0705e50d07c541e6196ac7a20343bdaed19e77_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}

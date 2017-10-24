<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_958ebcb2c23e8b7542ccd60c6feecf2c86221d79dde62d17012e506c2cae5bfc extends Twig_Template
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
        $__internal_861cea0e37cf5fdaac36dfb77e5dd763b6f14f74fdc16ed942a1d77715e0f0d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_861cea0e37cf5fdaac36dfb77e5dd763b6f14f74fdc16ed942a1d77715e0f0d4->enter($__internal_861cea0e37cf5fdaac36dfb77e5dd763b6f14f74fdc16ed942a1d77715e0f0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_1f4b5e623af82c7a6b5a9e538c6f78f43a9fb956132dca49e3cdf66d5028ae4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f4b5e623af82c7a6b5a9e538c6f78f43a9fb956132dca49e3cdf66d5028ae4c->enter($__internal_1f4b5e623af82c7a6b5a9e538c6f78f43a9fb956132dca49e3cdf66d5028ae4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_861cea0e37cf5fdaac36dfb77e5dd763b6f14f74fdc16ed942a1d77715e0f0d4->leave($__internal_861cea0e37cf5fdaac36dfb77e5dd763b6f14f74fdc16ed942a1d77715e0f0d4_prof);

        
        $__internal_1f4b5e623af82c7a6b5a9e538c6f78f43a9fb956132dca49e3cdf66d5028ae4c->leave($__internal_1f4b5e623af82c7a6b5a9e538c6f78f43a9fb956132dca49e3cdf66d5028ae4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}

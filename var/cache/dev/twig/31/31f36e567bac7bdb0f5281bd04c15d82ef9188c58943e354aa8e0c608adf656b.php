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
        $__internal_b7871fe4c2ae84ee80c40db4ed56af06bfdc3f8c1384e65bf07f72a9113a9b3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7871fe4c2ae84ee80c40db4ed56af06bfdc3f8c1384e65bf07f72a9113a9b3c->enter($__internal_b7871fe4c2ae84ee80c40db4ed56af06bfdc3f8c1384e65bf07f72a9113a9b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_d86ea198949bfd877bacf81c4549330ced1dda9c20d586523f72bfdde029c917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86ea198949bfd877bacf81c4549330ced1dda9c20d586523f72bfdde029c917->enter($__internal_d86ea198949bfd877bacf81c4549330ced1dda9c20d586523f72bfdde029c917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_b7871fe4c2ae84ee80c40db4ed56af06bfdc3f8c1384e65bf07f72a9113a9b3c->leave($__internal_b7871fe4c2ae84ee80c40db4ed56af06bfdc3f8c1384e65bf07f72a9113a9b3c_prof);

        
        $__internal_d86ea198949bfd877bacf81c4549330ced1dda9c20d586523f72bfdde029c917->leave($__internal_d86ea198949bfd877bacf81c4549330ced1dda9c20d586523f72bfdde029c917_prof);

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

<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_e02b286bc45d7f5c474e3faa3190f46093a71cc46c06f950d1aed0c2e2660cb4 extends Twig_Template
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
        $__internal_f921a405ecef4bf38b06ebb27333bdee4d89d5a22c4412659404cd8270e2d886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f921a405ecef4bf38b06ebb27333bdee4d89d5a22c4412659404cd8270e2d886->enter($__internal_f921a405ecef4bf38b06ebb27333bdee4d89d5a22c4412659404cd8270e2d886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_603e7797ec314908e346cf1209ee4f2b780c4292df7607e2a23c4a9770073c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603e7797ec314908e346cf1209ee4f2b780c4292df7607e2a23c4a9770073c6e->enter($__internal_603e7797ec314908e346cf1209ee4f2b780c4292df7607e2a23c4a9770073c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f921a405ecef4bf38b06ebb27333bdee4d89d5a22c4412659404cd8270e2d886->leave($__internal_f921a405ecef4bf38b06ebb27333bdee4d89d5a22c4412659404cd8270e2d886_prof);

        
        $__internal_603e7797ec314908e346cf1209ee4f2b780c4292df7607e2a23c4a9770073c6e->leave($__internal_603e7797ec314908e346cf1209ee4f2b780c4292df7607e2a23c4a9770073c6e_prof);

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
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}

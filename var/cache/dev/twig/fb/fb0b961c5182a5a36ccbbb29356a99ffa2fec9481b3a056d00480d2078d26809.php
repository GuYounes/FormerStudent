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
        $__internal_bde689fc7c8112634579994f5e0b029ef61b991d641fecbe06c4a7be9899eec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bde689fc7c8112634579994f5e0b029ef61b991d641fecbe06c4a7be9899eec2->enter($__internal_bde689fc7c8112634579994f5e0b029ef61b991d641fecbe06c4a7be9899eec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_3d14d7776a8dc0fd4006a971b87d9e1df6873b2cf622e6ac3b0f7c3f72eb0adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d14d7776a8dc0fd4006a971b87d9e1df6873b2cf622e6ac3b0f7c3f72eb0adf->enter($__internal_3d14d7776a8dc0fd4006a971b87d9e1df6873b2cf622e6ac3b0f7c3f72eb0adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bde689fc7c8112634579994f5e0b029ef61b991d641fecbe06c4a7be9899eec2->leave($__internal_bde689fc7c8112634579994f5e0b029ef61b991d641fecbe06c4a7be9899eec2_prof);

        
        $__internal_3d14d7776a8dc0fd4006a971b87d9e1df6873b2cf622e6ac3b0f7c3f72eb0adf->leave($__internal_3d14d7776a8dc0fd4006a971b87d9e1df6873b2cf622e6ac3b0f7c3f72eb0adf_prof);

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

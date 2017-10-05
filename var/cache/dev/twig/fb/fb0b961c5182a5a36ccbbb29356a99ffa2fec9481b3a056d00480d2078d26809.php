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
        $__internal_998c246384d1d250ff4c415f6a598488c517b3069e3aa986d256463795e9859e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_998c246384d1d250ff4c415f6a598488c517b3069e3aa986d256463795e9859e->enter($__internal_998c246384d1d250ff4c415f6a598488c517b3069e3aa986d256463795e9859e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_79a42d8830b6e36177d327790be16e959ce8faf66d79bf1e56bb029574b28978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a42d8830b6e36177d327790be16e959ce8faf66d79bf1e56bb029574b28978->enter($__internal_79a42d8830b6e36177d327790be16e959ce8faf66d79bf1e56bb029574b28978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_998c246384d1d250ff4c415f6a598488c517b3069e3aa986d256463795e9859e->leave($__internal_998c246384d1d250ff4c415f6a598488c517b3069e3aa986d256463795e9859e_prof);

        
        $__internal_79a42d8830b6e36177d327790be16e959ce8faf66d79bf1e56bb029574b28978->leave($__internal_79a42d8830b6e36177d327790be16e959ce8faf66d79bf1e56bb029574b28978_prof);

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
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}

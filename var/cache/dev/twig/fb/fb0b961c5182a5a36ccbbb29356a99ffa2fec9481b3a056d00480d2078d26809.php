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
        $__internal_2b9eeb71bedb27aeb0802f992b5e53267d1dfa0a0a794fc01063ff6f0a17f040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b9eeb71bedb27aeb0802f992b5e53267d1dfa0a0a794fc01063ff6f0a17f040->enter($__internal_2b9eeb71bedb27aeb0802f992b5e53267d1dfa0a0a794fc01063ff6f0a17f040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_0ed831731daa438ac447ce85e899c087f17828b5d618c9c80a28c73aa96a0cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed831731daa438ac447ce85e899c087f17828b5d618c9c80a28c73aa96a0cef->enter($__internal_0ed831731daa438ac447ce85e899c087f17828b5d618c9c80a28c73aa96a0cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2b9eeb71bedb27aeb0802f992b5e53267d1dfa0a0a794fc01063ff6f0a17f040->leave($__internal_2b9eeb71bedb27aeb0802f992b5e53267d1dfa0a0a794fc01063ff6f0a17f040_prof);

        
        $__internal_0ed831731daa438ac447ce85e899c087f17828b5d618c9c80a28c73aa96a0cef->leave($__internal_0ed831731daa438ac447ce85e899c087f17828b5d618c9c80a28c73aa96a0cef_prof);

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

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
        $__internal_77c794d7bb450b154fa4f7338595a940435d70196a6ce97f88273381d7230254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77c794d7bb450b154fa4f7338595a940435d70196a6ce97f88273381d7230254->enter($__internal_77c794d7bb450b154fa4f7338595a940435d70196a6ce97f88273381d7230254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_5600eeb8f4d58aff294cfa3657a13160c7b2242b9d78fbda5c6837460c61f0b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5600eeb8f4d58aff294cfa3657a13160c7b2242b9d78fbda5c6837460c61f0b5->enter($__internal_5600eeb8f4d58aff294cfa3657a13160c7b2242b9d78fbda5c6837460c61f0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_77c794d7bb450b154fa4f7338595a940435d70196a6ce97f88273381d7230254->leave($__internal_77c794d7bb450b154fa4f7338595a940435d70196a6ce97f88273381d7230254_prof);

        
        $__internal_5600eeb8f4d58aff294cfa3657a13160c7b2242b9d78fbda5c6837460c61f0b5->leave($__internal_5600eeb8f4d58aff294cfa3657a13160c7b2242b9d78fbda5c6837460c61f0b5_prof);

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

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
        $__internal_027976c9c3204bd11ae93789e932622881250f116545ddf3d22c38324ffb4f40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_027976c9c3204bd11ae93789e932622881250f116545ddf3d22c38324ffb4f40->enter($__internal_027976c9c3204bd11ae93789e932622881250f116545ddf3d22c38324ffb4f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_0a0277fb6f98186315aa23f5b549970176685eacca9c90f6f254c3bb23be769f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a0277fb6f98186315aa23f5b549970176685eacca9c90f6f254c3bb23be769f->enter($__internal_0a0277fb6f98186315aa23f5b549970176685eacca9c90f6f254c3bb23be769f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_027976c9c3204bd11ae93789e932622881250f116545ddf3d22c38324ffb4f40->leave($__internal_027976c9c3204bd11ae93789e932622881250f116545ddf3d22c38324ffb4f40_prof);

        
        $__internal_0a0277fb6f98186315aa23f5b549970176685eacca9c90f6f254c3bb23be769f->leave($__internal_0a0277fb6f98186315aa23f5b549970176685eacca9c90f6f254c3bb23be769f_prof);

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

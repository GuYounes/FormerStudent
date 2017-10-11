<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_645966f2371a33b5bf08ee826819c6a1fc0ed1382c9ff8f1f894bfd21d2cd8e2 extends Twig_Template
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
        $__internal_52188ad9f9b3c9b036d0fe5c68272cf340e66d39daf0f5bfa78e85cb8b7e07bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52188ad9f9b3c9b036d0fe5c68272cf340e66d39daf0f5bfa78e85cb8b7e07bd->enter($__internal_52188ad9f9b3c9b036d0fe5c68272cf340e66d39daf0f5bfa78e85cb8b7e07bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_6edaaa422744faa2c0eb3c5f0d4570d9a6ab975f89761399bf55bff88a26cf31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6edaaa422744faa2c0eb3c5f0d4570d9a6ab975f89761399bf55bff88a26cf31->enter($__internal_6edaaa422744faa2c0eb3c5f0d4570d9a6ab975f89761399bf55bff88a26cf31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_52188ad9f9b3c9b036d0fe5c68272cf340e66d39daf0f5bfa78e85cb8b7e07bd->leave($__internal_52188ad9f9b3c9b036d0fe5c68272cf340e66d39daf0f5bfa78e85cb8b7e07bd_prof);

        
        $__internal_6edaaa422744faa2c0eb3c5f0d4570d9a6ab975f89761399bf55bff88a26cf31->leave($__internal_6edaaa422744faa2c0eb3c5f0d4570d9a6ab975f89761399bf55bff88a26cf31_prof);

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
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}

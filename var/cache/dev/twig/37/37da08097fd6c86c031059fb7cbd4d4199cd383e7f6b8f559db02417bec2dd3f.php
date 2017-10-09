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
        $__internal_39e14be527ada64298fffb6c6b951bc2b5f6130f986d8922c1bb40a096f7d6d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39e14be527ada64298fffb6c6b951bc2b5f6130f986d8922c1bb40a096f7d6d5->enter($__internal_39e14be527ada64298fffb6c6b951bc2b5f6130f986d8922c1bb40a096f7d6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_7089dd424e7950169a4719342d30830c80620a65171b9d4a44ed958c2e511116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7089dd424e7950169a4719342d30830c80620a65171b9d4a44ed958c2e511116->enter($__internal_7089dd424e7950169a4719342d30830c80620a65171b9d4a44ed958c2e511116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_39e14be527ada64298fffb6c6b951bc2b5f6130f986d8922c1bb40a096f7d6d5->leave($__internal_39e14be527ada64298fffb6c6b951bc2b5f6130f986d8922c1bb40a096f7d6d5_prof);

        
        $__internal_7089dd424e7950169a4719342d30830c80620a65171b9d4a44ed958c2e511116->leave($__internal_7089dd424e7950169a4719342d30830c80620a65171b9d4a44ed958c2e511116_prof);

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

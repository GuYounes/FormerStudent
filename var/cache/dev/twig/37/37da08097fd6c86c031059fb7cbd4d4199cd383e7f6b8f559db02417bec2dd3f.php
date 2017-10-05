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
        $__internal_a064720a5951aa9b8f1a96b89c2e4c5953abac31ef43f2baf76adb209914584e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a064720a5951aa9b8f1a96b89c2e4c5953abac31ef43f2baf76adb209914584e->enter($__internal_a064720a5951aa9b8f1a96b89c2e4c5953abac31ef43f2baf76adb209914584e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_9aa2ab95a14d4d6a6d9ecf179904f786a099ca4a252ea475785a4c4c6b1eb4ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa2ab95a14d4d6a6d9ecf179904f786a099ca4a252ea475785a4c4c6b1eb4ea->enter($__internal_9aa2ab95a14d4d6a6d9ecf179904f786a099ca4a252ea475785a4c4c6b1eb4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a064720a5951aa9b8f1a96b89c2e4c5953abac31ef43f2baf76adb209914584e->leave($__internal_a064720a5951aa9b8f1a96b89c2e4c5953abac31ef43f2baf76adb209914584e_prof);

        
        $__internal_9aa2ab95a14d4d6a6d9ecf179904f786a099ca4a252ea475785a4c4c6b1eb4ea->leave($__internal_9aa2ab95a14d4d6a6d9ecf179904f786a099ca4a252ea475785a4c4c6b1eb4ea_prof);

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
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}

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
        $__internal_8fd08eec5492ed778a4aada385400ea223d2b0b55df8c0cacd495f78aa78fe66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fd08eec5492ed778a4aada385400ea223d2b0b55df8c0cacd495f78aa78fe66->enter($__internal_8fd08eec5492ed778a4aada385400ea223d2b0b55df8c0cacd495f78aa78fe66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_2e7e5a58f4907eb0c041a153d0cf3e95f06f88cd5872ff5891b2f6cbc363411c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e7e5a58f4907eb0c041a153d0cf3e95f06f88cd5872ff5891b2f6cbc363411c->enter($__internal_2e7e5a58f4907eb0c041a153d0cf3e95f06f88cd5872ff5891b2f6cbc363411c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8fd08eec5492ed778a4aada385400ea223d2b0b55df8c0cacd495f78aa78fe66->leave($__internal_8fd08eec5492ed778a4aada385400ea223d2b0b55df8c0cacd495f78aa78fe66_prof);

        
        $__internal_2e7e5a58f4907eb0c041a153d0cf3e95f06f88cd5872ff5891b2f6cbc363411c->leave($__internal_2e7e5a58f4907eb0c041a153d0cf3e95f06f88cd5872ff5891b2f6cbc363411c_prof);

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

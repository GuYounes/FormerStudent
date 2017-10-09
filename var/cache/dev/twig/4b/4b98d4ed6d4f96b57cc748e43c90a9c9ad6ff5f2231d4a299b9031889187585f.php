<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_beea5560cd01a13ccc79c785aa1255ed8149169368f7ffcdffe51a10d4bd4c51 extends Twig_Template
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
        $__internal_619e47fc459903f6aa734e6b2ae2c5cde72148964592d3548188268f12de6a23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_619e47fc459903f6aa734e6b2ae2c5cde72148964592d3548188268f12de6a23->enter($__internal_619e47fc459903f6aa734e6b2ae2c5cde72148964592d3548188268f12de6a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_4dc68b0c767aa85d1728593a8af7a7911099c72dff3ee5bb9c6361e86b1ec5ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc68b0c767aa85d1728593a8af7a7911099c72dff3ee5bb9c6361e86b1ec5ab->enter($__internal_4dc68b0c767aa85d1728593a8af7a7911099c72dff3ee5bb9c6361e86b1ec5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_619e47fc459903f6aa734e6b2ae2c5cde72148964592d3548188268f12de6a23->leave($__internal_619e47fc459903f6aa734e6b2ae2c5cde72148964592d3548188268f12de6a23_prof);

        
        $__internal_4dc68b0c767aa85d1728593a8af7a7911099c72dff3ee5bb9c6361e86b1ec5ab->leave($__internal_4dc68b0c767aa85d1728593a8af7a7911099c72dff3ee5bb9c6361e86b1ec5ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}

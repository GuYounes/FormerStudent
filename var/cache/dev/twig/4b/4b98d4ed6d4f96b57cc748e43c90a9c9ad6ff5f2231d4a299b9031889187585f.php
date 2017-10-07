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
        $__internal_8b960ddb26259dd890c5aa2711ef99ce37a20e7ed6dccb7e57fa985cd3908a1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b960ddb26259dd890c5aa2711ef99ce37a20e7ed6dccb7e57fa985cd3908a1f->enter($__internal_8b960ddb26259dd890c5aa2711ef99ce37a20e7ed6dccb7e57fa985cd3908a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_c29acb42654fbc433753d0682a8d74d152d93d9755b1beaf371cdf5fd3e5dd7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c29acb42654fbc433753d0682a8d74d152d93d9755b1beaf371cdf5fd3e5dd7b->enter($__internal_c29acb42654fbc433753d0682a8d74d152d93d9755b1beaf371cdf5fd3e5dd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_8b960ddb26259dd890c5aa2711ef99ce37a20e7ed6dccb7e57fa985cd3908a1f->leave($__internal_8b960ddb26259dd890c5aa2711ef99ce37a20e7ed6dccb7e57fa985cd3908a1f_prof);

        
        $__internal_c29acb42654fbc433753d0682a8d74d152d93d9755b1beaf371cdf5fd3e5dd7b->leave($__internal_c29acb42654fbc433753d0682a8d74d152d93d9755b1beaf371cdf5fd3e5dd7b_prof);

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

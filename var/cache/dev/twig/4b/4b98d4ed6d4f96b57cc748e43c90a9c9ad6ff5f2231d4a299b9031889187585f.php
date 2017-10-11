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
        $__internal_3e75fb5246e5b001cc45f349b79abb9d63448be9f5ca62374115c3cd86c95c92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e75fb5246e5b001cc45f349b79abb9d63448be9f5ca62374115c3cd86c95c92->enter($__internal_3e75fb5246e5b001cc45f349b79abb9d63448be9f5ca62374115c3cd86c95c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_d9e97c304c34a6a30a57b30640c4e8ac4a944f005bd90e5241db2bc073343b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e97c304c34a6a30a57b30640c4e8ac4a944f005bd90e5241db2bc073343b4c->enter($__internal_d9e97c304c34a6a30a57b30640c4e8ac4a944f005bd90e5241db2bc073343b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_3e75fb5246e5b001cc45f349b79abb9d63448be9f5ca62374115c3cd86c95c92->leave($__internal_3e75fb5246e5b001cc45f349b79abb9d63448be9f5ca62374115c3cd86c95c92_prof);

        
        $__internal_d9e97c304c34a6a30a57b30640c4e8ac4a944f005bd90e5241db2bc073343b4c->leave($__internal_d9e97c304c34a6a30a57b30640c4e8ac4a944f005bd90e5241db2bc073343b4c_prof);

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

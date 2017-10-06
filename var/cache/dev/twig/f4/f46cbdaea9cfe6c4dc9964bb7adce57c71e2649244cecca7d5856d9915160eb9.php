<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_4c30bb250ce1f53763f65f61214e8542d867d4c15a4225f75a9db13ac5795850 extends Twig_Template
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
        $__internal_790813d63e64d07cf611b7fbd4b20d02b40c8c80c770f9a94291d7371a78f25d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_790813d63e64d07cf611b7fbd4b20d02b40c8c80c770f9a94291d7371a78f25d->enter($__internal_790813d63e64d07cf611b7fbd4b20d02b40c8c80c770f9a94291d7371a78f25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_b495fb34b13816e8bb8f713cbcb38271d98bed56312913eb7cd4305dffa2d8b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b495fb34b13816e8bb8f713cbcb38271d98bed56312913eb7cd4305dffa2d8b7->enter($__internal_b495fb34b13816e8bb8f713cbcb38271d98bed56312913eb7cd4305dffa2d8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_790813d63e64d07cf611b7fbd4b20d02b40c8c80c770f9a94291d7371a78f25d->leave($__internal_790813d63e64d07cf611b7fbd4b20d02b40c8c80c770f9a94291d7371a78f25d_prof);

        
        $__internal_b495fb34b13816e8bb8f713cbcb38271d98bed56312913eb7cd4305dffa2d8b7->leave($__internal_b495fb34b13816e8bb8f713cbcb38271d98bed56312913eb7cd4305dffa2d8b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}

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
        $__internal_013204249aa3107ea85c9ee6f751e98e34ac246e20c51e8fed50fed169487068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_013204249aa3107ea85c9ee6f751e98e34ac246e20c51e8fed50fed169487068->enter($__internal_013204249aa3107ea85c9ee6f751e98e34ac246e20c51e8fed50fed169487068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_0316900c69e93f193bdd2a31d4acb98206fbd65498d8917ca792edbc3058aa8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0316900c69e93f193bdd2a31d4acb98206fbd65498d8917ca792edbc3058aa8e->enter($__internal_0316900c69e93f193bdd2a31d4acb98206fbd65498d8917ca792edbc3058aa8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_013204249aa3107ea85c9ee6f751e98e34ac246e20c51e8fed50fed169487068->leave($__internal_013204249aa3107ea85c9ee6f751e98e34ac246e20c51e8fed50fed169487068_prof);

        
        $__internal_0316900c69e93f193bdd2a31d4acb98206fbd65498d8917ca792edbc3058aa8e->leave($__internal_0316900c69e93f193bdd2a31d4acb98206fbd65498d8917ca792edbc3058aa8e_prof);

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
